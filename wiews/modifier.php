<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
require_once'/var/www/html/git_space/projetmedical1/model/enregistrerrv.php';
$id=(int)$_GET['edit'];
$data= new Databases;
$modifier=$data->SelectId($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>espacesecretaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="gestionrv.php">deconnexion</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">secretaire</a></li>
     
    </ul>
  </div>
</nav>
  <div class="row">
    <div class="col-lg-6" >
<img src="images/medecin.jpg" alt="" class="container">
    </div>
    <div class="col-lg-6">
<br>

  <center>Donner un rendezvous</center>
<br>
<center>
<form action="" method="post">
    <fieldset>
      <?php
       foreach ($modifier as $value) {
       
      ?>
<label for=""> Specialité</label>
<select name="nom_specialite" id=""required="required">
<?php
    foreach($rs1 as $r1){
      ?>
        <option><?php echo $value['nom_specialite'];?></option>
        <option><?=$r1["nom_specialite"]; ?></option>

      <?php
    }
?>
</select>
<br>
<br>
<label for=""> Patient</label>
<select name="nom_patient" id=""required="required">
<?php
    foreach($rs2 as $r2){
      ?>
  
       <option><?php echo $value['nom_patient'];?></option>
        <option><?=$r2["nom_patient"]; ?></option>

      <?php
    }
?>
</select>
<br>
<br>
<label for=""> Medecin</label>
<select name="nom_medcin" id=""required="required">
<?php
    foreach($rs3 as $r3){
      ?>
  
        <option><?php echo $value['nom_medcin'];?></option>
        <option><?=$r3["nom_medcin"]; ?></option>

      <?php
    }
?>
</select>
<br>
<br>
<label for=""> secretaire</label>
<select name="nom_secretaire" id="" required="required">
<?php
    foreach($rs4 as $r4){
      ?>
      
      <option><?php echo $value['nom_secretaire'];?></option>
        <option><?=$r4["nom_secretaire"]; ?></option>

      <?php
    }
?>
</select>
<br>
<br>
<label for="">planning</label>
<select name="date_planning" id=""required="required">
<?php
    foreach($rs5 as $r5){
      ?>
    <option><?php echo $value['date_planning'];?></option>
    <option ></option>
    <option ><?=$r5["date_planning"]; ?></option>

      <?php
    }
?>
</select>
<br>
<br>
<input type="text" name="date_rendezvous" required="required"value=" <?php echo $value['date_rendezvous'];?>">
<br>
<br>
<input type="texte" name="heure_rendezvous"  required="required"value=" <?php echo $value['heure_rendezvous'];?>">
<br>
<br>
<input type="text"name="duree_rendezvous" required="required" value=" <?php echo $value['duree_rendezvous'];?>">
<br>
<br>
<input type="submit" value="enregistrer" name="envoyer">
<br>
<br>
<?php
 }
?>
</form>
</center>
</fieldset>

    </div>

  </div>


</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
</body>
</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
