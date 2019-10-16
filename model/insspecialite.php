<?php


function select($id,$nom,$table){
require_once'/var/www/html/git_space/firstprojet/wiews/connexion.php';
$sql = "SELECT $id, $nom FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option>".$row[$nom]."</option>" ;
       
    }
  
} else {
    echo "0 results";
}

 
$conn->close;
}

if(isset($_POST["envoyer"]))  
{  
   require_once'/var/www/html/git_space/firstprojet/corps/class.php';
   $data = new Databases;  
     $insert_data = array(  
          'nom_specialite'     =>     mysqli_real_escape_string($data->con, $_POST['nom_specialite']),  
          'id_service'          =>     mysqli_real_escape_string($data->con, $id)  
     );  
     if($data->insert('SPECIALITE', $insert_data))  
     {  
          $success_message = 'Post Inserted';  
     }       
} 







   
     
  






 


?>
