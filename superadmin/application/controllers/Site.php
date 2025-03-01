<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller 
{	
	
//Set Common things for this controller*************************************************************
	function __construct()
	{
		$COMMON=array();
		
        parent::__construct();
        $this->COMMON['DB']='tb_site';
        $this->COMMON['ID_FIELD']='site_id';
        $this->COMMON['VIEW_CONTROLLER']='site';
		
		//Load Site Details Model
		$this->load->model('siteDetails');
		//Load Add Model
		$this->load->model('AddModel');
		//Load Edit Model
		$this->load->model('EditModel');
		//Load Fetch Model
		$this->load->model('FetchModel');
		//Load Delete Model
		$this->load->model('DeleteModel');
		
		$this->initData();
	}
	

//Initialize Common Details
	private function initData()
	{
		$this->common_data['view_controller'] 	= 	$this->COMMON['VIEW_CONTROLLER'];
		$this->common_data['default_id_field'] 	=	$this->COMMON['ID_FIELD'];
		$this->common_data['title'] 			= 	'Site Details';
		$this->common_data['heading'] 			= 	'Site Setup';
		$this->common_data['description'] 		= 	'Basic info, Logo & Others';
		$this->common_data['SITE'] 				= 	$this->siteDetails->SelectSiteDB();
	}	

	
	
	
	
	
	
//Edit View**********************************************************************************	
	public function edit()
	{
		
		
		//Run SelectDB Function which select data from database
		$FIELD_PAGE='*';
		$CON_PAGE='IsDel="0"';
		$ORDER_PAGE=array('field'=>'page_id','direction'=>'desc');
		$this->common_data['PAGES']=$this->FetchModel->SelectDB($FIELD_PAGE,'tb_page',$CON_PAGE,$ORDER_PAGE);
		
		//Run SelectDB Function which select data from database
		$FIELD_MENU='*';
		$CON_MENU='IsDel="0"';
		$ORDER_MENU=array('field'=>'menu_id','direction'=>'desc');
		$this->common_data['MENU']=$this->FetchModel->SelectDB($FIELD_MENU,'tb_menu',$CON_MENU,$ORDER_MENU);
		
		$this->common_data['view'] 	= 	"Edit";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		//$this->template->write_view('importantButton','common/importantButtonListPage',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/edit',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Edit Form Submission Site Information	
	public function editSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('site_name','Name','required');
		$this->form_validation->set_rules('site_moto','Moto','required');
		$this->form_validation->set_rules('site_email','Email','required|valid_email');		
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'site_name' => $this->input->post('site_name'),
					'site_moto' => $this->input->post('site_moto'),
					'site_home_url' => $this->input->post('site_home_url'),
					'site_primary_menu' => $this->input->post('site_primary_menu'),
					'site_email' => $this->input->post('site_email'),
					'site_contact' => $this->input->post('site_contact'),
					'site_contact_alternative' => $this->input->post('site_contact_alternative'),
					'site_address' => $this->input->post('site_address',false),
					'site_about' => $this->input->post('site_about',false),
					'site_facebook' => $this->input->post('site_facebook'),
					'site_instagram' => $this->input->post('site_instagram'),
					'site_twitter' => $this->input->post('site_twitter'),
					'site_linkedin' => $this->input->post('site_linkedin'),
					'site_pinterest' => $this->input->post('site_pinterest'),
					'site_youtube' => $this->input->post('site_youtube'),
					'site_whatsapp' => $this->input->post('site_whatsapp'),
					'site_whatsapp_number' => $this->input->post('site_whatsapp_number'),
					'site_telegram' => $this->input->post('site_telegram'),
					'site_discourage_search_engine' => $this->input->post('site_discourage_search_engine')
			);
			//Run UpdateDB Function which update data into database
			$CON='';
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/details/'.$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Information can not be Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('id')));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit#tab_1_1'));
		}
	}
	
//Edit Form Submission Logo Change	
	public function editLogoSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('site_logo','Image Field','required');
		$this->form_validation->set_rules('site_fav_icon','FAV Icon','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'site_logo' => $this->input->post('site_logo'),
					'site_logo_reverse' => $this->input->post('site_logo_reverse'),
					'site_fav_icon' => $this->input->post('site_fav_icon')
			);
			//Run UpdateDB Function which update data into database
			$CON='';
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				$this->session->set_userdata('site_logo',$this->input->post('site_logo'));
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/details/'.$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Logo changed successfully.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('id')));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit#tab_1_2'));
		}
	}
	
//Edit Form Submission Metadata Change	
	public function editMetadataSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('site_meta_title','Meta Title','required');
		$this->form_validation->set_rules('site_meta_description','Description','required');
		$this->form_validation->set_rules('site_meta_keyword','Keyword','required');		
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'site_meta_title' => $this->input->post('site_meta_title'),
					'site_meta_description' => $this->input->post('site_meta_description'),
					'site_meta_keyword' => $this->input->post('site_meta_keyword')
			);
			//Run UpdateDB Function which update data into database
			$CON='';
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/details/'.$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Information can not be Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('id')));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit#tab_1_1'));
		}
	}
	
//Edit Form Submission Header/Footer Code Change	
	public function editCodeSubmitted()
	{
			//Set Data into array
			$updateData = array(
					'site_code_header' => $this->input->post('site_code_header',false),
					'site_code_footer' => $this->input->post('site_code_footer',false)
			);
			//Run UpdateDB Function which update data into database
			$CON='';
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/details/'.$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Information can not be Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('id')));
			}
	}
	
//Edit Form Submission Location MAP
	public function editMapSubmitted()
	{
			//Set Data into array
			$updateData = array(
					'site_location_map' => $this->input->post('site_location_map',false),
					'site_location_url' => $this->input->post('site_location_url')
			);
			//Run UpdateDB Function which update data into database
			$CON='';
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','MAP Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/details/'.$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Information can not be Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('id')));
			}
	}
	
	
	
	
	
	

	
	
//Details View**********************************************************************************	
	public function details($id=0)
	{		
		$this->common_data['view'] 	= 	"Details View";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		//$this->template->write_view('importantButton','common/importantButtonListPage',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/details',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
	

}
