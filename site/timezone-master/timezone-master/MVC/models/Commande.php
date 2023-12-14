<?php

class Commande {
private $idCommande,$idClient,$idArticle,$quantite,$dateCmd;
function __construct($idClient=null,$idArticle=null,$quantite=null,$dateCmd=null) {
	
    $this->idClient=$idClient;
    $this->idArticle=$idArticle;
    $this->quantite=$quantite;
    $this->dateCmd=$dateCmd;
}

public function getIdClient(){
	return $this->idClient;
}

public function getIdArticle(){
	return $this->idArticle;
}

public function getQuantite(){
	return $this->quantite;
}

public function getDateCmd(){
	return $this->dateCmd;
}


public function setIdClient($idClient){
        $this->idClient = $idClient;
    }

public function setIdArticle($idArticle){
        $this->idArticle = $idArticle;
    }

public function setQuantite($quantite){
        $this->quantite = $quantite;
    }

 public function setDateCmd($dateCmd){
        $this->dateCmd = $dateCmd	;
    }
	
}?>