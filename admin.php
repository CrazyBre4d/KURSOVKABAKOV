<?php require_once 'config/db.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN_HOSPITAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  th,td {
    padding:10px;
  }  

  th{
    background:#606060 ;
  }
  td{
    background-color: crimson;
  }
</style>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Пол</th>
            <th>Дата рождения</th>
            <th>Город</th>
            <th>Адрес</th>
        </tr>

        <?php


             $patient_information = mysqli_query($connect, "SELECT * FROM `patient information`");

             $patient_information = mysqli_fetch_all($patient_information);

            foreach ($patient_information as $patient_information) {
                ?>
                    <tr>
                        <td><?= $patient_information[0] ?></td>
                        <td><?= $patient_information[1] ?></td>
                        <td><?= $patient_information[2] ?></td>
                        <td><?= $patient_information[3] ?></td>
                        <td><?= $patient_information[4] ?></td>
                        <td><?= $patient_information[5] ?></td>
                        <td><?= $patient_information[6] ?></td>
                        <td><?= $patient_information[7] ?></td>
                        <td><a href="product.php?id=<?= $patient_information[0] ?>">View</a></td>
                        <td><a href="update.php?id=<?= $patient_information[0] ?>">Update</a></td>
                        <td><a style="color: blue;" href="vendor/delete.php?id=<?= $patient_information[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить нового клиента</h3>
    <form action="vendor/create.php" method="post">
        <p>Имя</p>
        <input type="text" name="firstname">
        <p>Фамилия</p>
        <input type="text" name="surname">
        <p>Отчество</p>
        <input type="text" name="patronymic">
        <p>Пол</p>
        <input type="text" name="sex">
        <p>Дата Рождения</p>
        <input type="date" name="date_of_birth">
        <p>Город</p>
        <input type="text" name="district">
        <p>Адрес</p>
        <input type="text" name="address"> <br> <br>
        <button type = "submit">Добавить клиента</button>
    </form>
</body>
</html> 
<br> <br>
<table>
        <tr>
            <th>ID</th>
            <th>Категория заболевания</th>
            <th>Название заболевания</th>
            
        </tr>

        <?php


             $diseases = mysqli_query($connect, "SELECT * FROM `diseases`");

             $diseases = mysqli_fetch_all($diseases);

            foreach ($diseases as $diseases) {
                ?>
                    <tr>
                        <td><?= $diseases[0] ?></td>
                        <td><?= $diseases[1] ?></td>
                        <td><?= $diseases[2] ?></td>                       
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить новое заболевание</h3>
    <form action="vendor/create.php" method="post">
        <p>Код категории</p>
        <input type="number" name="category">
        <p>Название заболевания</p>
        <input type="text" name="disease_name"> <br> <br>
        <button type = "submit">Подтвердить добавление</button>
    </form>