<?php 
include_once('config.php');
try 
  { 
     $bdd = new PDO('mysql:host=db530727422.db.1and1.com;dbname='.$dbname,$user,$password);
  } 
  catch (Exception $e) 
  {       
        die('Erreur : ' . $e->getMessage()); 
  } 

  ?>