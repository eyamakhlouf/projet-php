<?php
require_once('../controllers/ArticleController.php');
require_once('../models/Article.php');
$articleCtr=new ArticleController();
$article=new Article();
$article->setLibelle($_POST['cin']);
$article->setMatiere($_POST['nom']);
$article->setPrix($_POST['prenom']);

$articleCtr->modifier_article($article);
header('Location:tablesArticles.php');
?>