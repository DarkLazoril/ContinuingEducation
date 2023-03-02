
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
                        <a href="../index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                             
                            </div>

                            
                
                 
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
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Etudiants Archive</h4>
                                
                            </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card-box">
                             
                              
                              <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                          <thead>
                        <tr>
                          <th>
                            
                          </th>
                          <th>Nom</th>
                          
                          <th align="center">Email</th>
                          <th>Date Debut</th>
                          <th>Montant paye</th>
                          <th>Montant restant</th>
                        
                        </tr>
                      </thead>
                                                     
                                            <tbody>
                                             <?php // recupeartin du form
                                                $req = $bdd->query('SELECT * from formation ');
                                                
                                                $data50=$req->fetch();
                                                $req->closeCursor();

                                               $req2=$bdd->query('SELECT * FROM etudiant_archive ');
                                               
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

                                                     <td><?= $data2['EMAIL'] ?> </td>                                                      
                                                    <td><?= $data2['DATE_DEBUT_FOR'] ?> </td>
                                                    <td><?= $data2['montant_for'] ?> </td>
                                                    <td><?= $data2['montant_rest'] ?> </td>
                                                    
                                                   

                                                </tr>
                                              
                                              <?php

                                               
                                                }

                                                 $req2->closeCursor();
                                                 ?> 
                                              
                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                                
                            </div> <!-- end col -->

                            
                        </div>

                        
                        
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Ensat.
                </footer>

            </div>
            
            
            <!-- Modal -->
      <div id="custom-modal" class="modal-demo">
          <button type="button" class="close" onclick="Custombox.close();">
              <span>&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="custom-modal-title">RESTE  </h4>
          <div class="custom-modal-text text-left">
              <form role="form" action=" ">
                <div class="form-group">
                            <label for="name">Montant </label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                     

                       <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <select name="type" >
                            <option value="espece"> 
                            <option value="espece"> 
                            <option value="espece"> 
                        </div>
                        
                        <div class="form-group">
                            <label for="position">Contact number</label>
                            <input type="text" class="form-control" id="position" placeholder="Enter number">
                        </div>
                        
                        
                        <button type="submit" name="save1" class="btn btn-default waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                    </form>
          </div>
      </div>
            

            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

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
<?php }?>