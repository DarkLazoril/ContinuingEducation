
<?php 
if(isset($_POST['sub']))
{
$dbhost = "localhost";
$dbname = "fc1";
$dbusername = "root";
$dbpassword = "";
$cne=$_POST['cne'];
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$lieunais=$_POST['lieunais'];
$datnais=$_POST['datenais'];
$sexe=$_POST['sexe'];
$typbac=$_POST['typbac'];
$datbac=$_POST['datbac'];
$typdip=$_POST['typdiplome'];
$email=$_POST['email'];
$adr=$_POST['adresse'];
$tel=$_POST['tel'];
$photo=$_POST['photo'];
$typfor=$_POST['typeformation'];
$datdebuf=$_POST['datdebformation'];
$spe=$_POST['specialitefor'];
$res = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbusername","$dbpassword");
$statement=$res->prepare('INSERT INTO etudiant (CNE,CIN,NOM,PRENOM,LIEU_N,DATE_N,SEXE,TYPE_BAC,DATE_BAC,TYPE_DIPLOME,EMAIL,ADRESSE,TEL,PHOTO,TYPE_FOR,DATE_DEBUT_FOR,SPECIALITE_FOR) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$statement->execute(array($cne,$cin,$nom,$prenom,$lieunais,$datnais,$sexe,$typbac,$datbac,$typdip,$email,$adr,$tel,$photo,$typfor,$datdebuf,$spe));
header("location:form-mask.php");

}

/*$res = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbusername","$dbpassword");
$statement=$res->prepare("INSERT INTO etudiant (CNE,CIN,NOM,PRENOM,LIEU_N,DATE_N,SEXE,TYPE_BAC,DATE_BAC,TYPE_DIPLOME,EMAIL,ADRESSE,TEL,PHOTO,TYPE_FOR,DATE_DEBUT_FOR,SPECIALITE_FOR) VALUES ('$cne','$cin','$nom','$prenom','$lieunais','$datnais','$sexe','$typbac','$datbac','$typdip','$email',\'$adr','$tel','$photo','$typfor','$datdebuf','$spe')");
$statement->execute();*/
/*include 'database.php';
	if(isset($_POST['a'])){
add(['cne'=>$_POST['cne'],'cin'=>$_POST['cin'],'nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'lieunais'=>$_POST['lieunais'],'datenais'=>$_POST['datenais'],'sexe'=>$_POST['sexe'],'typbac'=>$_POST['typbac'],'datbac'=>$_POST['datbac'],'typdiplome'=>$_POST['typdiplome'],'email'=>$_POST['email'],'adresse'=>$_POST['adresse'],'tel'=>$_POST['tel'],'photo'=>$_POST['photo'],'typeformation'=>$_POST['typeformation'],
'datedebformation'=>$_POST['datedebformation'],'specialitefor'=>$_POST['specialitefor']]);
 header("location:liste.php"
	}*/
?>
