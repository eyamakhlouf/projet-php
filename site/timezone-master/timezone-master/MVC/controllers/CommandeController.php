<?php
include_once('../models/Commande.php') ;
include_once('../database/config.php');
class CommandeController extends Connexion{
function __construct() {
parent::__construct();
}
function insert(Commande $c){

    $query="insert into commande(idClient,idArticle,quantite,dateCmd) values (?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getIdClient(),$c->getIdArticle(),$c->getQuantite(),$c->getDateCmd()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
    }
    
    function getCommande($id){
        $query="SELECT * FROM commande WHERE idCommande = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }
    function delete($idCommande) {
    $query = "delete from commande where idCommande=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($idCommande));
    }
    function liste(){
    $query = "select * from commande";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
    function modifier_commande(Commande $c)
    {
    $sql = "UPDATE commande SET  idArticle=?, quantite=?,dateCmd=? WHERE idClient=?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($c->getIdArticle(),$c->getQuantite(),$c->getDateCmd(),$c->getIdClient()));
    }
    }
    ?>