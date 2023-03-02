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
                  <?php include_once('DB_connect.php'); ?>
  
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                
                            </div>

                           

               <?php 
               



               $env='0';
               $req1 = $bdd->prepare('SELECT COUNT(*) as total FROM demande_attestation WHERE envoye=? AND cin_respo=?'); 
               $req1->execute(array($env,$_SESSION['cin']));
              $data=$req1->fetch();
 ?> 
                 
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"><?= $data['total']; ?></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New <?= $data['total']; ?></span>Demandes d'attestation</li>
                                        <li class="list-group nicescroll notification-list">
                              <?php 
                            
                            $req1->closeCursor();

              $req2 = $bdd->prepare('SELECT nom,prenom,type_for,specialite_for FROM etudiant,demande_attestation WHERE etudiant.cin=demande_attestation.cin AND demande_attestation.envoye=? AND cin_respo=?'); 
               $req2->execute(array($env,$_SESSION['cin']));
                            while($data2=$req2->fetch())
                              { ?>
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading"></h5>
                                                    <p class="m-0">
                                                        <small><?= $data2['nom'];?> <?= $data2['nom'];?> : <?= $data2['type_for']; ?> : <?= $data2['specialite_for'];?> </small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                        <?php     
                             }
                         $req2->closeCursor();
                                  ?>       
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
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
                        
                                    <li><a href="form-Professeur.php">Ajout d'Un Professeur</a></li>
                                    <li><a href="form-Etudiant.php">Ajout d'Un Etudiant</a></li>
                                    <li><a href="form-Module.php">Ajout d'Un Module</a></li>
                                    <li><a href="form-Matiere.php">Ajout d'Une Matière</a></li>
                                </ul>
                            </li>
                           
                              <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Liste </span></a>  
                                <ul class="list-unstyled">
                                  
                                    <li><a href="liste-Professeur.php">Liste Des Professeurs</a></li>
                                    <li><a href="liste-Etudiant.php">Liste Des Etudiants</a></li>
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
                                    <div align="center">
                                 <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" 
                                                        data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Nouvel Evenement</a>
                            </div>
                               
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                              <section id="cd-timeline" class="cd-container">  
                                    <?php
                      $req3=$bdd->query('SELECT * FROM evenement ORDER BY date_event DESC');
                    
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
                                  
                                <!-- cd-timeline-block --> 
                                 <!-- cd-timeline -->
                                  </section> 
                            </div>
                        </div><!-- Row -->
                    </div> <!-- container -->
                               
                </div> 

             <!-- content -->

                <footer class="footer">
                    2015 © Ensat.
                </footer>
               

            </div>
            <div id="custom-modal" class="modal-demo">
                <button type="button" class="close" onclick="Custombox.close();">
                    <span>&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="custom-modal-title">Nouvel Evenement</h4>
                <div class="custom-modal-text text-left">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Titre</label>
                            <input type="text" class="form-control" id="name" name="titre" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="position">Date</label>
                            <input type="date" class="form-control" id="position" name="date" placeholder="Enter position">
                        </div>
                        <div class="form-group">
                            <label for="company">Description</label>
                            <input type="text" class="form-control" id="company" name="description" placeholder="Enter company">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Photo</label>
                            <input type="file" class="filestyle form-control" id="exampleInputEmail1" name="photo" placeholder="Enter email">
                        </div>
                        
                        <button type="submit"name="env" class="btn btn-default waves-effect waves-light">Enregistrer</button>
                        <button type="reset" class="btn btn-danger waves-effect waves-light m-l-10">Annuler</button>
                    </form>
                    <?php if(isset($_POST['env']) && isset($_FILES["photo"]["tmp_name"] ))
                    {
                        // traitement upload photo
                           $dest_dir="../uploads_photo/";
                            $nom_file=$dest_dir.basename($_FILES['photo']['name']);
                            $temp_name=$_FILES['photo']['tmp_name'];    

                            if(!is_uploaded_file($temp_name))
                              exit("can't upload the file");
                         
                            if(!move_uploaded_file($temp_name, $nom_file))
                              echo "file can't be uploaded to the given destination";
                          //$userCin  should be replaced with $_SESSION['cin']
                            $userCin=$_SESSION['cin'];

                            // recuperation du nom du responsable qui a ajoute l'etudiant
                            $req1=$bdd->prepare('SELECT nom FROM professeur WHERE cin=?');
                            $req1->execute(array($userCin));
                            $data=$req1->fetch();
                            $username=$data['nom'];
                            $req1->closeCursor();
                         
                            // operation ajoute au table audit

                            $operation=' a ajoute un nouvel evenement :  '.$_POST['titre'];

                            $req2=$bdd->prepare('INSERT INTO audit (operation,user,username,date_op) VALUES(?,?,?,?) ');
                            $req2->execute(array($operation,$userCin,$username,date('Y-m-d'))); 
                            $req2->closeCursor();
                            // insertion evenent
                            $req3=$bdd->prepare('INSERT INTO evenement (titre,date_event,description,photo) VALUES(?,?,?,?) ');
                            $req3->execute(array($_POST['titre'],$_POST['date'],$_POST['description'],$nom_file)); 
                            $req3->closeCursor();



                    }
                    ?>
                </div>
            </div>
            <!-- ============================================================== -->
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

         <script src="../assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
        <script src="../assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="../assets/plugins/custombox/dist/legacy.min.js"></script>

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