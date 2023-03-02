<?php
session_start();
session_destroy();?> 

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="../assets/images/logo_dark.png">

		<title>Lock Screen</title>

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
	
	<body>
  <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div high=" 100px"class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="icon-magnet icon-c-logo"></i><span><img class="logoensat" src="../assets/images/logo_dark.png"/>F<i class="md md-album"></i>rmati<i class="md md-album"></i>ns c<i class="md md-album"></i>ntinues</span></a>
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
		<div class="account-pages"></div>
		<div class="clearfix" ></div>
		<div class="wrapper-page" style="position: absolute; left:470px; top:100px;">
			<div class=" card-box">
				 <?php 
				 include_once("DB_connect.php");
				
                    
                    ?>
				
				<div class="panel-body">
					<form method="post" action="lockscreen2-edit.php" role="form" class="text-center">
						<div class="user-thumb">
							<img src="<?=$_GET['photo']?>" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
						</div>
						<div class="form-group">
							<h3><?php 
								
								$req = $bdd->prepare('SELECT login FROM authentification where cin= ?');
								$req->execute(array($_GET['cin']));
								$data=$req->fetch();
								$req->closeCursor();
								echo $data['login'];
							?></h3>
							<p class="text-muted">
								Enter your password to access the admin.
							</p>
							<div class="input-group m-t-30">

								<input type="password" name="mdp" class="form-control" placeholder="Password" required="">
								<input type="hidden" name="cin"   class="form-control" value="<?=$_GET['cin']?>" >
								<input type="hidden" name="login" class="form-control" value="<?=$data["login"]?>" >

								<span class="input-group-btn">
									<button type="submit"  name="env" class="btn btn-pink w-sm waves-effect waves-light">
										Log In
									</button> 
								</span>
							</div>
						</div>
						
					</form>
       

				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						Not <?php echo $data['login'];?>?<a href="../index.php" class="text-primary m-l-5"><b>Sign In</b></a>
					</p>
				</div>
			</div>

		</div>
<footer class="footer" style="position: absolute; right: 0px; left: 0px;" >
                 
                

<div style=" position:absolute; left:300px;">

                 <strong>Contactez-nous: </strong>
                 

                 
												<i class="glyphicon glyphicon-envelope"></i> Email: info@ensat.ac.ma
											
												<i class="glyphicon glyphicon-home"></i> Adresse: BP 1818 Tanger Principal  Tanger
											
												<i class="glyphicon glyphicon-earphone"></i>Tél: 0539393744
											<br/>
                              
                
                

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

