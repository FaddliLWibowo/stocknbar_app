<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Static url
if ($_SERVER['HTTP_HOST'] == 'stocknbar.app' OR $_SERVER['HTTP_HOST'] == 'www.stocknbar.app') {
	$config['static_url'] = 'http://static.stocknbar.app';
} elseif ($_SERVER['HTTP_HOST'] == 'stocknbar.com' OR $_SERVER['HTTP_HOST'] == 'www.stocknbar.com') {
	$config['static_url'] = 'http://static.stocknbar.com';
} else {
	$config['static_url'] = 'http://localhost/static';
}

$config['app_version'] 	= 'MVP - 20 Agustus 2015';
$config['app_name'] 	= 'Stock N\' Bar';

$config['legal_name'] 	= 'PT. Startup Asia';
$config['legal_number'] = '-';
$config['legal_npwp'] 	= '-';
$config['legal_siup'] 	= '-';

$config['title']		= 'Stock N\' Bar';
$config['site_name']	= 'Stocknbar';

$config['seo_description']	= 'Reveal urban startups to get investment on the great ideas.';
$config['seo_keyword']		= 'startups database, investor database, concept, international startup exchange';

$config['google_site_verification']	= '8Cwz0XYIZytEn86e1dZzjYPdbrJ1ZiPUCRdlrNF_lIA';
$config['detectify_verification']	= '';

