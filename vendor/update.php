
<?php


require_once '../config/db.php';



$id = $_POST['id'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$sex = $_POST['sex'];
$date_of_birth = $_POST['date_of_birth'];
$district = $_POST['district'];
$address = $_POST['address'];


mysqli_query($connect, "UPDATE `patient information` SET `firstname` = '$firstname', `surname` = '$surname', `patronymic` = '$patronymic',
 `sex` = '$sex', `date_of_birth` = '$date_of_birth', `district` = '$district', `address` = '$address' WHERE `patient information`.`
 id_patient` = '$id'");


//   Переадресация на главную страницу


header('Location: /admin.php');