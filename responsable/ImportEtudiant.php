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
$sql = "INSERT INTO  etudiant(CNE,CIN,NOM,PRENOM,LIEU_N,DATE_N,SEXE,TYPE_BAC,DATE_BAC,TYPE_DIPLOME,date_diplome,EMAIL,ADRESSE,TEL,TYPE_FOR,DATE_DEBUT_FOR,SPECIALITE_FOR,montant_for,montant_rest) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
$stmt = $bdd->prepare($sql);
$stmt->execute(array($datacsv[0],$datacsv[1],$datacsv[2],$datacsv[3],$datacsv[4],$datacsv[5],$datacsv[6],$datacsv[7],$datacsv[8],$datacsv[9],$datacsv[10],$datacsv[11],$datacsv[12],$datacsv[13],$datacsv[14],$datacsv[15],$datacsv[16],$datacsv[17],$datacsv[18]));

// recuperation du nom du responsable qui a ajoute l'etudiant
  $req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
  $req1->execute(array($userCin));
  $data=$req1->fetch();
  $username=$data['nom'];
  $req1->closeCursor();
  $operation=' a ajoute un nouveau etudiant :  '.$datacsv[2].' '. $datacsv[3];

  $req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
  $req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
  $req2->closeCursor();

  $pass=hash('md5', '123456');
        $req=$bdd->prepare('INSERT INTO authentification(login,mdp,profil,cin) VALUES(?,?,?,?)');
     $req->execute(array($datacsv[2],$pass,'e',$datacsv[1]));
    $req->closeCursor();


} catch (Exception $ex) {
echo($ex->getMessage());
}
}
}
fclose($handle);
}
 header('Location: liste-Etudiant.php');
   exit;
 
	}
	?>

