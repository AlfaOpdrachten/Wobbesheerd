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
				<img id="logo-main" src="img/header-shit.jpg" width="900" height="201" title="Paardenstalling Wobbesheerd" alt="Paardenstalling Wobbesheerd Oostwold">
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
							<a class="navbar-brand" href="#">Wobbesheerd</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Faciliteiten <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">De boerderij</a></li>
										<li><a href="#">Overdekte rijhal</a></li>
										<li><a href="#">De grote buitenbak</a></li>
										<li><a href="#">Kleine buitenbak</a></li>
										<li><a href="#">Paddock</a></li>
										<li><a href="#">Groepsstal voor jonge paarden</a></li>
										<li><a href="#">Individuele stallen met 30 boxen</a></li>
										<li><a href="#">Individuele stallen 10 stuks</a></li>
										<li><a href="#">Groepsstal 10-12 paarden</a></li>
										<li><a href="#">Weide</a></li>
										<li><a href="#">Trailer en auto standplaats</a></li>
									</ul>
								</li>
								<li><a href="#">Uw visie</a></li>
								<li class="active"><a href="#">Contact <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Route</a></li>
								<li><a href="#">Omgeving</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header><!-- header role="banner" -->
			<div class="page-header">
				<h1>Contact</h1>
			</div>
			<p><img class="alignright" src="upload/contact.jpg" alt="Contact" width="300" height="199"></p>
			<p>S.R.&nbsp;Wobbes</p>
			<p>Hoofdstraat 216<br> 9828 PD Oostwold (gem Leek, Gr.)<br> Tel: 050-5515623<br> Mob: 06-15596766</p>
			<p>email: <a href="mailto:info@wobbesheerd.nl">info@wobbesheerd.nl</a></p>
			<p>Als u vragen heeft of op zoek bent naar verdere mogelijkheden, neemt u dan contact op met ons. Wij staan u graag te woord.</p>
			<p>Met vriendelijke groet,<br>Reinier Wobbes</p>
			<p><a href="mailto:info@wobbesheerd.nl">info@wobbesheerd.nl</a></p>
			<p>* <span style="font-size: xx-small;">Is niet verplicht&nbsp;</span></p>
			<form name="FormHandler" method="post" action="./bestanden/Wobbesheerd __ Contact.html">
			<input type="hidden" name="FormHandler_submit" id="FormHandler_submit" value="1">

			<table border="0" cellspacing="0" cellpadding="3">
			<tr> 
				<td valign="top">Uw naam : &nbsp;</td> 
				<td valign="top"><input type="text" name="Uwnaam" id="Uwnaam" value="" size="20">   &nbsp;</td> 
			</tr>
			<tr> 
				<td valign="top">Email : &nbsp;</td> 
				<td valign="top"><input type="text" name="Email" id="Email" value="" size="30">   &nbsp;</td> 
			</tr>
			<tr> 
				<td valign="top">Telefoon *  : &nbsp;</td> 
				<td valign="top"><input type="text" name="Telefoon" id="Telefoon" value="" size="20">   &nbsp;</td> 
			</tr>
			<tr> 
				<td valign="top">Bericht : &nbsp;</td> 
				<td valign="top"><textarea name="Bericht" id="Bericht" cols="40" rows="10"></textarea>   &nbsp;</td> 
			</tr>
			<tr> 
				<td valign="top">  &nbsp;</td> 
				<td valign="top"><input type="submit" value="Verzend" name="button1" id="button1">   &nbsp;</td> 
			</tr>
			</table>
			</form>
			<footer class="footer">
				<p>&#169; Company 2014</p>
			</footer>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>