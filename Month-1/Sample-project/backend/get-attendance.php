<?php
header("Content-Type: application/json");

if (!isset($_GET["date"])) $_GET["date"] = date("Y-m-d");

$file = file_get_contents(__DIR__ . "/attendance/" . $_GET["date"] . ".json");

echo json_encode(json_decode($file, true));
