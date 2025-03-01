<?php
class InitHook 
{
	var $CI;
	
	function __construct()
	{
		$this->CI = NULL;
	}

	function loadCustomCommonFunctions()
	{
		require_once(APPPATH.'third_party/functions.php');
	}

	function initPreController()
	{

	}

	function initPostController()
	{
		$this->CI =& get_instance();
		$this->setTemplateData();
	}

	function setTemplateData()
	{   
		if($this->CI)
		{
			$this->CI->common_data['copyright'] 	= 'Designed &amp; Maintained by <a href="https://www.wearetechinnovator.com/" target="_blank">TechInnovator</a>';		
			$this->CI->common_data['author']	= 'TECHINNOVATOR SOLUTIONS PVT LTD';
			$this->CI->template->set_template('main');
		}	
	}
}

?>