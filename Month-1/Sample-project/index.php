<?php include(__DIR__."/links.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Mng Portal</title>
</head>

<link rel="stylesheet" href="style.css" />

<body>

    <div class="lg:container">
        <div class="row">
            <div class="lg:col-3">
                <?php include(BASE_PATH . "/frontend/sidebar/sidebar.php"); ?>

            </div>

            <div class="col-12 lg:col-9 main-container">
                <?php include(BASE_PATH . "/frontend/main-content/header/header.php"); ?>
                <?php include(BASE_PATH . "/frontend/main-content/content/container.php"); ?>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $(".sidebar-menu").removeClass("active");
        $(".dashboard-menu").addClass("active");
    });
</script>

</html>