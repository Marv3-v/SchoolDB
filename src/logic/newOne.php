<?php require_once('../../database/connexion.php'); ?>

<?php

if(isset($_POST['save'])) {
    $name = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];

    $mysqli->query("INSERT INTO student VALUES (null, null, '$name' , '$birthdate', 1)") or
    die($mysqli->error);

    header('location: ../../control/list.php');
}
?>