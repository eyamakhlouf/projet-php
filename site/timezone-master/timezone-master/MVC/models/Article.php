<?php

class Article {
private $idArticle,$libelle,$matiere,$prix,$img;
function __construct($libelle="",$matiere="",$prix=null,$img="") {
	
    $this->libelle=$libelle;
    $this->matiere=$matiere;
    $this->prix=$prix;
    $this->img=$img;
}
public function getImg(){
	return $this->img;
}

public function getLibelle(){
	return $this->libelle;
}

public function getMatiere(){
	return $this->matiere;
}

public function getPrix(){
	return $this->prix;
}


public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

public function setMatiere($matiere){
        $this->matiere = $matiere;
    }

 public function setPrix($prix){
        $this->prix = $prix	;
    }
    public function setImg($img){
        $this->img = $img	;
    }
	
}?>