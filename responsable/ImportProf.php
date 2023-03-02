<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
if(isset( $_POST['send']))
{
    $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['fich']['name']);
        $temp_name=$_FILES['fich']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          $i="can't upload the file";
     
        if(!move_uploaded_file($temp_name, $nom_file))
          $i="file can't be uploaded to the given destination";






$row = 0;
if (($handle = fopen($nom_file, "r")) !== FALSE) {
while (($datacsv = fgetcsv($handle, 1000, ",","'")) !== FALSE) {
if ($datacsv[0]) {
try {
$sql = "INSERT INTO  professeur(CIN,NOM,PRENOM,SEXE,DATE_N,EMAIL,ADRESSE,TEL,DEPART,LIEN_BLOG,BIOGRAPHIE,SALAIRE) values (?,?,?,?,?,?,?,?,?,?,?,?) ";
$stmt = $bdd->prepare($sql);
$stmt->execute(array($datacsv[0],$datacsv[1],$datacsv[2],$datacsv[3],$datacsv[4],$datacsv[5],$datacsv[6],$datacsv[7],$datacsv[8],$datacsv[9],$datacsv[10],$datacsv[11]));
// recupeartin du form
  $req = $bdd->prepare('SELECT * from formation WHERE RESPONSABLE=?');
  $req->execute(array($_SESSION['cin']));
  $data2=$req->fetch();
  $req->closeCursor();
// insertion dan form_prof

  $req = $bdd->prepare('INSERT into prof_from values(?,?,?,?)');
  $req->execute(array($datacsv[0],$data2['DATE_DEBUT'],$data2['TYPE'],$data2['SPECIALITE']));
  $req->closeCursor();
  // association de login et mot de passe:
   $pass=hash('md5', 123456);
        $req=$bdd->prepare('INSERT INTO authentification(login,mdp,profil,cin) VALUES(?,?,?,?)');
     $req->execute(array($datacsv[1],$pass,'p',$datacsv[1]));
    $req->closeCursor();
    //$userCin  should be replaced with $_SESSION['cin']
  $userCin=$_SESSION['cin'];
  
  $req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
  $req1->execute(array($userCin));
  $data=$req1->fetch();
  $username=$data['nom'];
  $req1->closeCursor();
     // operation ajoute au table audit

  $operation=' a ajouter  professeur :  '.$datacsv[1].' '.$datacsv[2];

  $req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
  $req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
  $req2->closeCursor();


} catch (Exception $ex) {
echo($ex->getMessage());
}
}

}
$stmt->closeCursor();
fclose($handle);
}
 header('Location: liste-Professeur.php');
   exit;
 
	}
	?>

