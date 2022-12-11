<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'hospital');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = new PDO("mysql:host=localhost;dbname=hospital","root","");
if (!$db) {
    die('ERROR: CANNOT CONNECT TO DATABASE');
}


$patient_information = [];
if ($query = $db->query("SELECT * FROM `patient information`")) { 
    $patient_information = $query->fetchAll(PDO::FETCH_ASSOC);
}
else {
    print_r($db->errorInfo());
}


$online_reserve = [];
if ($query = $db->query("SELECT * FROM `online_reserve`")) { 
    $online_reserve = $query->fetchAll(PDO::FETCH_ASSOC);
}
else {
    print_r($db->errorInfo());
}

$diseases = [];
if ($query = $db->query("SELECT * FROM `diseases`")) { 
    $diseases = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}

// Вставка с бд на сайт
$specialists = [];
if ($query = $db->query("SELECT * FROM `specialists`")) { 
    $specialists = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}


$dep_site = [];
if ($query = $db->query("SELECT * FROM `dep_site`")) { 
    $dep_site = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
}
?>