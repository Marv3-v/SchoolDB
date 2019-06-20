<?php require_once('../../database/connexion.php'); ?>
<?php

$id = $_GET['delete'];
$mysqli->query("UPDATE student SET is_active=0 WHERE id=$id") or die($mysql->error);


header('location: ../../control/list.php');

?>