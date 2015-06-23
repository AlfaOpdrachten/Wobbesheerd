<?php include('inc/settings.inc.php'); ?>
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Uw Visie :: Wobbesheerd</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-override.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
			<style>.container{max-width: 900px;}</style>
		<![endif]-->
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png?v=rMw5aORP9o">
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png?v=rMw5aORP9o">
		<link rel="icon" type="image/png" href="favicon-32x32.png?v=rMw5aORP9o" sizes="32x32">
		<link rel="icon" type="image/png" href="android-chrome-192x192.png?v=rMw5aORP9o" sizes="192x192">
		<link rel="icon" type="image/png" href="favicon-96x96.png?v=rMw5aORP9o" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-16x16.png?v=rMw5aORP9o" sizes="16x16">
		<link rel="manifest" href="manifest.json?v=rMw5aORP9o">
		<link rel="shortcut icon" href="favicon.ico?v=rMw5aORP9o">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="mstile-144x144.png?v=rMw5aORP9o">
		<meta name="theme-color" content="#ffffff">
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
								<li class="active"><a href="uwvisie.php">Uw Visie <span class="sr-only">(huidige)</span></a></li>
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
					<h1>Uw Visie</h1>
				</div>
				<?php
					$json = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.VISIE.1');
					$data = json_decode($json, 1);
					$text = $data[1]['Text'];
					echo($text);
				?>
				<p><img class="img-responsive alignright" src="upload/visie_floortje.jpg" alt="Visie" width="300" height="237"></p>
				<p>Daarmee bedoelen wij dat wij uw paarden kunnen onderhouden op de manier die U wenst. Wij zijn flexibel om dat gene te doen dat u van ons verlangt voor uw paard.</p>
				<p>In de zomermaanden staan de paarden in goed bijgehouden weilanden, welke regelmatig worden vernieuwd. 's Nachts gaan de paarden weer naar hun eigen stal. De beweiding van de paarden vindt plaats in een omweidesysteem (vaak wisselen van perceel). De ruwvoederwinning voor de winterperiode vindt hoofdzakelijk plaats in de vorm van grassilage (voordroogkuil) . Dit is half gedroogd gras (40-50% droge stof) dat afgesloten van lucht wordt bewaard. De weilanden zijn omheind met elektrische afrastering.</p>
				<p>In de winter staan de paarden in de stal. De paarden tot drie jaar staan in groepen van maximaal 8 dieren. Deze manier van huisvesting heeft belangrijke voordelen ten opzichte van individuele huisvesting in boxen. Het frisse stalklimaat heeft een gunstige invloed op de gezondheid van uw paarden. Bovendien hebben de paarden relatief veel bewegingsvrijheid en contact met soortgenoten. De paarden krijgen onbeperkt ruwvoer verstrekt. Het rantsoen van de veulens wordt aangevuld met ongeveer 2 kg krachtvoer per dag. Het grootste deel van het ruwvoer wordt zelf gewonnen en wordt bewaard in plastic folie gewikkelde balen. Als strooisel in de stallen wordt gebruik gemaakt van tarwestro. Het drinkwater is voorzien van een rondpompsysteem die het water in de leidingen verwarmt, zodat bij vorst de drinkwaterverstrekking aan de paarden niet in het geding komt. De paarden komen dagelijks in de paddock die naast de stal is gelegen. De groepen worden apart naar buiten gelaten in de paddock. Voor paarden ouder dan 3 jaar is het mogelijk om uw paard te stallen in een van onze individuele paardenboxen.</p>
				<p>Voor de opfok van uw paard hanteren wij een aparte prijs voor zowel de zomer- als de wintermaanden. De prijzen zijn exclusief hoefsmid- dierenarts- en entkosten.</p>
				<p>Voor meer informatie inzake de prijzen van het opfokken van uw jonge paard/pony of het stallen van uw paard/pony kunt u met ons contact opnemen.</p>
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
