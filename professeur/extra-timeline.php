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

        <title>Evenements</title>
        
        <link href="../assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        
        <script src="../../assets/js/modernizr.min.js"></script>
        
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
                    
                                  $req->closeCursor();?>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                               
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= $data['PHOTO'];?>" alt="user-img" class="img-circle"> </a>
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
           
                  
                    
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li> 

                           <li>
                                <a href="index.php"><i class="ti-home"></i> <span> Acceuil </span> </a>
                               
                            </li>
                       
                           
							<li>
                                <a href="apps-contact.php"><i class="ti-menu-alt"></i><span> La liste des eleves </span></a>    
                            </li>
                            
                             <li><a href="extra-timeline.php" class="waves-effect active"><i class="ti-widget"></i><span> Les Evenements </span></a> </li>
                            
						
                           
                            

                         

                           

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
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title">Evenements</h2>
                               
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <section id="cd-timeline" class="cd-container">
                                    
                                    <?php
                                  
                      $req3=$res->query('SELECT * FROM evenement ORDER BY date_event DESC');
                    
                    while( $data3=$req3->fetch())
                    {
                        ?>

                                     <div class="cd-timeline-block">
                                        <div class="cd-timeline-img cd-success">
                                            <i class="fa fa-tag"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3><?= $data3['titre'];?></h3>
                                            <p><?= $data3['description'];?></p>
                                            <img src="<?= $data3['photo'];?>" alt="">
                                            <span class="cd-date"><?= $data3['date_event'];?></span>
                                        </div> 
                                   
                                   </div>
                                    <?php 

                                }

                                $req3->closeCursor(); ?>
                                

                                    </section> <!-- cd-timeline-block --> 
                                 <!-- cd-timeline -->
                            </div>
                        </div><!-- Row -->


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


        <script src="../../assets/js/jquery.core.js"></script>
        <script src="../../assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($){
            var $timeline_block = $('.cd-timeline-block');

                //hide timeline blocks which are outside the viewport
                $timeline_block.each(function(){
                    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                    }
                });

                //on scolling, show/animate timeline blocks when enter the viewport
                $(window).on('scroll', function(){
                    $timeline_block.each(function(){
                        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                        }
                    });
                });
            });
        </script>
	
	</body>
</html>
<?php } ?>