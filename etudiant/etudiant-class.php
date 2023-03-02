
<?php

class Etudiant
{
	private $CNE;
	private $CIN;
	private $NOM;
	private $PRENOM;
	private $LIEU_N;
	private $DATE_N;
	private $SEXE;
	private $TYPE_BAC;
	private $DATE_BAC;
	private $TYPE_DIPLOME;
	private $EMAIL;
	private $ADRESSE;
	private  $TEL;
	private $PHOTO;
	private $TYPE_FOR;
	private $DATE_DEBUT_FOR;
	private $SPECIALITE_FOR;
	
	function __construct($id)
	{
		include_once('DB_connect.php');
		$req = $bdd->prepare('SELECT * FROM etudiant WHERE CIN= ? ');
        $req->execute(array($id));
        while ($donnees = $req->fetch())
{
	  $this->CNE=$donnees['CNE'];
      $this->CIN=$donnees['CIN'];
      $this->NOM=$donnees['NOM'];
      $this->PRENOM=$donnees['PRENOM'];
      $this->LIEU_N=$donnees['LIEU_N'];
      $this->DATE_N=$donnees['DATE_N'];
      $this->SEXE=$donnees['SEXE'];
      $this->TYPE_BAC=$donnees['TYPE_BAC'];
      $this->TYPE_DIPLOME=$donnees['TYPE_DIPLOME'];
      $this->EMAIL=$donnees['EMAIL'];
      $this->ADRESSE=$donnees['ADRESSE'];
      $this->TEL=$donnees['TEL'];
      $this->PHOTO=$donnees['PHOTO'];
      $this->TYPE_FOR=$donnees['TYPE_FOR'];
      $this->DATE_BAC=$donnees['DATE_BAC'];
      $this->DATE_DEBUT_FOR=$donnees['DATE_DEBUT_FOR'];
      $this->SPECIALITE_FOR=$donnees['SPECIALITE_FOR'];    
	  	 
}

	}
	 public function getcne()
   {
        return $this->CNE;
   }
   public function getcin()
   {
        return $this->CIN;
   }
    public function getnom()
   {
        return $this->NOM;
   }
    public function getprenom()
   {
        return $this->PRENOM;
   }
    public function getlieun()
   {
        return $this->LIEU_N;
   }
    public function getdaten()
   {
        return $this->DATE_N;
   }
    public function getsexe()
   {
        return $this->SEXE;
   }
    public function gettypebac()
   {
        return $this->TYPE_BAC;
   }
    public function getdatebac()
   {
        return $this->DATE_BAC;
   }
    public function gettypediplome()
   {
        return $this->TYPE_DIPLOME;
   }
    public function getemail()
   {
        return $this->EMAIL;
   }
    public function getadresse()
   {
        return $this->ADRESSE;
   }
    public function gettel()
   {
        return $this->TEL;
   }
    public function getphoto()
   {
        return $this->PHOTO;
   }
    public function gettypefor()
   {
        return $this->TYPE_FOR;
   }
    public function getdatedebutfor()
   {
        return $this->DATE_DEBUT_FOR;
   }
    public function getspecialitefor()
   {
        return $this->SPECIALITE_FOR;
   }
   public function getmatieres()
   { 
   	require("PDO.php");
   	
$req = $bdd->prepare("SELECT M.NOM_MODULE, T.NOM_MATIERE,T.NB_HEURE,P.NOM FROM module M , matiere T,professeur P ,prof_matiere PT,form_module WHERE M.SEMESTRE=1 and form_module.TYPE=? and form_module.SPECIALITE=? and form_module.DATE_DEBUT=? and form_module.NUM_MODULE= M.NUM_MODULE and T.NUM_MODULE=M.NUM_MODULE and T.NUM_MATIERE=PT.NUM_MATIERE and PT.CIN=P.CIN ");
        $req->execute(array( $this->TYPE_FOR,$this->SPECIALITE_FOR,$this->DATE_DEBUT_FOR));
        while ($donnees = $req->fetch())
                  { echo'<tr>
                      <td>'.$donnees['NOM_MODULE'].'</td>
                      <td>'.$donnees['NOM_MATIERE'].'</td>
					  <td>'.$donnees['NOM'].'</td>
					    <td>'.$donnees['NB_HEURE'].'</td>
                                                    
                         </tr>';}
                         $req->closeCursor();
   }
 public function get_semestre2()
   { 
    require("PDO.php");
    
$req = $bdd->prepare("SELECT M.NOM_MODULE, T.NOM_MATIERE,T.NB_HEURE,P.NOM FROM module M , matiere T,professeur P ,prof_matiere PT,form_module WHERE M.SEMESTRE=2 and form_module.TYPE=? and form_module.SPECIALITE=? and form_module.DATE_DEBUT=? and form_module.NUM_MODULE= M.NUM_MODULE and T.NUM_MODULE=M.NUM_MODULE and T.NUM_MATIERE=PT.NUM_MATIERE and PT.CIN=P.CIN ");
        $req->execute(array( $this->TYPE_FOR,$this->SPECIALITE_FOR,$this->DATE_DEBUT_FOR));
        while ($donnees = $req->fetch())
                  { echo'<tr>
                      <td>'.$donnees['NOM_MODULE'].'</td>
                      <td>'.$donnees['NOM_MATIERE'].'</td>
            <td>'.$donnees['NOM'].'</td>
              <td>'.$donnees['NB_HEURE'].'</td>
                                                    
                         </tr>';}
                         $req->closeCursor();
   }
    public function get_semestre3()
   { 
    require("PDO.php");
    
$req = $bdd->prepare("SELECT M.NOM_MODULE, T.NOM_MATIERE,T.NB_HEURE,P.NOM FROM module M , matiere T,professeur P ,prof_matiere PT,form_module WHERE M.SEMESTRE=3 and form_module.TYPE=? and form_module.SPECIALITE=? and form_module.DATE_DEBUT=? and form_module.NUM_MODULE= M.NUM_MODULE and T.NUM_MODULE=M.NUM_MODULE and T.NUM_MATIERE=PT.NUM_MATIERE and PT.CIN=P.CIN ");
        $req->execute(array( $this->TYPE_FOR,$this->SPECIALITE_FOR,$this->DATE_DEBUT_FOR));
        while ($donnees = $req->fetch())
                  { echo'<tr>
                      <td>'.$donnees['NOM_MODULE'].'</td>
                      <td>'.$donnees['NOM_MATIERE'].'</td>
            <td>'.$donnees['NOM'].'</td>
              <td>'.$donnees['NB_HEURE'].'</td>
                                                    
                         </tr>';}
                         $req->closeCursor();
   }
    public function get_semestre4()
   { 
    require("PDO.php");
    
$req = $bdd->prepare("SELECT M.NOM_MODULE, T.NOM_MATIERE,T.NB_HEURE,P.NOM FROM module M , matiere T,professeur P ,prof_matiere PT,form_module WHERE M.SEMESTRE=4 and form_module.TYPE=? and form_module.SPECIALITE=? and form_module.DATE_DEBUT=? and form_module.NUM_MODULE= M.NUM_MODULE and T.NUM_MODULE=M.NUM_MODULE and T.NUM_MATIERE=PT.NUM_MATIERE and PT.CIN=P.CIN ");
        $req->execute(array( $this->TYPE_FOR,$this->SPECIALITE_FOR,$this->DATE_DEBUT_FOR));
        while ($donnees = $req->fetch())
                  { echo'<tr>
                      <td>'.$donnees['NOM_MODULE'].'</td>
                      <td>'.$donnees['NOM_MATIERE'].'</td>
            <td>'.$donnees['NOM'].'</td>
              <td>'.$donnees['NB_HEURE'].'</td>
                                                    
                         </tr>';}
                         $req->closeCursor();
   }







   public function demander_attestation()
   { 
    require("PDO.php");
    $for=$bdd->prepare("SELECT RESPONSABLE from formation where DATE_DEBUT=? and SPECIALITE=? and TYPE=? ");
    $for->execute(array( $this->DATE_DEBUT_FOR,$this->SPECIALITE_FOR,$this->TYPE_FOR));
    $data= $for->fetch();
    $for->closeCursor();

    
$req = $bdd->prepare("INSERT INTO demande_attestation(cin, envoye,cin_respo) VALUES (?,'0',?)");
        $req->execute(array( $this->CIN,$data['RESPONSABLE']));
   $req->closeCursor();
   }
   public function afficher_evenements()
   {
     require("PDO.php");
     $reponse = $bdd->query('SELECT titre FROM evenement LIMIT 0, 4');
     echo"<ul>";
while($donnees = $reponse->fetch())
{
  echo"<li>";
echo $donnees['titre'] . '<br />';
echo"</li>";
echo "<br>";
}
echo"</ul>";
$reponse->closeCursor();
   

}
public function afficher_payement()
{
  require("PDO.php");
    
$req = $bdd->prepare("SELECT montant_for,montant_rest,(montant_for-montant_rest) as montant_paye FROM etudiant WHERE cin=? ");
        $req->execute(array( $this->CIN));
        while ($donnees = $req->fetch())
                  { echo'
                      <p class="text-success"> MONTANT-FORMATION : '.$donnees['montant_for'].' DH </p>
                      <p class="text-info"> MONTANT-PAYE : '.$donnees['montant_paye'].' DH </p>
            <p  class="text-warning"> montant-restant '.$donnees['montant_rest'].' DH </p>
             
                                                    
                         ';}
                         $req->closeCursor();

}

}
?>