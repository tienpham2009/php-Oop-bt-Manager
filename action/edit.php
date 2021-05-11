<?php

include_once "../vendor/autoload.php";

use src\EmployeeManager;
$index = $_REQUEST['index'];

$surname = $_REQUEST['surname'];
$name = $_REQUEST['name'];
$dateOfBirth = $_REQUEST["dateOfBirth"];
$address = $_REQUEST['address'];
$location = $_REQUEST['location'];

$item = [
    "surname" => $surname,
    "name" => $name,
    "dateOfBirth" => $dateOfBirth,
    "address" => $address,
    "location" => $location
];

$data = new EmployeeManager("../data.json");
$data->editData($index, $item);
header("Location: ../index.php");
