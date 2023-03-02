<?php 
session_start();
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

        <title>Modification Formation</title>

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
                            

                            

               
                 
                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                       <?php 
                                        $cin=$_SESSION['cin'];
                                       $req = $bdd->prepare('SELECT * FROM professeur WHERE cin= ?'); 
                                       $req->execute(array($cin));

                                   $data=$req->fetch();
                                 ?>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
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
           
                 
                    <?php $req->closeCursor();?>
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
                                    <li ><a href="form-DCA.php">Ajout D'une DCA</a></li>
                                    <li><a href="form-DCESS.php"> Ajout D'une DCESS</a></li>
                                    <li><a href="form-Respo.php"> Ajout D'un Responsable</a></li>
                                </ul>
                            </li>
                           
                              <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Liste Des Formations </span></a>  
                                <ul class="list-unstyled">
                                    <li ><a href="liste-DCA.php">Liste Des DCA</a></li>
                                    <li><a href="liste-DCESS.php">Liste Des DCESS</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-bar-chart"></i><span> statistiques</sPan></a>
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
                     <?php $req3=$bdd->prepare('SELECT * FROM formation WHERE TYPE=? AND SPECIALITE=? AND DATE_DEBUT=? ');
                              $req3->execute(array($_GET['type'],
                                                   $_GET['specialite'],
                                                   $_GET['datedebut']));
                              $data3=$req3->fetch();
                               $req3->closeCursor();

                            
                           $req0 = $bdd->prepare('SELECT * FROM professeur WHERE cin= ?'); 
                           $req0->execute(array($data3['RESPONSABLE']));
                          $data0=$req0->fetch();
                            
                      

                               ?>
                
             
             
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
                                    <p class="text-muted">Responsable</p>
                                </div>
                            </div>
                          </div>
                        
                        <div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Information</b></h4>
                <div class="p-20">
                  <div class="about-info-p">

                                        <strong>Date Debut</strong>
                                        <br>
                                        <p class="text-muted"><?= $data3['DATE_DEBUT'] ?> </p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Date Fin</strong>
                                        <br>
                                        <p class="text-muted"><?= $data3['DATE_FIN'] ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Specialite</strong>
                                        <br>
                                        <p class="text-muted"><?= $data3['SPECIALITE'] ?></p>
                                    </div>
                                    <div class="about-info-p m-b-0">
                                        <strong>Type</strong>
                                        <br>
                                        <p class="text-muted"><?= $data3['TYPE'] ?></p>
                                    </div>
                                    
                                     <div class="about-info-p m-b-0">
                                        <strong>Lien Web</strong>
                                        <br>
                                        <p class="text-muted"><?= $data3['LIEN_WEB'] ?></p>
                                    </div>
                </div>
              </div>
              
              <!-- Personal-Information -->
              <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Prerequis</b></h4>
                
                <div class="p-20">
                  <?= $data3['PRE_REQUIS'] ?>
                  </div>
              </div>
           
              <!-- Personal-Information -->
              
              
              <!-- Personal-Information -->
              
              <!-- Personal-Information -->
              
                        
                        
                        </div>
                        
                        
                        <div class="col-md-8">
                          
                          <div class="card-box m-t-20">
                            
                <h4 class="m-t-0 header-title"><b>Modules & Matieres</b></h4>

                <div class="p-20">
                   
                    <?php $req10=$bdd->prepare('SELECT *  FROM module,form_module where module.NUM_MODULE=form_module.NUM_MODULE AND TYPE=? AND DATE_DEBUT=? AND SPECIALITE=? ');
                           $req10->execute(array($_GET['type'],
                                                $_GET['datedebut'],
                                                $_GET['specialite']
                                                ));
                           while($data10=$req10->fetch())
                            { 
                              ?>
                              <div class="timeline-2">
                              <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted">Module: <?= $data10['NOM_MODULE'];?></div>
                        <?php
                              $req11=$bdd->prepare('SELECT *  FROM matiere WHERE NUM_MODULE=? ');
                              $req11->execute(array($data10['NUM_MODULE']));
                                 while($data11=$req11->fetch())
                                  { ?>

                                      
                <p><strong><a href="#" class="text-info">Matiere <?= $data11['NOM_MATIERE'];?></a></strong> Nombre d'Heure :<?= $data11['NB_HEURE'];?>h</p>
                                       
                            <?php   }   $req11->closeCursor();?> 
                                  </div>
                                      </div>
                                  </div>
                                
                                   <?php   }   $req10->closeCursor();?> 

              
                            </div>
                                </div>
                          <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Etudiants</b></h4>
                
                  <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                          <thead>
                        <tr>
                          <th>
                            
                          </th>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Adresse</th>
                          <th>TEL</th>
                        </tr>
                      </thead>
                      
                                            <tbody>
                                              <?php $req2=$bdd->prepare('SELECT * FROM etudiant WHERE TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                                                     $req2->execute(array($_GET['type'],
                                                                          $_GET['specialite'],
                                                                          $_GET['datedebut']));
                                                    while($data3=$req2->fetch())
                                                      {?>
                                                <tr class="active">
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                           
                                                        </div>
                                                        
                                                        <img src="<?= $data3['PHOTO'] ?>" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>
                                                    
                                                    <td>
                                                        <?= $data3['NOM'] ?> <?= $data3['PRENOM'] ?>
                                                    </td>
                                                    
                                                    <td>
                                                            <?= $data3['EMAIL'] ?> 
                                                            
                                                       
                                                    </td>
                                                    
                                                    <td>
                                                         <?= $data3['ADRESSE'] ?>    
                                                    </td>
                                                    <td>
                                                      <?= $data3['TEL'] ?> 
                                                      </td>
                                                </tr>
                                                
                                              <?php
                                                }
                                                 $req2->closeCursor();
                                                 ?> 
                                              
                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
                      
                      <div class="clearfix"></div>
              </div>

              <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Professeurs</b></h4>
                
                  <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                          <thead>
                        <tr>
                          <th>
                            
                          </th>
                          <th>Nom</th>
                          
                          <th>Departement</th>
                          <th>Email</th>
                          <th>Tel</th>
                        </tr>
                      </thead>              
                      
                                              <tbody>

                                              <?php
                                              $req21=$bdd->prepare('SELECT * FROM prof_from WHERE TYPE=? AND SPECIALITE=? AND DATE_DEBUT=?');
                                               $req21->execute(array($_GET['type'],
                                                                          $_GET['specialite'],
                                                                          $_GET['datedebut']));
                                               while($data21=$req21->fetch())
                                               {
                                               $cinn=$data21['CIN'];
                                            
                                               $req2=$bdd->prepare('SELECT * FROM professeur WHERE CIN=?');
                                               $req2->execute(array($cinn));
                                                    while($data2=$req2->fetch())
                                                      {?>
                                                <tr class="active">
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                           
                                                        </div>
                                                        
                                                        <img src="<?= $data2['PHOTO'] ?>" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>
                                                    
                                                    <td>
                                                        <?= $data2['NOM'] ?> <?= $data2['PRENOM'] ?>
                                                    </td>
                                                    
                                                    <td>
                                                            <?= $data2['DEPART'] ?>
                                                            
                                                       
                                                    </td>
                                                    
                                                    <td>
                                                         <?= $data2['EMAIL'] ?>  
                                                    </td>
                                                    <td>
                                                      <?= $data2['TEL'] ?>  
                                                    </td>
                                                </tr>
                                                
                                              <?php
                                                }
                                                 $req2->closeCursor();
                                               }
                                                 $req21->closeCursor();
                                                 ?> 
                                              
                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
                      
                      <div class="clearfix"></div>
              </div>
                   
                      
                    

                        </div>
                        
                        
                    </div>
                    
                    <div class="row">
                        
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

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

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
<?php } ?>