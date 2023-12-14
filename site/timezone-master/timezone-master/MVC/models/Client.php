<?php

class Client {
private $ncin,$nom,$prenom,$numTel,$adresse,$email,$password;
function __construct($ncin="",$nom="",$prenom="",$numTel="",$adresse="",$email="",$password="") {
	
    $this->ncin=$ncin;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->numTel=$numTel;
    $this->adresse=$adresse;
    $this->email=$email;
    $this->password=$password;
}

public function getNcin(){
	return $this->ncin;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->numTel;
}
public function getEmail(){
	return $this->email;
}
public function getPassword(){
	return $this->password;
}
public function getAdresse(){
	return $this->adresse;
}


public function setFirstName($nom){
        $this->nom = $nom;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }

public function setCin($ncin){
        $this->ncin = $ncin;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($numTel){
        $this->numTel = $numTel	;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse	;
    }
	
}?>