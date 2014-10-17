<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assignment Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="shortcut icon" href="partials/favicon.ico" type="image/x-icon">
	<link rel="icon" href="partials/favicon.ico" type="image/x-icon">
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<style>
	.navbar-brand{
		padding: 8px;
	}
	#sidebar-wrapper{
		margin-top: 32px;
	}
	#header-name{
		margin-bottom: 46px;
	}
	#static-navbar{
		background-color:black;
		height:32px;
		padding:0px;
		
	}
	<!-- Still more style than you, boom roasted.-->
</style>

<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" id="header-name">
                    <a href="navbar.php" >
                        <p>Andrew Bowman's</p> 
						<p>Assignment Portal</p>
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

		<!-- Static navbar -->
		<div class="navbar navbar-default" role="navigation" id="static-navbar">
			<div class="container-fluid">
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" ><i class="fa fa-bars fa-2x" id="menu-toggle"></i></a>
				</div>
				<div class="navbar-collapse collapse" >
					<ul class="nav navbar-nav">
					  <li class="active"><a href="#">Link</a></li>
					  <li><a href="#">Link</a></li>
					  <li><a href="#">Link</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li class="dropdown-header">Nav header</li>
						  <li><a href="#">Separated link</a></li>
						  <li><a href="#">One more separated link</a></li>
						</ul>
					  </li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li class="active"><a href="./">Default</a></li>
					  <li><a href="../navbar-static-top/">Static top</a></li>
					  <li><a href="../navbar-fixed-top/">Fixed top</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</div>
		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						
                        <h1>Simple Sidebar</h1>
                        <p>This is a test of the <<code>audio</code>> Tag </p>
						<audio src="partials/cominhome.mp3" controls="controls" >
							Your browser does not support the audio element. Requires HTML5
						</audio>
                    </div>
                </div>
            </div>
        </div>
		
		<?php
			switch($_GET['content']){
				case 'register': include("partials/register.php");
								  break;
				case 'dashboard': echo"your momma";
								  break;
				case 'testing': include("partials/forms.php");
								  break;
				default : include("partials/default.php");
			}
		?>
	
		
		
		
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
