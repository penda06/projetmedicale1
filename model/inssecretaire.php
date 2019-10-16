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
           'nom_secretaire'     =>     mysqli_real_escape_string($data->con, $_POST['nom_secretaire']) ,
           'prenom_secretaire'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_secretaire']),
           'tel_secretaire'          =>     mysqli_real_escape_string($data->con, $_POST['tel_secretaire']),  
           'user_secretaire'     =>     mysqli_real_escape_string($data->con, sha1($_POST['user_secretaire'])),  
           'password_secretaire'          =>     mysqli_real_escape_string($data->con, $_POST['password_secretaire'])  ,
           'id_service'     =>     mysqli_real_escape_string($data->con, $_POST['selection']),  
           
           
      );  
      if($data->insert('secretaire', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>
