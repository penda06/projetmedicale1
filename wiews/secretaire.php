<?php
require_once'/var/www/html/git_space/projetmedical1/model/inssecretaire.php';
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>secretaire</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">deconnexion</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">admin</a></li>
     
    </ul>
  </div>
</nav>


<form action="" class="formulaire" method="post">

  <div class="row">
    <div class="col-lg-6" >
<img src="images/medecin.jpg" alt="" class="container">
    </div>
    <div class="col-lg-6">

    <fieldset>
      <br>
      <br>
      <br>
     <div class="ajoutsecretaire"> 
  <label for="secretaire" class="mr-sm-2">Nom </label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="secretaire" name="nom_secretaire" required="required">
  <br>
  <label for="secretaire" class="mr-sm-2">Prenom </label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="secretaire" name="prenom_secretaire"required="required>
  <br>
  <label for="secretaire" class="mr-sm-2">Tel:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="secretaire" name="tel_secretaire"required="required>
  <br>
  <label for="secretaire" class="mr-sm-2">user:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="secretaire" name="user_secretaire"required="required>
  <br>
  <label for="secretaire" class="mr-sm-2">password:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="secretaire" name="password_secretaire"required="required>
  <label for="specialite" class="mr-sm-2">id service</label>
  <select name="nom_service" id="" value="">
<?php
    foreach($inssecretaire as $value){
      ?>
        <option><?=$value["nom_service"]; ?></option>

      <?php
    }
?>
    </select>
<br>
<br>
  <button type="submit" class="btn btn-primary mb-2" name="envoyer">Submit</button>
  </fieldset>

    </div>
  </div>
</div>

</form>
<?php

require_once'/opt/lampp/htdocs/projetmedicale/model/inssecretaire.php';

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
</body>
</html>