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

        <title>Modification de formation</title>
        
        <link href="assets/plugins/bootstrapvalidator/src/css/bootstrapValidator.css" rel="stylesheet" type="text/css" />

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
         <link href="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="../assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                                        $cin=$_SESSION['cin'];;
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
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
              <div class="col-sm-12">
                <h4 class="page-title">Modification</h4>
           
              
              </div>
            </div>
            <?php $req3=$bdd->prepare('SELECT * FROM formation WHERE TYPE=? AND DATE_DEBUT=? AND SPECIALITE=?');
                  $req3->execute(array($_GET['type'],
                                       $_GET['datedebut'],
                                       $_GET['specialite']));
                  $data3=$req3->fetch();
                  ?>
                        <div class="row">
              <div class="col-sm-12">
                <div class="card-box">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="p-20">
                        <form action="formation-update.php" method="post">
                           <div class="form-group ">
                            <label>Date debut* </label>
                            <input type="date" name="datedebut"  value="<?= $data3['DATE_DEBUT'] ?>"  class="form-control">
                            
                          </div>
                          <div class="form-group ">
                            <label>Date fin* </label>
                            <input type="date" name="datefin" value="<?= $data3['DATE_FIN'] ?>" class="form-control">
                            
                          </div>
                            <div class="form-group ">
                            <label>Specialite* </label>
                        <input type="text"  name="specialite" value="<?= $data3['SPECIALITE'] ?>" class="form-control">
                      </div>
                        
                        
                          <div class="form-group m-b-0">
                            <input type="hidden" name="type" placeholder=""  value="<?=$_GET['type']?>" class="form-control">
                            
                          </div>
                          <div class="form-group m-b-0">
                            <input type="hidden" name="datedebut-old" placeholder=""  value="<?=$_GET['datedebut']?>" class="form-control">
                            
                          </div>
                          <div class="form-group m-b-0">
                            <input type="hidden" name="specialite-old" placeholder=""  value="<?=$_GET['specialite']?>" class="form-control">
                            
                          </div>
                          
                                 
                          
    
                        <!--</form>-->
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="p-20">

                       <div class="form-group">
                            <label>Responsable</label>
                           
                          <select name="responsable"  class="selectpicker" data-style="btn-primary btn-custom">
                               <?php 
                            $req2=$bdd->query('SELECT * FROM professeur ');
                            while($data2=$req2->fetch()) { 
                               if($data2['CIN']==$data3['RESPONSABLE'])
                               {
                                  echo' <option  selected value='.$data2['CIN'].'>'. $data2['NOM'].'  '.$data2['PRENOM'].'</option>';
                              }
                             else{ 
                             echo' <option value='.$data2['CIN'].' >'.$data2['NOM'].'  '.$data2['PRENOM'].' </option>';
                               } 
                             }
                                $req2->closeCursor(); ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label>PreRequis*</label>
                              <input type="text" name="prerequis" value="<?= $data3['PRE_REQUIS'] ?>" class="form-control">
                              
                          </div>
                     
                          <div class="form-group m-b-0">
                            <label>Lien Web </label>
                            <input type="text" value="<?= $data3['LIEN_WEB'] ?>" name="lien" class="form-control">
                            
                          </div>
                    
                          <div class="form-group text-right m-b-0">
                          <br>
                      <button class="btn btn-primary waves-effect waves-light" name="update" type="submit">
                        Enregistrer 
                      </button>
                      <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                        Annuler 
                      </button>
                    </div>
                    
    
                    </div>
                    </div>
                    </form>
                     <?php
                     $req3->closeCursor();
                      
                   ?>
                  </div>
                  
                </div>
              </div>
            </div>
           
            
            

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
         <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        
        <script type="text/javascript" src="../assets/plugins/parsleyjs/dist/parsley.min.js"></script>
        
        
        <script type="text/javascript">
      $(document).ready(function() {
        $('form').parsley();
      });
    </script>


  </body>
</html>
<?php } ?>