<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res=$clientCtr->getClient($_GET['id']);
?>
<form name = 'f1' method='post' action='modificationC.php'>
<table border='1'>
	<tr>
<td>id</td>
<td><input type = "text" name = "id" readonly="readonly" value = "<?php echo $res['idClient'] ?>"/></td></tr>
<tr>
<td>Numéro cin</td>
<td><input type = "text" name = "cin" value = "<?php echo $res['ncin'] ?>"/></td></tr>
<tr>
<td>Nom</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nom'] ?>"/></td></tr>
<tr><td>Prenom</td>
<td><input type = "text" name = "prenom" value = "<?php echo $res['prenom'] ?>"/></td></tr>
<tr>
<td>Telephone</td>
<td><input type = "text" name = "tel" value = "<?php echo $res['numTel'] ?>"/></td></tr>
<tr><td>adresse</td>
<td><input type = "text" name = "adr" value = "<?php echo $res['adresse'] ?>"/></td></tr>
<tr><td>Email</td>
<td><input type = "text" name = "email" value = "<?php echo $res['email'] ?>"/></td></tr>
<tr><td>Password</td>
<td><input type = "text" name = "password" value = "<?php echo $res['password'] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>