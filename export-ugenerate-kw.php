<?php
// prevent browser
if(PHP_SAPI !== 'cli'){ die; }

//error_reporting(0);

require 'constants.php';
require 'vendor/autoload.php';
require 'helpers.php';


$keywords = explode("\n", file_get_contents('keywords.txt'));
$keywords = array_map('trim', $keywords);
$keywords = array_values(array_filter($keywords));


$keywords 	= arr_filter($keywords);

$txt 		= implode("\r\n", $keywords);

file_put_contents('keywords-ungenerate.txt', $txt);
