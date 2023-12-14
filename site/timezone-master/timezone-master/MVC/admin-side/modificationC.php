<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();
$client->setCin($_POST['cin']);
$client->setFirstName($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['tel']);
$client->setAdresse($_POST['adr']);
$client->setEmail($_POST['email']);
$client->setPassword($_POST['password']);
$clientCtr->modifier_user($client);
header('Location:tablesClient.php');
?>