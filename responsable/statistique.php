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

        <title>Profil</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="../../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
                            <div class="pull-left">
                               
                                <span class="clearfix"></span>
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
                                <a href="dashboard_2.html" class="waves-effect"><i class="ti-bar-chart"></i><span> Statistiques</span></a>
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
                        <?php $req=$bdd->prepare('SELECT TYPE,DATE_DEBUT,SPECIALITE from formation where RESPONSABLE=?  ');
                              $req->execute(array($_SESSION['cin']));
                              $data1=$req->fetch();
                              $req->closeCursor();
                              ?>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                         <?php     $req=$bdd->prepare('SELECT SUM(montant_for) as nbt,count(*) as nbe from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT']));
                                        $data2=$req->fetch();
                                        $req->closeCursor();?>

                               <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?=$data2['nbe']?></h2>
                                    <div class="text-muted m-t-5">Etudiants</div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                              <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-attach-money text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?=$data2['nbt']?></h2>
                                    <div class="text-muted m-t-5">Total A Payer</div>
                                </div>
                            </div>
                             <?php     
                                        $req=$bdd->prepare('SELECT SUM(SALAIRE) as sal,count(*) as nbp from professeur,prof_from  where professeur.CIN=prof_from.CIN AND TYPE=? AND SPECIALITE=? AND DATE_DEBUT=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT']));
                                        $data2=$req->fetch();
                                        $req->closeCursor();?>
                             <div class="col-md-6 col-lg-3">
                               <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?=$data2['nbp']?></h2>
                                    <div class="text-muted m-t-5">Professeurs</div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                              <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-attach-money text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600"><?=$data2['sal']?></h2>
                                    <div class="text-muted m-t-5">Total Salaire</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                  <?php $req=$bdd->prepare('SELECT SUM(montant_for) as nbt,SUM(montant_rest) as nbr from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT']));
                                        $data2=$req->fetch();
                                        $req->closeCursor();

                                        function floorp($val, $precision)
                                        {
                                         $mult = pow(10, $precision);
                                         return floor($val * $mult) / $mult;
                                        }

                                        ?>
                                        
                            <div class="col-lg-4">
                            <div class="card-box">
                              <h4 class="text-dark header-title m-t-0 m-b-30">Echéances Payées (%) </h4>

                              <div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#5d9cec" value="<?=floorp(($data2['nbt']-$data2['nbr'])*100/$data2['nbt'],2)?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                    <h5 class="text-muted m-t-20">Montant</h5>
                                    <h2 class="font-600"><?=$data2['nbt']-$data2['nbr']?> MAD</h2>
                                   <br/>
                                   <br/>
                                  </div>
                            </div>

                            </div>

                            <div class="col-lg-8">
                                        <?php $req=$bdd->prepare('SELECT SUM(montant) as ech1 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=1 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech1=$req->fetch();
                    $req->closeCursor();
                  $req=$bdd->prepare('SELECT SUM(montant) as ech2 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=2 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech2=$req->fetch();
                    $req->closeCursor();
                  $req=$bdd->prepare('SELECT SUM(montant) as ech3 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=3 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech3=$req->fetch();
                    $req->closeCursor();
                                  
                     ?> 

                     <div class="card-box">
                  <h4 class="text-dark header-title m-t-0">Avancement budget</h4>
                  <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                      <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>La 1ère Echéance: <?=$ech1['ech1']?> MAD</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>La 2ème Echéance: <?=$ech2['ech2']?> MAD</h5>
                    </li>
                    <?php if($data1['TYPE']=='dcess'){?>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>La 3ème Echéance: <?=$ech3['ech3']?> MAD</h5>
                    </li>
                    <?php }?>
                    </ul>
                  </div>
                   <?php if($data1['TYPE']=='dcess'){?>

                                <div align="center">
                                  <span  data-plugin="peity-pie" data-colors="#5fbeaa,#5d9cec,#36404a" data-width="222" data-height="222"><?=$ech1['ech1']?>,<?=$ech2['ech2']?>,<?=$ech3['ech3']?></span> 
                                    
                               </div>
                                <?php }
                                else
                                 { ?>
                                <div align="center">
                                    <span  data-plugin="peity-pie" data-colors="#5fbeaa,#5d9cec" data-width="255" data-height="255"><?=$ech1['ech1']?>,<?=$ech2['ech2']?></span>
                               </div>
                               <?php }?>
                 
                </div>
                            
                            </div>



            </div>
                        <!-- end row -->
                        <div class="row" >
                          
                  <?php $req=$bdd->prepare('SELECT COUNT(*) as ech1 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=1 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech1=$req->fetch();
                    $req->closeCursor();
                  $req=$bdd->prepare('SELECT COUNT(*) as ech2 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=2 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech2=$req->fetch();
                    $req->closeCursor();
                  $req=$bdd->prepare('SELECT COUNT(*) as ech3 FROM paiement,etudiant WHERE paiement.cin=etudiant.CIN AND type_echeance=3 AND TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? ');
                      $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'])); 
                     $ech3=$req->fetch();
                    $req->closeCursor();
                                  
                     ?> 
                               <div class="card-box">
                              <h4 class="text-dark header-title m-t-0">Nombre d'étudiants ayant payé </h4>

                              <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>La 1ère Echéance: <?=$ech1['ech1']?> Etudiant(s)</h5>
                                            </li>
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>La 2ème Echéance: <?=$ech2['ech2']?> Etudiant(s)</h5>
                                            </li>
                                            <?php if($data1['TYPE']=='dcess'){?>
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>La 3ème Echéance: <?=$ech3['ech3']?> Etudiant(s)</h5>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                    <?php if($data1['TYPE']=='dcess'){?>

                                <div align="center">
                                    <span data-plugin="peity-bar" data-colors="#5fbeaa,#5d9cec,#36404a" data-width="222" data-height="222"><?=$ech1['ech1']?>,<?=$ech2['ech2']?>,<?=$ech3['ech3']?></span> 
                               </div>
                                <?php }
                                else
                                 { ?>
                                <div align="center">
                                    <span data-plugin="peity-bar" data-colors="#5fbeaa,#5d9cec" data-width="222" data-height="222"><?=$ech1['ech1']?>,<?=$ech2['ech2']?></span> 
                               </div>
                               <?php }?>
                            </div>
                          </div>
                          <!-- end col -->

                        

               <div class="row">
                           <div class="col-lg-4">
                             <?php     $req=$bdd->prepare('SELECT count(*) as m from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? AND SEXE=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'],'M'));
                                        $m=$req->fetch();
                                        $req->closeCursor();
                                        $req=$bdd->prepare('SELECT count(*) as f from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? AND SEXE=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'],'F'));
                                        $f=$req->fetch();
                                        $req->closeCursor();?>
                             <div class="card-box">
                  <h4 class="text-dark header-title m-t-0">Etudiants par sexe:</h4>
                  <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                      <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Homme: <?=$m['m']?></h5>
                        
                      </li>
                      <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #fb6d9d;"></i>Femme: <?=$f['f']?></h5>
                      </li>
                    </ul>
                  </div>
                  <div align="center">
                  <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#fb6d9d", "#5d9cec"], "innerRadius": 80, "radius": 110 }'><?=$f['f']?>/<?=($f['f']+$m['m'])?></span> 
                 </div>
                </div>
              </div>

                            <div class="col-lg-8">
                             <div class="card-box">
                               <?php     $req=$bdd->prepare('SELECT count(*) as m from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? AND TYPE_DIPLOME=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'],'DEUG'));
                                        $m=$req->fetch();
                                        $req->closeCursor();
                                        $req=$bdd->prepare('SELECT count(*) as f from etudiant where TYPE_FOR=? AND SPECIALITE_FOR=? AND DATE_DEBUT_FOR=? AND TYPE_DIPLOME=?');
                                        $req->execute(array($data1['TYPE'],$data1['SPECIALITE'],$data1['DATE_DEBUT'],'LICENCE'));
                                        $f=$req->fetch();
                                        $req->closeCursor();?>
                  <h4 class="text-dark header-title m-t-0">Niveau de parcours des etudiants:</h4>
                  <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                      <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #34d3eb ;"></i>LICENCE: <?=$f['f']?> Etudiant(s)</h5>
                      </li>
                      <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #f05050;"></i>DEUG: <?=$m['m']?> Etudiant(s)</h5>
                        
                      </li>
                    </ul>
                  </div>
                  <div align="center">
                  <span  data-plugin="peity-pie" data-colors="#f05050,#34d3eb ," data-width="222" data-height="222"><?=$m['m']?>,<?=$f['f']?></span> 
                 </div>
                </div>
              </div>
                            

                      

                            <!-- col -->
              



                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Ensat.
                </footer>

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

        <script src="../assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="../assets/plugins/morris/morris.min.js"></script>
        <script src="../assets/plugins/raphael/raphael-min.js"></script>

        <script src="../assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="../assets/pages/jquery.dashboard.js"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>
<?php } ?>