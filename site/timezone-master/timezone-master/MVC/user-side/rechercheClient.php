<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
session_start();
$_SESSION['email']=$_POST['name'];
$_SESSION['password']=$_POST['password'];
echo $_SESSION['email'];
//$c=$_POST['name'];
//$p=$_POST['password'];
$client=new Client($ncin,$nom,$prenom,$numTel,$adresse,$email,$password);
$clientCtr=new ClientController();
$res=$clientCtr->liste();
$res1=$clientCtr->liste();





$i=0;

while($l=$res->fetch())
    { if($_SESSION['email']==$l[6])
        $i++;
        //echo"<tr><td>$l[1]</td><td>$l[2]</td><td>$l[4]</td></tr>";
    }
    /*echo "<script>
    alert('$i');
  </script>";*/
  if($i==0)
  { echo "<script>
      alert('Desole ,Vous n avez pas de compte');
      window.location.href = 'new.html';
    </script>";
  }

else if($i>0)
{
    while($li=$res1->fetch())
    {  
        if($_SESSION['email']==$li[6]) 
       { if($_SESSION['password']==$li[7])
          { echo "<script>
        alert('Vous etes connectes a votre compte,Vous pouvez maintenant passez vos commandes');
        window.location.href = 'index.php';
      </script>";}
       else  if($_SESSION['password']!=$li[7])
    { echo "<script>
      alert('mot de passe incorrecte');
      window.location.href = 'login.html';
    </script>";}}
      
      
    }
}

?>