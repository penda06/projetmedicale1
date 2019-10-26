<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
$data = new Databases;  
$success_message = '';  

$rs = $data->select('service');

 if(isset($_POST["envoyer"]))  
 
 {  
     $nom=$_POST['nom_specialite'];
      $sv = $data->find('service','nom_service',$_POST['nom_service']);

      foreach($sv as $s){
           $value = $s["id_service"];
      }
      $query = "SELECT * FROM specialite WHERE nom_specialite='$nom'";
      $result =$result = mysqli_query($con, $query);
      $con->close();
      if ($result->num_rows == 1){
        echo "ce service existe" ;  
      }
    else {

      $insert_data = array(  
       
        'nom_specialite' =>     mysqli_real_escape_string($data->con, $nom) ,  
        'id_service' =>     mysqli_real_escape_string($data->con, $value) ,  
           
      );  
      if($data->insert('specialite', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }   
     } 
 }  
  ?>