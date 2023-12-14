<?php
require_once('../controllers/ArticleController.php');
$articleCtr=new ArticleController();
$articleCtr->delete($_GET['id']);
header('Location:tablesArticles.php');
?>