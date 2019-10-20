<?php

require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
;
$data = new Databases;  
$success_message = '';  
 if(isset($_POST["envoyer"]))  
 
 {  
      $insert_data = array(  
      'nom_service' =>  mysqlis_real_escape_string($data->con, $_POST['nom_service']) ,   
           
      );  
      if($data->insert('service', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
  ?>