<?php

header("Content-Type: application/json");

$file = file_get_contents(__DIR__ . "/leave_applications.json");

echo json_encode(json_decode($file, true));
