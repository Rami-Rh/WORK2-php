<?php 
 try { 
    $dbstds = new PDO('mysql:host=localhost;dbname=dsi22_g2_2019;charset=utf8', 'root', '');
 } catch (Exception $e) { 
    die('Erreur : ' . $e.getMessage()); 
 }
?> 