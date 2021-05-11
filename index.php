<?php

use src\EmployeeManager;

include_once "./vendor/autoload.php";

$data = new EmployeeManager("data.json");
$employees = $data->getData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 150px;
            border: 1px solid red;
        }

        table {
            border: 1px solid red;
            border-collapse: collapse;
            text-align: center;
        }
        button{
            background-color: black;
        }
    </style>
</head>
<body>
<a href="view/add.php"><button>Them moi</button></a>
<table>
    <tr>
        <td>STT</td>
        <td>Ho</td>
        <td>Ten</td>
        <td>Ngay Sinh</td>
        <td>Dia chi</td>
        <td>Vi tri</td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $employee->getSurName() ?></td>
            <td><?php echo $employee->getName() ?></td>
            <td><?php echo $employee->getDateOfBirth() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getLocation() ?></td>
            <td><a href="view/review.php?index=<?php echo $key ?> ">
                    <button>Xem</button>
                </a></td>
            <td><a href="action/delete.php?index=<?php echo $key ?>">
                    <button>Xoa</button>
                </a></td>
            <td><a href="view/edit.php?index=<?php echo $key ?>">
                    <button>Edit</button>
                </a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>



