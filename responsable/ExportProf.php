<?php 
session_start();
  include_once('DB_connect.php');  
	//$userCin  should be replaced with $_SESSION['cin']
	$userCin=$_SESSION['cin'];
	
if(isset( $_POST['send']))
{
$filename = "ListeProfesseurs.csv";
        
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

    $req = $bdd->prepare('SELECT * from formation WHERE RESPONSABLE=?');
    $req->execute(array($_SESSION['cin']));
    $data50=$req->fetch();
    $req->closeCursor();

     
                                                     
$sql = "SELECT  p.CIN,p.NOM,p.PRENOM,p.SEXE,p.DATE_N,p.EMAIL,p.ADRESSE,p.TEL,p.DEPART,p.LIEN_BLOG,p.BIOGRAPHIE,p.SALAIRE FROM professeur p,prof_from pf where p.CIN=pf.CIN AND pf.DATE_DEBUT=? AND pf.TYPE=? AND pf.SPECIALITE=? order by p.NOM";

try {
    $stmt = $bdd->prepare($sql);
    $stmt->execute(array($data50['DATE_DEBUT'],$data50['TYPE'],$data50['SPECIALITE']));
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    printErrorMessage($ex->getMessage());
}

$content = array();
$title = array("CIN","NOM","PRENOM","SEXE","DATE_N","EMAIL","ADRESSE","TEL","DEPART","LIEN_BLOG","BIOGRAPHIE","SALAIRE");
foreach ($results as $rs) {
    $row = array();
																														
																																
   
    $row[] = stripslashes($rs["CIN"]);
    $row[] = stripslashes($rs["NOM"]);
    $row[] = stripslashes($rs["PRENOM"]);
    $row[] = stripslashes($rs["SEXE"]);
  
     $row[] = stripslashes($rs["DATE_N"]);
    
  
    $row[] = stripslashes($rs["EMAIL"]);
     $row[] = stripslashes($rs["ADRESSE"]);
    $row[] = stripslashes($rs["TEL"]);
    $row[] = stripslashes($rs["DEPART"]);
     $row[] = stripslashes($rs["LIEN_BLOG"]);

    $row[] = stripslashes($rs["BIOGRAPHIE"]);
     $row[] = stripslashes($rs["SALAIRE"]);
  
    
    $content[] = $row;
    
}

$output = fopen('php://output', 'w');
fputcsv($output, $title);
foreach ($content as $con) {
    fputcsv($output, $con);
}

       
    // header('Location: liste-Professeur.php');
    // exit;

	}
	?>

