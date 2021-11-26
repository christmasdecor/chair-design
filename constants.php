<?php
/*
| -------------------------------------------------------------------
| COSTUME CONSTANS
| -------------------------------------------------------------------
*/

define('SITE_NAME',			'sini');//Costum brand
define('SITE_DESCRIPTION',	'Best Wallpaper Ideas website. Search anything about Wallpaper Ideas in this website.');//Costum brand
define('SITE_AUTHOR',		'James');//Costum brand

define('THEME_NAME',		'mdnem');//default - three - popme - lite and mdnem -> (hugo)
define('SEO_PATH',			'');// Add seo path for Article

define('SOURCE_URL',		'https://pinterest.com');
define('SOURCE_NAME',		'pinterest.com');

//ADS CONFIG
define('ADS_LINK',			'#EDIT-WITH-YOUR-ADS');

//IMPORT CONFIG
define('LANG_CODE',			'en-us');//Language Code
define('GOOGLE_SUGGEST',	FALSE);// TRUE or FALSE
define('REQ_IMAGE_SIZE',	'RANDOM');// MEDIUM, LARGE, RANDOM
define('REQ_IMAGE_TYPE',	'RANDOM');// JPG, PNG, WEBP, BMP, GIF, RANDOM
define('REQ_IMAGE_COLOR',	'RANDOM');// RANDOM, TRANSPARENT, WHITE, BLACK, BLACK_WHITE, RED, ORANGE, YELLOW, GREEN, BLUE, TEAL, PURPLE, PINK, GRAY, BROWN
define('CONTENT_MODE',		'RANDOM');// IMAGE_ONLY, IMAGE_ARTICLE , or RANDOM
define('CSE_SITE',			'pinterest.com/pin/');//Index target by website
define('MAX_IMAGE_RESULT',	21);
define('BREAK_TIME',		0);//Sleep in Second
define('MAX_PROXY',			5);

//IMAGE CONFIG
define('USE_CDN',			FALSE);//TRUE / FALSE
define('LAZY_LOAD',			FALSE);//TRUE / FALSE
define('SHOW_DOWNLOAD',		TRUE);//TRUE / FALSE
define('DEFAULT_THUMBNAIL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT');

//EXPORT CONFIG
define('ARTICLE_PER_XML',	700);//MAX ARTICLE
define('BACK_DATE',			'-6 month');//Backdate
define('SHEDULE_DATE',		'+2 month');//Max Schedule
define('WP_CATEGORY',		'home design');

//SYSTEM CONFIG

define('MINIFY_HTML',		FALSE);

$is_cli = FALSE;

if(PHP_SAPI == 'cli')
{
	$is_cli 	= TRUE;
}

define('IS_CLI',			$is_cli);

//RSS CONFIG
define('MAX_RSS',			25);