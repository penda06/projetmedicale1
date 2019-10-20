<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
require_once'/var/www/html/git_space/projetmedical1/model/enregistrerrv.php';

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

  <div class="row">
    <div class="col-lg-6" >
<img src="images/medecin.jpg" alt="" class="container">
    </div>
    <div class="col-lg-6">

    <h1 class='liste'>
<center>Listes des patients</center></h1>
<br>
<br>
<br>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
      <th scope="col">id_patient</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">mail</th>
      <th scope="col">tel</th>
    </tr>
</thead> 
<?php

  foreach($inssecretaire as $value){
     ?>
        <tr>
      <td><?php echo $value["id_patient"];?></td>
      <td><?php echo $value["nom_patient"];?></td>
      <td><?php echo $value["prenom_patient"];?></td>
      <td><?php echo $value["mail_patient"];?></td>
    <td><?php echo $value["tel_patient"];?></td>

      <?php
    }
?> 

    </tr> 
 
</table>
<br>
<br>
<br>
<h1 class="liste2"><center>Donner un rendezvous</center></h1>
<br>
<form action="" method="post">
<select name="nom_specialite" id=""required="required">
<?php
    foreach($rs1 as $r1){
      ?>
      <option></option>
        <option><?=$r1["nom_specialite"]; ?></option>

      <?php
    }
?>
</select>
<select name="nom_patient" id=""required="required">
<?php
    foreach($rs2 as $r2){
      ?>
      <option></option>
        <option><?=$r2["nom_patient"]; ?></option>

      <?php
    }
?>
</select>
<select name="nom_medcin" id=""required="required">
<?php
    foreach($rs3 as $r3){
      ?>
      <option></option>
        <option><?=$r3["nom_medcin"]; ?></option>

      <?php
    }
?>
</select>

<select name="nom_secretaire" id="" required="required">
<?php
    foreach($rs4 as $r4){
      ?>
      <option></option>
        <option><?=$r4["nom_secretaire"]; ?></option>

      <?php
    }
?>
</select>
<select name="date_planning" id=""required="required">
<?php
    foreach($rs5 as $r5){
      ?>
      <option></option>
        <option><?=$r5["date_planning"]; ?></option>

      <?php
    }
?>
</select>
<input type="date"name="date_rendezvous" required="required">
<input type="time"name="heure_rendezvous"  required="required">
<input type="text"name="duree_rendezvous" placeholder="durrée"required="required">
<br>
<br>
<input type="submit" value="enregistrer" name="envoyer">
<br>
<br>
</form>
<button class="liste3" href="listerv.php"> Liste des rendezvous</button>

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