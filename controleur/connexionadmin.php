<?php 


class Condecon{

private $username;
 private $pass;

 private $pageredirection ;

public function __construct()

{
    $this->username=$_POST['username'];
   $this->pass=$_POST['password'];
   
}

public function creationsession(){
session_start();
$_SESSION['nom']=$this->username;

}

public function authentification($pageredirection){
    
$utilisateurs=array(array('','',''));
$this->username = htmlspecialchars($_POST['username']);
$this->pass= htmlspecialchars($_POST['password']);
for($i=0;$i<count($utilisateurs);$i++){
    if($utilisateurs[$i][0]==$this->username){
        for($j=1;$j<count($utilisateurs[$i]);$j++){
            if($utilisateurs[$i][$j]==$this->pass){
                header("location:".$pageredirection."");
            }
            
        }
    }

    else{
        ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "gestionrv.php";</script><?php
    }
}




    }


}

//CONNEXION ADMIN



$connexiadmin=new Condecon();
 $utilisateurs = array(  array('penda06','penda06','penda')

);
// $connexiadmin->authentification("admin.php");
if (isset($_POST['envoyer'])) {
$username=htmlspecialchars($_POST['username']);
$pass=htmlspecialchars($_POST['password']);
$pageredirection="admin.php";
$connexiadmin->authentification($pageredirection);
for($i=0;$i<count($utilisateurs);$i++){
  if($utilisateurs[$i][0]==$username){
      for($j=1;$j<count($utilisateurs[$i]);$j++){
          if($utilisateurs[$i][$j]==$pass){
              header("location:".$pageredirection."");
            }
            
        }
    }
    else{
        ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "gestionrv.php";</script><?php
    }




    }

}




// CONNEXION secretaire

$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
if(!$con)  
{  
     echo 'Database Connection Error ' . mysqli_connect_error($con);  
}  
$query = "SELECT * FROM secretaire";  
$result = mysqli_query($con ,$query ); 
$utilisateurs=array();
while($row = mysqli_fetch_assoc($result))  
{  
    $utilisateurs=$row; 
    // var_dump($utilisateurs);
    $user= $utilisateurs['user_secretaire'];
    $pass=$utilisateurs['password_secretaire'];
    $utilisateurs=array(
     array($user,$user,$pass),
        
    );

    if (isset($_POST['envoyer'])) {
        $username=htmlspecialchars($_POST['username']);
        $pass=$_POST['password'];
        $pageredirection="spacesecretaire.php";
        for($i=0;$i<count($utilisateurs);$i++){
          if($utilisateurs[$i][0]==$username){
              for($j=1;$j<count($utilisateurs[$i]);$j++){
                  if($utilisateurs[$i][$j]==$pass){
                      header("location:".$pageredirection."");
                  }
                  
              }
          }
        }
        
        
        }
}  

  




// CONNEXION medcin

$con = mysqli_connect("localhost", "root", "wade", "rendezvous_medicale");  
if(!$con)  
{  
     echo 'Database Connection Error ' . mysqli_connect_error($con);  
}  
$query = "SELECT * FROM medcin";  
$result = mysqli_query($con ,$query ); 
$utilisateurs=array();
while($row = mysqli_fetch_assoc($result))  
{  
    $utilisateurs=$row; 
    // var_dump($utilisateurs);
    $user= $utilisateurs['user_medcin'];
    $pass=$utilisateurs['password_medcin'];
    $utilisateurs=array(
     array($user,$user,$pass),
        
    );

    if (isset($_POST['envoyer'])) {
        $username=htmlspecialchars($_POST['username']);
        $pass=$_POST['password'];
        $pageredirection="spacemedcin.php";
        for($i=0;$i<count($utilisateurs);$i++){
          if($utilisateurs[$i][0]==$username){
              for($j=1;$j<count($utilisateurs[$i]);$j++){
                  if($utilisateurs[$i][$j]==$pass){
                      header("location:".$pageredirection."");
                  }
                  
              }
          }
        }
        
        
        }
}  

  








      ?>  