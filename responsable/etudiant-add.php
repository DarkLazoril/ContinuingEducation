<?php 

include_once('DB_connect.php');
session_start();
if(isset($_POST['env']) )
{    
	// traitement upload photo
	   $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['photo']['name']);
        $temp_name=$_FILES['photo']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          $i="can't upload the file";
     
        if(!move_uploaded_file($temp_name, $nom_file))
           $i="file can't be uploaded to the given destination";


	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];

	// recuperation du nom du responsable qui a ajoute l'etudiant
	$req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
	$req1->execute(array($userCin));
	$data=$req1->fetch();
	$username=$data['nom'];
	$req1->closeCursor();
 
	// operation ajoute au table audit

	$operation=' a ajoute un nouveau etudiant :  '.$_POST['nom'].' '. $_POST['prenom'];

	$req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
	$req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
	$req2->closeCursor();

	// insertion dans la table etudiant
	$req=$bdd->prepare('INSERT INTO etudiant VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$req->execute(array($_POST['cne'],
		                $_POST['cin'],
		                $_POST['nom'],
		                $_POST['prenom'],
		                $_POST['ville'],
		                $_POST['naissance'],
		                $_POST['sexe'],
		                $_POST['bactype'],
		                $_POST['datebac'],
		                $_POST['diplome'],
		                $_POST['datediplome'],
		                $_POST['email'],
		                $_POST['adresse'],
		                $_POST['tel'],
		                $nom_file,
		                $_POST['type'],
		                $_POST['datedebut'],
		                $_POST['specialite'],
		                $_POST['montant'],
		                $_POST['montant'] ));
	$req->closeCursor();


      // association de login et mot de passe:
	$pass=hash('md5', '123456');
        $req=$bdd->prepare('INSERT INTO authentification(login,mdp,profil,cin) VALUES(?,?,?,?)');
	   $req->execute(array($_POST['nom'],$pass,'e',$_POST['cin']));
		$req->closeCursor();
  header('Location: liste-Etudiant.php');
  exit;

}
  
