<?php session_start();
$_SESSION['logged']=0;
include_once('DB_connect.php');

    if(isset($_POST['env'])){

			
            $pass=hash('md5', $_POST['pwd']);
			$req = $bdd->prepare('SELECT * FROM authentification where login= ? and mdp= ?');
			$req->execute(array($_POST['login'],$pass));
          
           $data = $req->fetch();
                if($data['profil']=='p')
                {


                header('Location: professeur/index.php');
                $_SESSION['cin']=$data['cin'];
                $_SESSION['profil']=$data['profil'];
                $_SESSION['logged']=1;
               }
                elseif($data['profil']=='a')
                {
                	$_SESSION['cin']=$data['cin'];
                $_SESSION['profil']=$data['profil'];
                $_SESSION['logged']=1;
                header('Location: admin/index.php');
                }
                
                elseif($data['profil']=='r')
                {
                	$_SESSION['cin']=$data['cin'];
                $_SESSION['profil']=$data['profil'];
                $_SESSION['logged']=1;
                 header('Location: responsable/index.php');
                }
               
                elseif($data['profil']=='e')
                {
                	$_SESSION['cin']=$data['cin'];
                $_SESSION['profil']=$data['profil'];
                $_SESSION['logged']=1;
                header('Location: etudiant/index.php');
                }
                
               else
				header('Location: connexion/erreurlm.php');
			}
			
			
				
			$req->closeCursor();
		

?>