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

        <title>Profil</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                                       include_once('DB_connect.php'); 
                                        $cin=$_SESSION['cin'];
                                       $req = $bdd->prepare('SELECT * FROM professeur WHERE cin= ?'); 
                                       $req->execute(array($cin));

                                   while($data=$req->fetch())
                                 {?>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= $data['PHOTO'];?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="setting.php"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="../connexion/lockscreen2.php?cin=<?= $data['CIN'] ?>&amp;photo=<?= $data['PHOTO'] ?>"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="../connexion/deconnexion.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                    
                
             
             
                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <!--/ meta -->
                        </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-4">
                        
                        <div class="card-box m-t-20">
						<div class="bg-picture text-center">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?=$data['PHOTO'];?>" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h4 class="m-b-5"><b><?= $data['NOM'];?> <?= $data['PRENOM'];?> </b></h4>
                                    <p class="text-muted"><i class="fa fa-map-marker"></i> Tanger , Maroc</p>
                                </div>
                            </div>
							</div>
							<div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Personal Information</b></h4>
                <div class="p-20">
                  <div class="about-info-p">
                                        <strong>Nom Complet</strong>
                                        <br>
                                        <p class="text-muted"><?= $data['NOM'];?> <?= $data['PRENOM'];?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Tel</strong>
                                        <br>
                                        <p class="text-muted"><?= $data['TEL'];?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?= $data['EMAIL'];?></p>
                                    </div>
                                    <div class="about-info-p m-b-0">
                                        <strong>Lien Blog</strong>
                                        <br>
                                        <p class="text-muted"><?=$data['ADRESSE'];?></p>
                                    </div>
                </div>
              </div>
              
              <!-- Personal-Information -->
              <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Biographie</b></h4>
                
                <div class="p-20">
                  <?= $data['BIOGRAPHIE']; ?>
                  </div>
              </div>
              <?php } 
                  $req->closeCursor();
              ?>
              <!-- Personal-Information -->
              
              
              <!-- Personal-Information -->
              
              <!-- Personal-Information -->
              
                        
                        
                        </div>
                        
                        
                        <div class="col-md-8">
                          
                          <div class="card-box m-t-20">
                <h4 class="m-t-0 header-title"><b>Audit</b></h4>
                <div class="p-20">
                  <div class="timeline-2">
                    <?php $req3=$bdd->query('SELECT *  FROM audit order by date_op desc limit 20');
                           while($data=$req3->fetch())
                            { ?>
                                      <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted"><?= $data['date_op'];?></div>
                                              <p><strong><a href="#" class="text-info"> Mr. <?= $data['username'];?></a></strong> <?= $data['operation'];?></p>
                                          </div>
                                      </div>
                            <?php   } 
                               $req3->closeCursor();?> 
                                      
                </div>
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
<?php } ?>