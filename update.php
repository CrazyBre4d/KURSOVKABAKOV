<?php
    require_once 'config/db.php';
    $id_patient = $_GET['id'];
    $patient_information = mysqli_query($connect, "SELECT * FROM `patient information` WHERE `id_patient` = '$id_patient'");
    $patient_information = mysqli_fetch_assoc($patient_information);
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Изменение данных клиента</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head> 
<body>
    <h3>Внести изменения в таблицу</h3>
    <form action="vendor/create.php" method="post">
    <input type="hidden" name="id" value="<?= $patient_information['id'] ?>">
        <p>Имя</p>
        <input type="text" name="firstname" value="<?= $patient_information['firstname'] ?>">
        <p>Фамилия</p>
        <input type="text" name="surname"  value="<?= $patient_information['surname'] ?>">
        <p>Отчество</p>
        <input type="text" name="patronymic"  value="<?= $patient_information['patronymic'] ?>">
        <p>Пол</p>
        <input type="text" name="sex"  value="<?= $patient_information['sex'] ?>">
        <p>Дата Рождения</p>
        <input type="date" name="date_of_birth"  value="<?= $patient_information['date_of_birth'] ?>">
        <p>Город</p>
        <input type="text" name="district"  value="<?= $patient_information['district'] ?>">
        <p>Адрес</p>
        <input type="text" name="address"  value="<?= $patient_information['address'] ?>"> <br> <br>
        <button type = "submit">Изменить данные клиента</button>
    </form>
</body>

