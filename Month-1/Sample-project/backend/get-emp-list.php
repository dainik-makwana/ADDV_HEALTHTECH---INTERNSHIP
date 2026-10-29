<?php

header('Content-Type: application/json');

$content = file_get_contents(__DIR__ . "/employees.json");
echo json_encode(json_decode($content, true));