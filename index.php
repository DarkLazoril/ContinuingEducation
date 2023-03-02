
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/logo_dark.png">

		<title>Connexion</title>
		
		<!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery.steps/demo/css/jquery.steps.css" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	
	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div high=" 100px"class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
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

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
            <br><br><br>
			
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Accés au compte <strong class="text-custom">utilisateur</strong> </h3>
            </div> 


            <div class="panel-body">
            <form method="post" class="form-horizontal m-t-20" action="traitement.php">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input name="login" class="form-control" type="text" required placeholder="Nom utilisateur">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input name="pwd" class="form-control" type="password" required placeholder="Mot de passe">
                    </div>
                </div>
				
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Garder ma session active
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" name="env">Connexion</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Mot de passe oublié?</a>
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!--Form Validation-->
        <script src="assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

	
	</body>
</html>
