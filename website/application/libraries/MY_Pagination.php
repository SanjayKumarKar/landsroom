<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Pagination extends CI_Pagination 
{
	
	var $extra_params		= "";

	function __construct()
	{
		parent::__construct();
	}


	function setAdminPaginationStyle(&$config)
	{
		$config['full_tag_open'] = '<div style="" >';
		$config['full_tag_close'] = '</div>';
		
		$config['first_tag_open'] = '<div style="color:#6699CC; border:0px solid #fff; padding:5px; float:left;  " >';
		$config['first_tag_close'] = '</div>';
		
		$config['last_tag_open'] = '<div style="color:#6699CC; border:0px solid #fff; padding:5px; float:left;  ">';
		$config['last_tag_close'] = '</div>';
		
		$config['num_tag_open'] = '<div style="float:left; padding:5px; border:0px solid #FF0000;" >';
		$config['num_tag_close'] = '</div>';
		
		$config['cur_tag_open'] = '<div style="float:left; padding:5px; border:0px solid #FF0000;background-color:#666666; color:#FFFFFF; font-weight:bold; " >';
		$config['cur_tag_close'] = '</div>';
		
		$config['prev_tag_open'] = '<div style="float:left; padding:5px; border:0px solid #FF0000;" >';
		$config['prev_tag_close'] = '</div>';
		
		$config['next_tag_open'] = '<div style="float:left; padding:5px; border:0px solid #FF0000;" >';
		$config['next_tag_close'] = '</div>';

	}




function create_links()
{
		// If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
			return '';
		}
		
		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);
		
		// Is there only one page? Hm... nothing more to do here then.
		if ($num_pages == 1)
		{
			return '';
		}

		// Determine the current page number.
		$CI =& get_instance();

		if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE)
		{
			if ($CI->input->get($this->query_string_segment) != 0)
			{
				$this->cur_page = $CI->input->get($this->query_string_segment);

				// Prep the current page - no funny business!
				$this->cur_page = (int) $this->cur_page;
			}
		}
		else
		{
			if ($CI->uri->segment($this->uri_segment) != 0)
			{
				$this->cur_page = $CI->uri->segment($this->uri_segment);

				// Prep the current page - no funny business!
				$this->cur_page = (int) $this->cur_page;
			}
		}

		$this->num_links = (int)$this->num_links;

		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}

		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = 0;
		}

		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->cur_page > $this->total_rows)
		{
			$this->cur_page = ($num_pages - 1) * $this->per_page;
		}

		$uri_page_number = $this->cur_page;
		$this->cur_page = floor(($this->cur_page/$this->per_page) + 1);

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;

		// Is pagination being used over GET or POST?  If get, add a per_page query
		// string. If post, add a trailing slash to the base URL if needed
		if ($CI->config->item('enable_query_strings') === TRUE OR $this->page_query_string === TRUE)
		{
			$this->base_url = rtrim($this->base_url).'&amp;'.$this->query_string_segment.'=';
		}
		else
		{
			$this->base_url = rtrim($this->base_url, '/') .'/';
		}

  		// And here we go...
		$output = '';

		// Render the "First" link
		if  ($this->cur_page > ($this->num_links + 1))
		{
			$output .= $this->first_tag_open.'<a href="'.$this->base_url.$this->extra_params.'">'.$this->first_link.'</a>'.$this->first_tag_close;
		}
		
		// Render the "previous" link
		if  ($this->cur_page != 1)
		{
			$i = $uri_page_number - $this->per_page;
			if ($i == 0) $i = '0';
			$output .= $this->prev_tag_open.'<a href="'.$this->base_url.$i.$this->extra_params.'">'.$this->prev_link.'</a>'.$this->prev_tag_close;
		}

		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++)
		{
			$i = ($loop * $this->per_page) - $this->per_page;

			if ($i >= 0)
			{
				if ($this->cur_page == $loop)
				{
					$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
				}
				else
				{
					$n = ($i == 0) ? '0' : $i;
					$output .= $this->num_tag_open.'<a href="'.$this->base_url.$n.$this->extra_params.'">'.$loop.'</a>'.$this->num_tag_close;
				}
			}
		}

		// Render the "next" link
		if ($this->cur_page < $num_pages)
		{
			$output .= $this->next_tag_open.'<a href="'.$this->base_url.($this->cur_page * $this->per_page).$this->extra_params.'">'.$this->next_link.'</a>'.$this->next_tag_close;
		}

		// Render the "Last" link
		if (($this->cur_page + $this->num_links) < $num_pages)
		{
			$i = (($num_pages * $this->per_page) - $this->per_page);
			$output .= $this->last_tag_open.'<a href="'.$this->base_url.$i.$this->extra_params.'">'.$this->last_link.'</a>'.$this->last_tag_close;
		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;
		
		return $output;
	}


}
