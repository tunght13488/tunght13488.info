<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('mpr'))
{
	function mpr($d, $echo = TRUE)
	{
		if ($echo)
		{
			echo '<pre>'.print_r($d, true).'</pre>';
		}
		else
		{
			return '<pre>'.print_r($d, true).'</pre>';
		}
	}
}

if ( ! function_exists('mprd'))
{
	function mprd($d)
	{
		mpr($d);
		die;
	}
}

if ( ! function_exists('mvr'))
{
	function mvr($d)
	{
		echo '<pre>'.var_dump($d, true).'</pre>';
	}
}

if ( ! function_exists('mvrd'))
{
	function mvrd($d)
	{
		mvr($d);
		die;
	}
}

/* End of file debug_helper.php */
/* Location: ./application/helpers/debug_helper.php */