<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] 	= array();
$autoload['libraries'] 	= array('database', 'session', 'encrypt');
$autoload['helper'] 	= array('url', 'stocknbar');
$autoload['config'] 	= array('stocknbar');
$autoload['language'] 	= array();
$autoload['model'] 		= array(
							'initial',
							'm_subscriber_startups',
							'm_subscriber_investors'
						);
