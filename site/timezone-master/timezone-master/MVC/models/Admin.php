<?php

class Admin {
private $login,$mot2passe;
function __construct($login="",$mot2passe="") {
	
    $this->login=$login;
    $this->mot2passe=$mot2passe;
}

public function getLogine(){
	return $this->login;
}

public function getMot2passe(){
	return $this->mot2passe;
}

public function setLogin($login){
        $this->login = $login;
    }

public function setMot2passee($mot2passe){
        $this->mot2passe = $mot2passe;
    }	
}?>