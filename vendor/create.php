<?php
// ДАННЫЕ ПАЦИЕНТА
require_once '../config/db.php';
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$sex = $_POST['sex'];
$date_of_birth = $_POST['date_of_birth'];
$district = $_POST['district'];
$address = $_POST['address'];
mysqli_query($connect, query: "INSERT INTO `patient information` (`id_patient`, `firstname`, `surname`, `patronymic`, `sex`, 
`date_of_birth`,`district`, `address`) VALUES (NULL, '$firstname', '$surname', '$patronymic', '$sex', '$date_of_birth', '$district', '$address')");
header('Location: /admin.php');
// ЗАПИСЬ ОНЛАЙН
require_once '../config/db.php';
$ill_desc = $_POST['ill_desc'];
$date = $_POST['date_time'];
$FIO = $_POST['FIO'];
$telephone_number = $_POST['telephone_number'];
$mail = $_POST['mail'];
mysqli_query($connect, query: "INSERT INTO `online_reserve` (`id_client`, `ill_desc`, `date`, `FIO`, 
`telephone_number`, `mail`) VALUES (NULL, '$ill_desc', '$date', '$FIO', '$telephone_number', '$mail')");
header('Location: /index.php');

// РЕДАКТОР БОЛЕЗНЕЙ

$category = $_POST['category'];
$disease_name = $_POST['disease_name'];
mysqli_query($connect, query: "INSERT INTO `diseases` (`id_disease`, `category`, `disease_name`) VALUES (NULL, '$category', '$disease_name')");
header('Location: /admin.php');