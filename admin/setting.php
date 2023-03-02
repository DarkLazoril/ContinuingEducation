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

        <title>Settings</title>

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div high=" 100px"class="topbar-left">
                    <div class="text-center">
                        <a href="../#" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Changer login <strong class="text-custom">&</strong> mot de passe </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="modification.php" method="post">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="login" required="required" placeholder=" nouveau/ancien login">
							</div>
						</div>


						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="password" name="old" required="required" placeholder="ancien mot de passe">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="password" name="new" required="required" placeholder="nouveau mot de passe">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" name="new1" required="required" placeholder="confirmer le nouveau mot de passe ">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="env" type="submit">
									valider
								</button>
							</div>
                            
						</div>

					</form>
                    
                  
				</div>

			</div>

			

		</div>
<footer class="footer" style="position: absolute; right: 0px; left: 0px;" >
                 
                

<div style=" position:absolute; left:300px;">

                 <strong>Contactez-nous: </strong>
                 

                 
                                                <i class="glyphicon glyphicon-envelope"></i> Email: info@ensat.ac.ma
                                            
                                                <i class="glyphicon glyphicon-home"></i> Adresse: BP 1818 Tanger Principal  Tanger
                                            
                                                <i class="glyphicon glyphicon-earphone"></i>Tél: 0539393744
                                            <br>
                              
                
                

</div>
                </footer>
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
<?php }?>