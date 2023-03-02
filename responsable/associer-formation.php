<?php 
session_start();
include_once('DB_connect.php');
if(isset($_POST['env']))
{
	$req=$bdd->prepare('SELECT * FROM formation where RESPONSABLE=?');
	$req->execute(array($_SESSION['cin']));
	$data=$req->fetch();
	$req->closeCursor();
  $req=$bdd->prepare('INSERT INTO prof_from VALUES(?,?,?,?)');
  $req->execute(array($_POST['cin'],$data['DATE_DEBUT'],$data['TYPE'],$data['SPECIALITE']));
  $req->closeCursor();
  header("Location: liste-Professeur.php");
  exit;
 
}