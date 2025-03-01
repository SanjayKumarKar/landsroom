<?php
class InitHook 
{
	
	var $CI, $isAdminLoggedIn;
	
	function __construct()
	{
		$this->CI = NULL;
	}

	
	/*function InitHook()
	{
		//echo "<br>This is Hook Constructor 22222222";
	}*/
	

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
	
/******************************************Admin Authentication Funstion Start***********************************/	
	function isAdminLoggedIn()
	{
			
		//echo $this->CI->session->userdata(admin_session_uid); die;
		$USER_SESSION_ID = $this->CI->session->userdata('admin_session_uid');
		$USER_SESSION_LOGIN = $this->CI->session->userdata('admin_session_login');
			
			if(!empty($USER_SESSION_ID) and !empty($USER_SESSION_LOGIN))
				return true;
			else
			 	return false;
	}
	
	function authenticateAdminUser()
	{
		$class = $this->CI->router->class;
		$method = $this->CI->router->method;

		// before login
		$controllerMethodArray = array (
			"authenticate"  => array("index","loginSubmitted","forgetPassword","forgetPasswordSubmitted",'lockProfile','lockProfileUnlockedSubmitted','resetPassword','resetPasswordSubmitted')
		);
		
		$returnMatch	=	$this->matchControllerMethod($controllerMethodArray,$class,$method);


		if($returnMatch)
		{
			if($this->isAdminLoggedIn())
			{
				redirect(base_url()."dashboard");
				return false;
			}
		}
		else
		{
			if(!$this->isAdminLoggedIn())
			{
				redirect(base_url()."authenticate");
				return false;
			}
		}
	}
/******************************************Admin Authentication Funstion End***********************************/	



	function matchControllerMethod($allowControllerMethodArr,$class,$method)
	{
		$returnMatch	=	false;
		foreach($allowControllerMethodArr as $key=>$methodArr)
		{
			if($key == $class)
			{
				foreach($methodArr as $methodKey=>$methodValue)
				{
					if($methodValue	==	$method)
					{
						$returnMatch	=	true;
					}
				}
				
			}					
		}
		return $returnMatch;
	}		
		
	function setTemplateData()
	{   
		if($this->CI)
		{
				$this->authenticateAdminUser();
				$this->CI->footer_data['copyright'] 	= '<a href="https://www.wearetechinnovator.com/" target="_blank" style="color: white;">Techinnovator Solutions Pvt. Ltd.</a>';			
				if(!$this->isAdminLoggedIn()){
					$this->CI->template->set_template('single');
				}else{
					$this->CI->template->set_template('main');								
				}	
		}	
	}
}
?>