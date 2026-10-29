<style>
    <?php include(__DIR__ . "/style.css"); ?>
</style>


<aside class="sidebar d-none lg:d-block">
    <div class="logo">
        <img src="https://www.freepnglogos.com/uploads/yankees-logo-png/yankees-black-logo-vector-png-18.png" alt="Brand Logo" />
    </div>

    <div class="sidebar-menus">
        <a href="http://localhost:8000/" class="sidebar-menu dashboard-menu">
            <div>
                <i class="fa-solid fa-house-chimney"></i>
                &ensp;Dashboard
            </div>
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <a href="http://localhost:8000/frontend/routes/attendance/attendance.php" class="sidebar-menu attendance-menu">
            <div>
                <i class="fa-solid fa-clipboard-user"></i>
                &ensp;Attendance
            </div>
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <a href="http://localhost:8000/frontend/routes/employees.php" class="sidebar-menu employee-menu">
            <div>
                <i class="fa-solid fa-user-tie"></i>
                &ensp;Employee
            </div>
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <a href="http://localhost:8000/frontend/routes/leave-apps.php" class="sidebar-menu leave-menu">
            <div>
                <i class="fa-solid fa-plane-departure"></i>
                &ensp;Leave
            </div>
            <i class="fa-solid fa-chevron-left"></i>
        </a>
    </div>
</aside>