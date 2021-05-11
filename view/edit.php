<?php
include_once "../vendor/autoload.php";
use src\EmployeeManager;
$data = new EmployeeManager("../data.json");
$index = $_REQUEST['index'];

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
<form action="../action/edit.php" method="post">
    Ho : <input type="text" name="surname">
    <br>
    Ten : <input type="text" name="name">
    <br>
    Ngay sinh : <input type="date" name="dateOfBirth">
    <br>
    Dia chi : <input type="text" name="address">
    <br>
    Chuc vu : <input type="text" name="location">
    <br>
<input type="hidden" name="index" value="<?php echo $index?>">
    <input type="submit" value="Edit">
</form>
</body>
</html>