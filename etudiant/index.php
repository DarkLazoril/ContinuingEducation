<?php
 session_start();
 if(empty($_SESSION['logged']) || $_SESSION['logged']!=1){
  header("Location: ../connexion/page-404.html");
exit;
}
else{
 include_once('etudiant-class.php');
 $etudiant=new Etudiant( $_SESSION["cin"]);
 
 ?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="../assets/images/logo_dark.png">

		<title>index</title>
		
		<link href="../assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

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
                        <a href="profil-etudiant.php" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                               
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"> <?php  echo'<img src="'.$etudiant->getphoto().'" alt="user-img" class="img-circle">';?> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profil-etudiant.php"><i class="md md-face-unlock"></i> profile<diV class="ripple-wrapper"></div></a></li>
                                    <li><a href="setting.php"><i class="md md-settings"></i> settings</a></li>
                                    <li><a href="../connexion/lockscreen2.php?cin=<?= $etudiant->getcin(); ?>&amp;photo=<?= $etudiant->getphoto(); ?>"><i class="md md-lock"></i> lock screen</a></Li>
                                     <li><a href="../connexion/deconnexion.php"><i class="md md-settings-power"></i> logout</a></li>
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

                            <li>
                                <a href="profil-etudiant.php" ><i class="ti-home"></i> <span> PROFILE </span> </a>
                               
                            </li>

                           
                            <li class="has_sub">
                                <a href="../javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>MODULES </span></a>
                                <ul>
                                    <li >
                                        <a href="semestre_1.php"><span>SEMESTRE.1</span></a>
                                        
                                       <a href="semestre_2.php"><span>SEMESTRE.2</span></a>
                                       <?php if($etudiant->gettypefor()=="dcess")
                                       {
                                        echo' <a href="semestre_3.php"><span>SEMESTRE.3</span></a>';
                                         echo' <a href="semestre_4.php"><span>SEMESTRE.4</span></a>';

                                        
                                        }?>
                                         
                                    </li>
                                    
                                </ul>
                                </li>
                            
                                 <li >
                               
                                   <a href="evenements.php" class="waves-effect"> <i class="md-border-color"></i> EVENEMENTS </a>
                            </li>

                        </ul>
                       
                    </div>
                   
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
                        <br/>
                            <div class="card-box">
                                     <div class="bg-picture text-center">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                 <?php  echo'<img src="'.$etudiant->getphoto().'" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';
                                echo" <h4 class='m-b-5'><b>".$etudiant->getnom().",".$etudiant->getprenom()."</b></h4>";
                                    echo"<p class='text-muted'><i class='fa fa-map-marker'></i>".$etudiant->getadresse()."  </p>";?>
                                </div>
                            </div>
                            </div>
                            <div class="card-box m-t-20">
                                <h4 class="m-t-0 header-title"><i class="ion-social-usd"></i><b><strong> details-paiement : </strong></b></h4>
                <br>
                                <div >
                                <?php
                $etudiant->afficher_payement();          

                ?>

                                  
                                </div>
                            </div>
                            
                            
                            <!-- Personal-Information -->
                            <div class="card-box">
                <div class="row">
                            <div class="col-sm-12">
                                
                            <div class="card-box">
                                    <table class="table" cellpadding="100px">
                                        <thead>
                                            <tr>
                                                <th style="width:50%;">DEMANDER UNE ATTESTATION DE SCOLARITE</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                           
                                            <tr >
                                                
                                                <td >
                                                    <center><button class="btn btn-info waves-effect waves-light btn-sm" id="sa-warning">DEMANDER</button></center>
                                                </td>
                                            </tr>
                                            
                                        
                                    </table>
                                </div>
                            </div>
                        </div> 
                            </div>
                            <!-- Personal-Information -->
                            
                                                
                                                
                        </div>
                        
                        
                        <div class="col-md-8">
                            
                            <div class="card-box m-t-20">
                                <h4 class="m-t-0 header-title"><i class=" md-perm-identity"></i><b><strong>Informations personelles</strong></b></h4>
                            
                            <div class="card-box m-t-20">
                                
                                <div class="p-20">
                                    <div class="about-info-p">
                                        <strong>CNE</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $etudiant->getcne(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>CIN</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getcin(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>NOM</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getnom(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>PRENOM</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getprenom(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>LIEU-NAISSANCE</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getlieun(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>DATE-NAISSANCE</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getdaten(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>SEXE</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->getsexe(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>EMAIL</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $etudiant->getemail(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>FORMATION</strong>
                                        <br>
                                         <p class="text-muted"><?php echo $etudiant->gettypefor(); ?></p>
                                    </div>
                                    <div class="about-info-p">
                                        <strong>SPECIALIT&Eacute;</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $etudiant->getspecialitefor(); ?></p>
                                    </div>
                                    <div class="about-info-p m-b-0">
                                        <strong>BAC</strong>
                                        <br>
                                        <p class="text-muted"><?php echo" ". $etudiant->gettypebac()."(".$etudiant->getdatebac().")"; ?></p>
                                    </div>
                                    <?php
                                    if($etudiant->gettypediplome()!=NULL){
                                    echo'<div class="about-info-p">
                                        <strong>DIPLOME</strong>
                                        <br>
                                        <p class="text-muted">'.$etudiant->gettypediplome().'</p>
                                    </div>';}?>
                                   
                                </div>
    
                                </div>
                            </div>
                            
                      
                    
                    <div class="row">
                        
                    </div>
                </div> <!-- container -->
                               
                </div> <!-- content -->
                <footer class="footer">
                    2015 © Ubold.
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

        <!-- Sweet-Alert  -->
        <script src="../assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        <script src="../assets/pages/jquery.sweet-alert.init.js"></script>
	
	
	</body>
</html>
<?php }?>