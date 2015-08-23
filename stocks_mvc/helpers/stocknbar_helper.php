<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('static'))
{
	function static_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->static_url($uri);
	}
}

if ( ! function_exists('static_base_url'))
{
	function static_base_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->static_base_url($uri);
	}
}

if ( ! function_exists('site_name'))
{
	function site_name($site_name = '')
	{
		$CI =& get_instance();
		if ($site_name == '') {
			$site_name = $CI->config->stocknbar_config('site_name');
		}
		return $site_name;
	}
}

if ( ! function_exists('title'))
{
	function title($title = '')
	{
		$CI =& get_instance();
		if ($title == '') {
			$title = $CI->config->stocknbar_config('title');
		}
		return $title;
	}
}

if ( ! function_exists('google_verify'))
{
	function google_verify()
	{
		$CI =& get_instance();
		$google_verify = $CI->config->stocknbar_config('google_site_verification');
		return $google_verify;
	}
}

if ( ! function_exists('detectify_verify'))
{
	function detectify_verify()
	{
		$CI =& get_instance();
		$detectify_verify = $CI->config->stocknbar_config('detectify_verification');
		return $detectify_verify;
	}
}

if ( ! function_exists('seo_description'))
{
	function seo_description()
	{
		$CI =& get_instance();
		$seo_description = $CI->config->stocknbar_config('seo_description');
		return $seo_description;
	}
}

if ( ! function_exists('seo_keyword'))
{
	function seo_keyword()
	{
		$CI =& get_instance();
		$seo_keyword = $CI->config->stocknbar_config('seo_keyword');
		return $seo_keyword;
	}
}
