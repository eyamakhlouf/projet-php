<?php
require_once('../controllers/CommandeController.php');
$commandeCtr=new CommandeController();
$commandeCtr->delete($_GET['id']);
header('Location:tablesCommandes.php');
?>