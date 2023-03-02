<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
if(isset( $_POST['send']))
{
$filename = "ListeEtudiants.csv";
        
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");
  
	$req = $bdd->prepare('SELECT * from formation WHERE RESPONSABLE=?');
	$req->execute(array($_SESSION['cin']));
	$data50=$req->fetch();
	$req->closeCursor();


                                                     
$sql = "SELECT CNE,CIN,NOM,PRENOM,LIEU_N,DATE_N,SEXE,TYPE_BAC,DATE_BAC,TYPE_DIPLOME,date_diplome,EMAIL,ADRESSE,TEL,TYPE_FOR,DATE_DEBUT_FOR,SPECIALITE_FOR,montant_for,montant_rest FROM etudiant WHERE DATE_DEBUT_FOR=? AND TYPE_FOR=? AND SPECIALITE_FOR=? order by NOM";

try {
    $stmt = $bdd->prepare($sql);
    $stmt->execute(array($data50['DATE_DEBUT'],$data50['TYPE'],$data50['SPECIALITE']));
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    printErrorMessage($ex->getMessage());
}

$content = array();
$title = array("CNE", "CIN", "NOM", "PRENOM", "LIEU_N", "DATE_N", "SEXE", "TYPE_BAC", "DATE_BAC", "TYPE_DIPLOME", "date_diplome", "EMAIL","ADRESSE", "TEL", "TYPE_FOR", "DATE_DEBUT_FOR", "SPECIALITE_FOR", "montant_for", "montant_rest");
foreach ($results as $rs) {
    $row = array();
																														
																																
    $row[] = stripslashes($rs["CNE"]);
    $row[] = stripslashes($rs["CIN"]);
    $row[] = stripslashes($rs["NOM"]);
    $row[] = stripslashes($rs["PRENOM"]);
    $row[] = stripslashes($rs["LIEU_N"]);
     $row[] = stripslashes($rs["DATE_N"]);
    $row[] = stripslashes($rs["SEXE"]);
    $row[] = stripslashes($rs["DATE_BAC"]);
     $row[] = stripslashes($rs["TYPE_DIPLOME"]);
    $row[] = stripslashes($rs["date_diplome"]);
    $row[] = stripslashes($rs["EMAIL"]);
     $row[] = stripslashes($rs["ADRESSE"]);
    $row[] = stripslashes($rs["TEL"]);
    $row[] = stripslashes($rs["TYPE_FOR"]);
     $row[] = stripslashes($rs["DATE_DEBUT_FOR"]);
    $row[] = stripslashes($rs["SPECIALITE_FOR"]);
    $row[] = stripslashes($rs["montant_for"]);
     $row[] = stripslashes($rs["montant_rest"]);
  
    
    $content[] = $row;
    
}

$output = fopen('php://output', 'w');
fputcsv($output, $title);
foreach ($content as $con) {
    fputcsv($output, $con);
}

       
    // header('Location: liste-Etudiant.php');
    // exit;

	}
	?>

