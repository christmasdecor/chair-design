<?php
// prevent browser
if(PHP_SAPI !== 'cli'){ die; }
require 'constants.php';

$seo = SEO_PATH;

if($seo)
{
	if (file_exists("export/html/{$seo}"))
	{
		foreach (glob("export/html/{$seo}/*.html") as $file) {
			unlink($file);
		}
	}
}

foreach (glob('export/*.xml') as $file) {
	unlink($file);
}

foreach (glob('export/html/*.html') as $file) {
	unlink($file);
}

foreach (glob('export/html_*', GLOB_ONLYDIR) as $dir) {

	echo $dir.PHP_EOL;

	foreach (glob("{$dir}/*.html") as $file) {
		unlink($file);
	}
	
	foreach (glob("{$dir}/p/*.html") as $file) {
		unlink($file);
	}


	unlink("{$dir}/sitemap.xml");
	rmdir("{$dir}/p/");
	rmdir($dir);
}



echo "Data cleared\n";