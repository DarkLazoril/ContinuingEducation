 <?php 
 session_start();
               if(isset($_POST['env']))
               {
                include_once("DB_connect.php");
                   $req11=$bdd->prepare('SELECT NB_HEURE,COUT FROM matiere where NUM_MATIERE=? ');
                   $req11->execute(array($_POST['matiere']));
                   $data11=$req11->fetch();
                   $req11->closeCursor();
                    $req1=$bdd->prepare('INSERT INTO prof_matiere VALUES(?,?,?,?,?) ');
                    $req1->execute(array($_POST['matiere'],$_POST['cin'],$data11['NB_HEURE'],0,$_SESSION['cin']));
                     $req1->closeCursor();
                     $req=$bdd->prepare('UPDATE professeur set SALAIRE=SALAIRE+? WHERE CIN=? ');
                     $req->execute(array($data11['COUT'],$_POST['cin']));
                     header("Location: detail-professeur.php?cin=".$_POST['cin']);
                       exit();
               }  
               ?>                 