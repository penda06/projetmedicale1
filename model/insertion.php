<?php


require_once'/var/www/html/git_space/projetmedical1/corps/class.php';

$data = new Databases;  
$ver=$data->select("service");
$success_message = '';  

 if(isset($_POST["envoyer"]))  
 
 {
  $service=   $_POST['nom_service'] ;  

      $insert_data = array(  
       
        'nom_service' =>     mysqli_real_escape_string($data->con, $service) ,  
          
           
      );  
      if($data->insert('service', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }   
      
 }  
  ?>