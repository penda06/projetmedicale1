<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';

$data = new Databases;  
$success_message = '';  

$rs = $data->select('service');

 if(isset($_POST["envoyer"]))  
 
 {  
      $sv = $data->find('service','nom_service',$_POST['nom_service']);

      foreach($sv as $s){
           $value = $s["id_service"];
      }
   //   var_dump($value);
    // die();
      $insert_data = array(  
       
        'nom_specialite' =>     mysqli_real_escape_string($data->con, $_POST['nom_specialite']) ,  
        'id_service' =>     mysqli_real_escape_string($data->con, $value) ,  
           
      );  
      if($data->insert('specialite', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }   
      
 }  
  ?>