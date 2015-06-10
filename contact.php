<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 101 Template</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-override.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<header role="banner">
				<img id="logo-main" src="img/header.jpg" width="900" height="201" title="Paardenstalling Wobbesheerd Oostwold" alt="Paardenstalling Wobbesheerd Oostwold">
				<nav id="navbar-primary" class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">Wobbesheerd</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="faciliteiten.php">Faciliteiten</a></li>
								<li><a href="uwvisie.php">Uw visie</a></li>
								<li class="active"><a href="contact.php">Contact <span class="sr-only">(huidige)</span></a></li>
								<li><a href="route.php">Route</a></li>
								<li><a href="omgeving.php">Omgeving</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header><!-- header role="banner" -->
			<div class="page-content">
				<div class="page-header">
					<h1>Contact</h1>
				</div>
				<p><img class="img-responsive alignright" src="upload/contact.jpg" alt="Contact" width="300" height="199"></p>
				<p>S.R. Wobbes</p>
				<p>Hoofdstraat 216<br> 9828 PD Oostwold (gem Leek, Gr.)<br> Tel: 050-5515623<br> Mob: 06-15596766</p>
				<p>email: <a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>
				<p>Als u vragen heeft of op zoek bent naar verdere mogelijkheden, neemt u dan contact op met ons. Wij staan u graag te woord.</p>
				<p>Met vriendelijke groet,<br>Reinier Wobbes</p>
				<p><a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>
				<p class="text-danger"><span class="small">Velden met</span> * <span class="small">zijn verplicht.</span></p>
				
				
				<form class="form-horizontal" role="form" action="formulierverzenden.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="naam">Naam:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
							<span class="text-danger">*</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">E-mail adres:</label>
						<div class="col-sm-10">          
							<input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl">
							<span class="text-danger">*</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="nummer">Telefoon nummer:</label>
						<div class="col-sm-10">          
							<input type="tel" class="form-control" id="nummer" name="nummer" placeholder="0612345678">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="bericht">Uw bericht:</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht."></textarea>
							<span class="text-danger">*</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Verstuur bericht</button>
						</div>
					</div>
				</form>







			</div><!-- /.page-content -->
			<footer class="footer">
				<address>
					Hoofdstraat 216<br>
					9828 PD Oostwold<br>
					Tel: 050-5515623<br>
					Mob. 06-15596766 <br>
					Email: <span class="email"><a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></span><br>
				</address>	
			</footer>
		</div><!-- /.container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>