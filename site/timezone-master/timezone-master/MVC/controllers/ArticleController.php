<?php
include_once('../models/Article.php') ;
include_once('../database/config.php');
class ArticleController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Article $a){

$query="insert into article(libelle,matiere,prix,img)values(?, ?, ?,?)";
$res=$this->pdo->prepare($query);
$aryy =array($a->getLibelle(),$a->getMatiere(),$a->getPrix(),$a->getImg()) ;
//var_dump($aryy);
return $res->execute($aryy);
}

function getArticle($id){
    $query="SELECT * FROM article WHERE idArticle = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idArticle) {
$query = "delete from article where idArticle=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idArticle));
}
function liste(){
$query = "select * from article";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_article(Article $a)
{
$sql = "UPDATE article SET matiere=?,prix=? WHERE libelle=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($a->getMatiere(),$a->getPrix(),$a->getLibelle(),$a->getImg()));
}
function listeProduit($id){
    $query = "select from article where idArticle=$id";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
    }
}
?>