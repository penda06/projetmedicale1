<?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$data = new Databases;
$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
 if(isset($_POST["envoyer"]))  
 
 {    
$nom=$_POST['nom_service'];

$query = "SELECT * FROM service WHERE nom_service='$nom'";
$result =$result = mysqli_query($con, $query);
$con->close();
if ($result->num_rows == 1){
  echo "ce service existe" ;  
}
else {
     echo $nom; 
     $success_message = '';   
 $insert_data = array(  
    
     'nom_service' =>     mysqli_real_escape_string($data->con, $nom) ,  
               
                
           );  
           if($data->insert('service', $insert_data))  
           {  
                $success_message = 'Post Inserted';  
   
} 
}
}
  ?>
  