<!DOCTYPE html>
<style>

</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>supprimer</title>
</head>
<body>
  <?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$id= (int)$_GET["sup"];
$data = new Databases; 
$id= (int)$_GET["sup"];
echo $id;
$suup=$data->delete("rendezvous","id_RV",$id) ;
header("location:spacemedcin.php");


  ?>  
</body>
</html>