<?php 

require_once'/opt/lampp/htdocs/projetmedicale/wiews/connexion.php';
// On récupère tout le contenu de la table secretaire
// On récupère tout le contenu de la table jeux_video
$reponse = $conn->query('SELECT * FROM secretaire');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    
 $user_secretaire=$donnees['user_secretaire'];
 $password_secretaire=$donnees['password_secretaire'];

}

$sdl=
$utilisateurs = array( 
 array( $user_secretaire, $user_secretaire,$password_secretaire),
array('penda.bbalde@gmail.com','penda.bbalde@gmail.com','penda'),
array('bniass@gmail.com','bniass@gmail.com','Baye'),

);
    if( isset($_POST['envoyer'])) {
    
        $login = htmlspecialchars($_POST['user_secretaire']);
        $mdp = sha1($_POST['password_secretaire']);
        for($i=0;$i<count($utilisateurs);$i++){
            if($utilisateurs[$i][0]==$login){
                for($j=1;$j<count($utilisateurs[$i]);$j++){
                    if($utilisateurs[$i][$j]==$mdp){
                        header('location:spacesecretaire.php');
                    }
                    
                }
            }

            else{
                ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "gestionrv.php";</script><?php
            }
        }
                
    }

      ?>  