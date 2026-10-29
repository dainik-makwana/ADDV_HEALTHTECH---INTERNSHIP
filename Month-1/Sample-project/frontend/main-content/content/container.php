<div class="main-content">

    <div class="cards row g-4">
        <div class="col-6 lg:col-3">
            <div class="card h-100">
                <div class="title fg-success">Total Employees&ensp;<i class="fa-solid fa-circle-info"></i></div>
                <div class="body">
                    <i class="fa-solid fa-users fg-success"></i>&ensp;
                    <span class="total-employees"></span>
                </div>
                <p class="fg-secondary">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="col-6 lg:col-3">
            <div class="card h-100">
                <div class="title fg-success">Today Presents&ensp;<i class="fa-solid fa-circle-info"></i></div>
                <div class="body">
                    <i class="fa-solid fa-chalkboard fg-success"></i>&ensp;
                    <span class="today-presents"></span>
                </div>
                <p class="fg-secondary">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="col-6 lg:col-3">
            <div class="card h-100">
                <div class="title fg-warning">Today Absent&ensp;<i class="fa-solid fa-circle-info"></i></div>
                <div class="body">
                    <i class="fa-solid fa-user-minus fg-warning"></i>&ensp;
                    <span class="today-absents"></span>
                </div>
                <p class="fg-secondary">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="col-6 lg:col-3">
            <div class="card h-100">
                <div class="title fg-danger">Today Leave&ensp;<i class="fa-solid fa-circle-info"></i></div>
                <div class="body">
                    <i class="fa-solid fa-users fg-danger"></i>&ensp;
                    <span class="today-leave"></span>
                </div>
                <p class="fg-secondary">Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
    </div>


    <div class="row my-0 g-5">
        <div class="col-12">
            <div class="card attendance-chart-card">
                <div class="title mb-5">Daily Leave Statics&ensp;<i class="fa-solid fa-circle-info"></i></div>

                <div id="attendance-chart"></div>
            </div>
        </div>
    </div>

    <?php include(__DIR__ . "/employees/emp-list.php"); ?>
</div>

<script>
    <?php include(__DIR__ . "/script.js"); ?>
</script>


<style>
    <?php include(__DIR__ . "/style.css"); ?>
</style>