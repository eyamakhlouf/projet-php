<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');
$commandeCtr=new CommandeController();
$commande=new Commande();
$commande->setIdClient($_POST['cin']);
$commande->setIdArticle($_POST['nom']);
$commande->setQuantite($_POST['prenom']);
$commande->setDateCmd($_POST['tel']);

$commandeCtr->modifier_commande($commande);
header('Location:tablesCommandes.php');
?>