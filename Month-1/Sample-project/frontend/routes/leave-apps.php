<?php include("../../links.php"); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/2.1.1/css/rowGroup.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/3.1.4/css/dataTables.dataTables.min.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/4.5.0/chart.umd.js"></script>

<script src="https://cdn.datatables.net/rowgroup/2.1.1/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/2.1.1/js/rowGroup.dataTables.min.js"></script>

<style>
    #chart-groupby-type,
    #chart-groupby-status {
        max-height: 300px;
        margin-bottom: 2em;
    }

    .container {
        padding: 1rem;
        box-shadow: 0px 0px 10px 2px #f2f2f2;
        margin-top: 2rem;
        border-radius: 1rem
    }

    .leave-apps .profile-img {
        padding: 1rem;
    }

    .leave-apps img {
        aspect-ratio: 1/1;
        object-fit: cover;
        max-width: 80px;
        border-radius: 1rem;
    }

    @media all and (max-width: 576px) {
        .leave-apps-table {
            font-size: 15px;
        }

        .leave-apps img {
            max-width: 60px;
        }
    }
</style>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Leave Applications</title>
</head>

<style>
    <?php include(BASE_PATH . "/style.css"); ?>
</style>

<body>
    <div class="lg:container py-4">
        <div class="row">
            <div class="lg:col-3">
                <?php include(BASE_PATH . "/frontend/sidebar/sidebar.php"); ?>
            </div>

            <div class="col-12 lg:col-9 main-container">
                <?php include(BASE_PATH . "/frontend/main-content/header/header.php"); ?>

                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <canvas id="chart-groupby-type"></canvas>
                        </div>
                        <div class="col-6">
                            <canvas id="chart-groupby-status"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card leave-apps">
                    <div class="form-field mb-10">
                        <div class="switch theme-inverse">
                            <input type="checkbox" id="switchinverse" role="switch" switch checked />
                        </div>
                        <label for="switchinverse">Auto refreshing after every 30 seconds</label>
                    </div>

                    <table id="leave-apps-table" class="leave-apps-table nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Emp ID</th>
                                <th>Applied on</th>
                                <th>Start - End</th>
                                <th>Status</th>
                                <th>Approve?</th>
                                <th>Type</th>
                                <th>Total Days</th>
                                <th>Reason</th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>


<script src="./leaves-data-table.js"></script>

<script>
    $(document).ready(function() {
        $(".sidebar-menu").removeClass("active");
        $(".leave-menu").addClass("active");


        let chartNumber = 1;
        // Create chart
        let table = new DataTable('#leave-apps-table');
        drawChart(1);
        drawChart(2);
        

        function drawChart(chartNumber) {
            let chartData = getChartData(table);

            let colorObj = {
                Approved: "#198754",
                Pending: "#ffc107",
                Rejected: "#dc3545"
            };
            let colors = [colorObj[Object.keys(chartData)[0]], colorObj[Object.keys(chartData)[1]], colorObj[Object.keys(chartData)[2]]];

            const chart = new Chart((chartNumber == 1) ? 'chart-groupby-type' : 'chart-groupby-status', {
                type: 'doughnut',
                data: {
                    labels: Object.keys(chartData),
                    datasets: [{
                        data: Object.values(chartData),
                        backgroundColor: (chartNumber == 2) ? colors : ""
                    }],
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });

            // On each draw, update the data in the chart
            table.on('draw', function() {
                chartData = getChartData(table);

                chart.data.labels = Object.keys(chartData);
                chart.data.datasets[0].data = Object.values(chartData);
                chart.update();
            });

            function getChartData(table) {
                var counts = {};

                // Count the number of entries for each position
                table
                    .column((chartNumber == 1) ? 6 : 4, {
                        search: 'applied'
                    })
                    .data()
                    .each(function(val) {
                        if (counts[val]) {
                            counts[val] += 1;
                        } else {
                            counts[val] = 1;
                        }
                    });
                return counts;
            }
        }










        $(document).on("change", ".approve-option", function() {
            $.ajax({
                url: "../../backend/approve-leave.php",
                method: "POST",
                dataType: "json",
                data: {
                    leaveId: $(this).attr("data-id"),
                    leaveStatus: $(this).val(),
                },
                success: function(res) {
                    localStorage.setItem("leave-apps", JSON.stringify(res));
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>