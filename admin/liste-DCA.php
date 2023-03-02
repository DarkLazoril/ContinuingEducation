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

        <title>DCA</title>
        
        <link href="../assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

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
           
                  
                    <?php }
                    $req->closeCursor();?>
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
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Liste DCA</h4>
                               
                            </div>
                        </div>
                        
                        
                        
                        <div class="row">
                        	
                  <?php 
                  $type='dca';
                  $req4= $bdd->prepare('SELECT * FROM formation WHERE TYPE=?');
                  $req4->execute(array($type));
                  while($data4=$req4->fetch()) 
                  {
                    // pour chaque formation on recupere le nom et photo du responsable
                    $req5=$bdd->prepare('SELECT NOM,PRENOM,PHOTO from professeur WHERE CIN=?');
                    $req5->execute(array($data4['RESPONSABLE']));
                    $data5=$req5->fetch();
                    
                    ?>
                        		<div class="col-sm-6 col-lg-4">
                              <div class="card-box">

                        			<div class="contact-card">
                        				<a class="pull-left" href="#">
                                            <img class="img-circle" src="<?= $data5['PHOTO'];?>" alt="">
                                        </a>
                                        
                                        <div class="member-info">
                                            <h4 class="m-t-0 m-b-5 header-title"><b><?= $data5['NOM'];?> <?= $data5['PRENOM'];?></b></h4>
                                            <p class="text-muted">Durre : <?= $data4['DATE_DEBUT'];?>/<?= $data4['DATE_FIN'];?> </p>
                                            <p class="text-dark"><i class="md md-business m-r-10"></i><small>Specialite : <?= $data4['SPECIALITE'];?> </small></p>
                                            
                                            <div class="contact-action">
                                                 <br/><br/><br/><br/>
                                            	<a href="edit-formation.php?type=<?php echo $type ?>&amp;datedebut=<?php echo $data4['DATE_DEBUT'] ?>&amp;specialite=<?php echo $data4['SPECIALITE']?>" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                            	<a href="formation-delete.php?type=<?php echo $type ?>&amp;datedebut=<?php echo $data4['DATE_DEBUT'] ?>&amp;specialite=<?php echo $data4['SPECIALITE']?>" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                                 <a href="detail-formation.php?type=<?php echo $type ?>&amp;datedebut=<?php echo $data4['DATE_DEBUT'] ?>&amp;specialite=<?php echo $data4['SPECIALITE']?>" class="btn btn-success btn-sm"><i class="md "></i>detail</a>
                                            </div>
                                        </div>
                                        
                                       
                        			</div>
                              </div>
                          
                            </div> <!-- end col -->

                           
                        		
                      <?php 
                        $req5->closeCursor();
                        }
                        $req4->closeCursor();
                        ?>  
                      
                            
                          
                           
                        </div>

                        
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © ENSAT.
                </footer>

            </div>
            
            
            <!-- Modal -->
			
            
            
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


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
        
        <!-- Modal-Effect -->
        <script src="../assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="../assets/plugins/custombox/dist/legacy.min.js"></script>
        

       
    
    </body>
</html>
<?php } ?>