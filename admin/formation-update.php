<?php include_once('DB_connect.php');
if(isset($_POST['update']))
{    
	

	// insertion dans la table formation
	$req=$bdd->prepare('UPDATE formation SET DATE_DEBUT=?,DATE_FIN=?,SPECIALITE=?,RESPONSABLE=?,PRE_REQUIS=?,LIEN_WEB=? WHERE DATE_DEBUT=? AND SPECIALITE=? AND TYPE=?');
	$req->execute(array($_POST['datedebut'],
		                $_POST['datefin'],
		                $_POST['specialite'],
		                $_POST['responsable'],
		                $_POST['prerequis'],
		                $_POST['lien'],
		                $_POST['datedebut-old'],
		                $_POST['specialite-old'],
		                $_POST['type']));
	$req->closeCursor();
	$req=$bdd->prepare('UPDATE authentification set profil=? where cin=?');
	$req->execute(array('r',$_POST['responsable']));
	$req->closeCursor();
	if($_POST['type']=='dca')
	{
	header('location: liste-DCA.php ');
               exit;
     }
     else{
     header('location: liste-DCESS.php ');
         exit;
     }
	}
	?>