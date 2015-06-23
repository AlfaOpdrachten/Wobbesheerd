<?php
$json = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.%');
$data = json_decode($json, 1);
var_dump($data);
