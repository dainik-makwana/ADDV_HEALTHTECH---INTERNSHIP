<?php

header("Content-Type: application/json");

$empId = json_decode($_POST["empId"]);

$file = file_get_contents(__DIR__ . "/employees.json");
$employees = json_decode($file, true);


foreach ($employees as &$emp) {
    if ($emp["id"] == $empId) {
        $emp["isActive"] = false;

        file_put_contents(__DIR__ . "/employees.json", json_encode($employees));
        echo json_encode($employees);
        break;
    }
}
