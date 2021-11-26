<?php
// prevent browser
if(PHP_SAPI !== 'cli'){ die; }
require 'constants.php';
require 'vendor/autoload.php';
require 'helpers.php';

echo "=> generating html export\n";


$seo 		= SEO_PATH;

$seo 		= ($seo)?"{$seo}/":"";

$base_url   = "http://domain.com/";

$date 		= date('c',time());

$keywords 	= keywords();
shuffle($keywords);
$list 		= array_chunk($keywords,500);
$sub_count  = count($list);

foreach ($list as $key => $sub_list)
{
	$sub_dir = "export/html_{$key}";

	if(!file_exists($sub_dir))
	{
	    mkdir($sub_dir, 0777, true);
	    sleep(1);
	}

	if($seo)
	{
		if (!file_exists("{$sub_dir}/{$seo}"))
		{
		    mkdir("{$sub_dir}/{$seo}", 0777, true);
		    sleep(1);
		}
	}

	file_put_contents("{$sub_dir}/index.html", view('home', [
		'random_related' => $sub_list
	],false));

	foreach ($sub_list as $keyword)
	{
		$slug = new_slug($keyword);
		$data = get_data($slug);

		$images 			= $data['images']??null;
		if(count($images) < 2){ continue; }

		$data['path'] 	 		= $slug;
		$data['keyword'] 		= $data['images'][0]['keyword'];
		$data['random_related'] = $sub_list;

		$res = view('image', $data, false);

		if(MINIFY_HTML)
		{
			$res = Minify_Html($res);
		}
	    
		file_put_contents("{$sub_dir}/{$seo}{$slug}.html", $res);

		echo "\r\n[\033[32msuccess\033[39m] ==> {$slug}.html\r\n";
	}

	if (!file_exists("{$sub_dir}/p"))
	{
	    mkdir("{$sub_dir}/p", 0777, true);
	    sleep(1);
	}

	foreach (pages() as $page_name)
	{
		$res = view('pages.page', ['page' => $page_name],false);

		if(MINIFY_HTML)
		{
			$res = Minify_Html($res);
		}

		file_put_contents("{$sub_dir}/p/{$page_name}.html", $res);

		echo "\r\n[\033[32msuccess\033[39m] ==> {$page_name}.html\r\n";
	}


    $dt ='';
    $dt .='<?xml version="1.0" encoding="utf-8"?>';
    $dt .='<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.PHP_EOL;
    
    foreach ($sub_list as $kw)
    {
        $path 		= rawurlencode(new_slug($kw));	
        $item_url   = "{$base_url}{$seo}{$path}.html";
        $dt         .="<url><loc>{$item_url}</loc><lastmod>{$date}</lastmod></url>".PHP_EOL;
    }

    $dt .='</urlset>';

	file_put_contents("{$sub_dir}/sitemap.xml", $dt);

	echo "\r\n=> Sitemap Ready..\r\n\r\n";

	echo "\r\n=> Finish HTML {$key}..\r\n\r\n";


}


