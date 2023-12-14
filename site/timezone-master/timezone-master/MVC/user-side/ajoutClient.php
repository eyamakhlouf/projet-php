<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$ncin=$_POST['ncin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numTel=$_POST['tel'];
$adresse=$_POST['adr'];
$email=$_POST['email'];
$password=$_POST['mdp'];
$client=new Client($ncin,$nom,$prenom,$numTel,$adresse,$email,$password);
$clientCtr=new ClientController();
$res=$clientCtr->insert($client);
//echo $client->getNcin();
if($res==true){
	//header('Location:index.html');
    echo "<script>
    alert('Votre Compte est creer avec succes,Vous pouvez maintenant passez vos commandes');
    window.location.href = 'index.php';
  </script>";
}
?>