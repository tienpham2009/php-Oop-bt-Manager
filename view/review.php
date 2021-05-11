<?php
include_once "../vendor/autoload.php";

use src\EmployeeManager;

$data1 = new EmployeeManager("../data.json");
$index = $_REQUEST['index'];
$employee = $data1->findByIndex($index);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Ho : <?php echo $employee->getSurname()?><br>
Ten : <?php echo $employee->getName()?><br>
Ngay sinh :<?php echo $employee->getDateOfBirth()?><br>
Dia chi : <?php echo $employee->getAddress()?><br>
Vi tri :<?php echo $employee->getLocation()?><br>
<a href="../index.php">OK</a>

</body>
</html>
