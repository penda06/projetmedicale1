<?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
$data = new Databases;  
$patient=$data->select("patient");
$success_message = '';  
 if(isset($_POST["envoyer"]))

 { 
     $nom=$_POST['mail_patient'];
     $query = "SELECT * FROM patient WHERE mail_patient='$nom'";
     $result = mysqli_query($con, $query);
     $con->close();
     if ($result->num_rows == 1){
       echo "ce mail existe" ;  
     } 
     else {

      $insert_data = array(  
           'nom_patient'     =>     mysqli_real_escape_string($data->con, $_POST['nom_patient']) ,
           'prenom_patient'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_patient']),
           'mail_patient'     =>     mysqli_real_escape_string($data->con, $nom) , 
           'tel_patient'          =>     mysqli_real_escape_string($data->con, $_POST['tel_patient']),  
           
           
      );  
      if($data->insert('patient', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      } 
     }      
 }  
 

?>
