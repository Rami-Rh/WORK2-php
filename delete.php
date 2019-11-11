<?php
include 'dbconnexion.php';


$req=$dbstds->prepare("DELETE FROM students where id=:id");

$req->bindParam(':id',$_GET['id']);

$req->execute();

header('Location:index.php');
?>