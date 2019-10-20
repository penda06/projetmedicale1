
<?php
require_once'/var/www/html/git_space/projetmedical1/corps/class.php';
$data = new Databases;  
$insmed=$data->select('specialite');

$success_message = '';  
 if(isset($_POST["envoyer"]))  
 {  



     $sv = $data->find('specialite','nom_specialite',$_POST['nom_specialite']);

     foreach($sv as $s){
          $value = $s["id_specialite"];
     }
      $insert_data = array(  
           'nom_medcin'     =>     mysqli_real_escape_string($data->con, $_POST['nom_medecin']) ,
           'prenom_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['prenom_medecin']),
           'mail_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['mail_medecin']),
           'tel_medcin'          =>     mysqli_real_escape_string($data->con, $_POST['tel_medecin']),  
           'user_medcin'     =>     mysqli_real_escape_string($data->con, $_POST['user_medecin']),  
           'password_medcin'          =>     mysqli_real_escape_string($data->con, sha1($_POST['password_medecin']))  ,
           'id_specialite'     =>     mysqli_real_escape_string($data->con, $value),  
           
           
      );  
      if($data->insert('medcin', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 

?>