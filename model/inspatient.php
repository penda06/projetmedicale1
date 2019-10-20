<?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$data = new Databases;  
$success_message = '';  
 if(isset($_POST["envoyer"]))  
 {  
      $insert_data = array(  
           'nom_patient'     =>     mysqli_real_escape_string($data->con, $_POST['nom_patient']) ,
           'prenom_patient'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_patient']),
           'mail_patient'     =>     mysqli_real_escape_string($data->con, $_POST['mail_patient']) , 
           'tel_patient'          =>     mysqli_real_escape_string($data->con, $_POST['tel_patient']),  
           
           
      );  
      if($data->insert('patient', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>
