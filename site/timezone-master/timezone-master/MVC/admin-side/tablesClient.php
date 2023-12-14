<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
include('../admin-side/tables.html');
$client=new Client($ncin,$nom,$prenom,$numTel,$adresse,$email,$password);
$clientCtr=new ClientController();
$res=$clientCtr->liste();
echo" <table>
<thead>
<tr>
  <th class='checkbox-cell'>
    <label class='checkbox'>
      <input type='checkbox'>
      <span class='check'></span>
    </label>
  </th>
  <th class='image-cell'></th>
  <th>Id</th>
  <th>Cin</th>
  <th>nom</th>
  <th>Prenom</th>
  <th>Numero Telephone</th>
  <th>Adresse</th>
  <th>Email</th>
  <th>Password</th>
  
</tr>
</thead></tbody>";
if (is_array($res) || is_object($res)){
  foreach ($res as $l)
{
echo"
<tr>
<th class='checkbox-cell'>
    <label class='checkbox'>
      <input type='checkbox'>
      <span class='check'></span>
    </label>
  </th><th></th>
<th>$l[0]</th>
<th>$l[1]</th>
<th>$l[2]</th>
<th>$l[3]</th>
<th>$l[4]</th>
<th>$l[5]</th>
<th>$l[6]</th>
<th>$l[7]</th>
<th class='button small green --jb-modal actions-cell  data-target='sample-modal-2' ><a href ='modifClient.php?id=$l[idClient]'>  <span class='icon'></a><i class='mdi mdi-square-edit-outline'></i></span></a></th>
<th class='button small red --jb-modal actions-cell' data-target='sample-modal' ><a href='suppClient.php?id=$l[idClient]'><span class='icon'><i class='mdi mdi-trash-can'></i></span></a></th>
</tr>";
}}
echo"</tbody></table>";
?>