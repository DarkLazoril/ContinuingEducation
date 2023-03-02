<?php session_start();
if(empty($_SESSION['logged']) || $_SESSION['logged']!=1)
{
    header("Location: ../connexion/page-404.html");
    exit;
    }
    else{
                    
                     if(isset($_POST['env']))
                    {

                    	include_once('DB_connect.php');
                    	$req1=$bdd->prepare('SELECT mdp from authentification where cin=?');
                    	$req1->execute(array($_SESSION['cin']));
                    	$data=$req1->fetch();
                    	$req1->closeCursor();
                    	   $passold=hash('sha512',$_POST['old']);

                    		 if($passold==$data['mdp'] && $_POST['new']==$_POST['new1'])
                    	       {
                                $passnew=hash('sha512',$_POST['new']);
                    		     $req1=$bdd->prepare('UPDATE authentification set login=?,mdp=? WHERE cin=?');
                    		     $req1->execute(array($_POST['login'],$passnew,$_SESSION['cin']));
                    		     $req1->closeCursor();

                                 // ajout f audit : a faire

                                 header('Location: index.php');
                                 exit;
                    	       }
                               else
                               {
                                      header('Location: setting.php');
                                      exit;
                               }

                    	}
                    	

                    	

                    }
                 

?>