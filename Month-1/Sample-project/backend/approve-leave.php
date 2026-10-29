<?php


$file = file_get_contents(__DIR__ . "/leave_applications.json");
$leaves = json_decode($file, true);

foreach ($leaves as &$leave) {
    if ($leave["id"] == $_POST["leaveId"]) {
        $leave["status"] = $_POST["leaveStatus"];

        file_put_contents(__DIR__ . "/leave_applications.json", json_encode($leaves));
        echo json_encode($leaves);

        break;
    }
}
