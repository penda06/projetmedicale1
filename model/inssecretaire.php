<?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$data = new Databases;  
$success_message = '';  
$inssecretaire =$data->select('service');

 if(isset($_POST["envoyer"]))  

 {  

     $sv = $data->find('service','nom_service',$_POST['nom_service']);

     foreach($sv as $s){
          $value = $s["id_service"];
     }

      $insert_data = array(  
           'nom_secretaire'     =>     mysqli_real_escape_string($data->con, $_POST['nom_secretaire']) ,
           'prenom_secretaire'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_secretaire']),
           'tel_secretaire'          =>     mysqli_real_escape_string($data->con, $_POST['tel_secretaire']),  
           'user_secretaire'     =>     mysqli_real_escape_string($data->con, $_POST['user_secretaire']),  
           'password_secretaire'          =>     mysqli_real_escape_string($data->con, sha1($_POST['password_secretaire']) ) ,
           'id_service'     =>     mysqli_real_escape_string($data->con, $value),  
           
           
      );  
      if($data->insert('secretaire', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>
