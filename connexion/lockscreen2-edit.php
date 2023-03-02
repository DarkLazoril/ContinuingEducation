<?php
session_start();


	include('DB_connect.php');
	if(isset($_POST['env']))
	{
        

	       
              $req = $bdd->prepare('SELECT login,mdp,profil,cin FROM authentification where cin=?');

			$req->execute(array($_POST['cin']));
			
			$data2 = $req->fetch();
			$req->closeCursor();
			$pass=hash('md5', $_POST['mdp']);
			if($pass==$data2['mdp'] )
			{
				$_SESSION['cin']=$data2['cin'];
				$_SESSION['profil']=$data2['profil'];
				$_SESSION['logged']=1;
				if($data2['profil']=='p')
				header('Location: ../professeur/index.php');
				elseif($data2['profil']=='a')
				header('Location: ../admin/index.php');
				elseif($data2['profil']=='r')
				header('Location: ../responsable/index.php');
				elseif($data2['profil']=='e')
				header('Location: ../etudiant/index.php');
			
			}
			else
			{
				header('Location: erreurlm.php');
				exit;
			}

			
				
			
		}
			?>