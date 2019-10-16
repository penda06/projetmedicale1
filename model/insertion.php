<?php
$data = new Databases;  
$success_message = '';  
if(isset($_POST["envoyer"]))  
$null=NULL;
{  
     $insert_data = array(  
  
          'nom_service'          =>     mysqli_real_escape_string($data->con, $_POST['nom_service'])  
     );  
     if($data->insert('SERVICE', $insert_data))  
     {  
          $success_message = 'Post Inserted';  
     }  
       
}  

?> 
