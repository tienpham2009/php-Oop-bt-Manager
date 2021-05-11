<?php
include_once "../vendor/autoload.php";

use src\EmployeeManager;
$surname = $_POST["surname"];
$name = $_POST['name'];
$dateOfBirth = $_POST['dateOfBirth'];
$address = $_POST['address'];
$location = $_POST['location'];
$index = $_REQUEST['index'];

$item = [
    "surname" => $surname,
    "name" => $name,
    "dateOfBirth" => $dateOfBirth,
    "address" => $address,
    "location" => $location
];
$data = new EmployeeManager("../data.json");
$data->addData($item);
header('Location: ../index.php');



