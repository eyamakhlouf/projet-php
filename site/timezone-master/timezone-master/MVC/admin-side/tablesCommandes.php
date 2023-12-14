<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');
include('../admin-side/tables.html');
$commande=new Commande($idClient,$idArticle,$quantite,$dateCmd);
$commandeCtr=new CommandeController();
$res=$commandeCtr->liste();
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
  <th>Id client</th>
  <th>Id article</th>
  <th>quantite</th>
  <th>Date de commande</th>
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
<th class='button small green --jb-modal actions-cell  data-target='sample-modal-2' ><a href ='modifCommande.php?id=$l[idCommande]'>  <span class='icon'></a><i class='mdi mdi-square-edit-outline'></i></span></a></th>
<th class='button small red --jb-modal actions-cell' data-target='sample-modal' ><a href='suppCommande.php?id=$l[idCommande]'><span class='icon'><i class='mdi mdi-trash-can'></i></span></a></th>
</tr>";
}}
echo"</tbody></table>";
?>