<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Error 403 :: Wobbesheerd</title>
		<link href="/css/normalize.css" rel="stylesheet">
		<style type="text/css">
			body {
				background: #fcfefb;
				padding: 0;
				margin: 20px 0;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 0.8em;
			}

			a {
				color: #4B7826;
			}

			a:hover {
				text-decoration: none;
			}

			.content {
				border: #eef7e6 4px solid;
				background: white;
				width: 400px;
				margin: 0 auto;
			}

			.content2 {
				border: #CDE6B5 1px solid;	
				padding: 30px;
			}

			h1 {
				color: #4B7826;
				font-weight: normal;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="content2">
				<h1>Er is een fout opgetreden</h1>
				<p>U hebt niet de toestemming om toegang te krijgen tot het gevraagde map of bestand.</p>
				<h4>Suggesties:</h4>
				<ul>
					<li><a href="http://www.wobbesheerd.nl/">Ga naar de homepagina.</a></li>
					<li><a href="<?php echo($_SERVER['HTTP_REFERER']); ?>" onclick="javascript:history.back();return false;">Ga naar de vorige pagina.</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>