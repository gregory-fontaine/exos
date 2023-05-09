<?php
include('../Modele/DBManagement.php');
session_start();
$_SESSION['stag'] = selectStagiaire();
header('location:../View/select.php');
?>
        
        