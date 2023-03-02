<?php 
if(isset($_POST['send']))
{
include_once("DB_connect.php");
 $req=$bdd->prepare('UPDATE prof_matiere set NB_HEURE_ENS=NB_HEURE_ENS+3 WHERE NUM_MATIERE=? AND CIN=?');
 $req->execute(array($_POST['num'],$_POST['cin']));
 $req->closeCursor();
 $cin=$_POST['cin'];
 header("Location: detail-professeur.php?cin=".$_POST['cin']);
 exit;

}