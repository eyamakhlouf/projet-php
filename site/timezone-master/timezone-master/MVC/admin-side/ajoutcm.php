<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');
$ncin=$_POST['lib'];
$nom=$_POST['mat'];
$prenom=$_POST['prix'];
$numTel=$_POST['img'];

$commande=new Commande($ncin,$nom,$prenom,$numTel);
$commandeCtr=new CommandeController();
$res=$commandeCtr->insert($commande);
//echo $client->getNcin();
if($res==true){
	//header('Location:index.html');
    echo "<script>
    alert('bien ajoutee');
    window.location.href = 'tablesCommandes.php';
  </script>";

}
?>