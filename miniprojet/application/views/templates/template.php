<!DOCTYPE html>
<html>
<head>
  <title>Web Preparations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">        
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
	
<!--  end of header  -->
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<body>

<!-- 	
Start Barre de navigation 
https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form
-->



		<nav class="navbar navbar-default navbar-inverse" role="navigation">
		
			<div class="container-fluid">
			
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				
		
				 		<ul class="nav navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">login <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Enregistrement</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>		
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
<!-- 	End Barre de navigation -->

		<div id="global">
			<div id="entete">
				<h1>Codeigniter M3104</h1>
			</div>	
			<div id="contenu">
				<?php 
					//$this->load->view($content);
					echo "test<br>";
				?>
			</div>

<!--  end of core  -->
			<div id="pied">
				<strong>&copy; 2018</strong>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> 	
	</body>
</html>
<!--  end of footer  -->
