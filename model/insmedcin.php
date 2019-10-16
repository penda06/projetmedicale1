<?php
function selection($id,$nom,$table){
require_once'/var/www/html/git_space/firstprojet/wiews/connexion.php';

$sql = "SELECT $id, $nom FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option>".$row[$nom]."</option>";
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
           'nom_medcin'     =>     mysqli_real_escape_string($data->con, $_POST['nom_medcin']) ,
           'prenom_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_medecin']),
           'mail_medcin'     =>     mysqli_real_escape_string($data->con, $_POST['mail_medecin']) , 
           'tel_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['tel_medcin']),  
           'user_medcin'     =>     mysqli_real_escape_string($data->con, sha1($_POST['user_medecin'])),  
           'password_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['password_medecin'])  ,
           'id_specialite'     =>     mysqli_real_escape_string($data->con, $_row[$id]),  
           'id_admin'          =>     mysqli_real_escape_string($data->con, $_POST['selection2'])  
           
      );  
      if($data->insert('medcin', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>
