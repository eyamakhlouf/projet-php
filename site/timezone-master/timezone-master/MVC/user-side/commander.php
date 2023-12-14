<?php

require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
require_once('../controllers/ArticleController.php');
require_once('../models/Article.php');
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');

session_start();



$con = mysqli_connect("localhost","root","","boutique");
//verifier la connexion
if(!$con) die('Erreur : '.mysqli_connect_error());
session_start();
//echo $_SESSION['email'];
//echo $_SESSION['boutique'];
//echo array_keys($_SESSION['boutique']);
$ids = array_keys($_SESSION['boutique']);
//echo var_dump($ids);
$article = mysqli_query($con, "SELECT * FROM article WHERE idArticle IN (".implode(',', $ids).")");                
while ($l = mysqli_fetch_assoc($article)) {
    //echo $l['idArticle'];
    //echo $_SESSION['email'];
    $idArt=$l['idArticle'];
    $prix=$_SESSION['boutique'][$l['idArticle']];
 
     $date=date("Y-m-d");
    
    $client=new Client($ncin,$nom,$prenom,$numTel,$adresse,$email,$password);
    $clientCtr=new ClientController();
    $res=$clientCtr->liste();
    while($l=$res->fetch())
        { if($_SESSION['email']==$l[6])
            //echo $l['idClient'];
            $idCli=$l['idClient'];
          
            }
            require_once('../controllers/CommandeController.php');
            require_once('../models/Commande.php');
            echo $idCli."  ";
            echo $idArt."  ";
            echo $prix."  ";
            echo $date."  <br>";
            $idClient=$idCli;
            $idArticle=$idArt;
            $quantite=$prix;
            $dateCmd=$date;
            $commande=new Commande($idClient,$idArticle,$quantite,$dateCmd);
            $commandeCtr=new CommandeController();
            $res1=$commandeCtr->insert($commande);
            //echo $client->getNcin();
           
        
        if($res1==true){
            echo "ok";}
            else {
                echo "Erreur lors de l'enregistrement de la commande : ";
            }
    
    }?>