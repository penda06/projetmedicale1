
<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
require_once'/var/www/html/git_space/projetmedical1/model/inspatient.php';


?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="gestionrv.php">deconnexion</a>
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
     <div class="ajoutpatient"> 
  <label for="patient" class="mr-sm-2">Nom </label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="patient" name="nom_patient"  name="password_medecin">
  <br>
  <label for="patient" class="mr-sm-2">Prenom </label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="patient" name="prenom_patient"  name="password_medecin">
  <br>
  <label for="patient" class="mr-sm-2">Mail </label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="patient" name="mail_patient"  name="password_medecin">
  <br>
  <label for="patient" class="mr-sm-2">Tel:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="patient" name="tel_patient"  name="password_medecin">
  <br>
  <br>
  <button type="submit" class="btn btn-primary mb-2" name="envoyer">Submit</button>
  </fieldset>

    </div>

  </div>
</div>

</form>


