<?php

$file = __DIR__ . "/attendance/" . date("Y-m-d") . ".json";

$empId = (int)(explode("***", $_POST["employeeId"])[0]);
$img = explode("***", $_POST["employeeId"])[1];

$checkIn = 0;
$checkOut = 0;
$workHours = 0;
$lateByMinutes = 0;
$content = [];

if ($_POST["status"] != "Absent" && $_POST["status"] != "On Leave") {
    $checkIn = $_POST["checkIn"];
    $checkOut = $_POST["checkOut"];
    $workHours = (strtotime($_POST["checkOut"]) - strtotime($_POST["checkIn"])) / 3600;
    $lateByMinutes = (8 - $workHours) * 60;
}


if (file_exists($file)) {
    $content = json_decode(file_get_contents($file), true);

    foreach ($content as $con) {
        if ($con["employeeId"] == $empId) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
}

$new_content = [
    "attendanceId" => (file_exists($file)) ? ($content[sizeof($content) - 1]["attendanceId"] + 1) : 1,
    "employeeId" => $empId,
    "img" => $img,
    "date" => date("Y-m-d"),
    "checkIn" => $checkIn,
    "checkOut" => $checkOut,
    "lateByMinutes" => $lateByMinutes,
    "workHours" => $workHours,
    "status" => $_POST["status"]
];

array_push($content, $new_content);

file_put_contents($file, json_encode($content));

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
