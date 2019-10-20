<?php

 require_once'/var/www/html/git_space/projetmedical1/corps/class.php'; 
 $data = new Databases; 
$patient =$data-> affichenom("patient","rendezvous", "rendezvous.id_patient","patient.id_patient");
$specialite =$data-> affichenom("specialite","rendezvous", "rendezvous.id_specialite","specialite.id_specialite");
$medcin =$data-> affichenom("medcin","rendezvous", "rendezvous.id_medcin","medcin.id_medcin");
$secretaire =$data-> affichenom("secretaire","rendezvous", "rendezvous.id_secretaire","secretaire.id_secretaire");
$planning=$data-> affichenom("planning","rendezvous", "rendezvous.id_planning","planning.id_planning");



$listerv =$data->select('rendezvous');
$rs1=$data->select('specialite');
$rs2=$data->select('patient');
$rs3=$data->select('medcin');
$rs4=$data->select('secretaire');
$rs5=$data->select('planning');

$success_message = '';  
 if(isset($_POST["envoyer"]))  
 {  
     
     $sv1 = $data->find('specialite','nom_specialite',$_POST['nom_specialite']);
     $sv2 = $data->find('patient','nom_patient',$_POST['nom_patient']);
     $sv3 = $data->find('medcin','nom_medcin',$_POST['nom_medcin']);
     $sv4 = $data->find('secretaire','nom_secretaire',$_POST['nom_secretaire']);
     $sv5 = $data->find('planning','date_planning',$_POST['date_planning']);

     //specialite
     foreach($sv1 as $s1){
          $value1 = $s1["id_specialite"];
     }
     // //patient
     foreach($sv2 as $s2){
          $value2 = $s2["id_patient"];
     }
     // //medecin
     foreach($sv3 as $s3){
          $value3 = $s3["id_medcin"];
     }
     // //secretaire
     foreach($sv4 as $s4){
          $value4 = $s4["id_secretaire"];
     }
     // //planning
     foreach($sv5 as $s5){
          $value5 = $s5["id_planning"];
     }

      $insert_data = array(  
           'id_specialite'     =>     mysqli_real_escape_string($data->con, $value1) ,
           'id_patient'          =>     mysqli_real_escape_string($data->con, $value2),
           'id_medcin'          =>     mysqli_real_escape_string($data->con, $value3),
           'id_secretaire'          =>     mysqli_real_escape_string($data->con, $value4),  
           'id_planning'     =>     mysqli_real_escape_string($data->con, $value5),  
           'date_rendezvous'          =>     mysqli_real_escape_string($data->con, $_POST['date_rendezvous'] )  ,
           'heure_rendezvous'     =>     mysqli_real_escape_string($data->con,  $_POST['heure_rendezvous']),  
           'duree_rendezvous'     =>     mysqli_real_escape_string($data->con,  $_POST['duree_rendezvous']),  
           
           
      );  
      if($data->insert('rendezvous', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  
 




?>