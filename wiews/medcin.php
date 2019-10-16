<?php

require_once'/var/www/html/git_space/firstprojet/corps/class.php';
require_once'/var/www/html/git_space/firstprojet/model/insmedcin.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>medecin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<form action="" class="formulaire" method="post">

  <div class="row">
    <div class="col-lg-6" >
<img src="images/medecin.jpg" alt="" class="container">
    </div>
    <div class="col-lg-6">
    <fieldset>
     <div class="ajoutmedcin"> 
  <label for="medecin" class="mr-sm-2">Nom medcin</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="nom_medecin">
  <br>
  <label for="medecin" class="mr-sm-2">Prenom:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="prenom_medecin">
  <br>
  <label for="medecin" class="mr-sm-2">Mail:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="mail_medecin">
  <br>
  <label for="medecin" class="mr-sm-2">Tel:</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="tel_medecin">
  <br>
  <label for="medecin" class="mr-sm-2">User</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="user_medecin">
  <br>
  
  <label for="medecin" class="mr-sm-2">password</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="medecin" name="password_medecin">
 <br>
 <label for="specialite" class="mr-sm-2">id specialite</label>
  <select name="selection" id="">
    <option value="">
  <?php
  echo selection("id_specialite","nom_specialite","SPECIALITE");?>
  </option>
</select>
<br>
<input type="submit" name="envoyer" value="send">
  </fieldset>

    </div>

  </div>
</div>

</form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
</body>
</html>