<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
require_once'/var/www/html/git_space/projetmedical1/model/enregistrerrv.php';
$data = new Databases; 
$listerv =$data->ListeRV();
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
    <div class="col-lg-2" >
      <br>
      <br>
      <br>
<ul>
 <a href=""> <li>liste rendezvous</li></a>
 <a href=""> <li>listes services</li></a>
 <a href=""> <li>listes specialite</li></a>
</ul>

    </div>
    <div class="col-lg-10">
   <br>
   <br>
    <h1 class='liste'>
<center>Listes rendezvous</center></h1>
<hr>
<br>
<br>
<br>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th scope="col">id_RV</th>
      <th scope="col">specialite</th>
      <th scope="col">patient</th>
      <th scope="col">medcin</th>
      <th scope="col">secretaire</th>
      <th scope="col">planning</th>
      <th scope="col">date</th>
      <th scope="col">heure</th>
      <th scope="col">Action</th>
    </tr>
</thead> 
<?php

  foreach($listerv as $value){
   
     ?>
        <tr>
   <td><?php echo $value["id_RV"];?></td>
   <td><?php echo$value["nom_specialite"] ?></td>
   <td><?php echo $value["nom_patient"];?></td>
   <td><?php echo $value["nom_medcin"];?></td>
  <td><?php echo $value["date_planning"];?></td>
  <td><?php echo $value["date_rendezvous"];?></td>
  <td><?php echo $value["heure_rendezvous"];?></td>
  <td><?php echo $value["duree_rendezvous"];?></td>
  <td><button><a href=" /git_space/projetmedical1/wiews/supp.php?sup=<?php echo $value['id_RV'] ; ?>">supprimer</a></button><br></td>
  <td> <button><a href="modifier.php?edit=<?php echo $value['id_RV'];?>">modifier</a></button><br></td>

 


      <?php
    }
?> 
    </tr> 
</table>

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