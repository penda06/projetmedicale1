<?php
function selection($id,$nom,$table){
require_once'/var/www/html/git_space/firstprojet/wiews/connexion.php';

$sql = "SELECT $id, $nom FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option>".$row[$id]."</option>";
    }
  
} else {
    echo "0 results";
}

$conn->close;
}

require_once'/var/www/html/git_space/firstprojet/corps/class.php';
$data = new Databases;  
$success_message = '';  
 if(isset($_POST["envoyer"]))  
 {  
      $insert_data = array(  
           'nom_patient'     =>     mysqli_real_escape_string($data->con, $_POST['nom_patient']) ,
           'prenom_patient'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_patient']),
           'mail_patient'     =>     mysqli_real_escape_string($data->con, $_POST['mail_patient']) , 
           'tel_patient'          =>     mysqli_real_escape_string($data->con, $_POST['tel_patient']),  
           'id_admin'          =>     mysqli_real_escape_string($data->con, $_POST['selection2'])  
           
      );  
      if($data->insert('patient', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>
