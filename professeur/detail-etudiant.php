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

        <title>Liste des eleves </title>
        
        <link href="../assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css" rel="stylesheet" type="text/css" />

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
        <script src="../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>
        
    </head>

<?php include_once('DB_connect.php');?>
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             <div class="topbar">
  <div high=" 100px"class="topbar-left">
                    <div class="text-center">
                        <a href="../index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                     <?php 
                                        $cin=$_SESSION['cin'];
                                       $req = $res->prepare('SELECT * FROM professeur WHERE cin= ?'); 
                                       $req->execute(array($cin));

                                   $data=$req->fetch();

                                   $req->closeCursor()
                                 ?>
                                <li class="hidden-xs">
                                    <a href="../#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="../" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= $data['PHOTO'];?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="setting.php"><i class="ti-settings m-r-5"></i> Settings</a></li>
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
           
                  <div class="user-details">
                        <div class="pull-left">
                            <img src="<?= $data['PHOTO'];?>" alt="" class="thumb-md img-circle">
                        </div>

                        <div class="user-info">
                            <div class="dropdown">
                                <a href="../#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $data['NOM'];?> <?= $data['PRENOM'];?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="../Connexion/setting.php"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="../Connexion/lockscreen2.php?cin=<?= $data['CIN'] ?>&amp;photo=<?= $data['PHOTO'] ?>"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                         <li><a href="../Connexion/deconnexion.php"><i class="ti-power-off m-r-5"></i> logout</a></li>
                                </ul>
                            </div>
                            <p class="text-muted m-0">Professeur</p>
                        </div>
                    </div>
                   
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li> 

                           <li>
                                <a href="index.php"><i class="ti-home"></i> <span> Acceuil </span> </a>
                               
                            </li>
                       
                            
							<li>
                                <a href="apps-contact.php"><i class="ti-menu-alt"></i><span> La liste des eleves </span></a>    
                            </li>
                            
                             <li><a href="extra-timeline.php"><i class="ti-widget"></i><span> Les Evenements </span></a> </li>
                            
							
                           
                            

                         

                           

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
					
                </div>
            </div>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <?php 

                            
                           $req0 = $res->prepare('SELECT * FROM etudiant WHERE CIN= ?'); 
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
					   <div class="card-box m-t-30">
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
                     
                                      
                                         <p><strong><a href="" class="text-info">Lieu :<?= $data0['LIEU_N'];?></a></strong></p>
                                     <p><strong><a href="" class="text-info">Date :<?= $data0['DATE_N'];?></a></strong></p>
                                       
                          
                                  </div>
                                      </div>
                                  </div>
                                  <div class="timeline-2">
                                   <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted">Bac:</div>
                     
                                      
                                         <p><strong><a href="" class="text-info">Type :<?= $data0['TYPE_BAC'];?></a></strong></p>
                                     <p><strong><a href="" class="text-info">Date :<?= $data0['DATE_BAC'];?></a></strong></p>
                                       
                          
                                  </div>
                                      </div>
                                  </div>
                                  <div class="timeline-2">
                                <div class="time-item">
                                          <div class="item-info">
                                              <div class="text-muted">Diplome universitaire:</div>
                     
                                      
                                         <p><strong><a href="" class="text-info">Type :<?= $data0['TYPE_DIPLOME']?></a></strong></p>
                                     <p><strong><a href="" class="text-info">Date :<?= $data0['date_diplome']?></a></strong></p>
                                       
                          
                                  </div>
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
<?php } ?>
