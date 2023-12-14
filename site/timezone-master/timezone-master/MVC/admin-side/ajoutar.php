<?php
require_once('../controllers/ArticleController.php');
require_once('../models/Article.php');
$ncin=$_POST['lib'];
$nom=$_POST['mat'];
$prenom=$_POST['prix'];
$numTel=$_POST['img'];

$article=new Article($ncin,$nom,$prenom,$numTel);
$articleCtr=new ArticleController();
$res=$articleCtr->insert($article);
//echo $client->getNcin();
if($res==true){
	//header('Location:index.html');
    echo "<script>
    alert('bien ajoutee');
    window.location.href = 'tablesArticles.php';
  </script>";

}
?>