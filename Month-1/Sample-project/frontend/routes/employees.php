<?php include("../../links.php"); ?>

<style>
    .employee-list-table .profile-img {
        padding: 1rem;
    }

    .employee-list-table img {
        aspect-ratio: 1/1;
        object-fit: cover;
        max-width: 80px;
        border-radius: 1rem;
    }

    @media all and (max-width: 576px) {
        .employee-list-table {
            font-size: 15px;
        }

        .employee-list img {
            max-width: 60px;
        }
    }
</style>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
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
                    <table class="employee-list-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Salary (Rs.)</th>
                                <th>Hire Date</th>
                                <th>Active?</th>
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


<script>
    $(document).ready(function() {
        $(".sidebar-menu").removeClass("active");
        $(".employee-menu").addClass("active");

        new DataTable('.employee-list-table', {
            data: JSON.parse(localStorage.getItem("employees")),
            columns: [{
                    data: 'id',
                },
                {
                    data: 'img',
                    render: function(data) {
                        return `<div class="profile-img"><img src="${data}" /></div>`
                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `${row.firstName} ${row.lastName}`;
                    }
                },
                {
                    data: 'jobTitle'
                },
                {
                    data: 'department'
                },
                {
                    data: 'salary'
                },
                {
                    data: 'hireDate'
                },
                {
                    data: 'isActive',
                    render: function(data, type, row) {
                        return (data) ?
                            `<button class="btn-outline theme-inverse block-btn" data-id="${row.id}">Block</button>` :
                            `<span class="fg-danger"><i class="fa-solid fa-circle-xmark"></i> Not active</span>`;
                    }
                }
            ],
            layout: {
                topStart: {
                    buttons: [{
                            extend: 'excelHtml5',
                            customize: function(xlsx) {
                                var sheet = xlsx.xl.worksheets['sheet1.xml'];

                                // Selector to add a border
                                sheet.querySelectorAll('row c[r*="10"]').forEach((el) => {
                                    el.setAttribute('s', '25');
                                });
                            }
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        'colvis'
                    ]
                }
            },
            responsive: {
                details: {
                    renderer: DataTable.Responsive.renderer.listHiddenNodes()
                }
            }
        });


        $(document).on("click", ".block-btn", function(e) {
            let res = $.ajax({
                url: "../../backend/block-emp.php",
                method: "POST",
                dataType: "json",
                data: {
                    empId: $(this).attr("data-id")
                },
                success: function(res) {
                    $(e.target).parent().html(`<span class="fg-danger"><i class="fa-solid fa-circle-xmark"></i> Not active</span>`);
                    localStorage.setItem("employees", JSON.stringify(res));
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

            if (res.status == 200) alert("success");
        })
    });
</script>