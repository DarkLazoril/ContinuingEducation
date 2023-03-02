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

        <title>Liste des eleves</title>
        
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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
                        <a href="index.php" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
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

                                   while($data=$req->fetch())
                                 {?>
                                <li class="hidden-xs">
                                    <a href="../#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                               
                                <li class="dropdown">
                                    <a href="../../themeforest-13489470-ubold-responsive-web-app-kit" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= $data['PHOTO'];?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="setting.php"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="../connexion/lockscreen2.php?cin=<?= $data['CIN'] ?>&amp;photo=<?= $data['PHOTO'] ?>"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                         <li><a href="../connexion/deconnexion.php"><i class="ti-power-off m-r-5"></i> logout</a></li>
                                    </ul>
                                </li>
                                <?php }
                    $req->closeCursor();?>
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
              
                   
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li> 

                           <li>
                                <a href="index.php"><i class="ti-home"></i> <span> Acceuil </span> </a>
                               
                            </li>
                       
                           
							<li>
                                <a href="apps-contact.php" class="waves-effect active"><i class="ti-menu-alt"></i><span> La liste des eleves </span></a>    
                            </li>
                           
                             <li><a href="extra-timeline.php"><i class="ti-widget"></i><span>Les Evenements </span></a> </li>
                            
							
                           
                            

                         

                           

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
                                <h4 class="page-title"> Les Profiles des eleves</h4>
                                
                            </div>
                        </div>
                        
                        
                        
                        <div class="row">
                       <?php 	 $req1=$res->prepare('SELECT * from prof_from where CIN=? ');
                                $req1->execute(array($_SESSION['cin']));
                                while($data100=$req1->fetch())
                               {
                               $req2=$res->prepare('SELECT * FROM etudiant WHERE TYPE_FOR=? AND DATE_DEBUT_FOR=? AND SPECIALITE_FOR=?');
                                $req2->execute(array($data100['TYPE'],$data100['DATE_DEBUT'],$data100['SPECIALITE']));
                                          while($data2=$req2->fetch())
                                                      {?>
                        <div class="col-sm-6 col-lg-4">
                        		<div class="card-box">
                        			<div class="contact-card">
                        				<a class="pull-left" href="../#">
                                            <img class="img-circle" src="<?= $data2['PHOTO'] ?>"  alt="">
                                        </a>
                                        <div class="member-info">
                                            <h4 class="m-t-0 m-b-5 header-title"><b><?= $data2['NOM'] ?> <?= $data2['PRENOM'] ?></b></h4>
                                            <p class="text-muted"> <?= $data2['LIEU_N'] ?> </p> 
                                            <p class="text-dark"><i class="md md-business m-r-10"></i><small><?= $data2['EMAIL'] ?></small></p>
											
											<p class="text-dark"> <a href="detail-etudiant.php?cin=<?php echo $data2['CIN'] ?>" class="table-action-btn">+ Voir detail</a></p>
                                          <!--  <div class="contact-action">
                                            	<a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                            	<a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                            </div>-->
                                        </div>
                                        
                                       
                        			</div>
                        		</div>
                                </div> 
                               <?php } 
                         $req2->closeCursor();
                       }

                     $req1->closeCursor(); ?> 

                        </div>

                        
                        
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                     2015 © ENSAT.
                </footer>

            </div>
            
            
            <!-- Modal -->
			<div id="custom-modal" class="modal-demo">
			    <button type="button" class="close" onclick="Custombox.close();">
			        <span>&times;</span><span class="sr-only">Close</span>
			    </button>
			    <h4 class="custom-modal-title">Add Contact</h4>
			    <div class="custom-modal-text text-left">
			        <form role="form">
			        	<div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Enter position">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter company">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        
                        <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                    </form>
			    </div>
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


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
        
        <!-- Modal-Effect -->
        <script src="../assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="../assets/plugins/custombox/dist/legacy.min.js"></script>
        

       
    
    </body>
</html>
<?php } ?>