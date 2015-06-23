<?php
$data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.%');
$json = json_decode($data, 1);
echo '<pre>';
var_dump($json);
echo '</pre>'
