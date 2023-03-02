 
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

    <title>SEMESTRE 2</title>
    
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
                                        <li><a href="profil-etudiant.php"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="setting.php"><i class="ti-settings m-r-5"></i> Settings</a></li>
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
          <div class="container">

            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                <h4 class="page-title"> MODULES-SEMESTRE 1 </h4>
                
              </div>
            </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <table  class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>MODULES</th>
                                                    <th>MATIERES</th>
                                                    <th>PROFESSEUR</th>
                                                    <th>NBRE_HEURES</th>
                                                    
                                                </tr>
                                            </thead>


                                            <tbody>
                                            <?php
                                           
                                                $etudiant->get_semestre2();
                                              ?>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
                  
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="../#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
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
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

  </body>
</html>
<?php } ?>