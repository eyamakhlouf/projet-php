<?php
require_once('../controllers/ArticleController.php');
$articleCtr=new ArticleController();
$res=$articleCtr->getArticle($_GET['id']);
?>
<form name = 'f1' method='post' action='modificationA.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "text" name = "id" readonly="readonly" value = "<?php echo $res['idArticle'] ?>"/></td></tr>
<tr>
<td>libelle</td>
<td><input type = "text" name = "cin" value = "<?php echo $res['libelle'] ?>"/></td></tr>
<tr>
<td>matiere</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['matiere'] ?>"/></td></tr>
<tr><td>Prix</td>
<td><input type = "text" name = "prenom" value = "<?php echo $res['prix'] ?>"/></td></tr>
<tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>