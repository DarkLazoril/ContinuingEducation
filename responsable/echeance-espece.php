<?php include_once('DB_connect.php');
 session_start();
 if(isset($_POST['env']))
           {
            $req6=$bdd->prepare('UPDATE etudiant set montant_rest=montant_rest-? WHERE CIN=?');
            $req6->execute(array($_POST['montant'],
                                 $_POST['cin']));
            $req6->closeCursor();
           $req5=$bdd->prepare('INSERT INTO  echeance (montant,type,cin) Values (?,?,?)');
            $req5->execute(array($_POST['montant'],
                                 'espece',
                                 $_POST['cin']));
            $req5->closeCursor();

             // determine quel echeance 
            $req5=$bdd->prepare('SELECT COUNT(*) as ech from paiement where cin=?');
            $req5->execute(array($_POST['cin']));
            $data55=$req5->fetch();    
            $req5->closeCursor();

             $req7=$bdd->prepare('INSERT INTO  paiement (montant,date_paiement,type,cin,type_echeance) Values (?,?,?,?,?)');
            $req7->execute(array($_POST['montant'],
                                 date('Y-m-d'),
                                 'espece',
                                 $_POST['cin'],
                                 $data55['ech']+1));
            $req7->closeCursor();
            
            //$userCin  should be replaced with $_SESSION['cin']
             $userCin=$_SESSION['cin'];
  
             $req9=$bdd->prepare('SELECT NOM FROM professeur WHERE CIN=?');
             $req9->execute(array($userCin));
             $data9=$req9->fetch();
             $username=$data9['NOM'];
             $req9->closeCursor();


             //recuperation du nom et prenom d l'etudiant qui a paye
            $req11=$bdd->prepare('SELECT NOM,PRENOM FROM etudiant WHERE CIN=?');
             $req11->execute(array($_POST['cin']));
             $data11=$req11->fetch();
             $nomComplet=$data11['NOM'].' '.$data11['PRENOM'];
             $req11->closeCursor();

             // operation ajoute au table audit

             $operation=' a recu '.$_POST['montant'].' DH espece paye par  :  '.$nomComplet;

             $req10=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
             $req10->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
             $req10->closeCursor();


 header('location: liste-Etudiant.php ');
               exit;
               }
               ?>