<?php session_start();
if(empty($_SESSION['logged']) || $_SESSION['logged']!=1)
{
    header("Location: ../connexion/page-404.html");
    exit;
    }
    else{ 
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../assets/images/logo_dark.png">

        <title>Professeurs</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

        <![endif]-->
        <link href="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="../assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <script src="../assets/js/modernizr.min.js"></script>


    </head>

       <?php include_once('DB_connect.php'); ?>
    <body class="fixed-left">


        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
             <div high=" 100px"class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                             
                            </div>

                           

               <?php 
               



               $env='0';
               $req1 = $bdd->prepare('SELECT COUNT(*) as total FROM demande_attestation WHERE envoye=? AND cin_respo=?'); 
               $req1->execute(array($env,$_SESSION['cin']));
              $data=$req1->fetch();
                $req1->closeCursor();
 ?> 
                 
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"><?= $data['total']; ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New <?= $data['total']; ?></span>Demandes d'attestation</li>
                                        <li class="list-group nicescroll notification-list">
                              <?php 
                            
                          

              $req2 = $bdd->prepare('SELECT nom,prenom,type_for,specialite_for FROM etudiant,demande_attestation WHERE etudiant.cin=demande_attestation.cin AND demande_attestation.envoye=? AND cin_respo=?'); 
               $req2->execute(array($env,$_SESSION['cin']));
                            while($data2=$req2->fetch())
                              { ?>
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading"></h5>
                                                    <p class="m-0">
                                                        <small><?= $data2['nom'];?> <?= $data2['prenom'];?> : <?= $data2['type_for']; ?> : <?= $data2['specialite_for'];?> </small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                        <?php     
                             }
                         $req2->closeCursor();
                                  ?>       
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                       <?php 
                                        $cin=$_SESSION['cin'];
                                       $req = $bdd->prepare('SELECT * FROM professeur WHERE cin= ?'); 
                                       $req->execute(array($cin));

                                   $data=$req->fetch();
                                     $req->closeCursor();?>
                               
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                     
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= $data['PHOTO'];?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                          <li><a href="index.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="setting.php"><i class="ti-settings m-r-5"></i> settings</a></Li>
                                        <li><a href="../connexion/lockscreen2.php?cin=<?= $data['CIN'] ?>&amp;photo=<?= $data['PHOTO'] ?>"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                         <li><a href="../connexion/deconnexion.php"><i class="ti-power-off m-r-5"></i> logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                  <!--  inssertion progfile right-->
           
                 
                   
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	
                             <li class="text-muted menu-title">Navigation</li>

                             <li class="has_sub">
                                <a href="#" class="waves-effect active"><i class="ti-home"></i> <span> Accueil</span> </a>
                                 <ul class="list-unstyled">
                                    <li ><a href="index.php">Profil</a></li>
                                     
                                    <li><a href="evenement.php"> Evenements</a></li>
                                
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-pencil-alt"></i><span> Ajouts </span></a>
                                <ul class="list-unstyled">
                        
                                    <li><a href="form-Professeur.php">Ajout d'Un Professeur</a></li>
                                    <li><a href="form-Etudiant.php">Ajout d'Un Etudiant</a></li>
                                    <li><a href="form-Module.php">Ajout d'Un Module</a></li>
                                    <li><a href="form-Matiere.php">Ajout d'Une Matière</a></li>
                                </ul>
                            </li>
                           
                              <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Liste </span></a>  
                                <ul class="list-unstyled">
                                  
                                    <li><a href="liste-Professeur.php">Liste Des Professeurs</a></li>
                                    <li><a href="liste-Etudiant.php">Liste Des Etudiants</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-bar-chart"></i><span> Statistiques</span></a>
                                <ul class="list-unstyled">
                                  <li><a href="statistique.php">Statistiques</a></li>
                                    <li><a href="liste-archive.php">Archive</a></li>
                                     </ul>
                            </li>
                         

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <?php 

                            
                           $req0 = $bdd->prepare('SELECT * FROM professeur WHERE CIN= ?'); 
                           $req0->execute(array($_GET['cin']));
                          $data0=$req0->fetch();
                           
               $req0->closeCursor();?>
                            
    
                    <div class="row">
                      <div class="col-md-4">
                              <div class="card-box m-t-20">
                              <div class="bg-picture text-center">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?=$data0['PHOTO'];?>" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h4 class="m-b-5"><b><?= $data0['NOM'];?> <?= $data0['PRENOM'];?> </b></h4>
                                    <h4 class="m-b-5">Cin: <b><?= $data0['CIN'];?></b></h4>
                            
                                    <p class="text-muted">Professeur</p>
                                </div>
                            </div>
                          </div>
                        
                        <div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Information</b></h4>
                <div class="p-20">
                                   <div class="about-info-p">
                                        <strong>Departement: <?= $data0['DEPART'] ?> </strong>
                                        <br>
                                    </div>
                                     <div class="about-info-p">
                                        <strong>Salaire:</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['SALAIRE'] ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Lien Blog</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['LIEN_BLOG'] ?></p>
                                    </div>
                                    <div class="about-info-p">
                                    <strong>Email:</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['EMAIL'] ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Adresse:</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['ADRESSE'] ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Tel:</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['TEL'] ?></p>
                                    </div>
                                   
                </div>
             
              </div>
              <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Biographie</b></h4>
                
                <div class="p-20">
                  <?= $data0['BIOGRAPHIE']; ?>
                  </div>
              </div>
              <!-- Personal-Information -->
           
           
              <!-- Personal-Information -->
              
              
              <!-- Personal-Information -->
         
              <!-- Personal-Information -->
              
                        
                        
                        </div>
                          
                        
                        <div class="col-md-8">
                         
                      
                     <br/> 
                      <div class="card-box">
                             
                              
                              <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                          <thead>
                        <tr>
                        
                          <th>Nom matière</th>
                          <th align="center">Volume horaire</th>
                          <th>Séances requises</th>
                          <th>Séances enseignées</th>
                          <th> </th>
                          <th>désassocier matiere</th>
                        </tr>
                      </thead>
                                                  
                          <tbody>
                            <?php    function floorp($val, $precision)
                                                      {
                                                       $mult = pow(10, $precision);
                                                       return floor($val * $mult) / $mult;
                                                      }

                                   $req3=$bdd->prepare('SELECT NUM_MATIERE,NB_HEURE_ENS,CIN FROM prof_matiere WHERE CIN=? AND responsable=?');
                                                   $req3->execute(array($data0['CIN'],$_SESSION['cin']));
                                       while($data3=$req3->fetch())
                                        {
                                             $req4=$bdd->prepare('SELECT NOM_MATIERE,NB_HEURE FROM matiere WHERE NUM_MATIERE=?');
                                        $req4->execute(array($data3['NUM_MATIERE']));
                                        $data4=$req4->fetch();
                                        $req4->closeCursor();

                                            ?>
                                             
                                                <tr class="active">
                                                   
                                                    
                                                    <td>
                                                        <?= $data4['NOM_MATIERE'] ?> 
                                                    </td>

                                                       
                                                        <td>
                                                          <?= $data4['NB_HEURE'] ?>h 
                                                    </td>
                                                      
                                                   <td>
                                                   <?= floorp($data4['NB_HEURE']/3 ,2) ?> Séances
                                                        

                                                    </td>
                                                      
                                                    <td>
                                                        <?= $data3['NB_HEURE_ENS']/3?> Séances  
                                                    </td>
                                                    <td>
                                                      <?php if($data3['NB_HEURE_ENS']<$data4['NB_HEURE']) { ?>
                                                      <form action="ajoutseance.php" method="post">
                                                        <input type="hidden" name="num" value="<?=$data3['NUM_MATIERE']?>">
                                                        <input type="hidden" name="cin" value="<?=$data3['CIN']?>">
                                                       <button type="submit" name="send" class="btn btn-default btn-md waves-effect waves-light">+</button>
                                                      </form>
                                                      <?php } 
                                                      else
                                                      {
                                                        echo "Matière terminée";
                                                      }
                                                      ?>
                                                      </td>
                                                      <td>
                                                         <a href="matiere-desassocier.php?cin=<?php echo $data0['CIN'] ?>&amp;num=<?php echo $data3['NUM_MATIERE'] ?>" class="table-action-btn"><i class="md md-close"></i></a>
                                                     </td>

                                                </tr>
                                              
                                              <?php

                                                
                                                }

                                                 $req3->closeCursor();
                                                 ?> 
                                              
                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                             <div class="card-box">
                           
                <h4 class="m-t-0 header-title"><b>Associer une matière:</b></h4>
                <div class="p-20">
          <form action="associer-matiere.php" method="post"> 
          <input type="hidden" name="cin" value="<?=$_GET['cin']?>">   
           <div class="form-group text-right m-b-0">
            
             <select class="selectpicker" data-style="btn-primary btn-custom" name="matiere"  >
             <?php 
             $req1=$bdd->prepare('SELECT * from formation where RESPONSABLE=?');
                                $req1->execute(array($_SESSION['cin']));
                                $data777=$req1->fetch();
                                $req1->closeCursor();
       
       $req10=$bdd->prepare('SELECT * FROM module,form_module where module.NUM_MODULE=form_module.NUM_MODULE and TYPE=? and SPECIALITE=? and DATE_DEBUT=? ');
          $req10->execute(array($data777['TYPE'], $data777['SPECIALITE'],$data777['DATE_DEBUT']));
                         
               
               while($data10=$req10->fetch())
                {?>
               <optgroup label="<?=$data10['NOM_MODULE']?>">
               <?php  $req11=$bdd->prepare('SELECT NUM_MATIERE,NOM_MATIERE FROM matiere where NUM_MODULE=? ');
                   $req11->execute(array($data10['NUM_MODULE']));
                   while($data11=$req11->fetch())
                   {?>
                    <option value="<?=$data11['NUM_MATIERE']?>"><?=$data11['NOM_MATIERE']?></option>
                <?php  }
                   $req11->closeCursor();
                ?>

               </optgroup>
          <?php  }

          $req10->closeCursor();

          ?> 
  
             </select>
           </div>
           <br/>
             <div class="form-group text-right m-b-0">
                         
                      <button class="btn btn-primary waves-effect waves-light" type="submit" name="env">
                        Enregistrer 
                      </button>
                    </div>
             </form> 
            
               </div>
              
                            </div>
         
                         <div class="card-box">
                           
                <h4 class="m-t-0 header-title"><b>Progression des matières:</b></h4>
                <div class="p-20">
                   
<?php     
         


       $req3=$bdd->prepare('SELECT NUM_MATIERE,NB_HEURE_ENS FROM prof_matiere WHERE CIN=? AND responsable=?');
            $req3->execute(array($data0['CIN'],$_SESSION['cin']));
           while($data3=$req3->fetch())
            {
                 $req4=$bdd->prepare('SELECT NOM_MATIERE,NB_HEURE FROM matiere WHERE NUM_MATIERE=?');
            $req4->execute(array($data3['NUM_MATIERE']));
            $data4=$req4->fetch();
            $req4->closeCursor();

                ?>

                  <div class="m-b-15">
                     <h5><?=$data4['NOM_MATIERE']?>:   <span class="pull-right"><?= floorp($data3['NB_HEURE_ENS']*100/$data4['NB_HEURE'],2);?>%</span>      </h5>
                      <div class="progress">
                           
                             <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="<?= floorp($data3['NB_HEURE_ENS']*100/$data4['NB_HEURE'],2)?>%" aria-valuemin="0" aria-valuemax="100" style="width: <?= floorp($data3['NB_HEURE_ENS']*100/$data4['NB_HEURE'],2);?>%;">             
                            </div>
                            </div>
                          </div>
                                
                 <?php } 
                 $req3->closeCursor();?>                

                                 
                </div>
              
                            </div>
                            <div class="card-box">
                           
                <h4 class="m-t-0 header-title"><b>Volume horaire occupee par chaque matiere:</b></h4>
                <div class="p-20">
                   
<?php     
          // somme nombre d'heures de ce prof
            $req5=$bdd->prepare('SELECT SUM(NB_HEURE) as Somme FROM prof_matiere WHERE CIN=? AND responsable=?');
            $req5->execute(array($data0['CIN'],$_SESSION['cin']));
           $data5=$req5->fetch();
           $req5->closeCursor();
           $SUM=$data5['Somme'];


       $req3=$bdd->prepare('SELECT NUM_MATIERE FROM prof_matiere WHERE CIN=? AND responsable=?');
            $req3->execute(array($data0['CIN'],$_SESSION['cin']));
           while($data3=$req3->fetch())
            {
                 $req4=$bdd->prepare('SELECT NOM_MATIERE,NB_HEURE FROM matiere WHERE NUM_MATIERE=?');
            $req4->execute(array($data3['NUM_MATIERE']));
            $data4=$req4->fetch();
            $req4->closeCursor();

                ?>

                  <div class="m-b-15">
                     <h5><?=$data4['NOM_MATIERE']?>:   <span class="pull-right"><?= floorp($data4['NB_HEURE']*100/$SUM,2);?>%</span>      </h5>
                      <div class="progress">
                           
                             <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="<?=$data4['NB_HEURE']*100/$SUM?>%" aria-valuemin="0" aria-valuemax="100" style="width: <?=$data4['NB_HEURE']*100/$SUM?>%;">             
                            </div>
                            </div>
                          </div>
                                
                 <?php } 
                 $req3->closeCursor();?>                

                                 
                </div>
              </div>
                        </div>
                </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                    2015 © ENSAT.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
      
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <script src="../assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>
         <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


        <script src="../assets/plugins/morris/morris.min.js"></script>
        <script src="../assets/plugins/raphael/raphael-min.js"></script>

        <script src="../assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="../assets/pages/jquery.dashboard.js"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>
<?php }?>