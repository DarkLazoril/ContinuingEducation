<?php 
include_once("DB_connect.php");
$req=$bdd->prepare('DELETE FROM prof_matiere WHERE NUM_MATIERE=? AND CIN=? ');
$req->execute(array($_GET['num'],$_GET['cin']));
// cout
 $req11=$bdd->prepare('SELECT COUT FROM matiere where NUM_MATIERE=? ');
                   $req11->execute(array($_GET['num']));
                   $data11=$req11->fetch();
 // salaire
 $req=$bdd->prepare('UPDATE professeur set SALAIRE=SALAIRE-? WHERE CIN=? ');
 $req->execute(array($data11['COUT'],$_GET['cin']));
header("Location:detail-professeur.php?cin=".$_GET['cin']);
exit();
?>