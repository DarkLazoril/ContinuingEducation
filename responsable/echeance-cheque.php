<?php include_once('DB_connect.php');
 session_start();
 if(isset($_POST['env']) && isset($_FILES["scan"]["tmp_name"]))
           {
            // traitement upload photo
       $dest_dir="../uploads_photo/";
        $nom_file=$dest_dir.basename($_FILES['scan']['name']);
        $temp_name=$_FILES['scan']['tmp_name'];    

        if(!is_uploaded_file($temp_name))
          exit("can't upload the file");
     
        if(!move_uploaded_file($temp_name, $nom_file))
          echo "file can't be uploaded to the given destination";

            // mise a jour du montant a payer
            $req6=$bdd->prepare('UPDATE etudiant set montant_rest=montant_rest-? WHERE CIN=?');
            $req6->execute(array($_POST['montant'],
                                 $_POST['cin']));
            $req6->closeCursor();
            // innser echeance
            $req5=$bdd->prepare('INSERT INTO  echeance (montant,type,cin) Values (?,?,?)');
            $req5->execute(array($_POST['montant'],
                                 'par cheque',
                                 $_POST['cin']));
             $req5->closeCursor();
             // determine quel echeance 
            $req5=$bdd->prepare('SELECT COUNT(*) as ech from paiement where cin=?');
            $req5->execute(array($_POST['cin']));
            $data55=$req5->fetch();    
            $req5->closeCursor();

            // inser paiement
           
             $req7=$bdd->prepare('INSERT INTO  paiement (montant,date_paiement,type,cin,type_echeance) Values (?,?,?,?,?)');
            $req7->execute(array($_POST['montant'],
                                 date('Y-m-d'),
                                 'par cheque',
                                 $_POST['cin'],
                                 $data55['ech']+1));
            $req7->closeCursor();
            //recuperation du num_paiement pour ce cheque de la table paiement
            $req81=$bdd->prepare('SELECT num_paiement FROM paiement WHERE montant=? AND date_paiement=? AND type=? AND cin=? ');
            $req81->execute(array($_POST['montant'],
                                 date('Y-m-d'),
                                 'par cheque',
                                 $_POST['cin']));
            $data81=$req81->fetch();
            $num_pai= $data81['num_paiement'];
            $req81->closeCursor();
            //insertion dans la table cheque 
            $req82=$bdd->prepare('INSERT INTO cheque (num_cheque,banque,scan,proprietaire,num_paiement) VALUES (?,?,?,?,?)');
            $req82->execute(array($_POST['num'],
                                  $_POST['banque'],
                                  $nom_file,
                                  $_POST['propr'],
                                  $num_pai));
            $req82->closeCursor();
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

             $operation=' a recu '.$_POST['montant'].' DH par cheque paye par  :  '.$nomComplet;

             $req10=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
             $req10->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
             $req10->closeCursor();

           header('location: liste-Etudiant.php ');
               exit;
            
            
          }
          ?>