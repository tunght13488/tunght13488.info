<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('script_tag'))
{
	function script_tag($src = '', $type = 'text/javascript', $index_page = FALSE)
	{
		$CI =& get_instance();

		$script = '<script ';

		if (is_array($src))
		{
			foreach ($src as $k=>$v)
			{
				if ($k == 'src' AND strpos($v, '://') === FALSE)
				{
					if ($index_page === TRUE)
					{
						$script .= 'src="'.$CI->config->site_url($v).'" ';
					}
					else
					{
						$script .= 'src="'.$CI->config->slash_item('base_url').$v.'" ';
					}
				}
				else
				{
					$script .= "$k=\"$v\" ";
				}
			}

			$script .= "></script>";
		}
		else
		{
			if ( strpos($src, '://') !== FALSE)
			{
				$script .= 'src="'.$src.'" ';
			}
			elseif ($index_page === TRUE)
			{
				$script .= 'src="'.$CI->config->site_url($src).'" ';
			}
			else
			{
				$script .= 'src="'.$CI->config->slash_item('base_url').$src.'" ';
			}

			$script .= 'type="'.$type.'" ';
			$script .= "></script>";
		}


		return $script;
	}
}

if ( ! function_exists('hr'))
{
	function hr($str = '')
	{
		return '
        <div style="height:1px; border-bottom:1px solid #e1e1e1; text-align:center; margin-bottom:30px; margin-top:25px;">
            <h3 style="background:#fff; display:inline-block; position:relative; top:-46px; padding:10px;">'.$str.'</h3>
        </div>
        ';
	}
}


/* End of file MY_html_helper.php */
/* Location: ./application/helpers/MY_html_helper.php */