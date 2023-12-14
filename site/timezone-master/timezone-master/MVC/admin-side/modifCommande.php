<?php
require_once('../controllers/CommandeController.php');
$commandeCtr=new CommandeController();
$res=$commandeCtr->getCommande($_GET['id']);
?>
<form name = 'f1' method='post' action='modificationCom.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "text" name = "id" readonly="readonly" value = "<?php echo $res['idCommande'] ?>"/></td></tr>
<tr>
<td>id Client</td>
<td><input type = "text" name = "cin" value = "<?php echo $res['idClient'] ?>"/></td></tr>
<tr>
<td>id Article</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['idArticle'] ?>"/></td></tr>
<tr><td>quantite</td>
<td><input type = "number" name = "prenom" value = "<?php echo $res['quantite'] ?>"/></td></tr>
<tr>
<td>Date de commande</td>
<td><input type = "date" name = "tel" value = "<?php echo $res['dateCmd'] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>