<?php
define("BASE_PATH", __DIR__);
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">


<script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/3.1.4/css/dataTables.dataTables.min.css" />
<link href="https://cdn.datatables.net/v/dt/dt-3.1.4/datatables.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/4.1.1/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/3.1.4/css/dataTables.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/4.1.2/css/buttons.dataTables.min.css" />


<!-- DataTable links -->
<script src="https://cdn.datatables.net/3.1.4/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-3.1.4/datatables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/4.1.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/4.1.2/js/buttons.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>



<script src="https://cdn.datatables.net/responsive/4.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/4.1.1/js/responsive.dataTables.min.js"></script>

<!-- Api URLs -->
<script>
    $(document).ready(function() {
        // Today Attendance
        if (!localStorage.getItem("today-attendance")) {
            $.ajax({
                url: "/backend/get-attendance.php",
                method: "GET",
                data: {
                    day: "today"
                },
                success: function(res) {
                    localStorage.setItem("today-attendance", JSON.stringify(res));
                    window.location.reload();
                }
            });
        }



        // Employee List
        if (!localStorage.getItem("employees")) {
            $.ajax({
                url: "/backend/get-emp-list.php",
                method: "GET",
                success: function(res) {
                    localStorage.setItem("employees", JSON.stringify(res));
                    window.location.reload();
                }
            });
        }



        // Leave Applications
        if (!localStorage.getItem("leave-apps")) {
            $.ajax({
                url: "/backend/leave-apps.php",
                method: "GET",
                success: function(res) {
                    localStorage.setItem("leave-apps", JSON.stringify(res));
                    window.location.reload();
                }
            });
        }
    });
</script>