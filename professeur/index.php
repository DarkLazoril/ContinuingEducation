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

        <title>Profile Professeur</title>
        
        <link href="../assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

       

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
                  
                   
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li> 

                           <li>
                                <a href="index.php" class="waves-effect active"><i class="ti-home"></i> <span> Acceuil </span> </a>
                               
                            </li>
                       
                          
							<li>
                                <a href="apps-contact.php"><i class="ti-menu-alt"></i><span> La liste des eleves </span></a>    
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
                    
                

                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                           
                            <!--/ meta -->
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    	<div class="col-md-4">
                      
                    		
                    		<div class="card-box m-t-30">
							 <div class="bg-picture text-center">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?= $data['PHOTO'];?>" class="thumb-lg img-circle img-thumbnail"  alt="profile-image">
                                    <h4 class="m-b-5"><b><?= $data['NOM'];?> <?= $data['PRENOM'];?></h4>
                                    <p class="text-muted"><i class="fa fa-map-marker"></i> <?= $data['ADRESSE'];?>,Maroc</p>
                                </div>
                            </div>
							</div>
							<div class="card-box m-t-30">
								<h4 class="m-t-0 header-title"><b> Lien Blog </b> </h4>
								
                                
								<div class="p-20">
									<div class="about-info-p">
                                   
                                        <strong><?= $data['LIEN_BLOG'];?></strong>
                                       
                                    </div>
                                    
									
                                   
                                   
                                   
                                    
                                   
								</div>
							</div>
							
							<!-- Personal-Information -->
							<div class="card-box">
								<h4 class="m-t-0 header-title"><b>Biographie </b></h4>
								
								<div class="p-20">
									

                                    <p><strong><?= $data['BIOGRAPHIE'];?></strong></p>


                                    
								</div>
							</div>
                           
							<!-- Personal-Information -->
							
							
							<!-- Personal-Information -->
							<div class="card-box">
								<h4 class="m-t-0 header-title"><b>Volume horaire occupee par chaque matiere:</b> </h4>
								
								<div class="p-20">
                                <?php 
                function floorp($val, $precision)
                {
                 $mult = pow(10, $precision);
                 return floor($val * $mult) / $mult;
                } ?>
                <?php     
          // somme nombre d'heures de ce prof
            $req5=$res->prepare('SELECT SUM(NB_HEURE) as Somme FROM prof_matiere WHERE CIN=?');
            $req5->execute(array($data['CIN']));
           $data5=$req5->fetch();
           $req5->closeCursor();
           $SUM=$data5['Somme'];
		    $req3=$res->prepare('SELECT NUM_MATIERE FROM prof_matiere WHERE CIN=?');
            $req3->execute(array($data['CIN']));
           while($data3=$req3->fetch())
            {
                 $req4=$res->prepare('SELECT NOM_MATIERE,NB_HEURE FROM matiere WHERE NUM_MATIERE=?');
            $req4->execute(array($data3['NUM_MATIERE']));
            $data4=$req4->fetch();
            $req4->closeCursor();

                ?>
									<div class="m-b-15">
                                        <h5><?=$data4['NOM_MATIERE']?>:   <span class="pull-right"><?= floorp($data4['NB_HEURE']*100/$SUM,2);?>%</span>    </h5>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="<?=$data4['NB_HEURE']*100/$SUM?>%" aria-valuemin="0" aria-valuemax="100" style="width: <?=$data4['NB_HEURE']*100/$SUM?>%;">  
                                                
                                            </div>
                                        </div>
                                    </div> <?php } $req3->closeCursor();?>


                                    

                                   
								</div>
							</div>
							<!-- Personal-Information -->
							
												
												
                        </div>
                        
                        
                        <div class="col-md-8">
                        	
                        	<div class="card-box m-t-20">
								<h4 class="m-t-0 header-title"><b>Informations Personnels</b></h4>
                               
								<div class="p-20">
									<div >
	                                    <div >
	                                        <div class="item-info">
	                                            <div class="text-muted">Nom</div>
	                                            <p><strong><a href="../#" class="text-info"><?= $data['NOM'];?></a></strong> </p>
	                                        </div>
	                                    </div>
	
	                                    <div >
	                                        <div class="item-info">
	                                            <div class="text-muted">¨Prenom</div>
	                                            <p><a href="../" class="text-info"><?= $data['PRENOM'];?></a></p>
	                                        </div>
	                                    </div>
	
	                                    <div>
	                                        <div class="item-info">
	                                            <div class="text-muted">Email</div>
	                                            <p><a href="../" class="text-info"><?= $data['EMAIL'];?></a></p>
	                                        </div>
	                                    </div>
	
	                                    <div>
	                                        <div class="item-info">
	                                            <div class="text-muted">Adresse</div>
	                                            <p><strong><a href="../#" class="text-info"><?= $data['ADRESSE'];?></a></strong></p>
	                                        </div>
	                                    </div>
	
	                                    <div>
	                                        <div class="item-info">
	                                            <div class="text-muted">Telephone</div>
	                                            <p><a href="../" class="text-info"><?= $data['TEL'];?></a> </p>
	                                        </div>
	                                    </div>
	
	                                    <div>
	                                        <div class="item-info">
	                                            <div class="text-muted">Date De Naissance</div>
	                                            <p><a href="../" class="text-info"><?= $data['DATE_N'];?></p>
	                                            
	                                        </div>
	                                    </div>
                                         <div>
	                                        <div class="item-info">
	                                            <div class="text-muted">CIN</div>
	                                            <p><a href="../" class="text-info"><?= $data['CIN'];?></a> </p>
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


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
	
	</body>
</html>
<?php } ?>