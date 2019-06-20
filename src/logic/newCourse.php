<?php require_once('../../database/connexion.php'); ?>

<?php

if(isset($_POST['save'])) {
    $name = $_POST['name'];

    $mysqli->query("INSERT INTO subject VALUES (null, null, '$name' , 1)") or
    die($mysqli->error);

    header('location: ../../cursos/courseList.php');
}
?>