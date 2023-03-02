<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
if(isset( $_POST['send']))
{
     $reqn=$bdd->query('SELECT * from etudiant  ');
     while($data2=$reqn->fetch())
      { 
        $reqm=$bdd->prepare('INSERT INTO etudiant_archive values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $reqm->execute(array($data2['CNE'],
                             $data2['CIN'],
                             $data2['NOM'],
                             $data2['PRENOM'],
                             $data2['LIEU_N'],
                             $data2['DATE_N'],
                             $data2['SEXE'],
                             $data2['TYPE_BAC'],
                             $data2['DATE_BAC'],
                             $data2['TYPE_DIPLOME'],
                             $data2['date_diplome'],
                             $data2['EMAIL'],
                             $data2['ADRESSE'],
                             $data2['TEL'],
                             $data2['PHOTO'],
                             $data2['TYPE_FOR'],
                             $data2['DATE_DEBUT_FOR'],
                             $data2['SPECIALITE_FOR'],
                             $data2['montant_for'],
                             $data2['montant_rest'],
                             0,
                             ));
        $reqm->closeCursor();
      }
      $reqn->closeCursor();
                             
      $reqn=$bdd->query('DELETE from etudiant  ');
      $reqn->closeCursor();
      $reqn=$bdd->prepare('DELETE from authentification  where profil=?  ');
      $reqn->execute(array('e'));
       
     header('Location: liste-archive.php');
    exit;

	}
	?>

