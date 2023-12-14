<?php
require_once('../controllers/AdminController.php');
require_once('../models/Admin.php');
$login=$_POST['login'];
$mot2passe=$_POST['password'];
$admin=new Admin($login,$mot2passe);
$adminCtr=new AdminController();
$res=$adminCtr->liste($admin);
//echo $client->getNcin();

while($li=$res->fetch())
{
  if($li[0]==$login && $li[1]==$mot2passe){
	header('Location:index.html');}
  else if($li[0]==$login && $li[1]!=$mot2passe)
   { echo "<script>
    alert('Votre mot de passe est incorrecte');
    window.location.href = 'login.html';
  </script>";}
  else if($li[0]!=$login)
{echo "<script>
alert('vous n etes pas un admin');
window.location.href = 'login.html';
</script>";}
}
?>