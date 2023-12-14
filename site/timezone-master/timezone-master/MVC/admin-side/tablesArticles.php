<?php
require_once('../controllers/ArticleController.php');
require_once('../models/Article.php');
include('../admin-side/tables.html');
$article=new Article($libelle,$matiere,$prix);
$articleCtr=new ArticleController();
$res=$articleCtr->liste();
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
  <th>Libelle</th>
  <th>matiere</th>
  <th>Prix</th>
 
  
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

<th class='button small green --jb-modal actions-cell  data-target='sample-modal-2' ><a href ='modifArticle.php?id=$l[idArticle]'>  <span class='icon'></a><i class='mdi mdi-square-edit-outline'></i></span></a></th>
<th class='button small red --jb-modal actions-cell' data-target='sample-modal' ><a href='suppArticle.php?id=$l[idArticle]'><span class='icon'><i class='mdi mdi-trash-can'></i></span></a></th>
</tr>";
}}
echo"</tbody></table>";
?>