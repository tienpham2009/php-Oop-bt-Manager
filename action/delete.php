<?php
include_once "../vendor/autoload.php";

use src\EmployeeManager;

$data = new EmployeeManager("../data.json");
$index = $_REQUEST['index'];
$data->deleteData($index);
header("Location: ../index.php");