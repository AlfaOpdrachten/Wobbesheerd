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
								<li class="active"><a href="uwvisie.php">Uw visie <span class="sr-only">(huidige)</span></a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="route.php">Route</a></li>
								<li><a href="omgeving.php">Omgeving</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header><!-- header role="banner" -->
			<div class="page-content">
				<div class="page-header">
					<h1>Uw visie</h1>
				</div>
				<p><img class="alignright" src="upload/contact.jpg" alt="Contact" width="300" height="199"></p>
				<p>S.R. Wobbes</p>
				<p>Hoofdstraat 216<br> 9828 PD Oostwold (gem Leek, Gr.)<br> Tel: 050-5515623<br> Mob: 06-15596766</p>
				<p>email: <a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>
				<p>Als u vragen heeft of op zoek bent naar verdere mogelijkheden, neemt u dan contact op met ons. Wij staan u graag te woord.</p>
				<p>Met vriendelijke groet,<br>Reinier Wobbes</p>
				<p><a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>
				<p class="text-danger">* <span class="small">Is niet verplicht</span></p>
                <form method="post" action="formulierverzenden.php" class="contactformulier">

                        <table class="table">
                            <tr>
                                <td>Naam:</td>
                                <td>
                                    <input type="text" name="naam"  placeholder="Naam">
                                </td>
                            </tr>
                            <tr>
                                <td>E-mail adres:</td>
                                <td><input type="email" name="email"  placeholder="voorbeeld@mail.nl"></td>
                            </tr>
                            <tr>
                                <td>Telefoon Nummer*:</td>
                                <td>
                                    <input type="tel" name="nummer"  placeholder="0612345678">
                                </td>
                            </tr>
                            <tr>
                                <td>Uw bericht:</td>
                                <td>
                                    <textarea cols="50" rows="4" name="bericht" placeholder="Typ hier uw bericht"></textarea>
                                </td>
                            </tr>
                        </table><br>
                        <input type="submit" name="versturen" value="Verstuur bericht" />

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