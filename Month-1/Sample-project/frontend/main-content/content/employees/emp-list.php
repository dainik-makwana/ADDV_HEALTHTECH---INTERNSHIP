<div class="card employee-list my-5">

    <div class="row table-title py-3 pb-4">
        <div class="col-2 md:col-1">ID</div>
        <div class="col-2 md:col-1">Image</div>
        <div class="col-3 md:col-2">Name</div>
        <div class="col-3">Job Title</div>
        <div class="d-none md:d-block md:col-2">Department</div>
        <div class="d-none md:d-block md:col-2">Hire Date</div>
        <div class="col-2 md:col-1">Active?</div>
    </div>
</div>

<script>
    <?php include(__DIR__ . "../../../api/get-emp-list.js"); ?>

    <?php include(__DIR__ . "/script.js"); ?>
</script>