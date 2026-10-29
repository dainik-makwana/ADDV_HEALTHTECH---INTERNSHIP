<?php
include("../../../links.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>

<script>
    function fillAttendanceOptions() {
        let employees = JSON.parse(localStorage.getItem("employees"));
        let todayAtt = JSON.parse(localStorage.getItem("today-attendance"));

        if (employees) {
            employees.forEach((ele, ind) => {
                $(".emp-id").append(`<option class="emp-id-option-${ele.id}" data-id="${ele.id}" name="employeeId" value="${ele.id}***${ele.img}">${ele.id}</option>`);
            });
        }


        if (todayAtt) {
            todayAtt.map((ele) => {
                $(`.emp-id-option-${ele.employeeId}`).hide();
            });
        }
    }


    $(document).ready(function() {

        $.ajax({
            url: "../../../backend/get-attendance.php",
            success: function(res) {
                console.log(res);
                if (res === "") localStorage.removeItem("today-attendance");

                localStorage.setItem("today-attendance", JSON.stringify(res));

                fillAttendanceOptions();
                generateDataTable();
            }
        });
    });
</script>


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


                <div class="row fill-attendance-form">
                    <div class="col-12 md:col-6">

                        <form action="../../../backend/fill-attendance.php" method="post" class="card" style="background-color: antiquewhite; box-shadow: 0px 0px 10px 2px grey;">

                            <h4 class="text-center fg-danger border-bottom pb-5 mb-10">Fill Attendance</h4>
                            <div class="row align-items-center my-3">
                                <div class="col-4">Select ID</div>
                                <div class="col-8">
                                    <select name="employeeId" class="form-control emp-id" size="5" required></select>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-4">Check In/Out</div>
                                <div class="col-4"><input type="time" name="checkIn" class="form-control check-in" value="08:00" /></div>
                                <div class="col-4"><input type="time" name="checkOut" class="form-control check-out" value="14:00" /></div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-4">Status</div>
                                <div class="col-8">
                                    <select name="status" class="form-control">
                                        <option value="Present">Present</option>
                                        <option value="Absent">Absent</option>
                                        <option value="Late">Late</option>
                                        <option value="Half Day">Half Day</option>
                                        <option value="On Leave">On Leave</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-4"><button class="btn-solid theme-inverse fill-attendance">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card my-5">
                    <?php include(BASE_PATH . "/frontend/routes/attendance/list.php"); ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $(".sidebar-menu").removeClass("active");
        $(".attendance-menu").addClass("active");

        fillAttendanceOptions();
    });
</script>


<script>
    <?php include(BASE_PATH . "/frontend/routes/attendance/list.js"); ?>
</script>

</html>