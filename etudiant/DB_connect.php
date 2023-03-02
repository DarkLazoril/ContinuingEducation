<?php 
include_once('config.php');
try 
  { 
     $bdd = new PDO('mysql:host=db530727422.db.1and1.com;dbname=db530727422','dbo530727422','fc2@016');
  } 
  catch (Exception $e) 
  {       
        die('Erreur : ' . $e->getMessage()); 
  } 

  ?>