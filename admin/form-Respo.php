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

        <title>Responsable</title>
        
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
                            <div class="pull-left">
                               
                                <span class="clearfix"></span>
                            </div>

                           
               
                 
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
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Liste </span></a>  
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
                <h4 class="page-title">Veuillez entrer les renseignements suivants:</h4><br/>
                <!--<ol class="breadcrumb">
                  <li>
                    <a href="#">Ensat</a>
                  </li>
                  <li>
                    <a href="#">Forms</a>
                  </li>
                  <li class="active">
                    Form Masks
                  </li>
                </ol>-->
              </div>
            </div>

                        <div class="row">
              <div class="col-sm-12">
                <div class="card-box">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="p-20">
                        <form action="" method="post" enctype="multipart/form-data" >
                          <div class="form-group">
                            <label>Nom*</label>
                            <input required="required" name="Nom" type="text" placeholder=""  class="form-control">
                            
                          </div>
                          <div class="form-group">
                            <label>Prenom*</label>
                            <input required="required" name="Prenom" type="text" placeholder="" class="form-control">
                            
                          </div>
                          
                          <div class="form-group">
                            <label>Cin</label>
                              <input required="required" name="Cin" type="text" placeholder="" class="form-control">
                              
                          </div>
                     
                          
                          <div class="form-group m-b-0">
                            <label>Date de naissance </label>
                            <input  name="ddn" type="date" placeholder=""  class="form-control">
                            
                          </div>
                          <br/>
                                  <div class="form-group m-b-0">
                            <label>Sexe </label>

                            <select name="sexe" class="selectpicker" data-style="btn-primary btn-custom">
                              <option  value="H">Homme</option>
                              <option   value="F">Femme</option>

                              </select> 
                          </div>
                          <br/>
                       <div class="form-group m-b-0">
                            <label>Department</label>
                            <input  name="dept" type="text"   placeholder=""  class="form-control">
                            
                          </div>
                         
                         
                                 
                          
    
                        <!--</form>-->
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="p-20">
                        <!--<form action="#"> -->
             <div class="form-group m-b-0">
                            <label>Salaire </label>
                            <input  name="salaire" type="text"   placeholder="Salaire"  class="form-control">
                            
                          </div>
              <br/>
                           <div class="form-group m-b-0">
                            <label>Lien blog </label>
                            <input  name="lb" type="text"  placeholder=""  class="form-control">
                            
                          </div>
                          <br/>
                     
                          <div class="form-group m-b-0">
                            <label>Biographie </label>
                            <input  name="biog" type="textarea"    class="form-control">
                            
                          </div>
                           
                            <br/>
                          
                          <div class="form-group m-b-0">
                            <label>Tel </label>
                            <input  name="Tel" type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                            
                          </div>
                          <div class="form-group m-b-0">
                            <label>Email* </label>
                            <input required="required" name="Email" type="text" placeholder="" class="form-control" id="inputEmail3">
                            
                          </div>
                           <div class="form-group m-b-0">
                            <label> Adresse </label>
                            <input  name="adrs" type="txt" placeholder=""  class="form-control">
                            
                          </div>

                          <div class="form-group m-b-0">
                            <label class="control-label">Photo</label>
                            <input  name="photo" type="file" class="filestyle" data-buttonname="btn-primary">
                          </div>
                        <br/>
                    
                          <div class="form-group text-right m-b-0">
                          <br>
                      <button class="btn btn-primary waves-effect waves-light" type="submit" name="valider">
                        Enregistrer 
                      </button>
                      <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                        Annuler 
                      </button>
                    </div>
                    
    
                        </form>
                        <?php if(isset($_POST['valider']) )
                          {
                            // traitement upload photo
                               $dest_dir="../uploads_photo/";
                                  $nom_file=$dest_dir.basename($_FILES['photo']['name']);
                                  $temp_name=$_FILES['photo']['tmp_name'];    

                                  if(!is_uploaded_file($temp_name))
                                    echo "can't upload the file";
                               
                                  if(!move_uploaded_file($temp_name, $nom_file))
                                   echo"file can't be uploaded to the given destination";


                            $req = $bdd->prepare('INSERT into professeur values(?,?,?,?,?,?,?,?,?,?,?,?,?)');
                            $req->execute(array($_POST['Cin'],
                                      $_POST['Nom'],
                                      $_POST['Prenom'],
                                      $_POST['sexe'],
                                      $_POST['ddn'],
                                      $_POST['Email'],
                                      $_POST['adrs'],
                                      $_POST['Tel'],
                                      $_POST['dept'],
                                      $nom_file,
                                      $_POST['lb'],
                                      $_POST['biog'],
                                      $_POST['salaire']));
                            $req->closeCursor();

                            // association de login et mot de passe:
                            $pass=hash('md5', $_POST['Cin']);
                                  $req=$bdd->prepare('INSERT INTO authentification(login,mdp,profil,cin) VALUES(?,?,?,?)');
                               $req->execute(array($_POST['Nom'],$pass,'r',$_POST['Cin']));
                              $req->closeCursor();
                              //$userCin  should be replaced with $_SESSION['cin']
                            $userCin=$_SESSION['cin'];
                            
                            $req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
                            $req1->execute(array($userCin));
                            $data=$req1->fetch();
                            $username=$data['nom'];
                            $req1->closeCursor();
                               // operation ajoute au table audit

                            $operation=' a ajouter un Responsable :  '.$_POST['Nom'].' '.$_POST['Prenom'];

                            $req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
                            $req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
                            $req2->closeCursor();


                          }
                          ?>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            

                <footer class="footer">
                    2015 © Ensat.
                </footer>

            </div>
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
           


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

        
        <script type="text/javascript" src="../assets/plugins/parsleyjs/dist/parsley.min.js"></script>
        
        
        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>
   
     

 


     <script src="../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


	</body>
</html>
<?php } ?>