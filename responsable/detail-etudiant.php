<?php session_start();
if(empty($_SESSION['logged']) || $_SESSION['logged']!=1)
{
    header("Location: ../connexion/page-404.html");
    exit;
    }
    else{?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../assets/images/logo_dark.png">

        <title>Etudiants</title>

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
        <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

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

                            
                           $req0 = $bdd->prepare('SELECT * FROM etudiant WHERE CIN= ?'); 
                           $req0->execute(array($_GET['cin']));
                          $data0=$req0->fetch();
                           
               $req0->closeCursor();?>
                            
                      

                              
                
             
             
                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            
                               
                        </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-4">
                             <div class="card-box m-t-20">
                              <div class="bg-picture text-center">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?=$data0['PHOTO'];?>" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h4 class="m-b-5"><b><?= $data0['NOM'];?> <?= $data0['PRENOM'];?> </b></h4>
                                    <h4 class="m-b-5">Cin: <b><?= $data0['CIN'];?></b></h4>
                                    <h4 class="m-b-5">Cne: <b><?= $data0['CNE'];?></b></h4>
                                    <p class="text-muted">Etudiant</p>
                                </div>
                            </div>
                            </div>
                        <div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Information</b></h4>
                <div class="p-20">
                                   <div class="about-info-p">
                                        <strong>Formation: <?= $data0['TYPE_FOR'] ?> </strong>
                                        <br>
                                        <p class="text-muted">Specialite: <?= $data0['SPECIALITE_FOR'] ?> </p>
                                        <p class="text-muted">date debut: <?= $data0['DATE_DEBUT_FOR'] ?> </p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Montant: reste</strong>
                                        <br>
                                        <p class="text-muted"><?= $data0['montant_for'] ?></p>
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
              <!-- Personal-Information -->
           
           
              <!-- Personal-Information -->
              
              
              <!-- Personal-Information -->
             
              <!-- Personal-Information -->
              
                        
                        
                        </div>
                          
                        
                        <div class="col-md-8">
                          
                          <div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Cursus </b></h4>
                <div class="p-20">
                  
                              <div class="timeline-2">
                              <div class="time-item">
                                <div class="item-info">
                                              <div class="text-muted">Naissance:</div>
                     
                                      
                                         <p><strong><a href="#" class="text-info">Lieu :<?= $data0['LIEU_N'];?></a></strong></p>
                                     <p><strong><a href="#" class="text-info">Date :<?= $data0['DATE_N'];?></a></strong></p>
                                       
                          
                                  </div>
                                      </div>
                                  </div>
                                  <div class="timeline-2">
                                   <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted">Bac:</div>
                     
                                      
                                         <p><strong><a href="#" class="text-info">Type :<?= $data0['TYPE_BAC'];?></a></strong></p>
                                     <p><strong><a href="#" class="text-info">Date :<?= $data0['DATE_BAC'];?></a></strong></p>
                                       
                          
                                  </div>
                                      </div>
                                  </div>
                                  <div class="timeline-2">
                                <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted">Diplome universitaire:</div>
                     
                                      
                                         <p><strong><a href="#" class="text-info">Type :<?= $data0['TYPE_DIPLOME']?></a></strong></p>
                                     <p><strong><a href="#" class="text-info">Date :<?= $data0['date_diplome']?></a></strong></p>
                                       
                          
                                  </div>
                                      </div>
                                  </div>
                                  

                            </div>
                                </div>
                          <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Echeances</b></h4>
                <div class="p-20">
                   

              <div class="m-b-15">
                <?php 
                function floorp($val, $precision)
                {
                 $mult = pow(10, $precision);
                 return floor($val * $mult) / $mult;
                }
                $montant_paye=$_GET['montant_glob']-$_GET['rest']; ?>
                     <h5>payé:   <span class="pull-right"><?= floorp($montant_paye*100/$_GET['montant_glob'],2);?>%</span>      </h5>
                      <div class="progress">
                           <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="<?= $montant_paye*100/$_GET['montant_glob']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $montant_paye*100/$_GET['montant_glob']?>%">
                                         
                            </div>
                            </div>
                          </div>
                                
                                  

                                 
                </div>
              </div>
                        <div class="card-box">
                             
                               
                              <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                          <thead>
                        <tr>
                         
                          <th>Echeance1</th>
                          <th >Type</th>
                          <th>Echeance2</th>
                          <th>Type</th>
                          <th>Echeance3</th>
                          <th>Type</th>
                          <th>Montant Formation</th>
                         
                        </tr>
                      </thead>
                          
                      
                                            <tbody>
                                          <?php  $req1=$bdd->prepare('SELECT num_paiement,type,montant from paiement where cin =? and type_echeance=? ');
                                               $req1->execute(array($_GET['cin'],1));
                                               $data1=$req1->fetch();
                                               $req1->closeCursor();               
                                               ?>
                                               <td><?=$data1['montant'];?></td>
                                               <td><?php if($data1['type']=="espece")
                                                          {
                                                          echo "espece";
                                                        }
                                                          elseif ($data1['type']=="prise en charge")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from prise_en_charge where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();?>
                                                       <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img  class="thumb-lg img-circle img-thumbnail" alt="priseencharge" src="<?=$data11['scan'];?>"></a>
                                                         <?php
                                                          }
                                                           elseif ($data1['type']=="par cheque")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from cheque where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();
                                                     ?>
                                                       <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img  class="thumb-lg img-circle img-thumbnail" alt="cheque" src="<?=$data11['scan'];?>"></a>
                                                         <?php
                                                          }?>
                                                       </td>
                                                        <?php  $req1=$bdd->prepare('SELECT num_paiement,type,montant from paiement where cin =? and type_echeance=? ');
                                               $req1->execute(array($_GET['cin'],2));
                                               $data1=$req1->fetch();
                                               $req1->closeCursor();               
                                               ?>
                                               <td><?=$data1['montant'];?></td>
                                               <td><?php if($data1['type']=="espece")
                                                          echo "espece";
                                                          elseif ($data1['type']=="prise en charge")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from prise_en_charge where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();
                                                      ?>
                                                       <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img   class="thumb-lg img-circle img-thumbnail" alt="prise en charge" src="<?=$data11['scan'];?>"></a>
                                                         <?php
                                                          }
                                                           elseif ($data1['type']=="par cheque")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from cheque where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();?>
                                                      <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img  class="thumb-lg img-circle img-thumbnail" alt="cheque" src="<?=$data11['scan'];?>"></a>
                                                      
                                                      <?php
                                                          }?>
                                                       </td>
                                                        <?php  $req1=$bdd->prepare('SELECT num_paiement,type,montant from paiement where cin =? and type_echeance=? ');
                                               $req1->execute(array($_GET['cin'],3));
                                               $data1=$req1->fetch();
                                               $req1->closeCursor();               
                                               ?>
                                               <td><?=$data1['montant'];?></td>
                                               <td><?php if($data1['type']=="espece")
                                                          echo "espece";
                                                          elseif ($data1['type']=="prise en charge")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from prise_en_charge where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();
                                                      ?>
                                                       <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img  class="thumb-lg img-circle img-thumbnail" alt="priseencharge" src="<?=$data11['scan'];?>"></a>
                                                         <?php
                                                          }
                                                           elseif ($data1['type']=="par cheque")
                                                          {
                                                          $req11=$bdd->prepare('SELECT * from cheque where num_paiement=? ');
                                                        $req11->execute(array($data1['num_paiement']));
                                                       $data11=$req11->fetch();
                                                       $req11->closeCursor();
                                                       ?>
                                                       <a href="<?=$data11['scan'];?>" download="<?=$data11['scan'];?>" ><img  class="thumb-lg img-circle img-thumbnail" alt="cheque" src="<?=$data11['scan'];?>"></a>
                                                         <?php
                                                          }?>
                                                       </td>
                                                       <td>
                                                        <?= $data0['montant_for'] ?></td>

                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                                
                                  

                                 
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