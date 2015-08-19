<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['app_version'] 	= '20 Agustus 2015';
$config['app_name'] 	= 'Stock & Bar';
$config['legal_name'] 	= 'PT. Startup Nusantara';

//Static url
switch ($_SERVER['HTTP_HOST']) {
	case 'stocknbar.app':
		$config['static_url'] = 'http://static.stocknbar.app';
		break;

	case 'stocknbar.com':
		$config['static_url'] = 'http://static.stocknbar.com';
		break;

	default:
		$config['static_url'] = 'http://localhost/static';
		break;
}