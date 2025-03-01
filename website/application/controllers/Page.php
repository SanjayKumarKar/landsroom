<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Page extends MY_Controller {

	//Set Common things for this controller*************************************************************
	function __construct() {
		$COMMON = array();

		parent::__construct();
		$this->COMMON[ 'view_controller' ] = 'page';

		//Load Site Details Model
		$this->load->model( 'siteDetails' );
		//Load Add Model
		$this->load->model( 'AddModel' );
		//Load Edit Model
		$this->load->model( 'EditModel' );
		//Load Fetch Model
		$this->load->model( 'FetchModel' );
		//Load Delete Model
		$this->load->model( 'DeleteModel' );
		//Load Menu Generator Library
		$this->load->library( 'MenuGenerator' );
		//Load Mailer Library
		$this->load->library( 'mailer' );
		//Initialize data
		$this->initData();
	} 


	//Initialize Common Details
	private	function initData() 
	{		
		
	}



	//Load page view based on slug*************************************************************	
	public function view($slug='')
	{				
		
		if(!empty($this->common_data[ 'COUNTRY_SLUG' ]))
		{
			if($slug=="hospitals" or $slug=="doctors" or $slug=="costs" or $slug=="reviews")
				redirect(front_base_url($slug."/".$this->common_data[ 'COUNTRY_SLUG' ]));
		}
		
		//Set default page which can be edited from Site Settings
		if(empty($slug))
			$slug=$this->common_data['FRONT_PAGE'];
		
		
		//Run SelectDB Function which select data from database (Page Details)
		$FIELD='*';
		$CON='IsDel="0" and page_slug="'.$slug.'"';
		$ORDER=array();
		$this->common_data['PAGE_DETAILS']=$this->FetchModel->SelectDB($FIELD,'tb_page',$CON,$ORDER);
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_title']))
			$this->common_data[ 'META_TITLE' ]			=$this->common_data['PAGE_DETAILS'][0]['page_meta_title'];
			
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_keyword']))
			$this->common_data[ 'META_KEYWORD' ]		=$this->common_data['PAGE_DETAILS'][0]['page_meta_keyword'];
			
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_description']))
			$this->common_data[ 'META_DESCRIPTION' ]	=$this->common_data['PAGE_DETAILS'][0]['page_meta_description'];
			
			
			$this->common_data[ 'OG_TAG' ]	=$this->common_data['PAGE_DETAILS'][0]['page_og_tag'];
			$this->common_data[ 'SCHEMA' ]	=$this->common_data['PAGE_DETAILS'][0]['page_schema'];
			
			
			$this->common_data['PAGE_DATA']=json_decode($this->common_data['PAGE_DETAILS'][0]['page_data'],true);
			
			
			//Post data manipulation*********************************************
				//Speciality
				$this->common_data['SPECIALITY_SELECTED']="0";
				if(!empty($this->input->post('get_speciality')))
					$this->common_data['SPECIALITY_SELECTED']=$this->input->post('get_speciality');
				//Doctor
				$this->common_data['DOCTOR_SELECTED']="0";
				if(!empty($this->input->post('get_doctor')))
					$this->common_data['DOCTOR_SELECTED']=$this->input->post('get_doctor');
				//Blog Category
				$this->common_data['BLOG_CATEGORY']="";
				if(!empty($this->input->post('blog_category')))
					$this->common_data['BLOG_CATEGORY']=$this->input->post('blog_category');
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/'.$this->common_data['PAGE_DETAILS']['0']['page_template'], $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{			
			show_404();
		}
	}
	
	
//Load page view based on LP slug*************************************************************	
	public function hp($slug='')
	{				
		
		if(!empty($this->common_data[ 'COUNTRY_SLUG' ]))
		{
			if($slug=="hospitals" or $slug=="doctors" or $slug=="costs" or $slug=="reviews")
				redirect(front_base_url($slug."/".$this->common_data[ 'COUNTRY_SLUG' ]));
		}
		
		//Set default page which can be edited from Site Settings
		if(empty($slug))
			$slug=$this->common_data['FRONT_PAGE'];
		
		
		//Run SelectDB Function which select data from database (Page Details)
		$FIELD='*';
		$CON='IsDel="0" and page_slug="'.$slug.'"';
		$ORDER=array();
		$this->common_data['PAGE_DETAILS']=$this->FetchModel->SelectDB($FIELD,'tb_lp',$CON,$ORDER);
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_title']))
			$this->common_data[ 'META_TITLE' ]			=$this->common_data['PAGE_DETAILS'][0]['page_meta_title'];
			
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_keyword']))
			$this->common_data[ 'META_KEYWORD' ]		=$this->common_data['PAGE_DETAILS'][0]['page_meta_keyword'];
			
			if(!empty($this->common_data['PAGE_DETAILS'][0]['page_meta_description']))
			$this->common_data[ 'META_DESCRIPTION' ]	=$this->common_data['PAGE_DETAILS'][0]['page_meta_description'];
			
			
			$this->common_data[ 'OG_TAG' ]	=$this->common_data['PAGE_DETAILS'][0]['page_og_tag'];
			$this->common_data[ 'SCHEMA' ]	=$this->common_data['PAGE_DETAILS'][0]['page_schema'];
			
			
			$this->common_data['PAGE_DATA']=json_decode($this->common_data['PAGE_DETAILS'][0]['page_data'],true);
			
			
			//Post data manipulation*********************************************
				//Speciality
				$this->common_data['SPECIALITY_SELECTED']="0";
				if(!empty($this->input->post('get_speciality')))
					$this->common_data['SPECIALITY_SELECTED']=$this->input->post('get_speciality');
				//Doctor
				$this->common_data['DOCTOR_SELECTED']="0";
				if(!empty($this->input->post('get_doctor')))
					$this->common_data['DOCTOR_SELECTED']=$this->input->post('get_doctor');
				//Blog Category
				$this->common_data['BLOG_CATEGORY']="";
				if(!empty($this->input->post('blog_category')))
					$this->common_data['BLOG_CATEGORY']=$this->input->post('blog_category');
			
			//Load View
			$this->template->write_view( 'meta', 'common/lp/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/lp/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/lp/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/'.$this->common_data['PAGE_DETAILS']['0']['page_template'], $this->common_data );
			$this->template->write_view( 'footer', 'common/lp/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/lp/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/lp/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{			
			show_404();
		}
	}
	
	
		
	
	



	//Load Hospital based on Parameter*************************************************************	
	public function hospitals($PARAM1="",$PARAM2="",$PARAM3="",$PARAM4="",$PARAM5="")
	{			
		$PAGE_FLAG=1;
		$this->common_data['FILTER']=array();
		
		
		if(!empty($PARAM1))
		{
			$DATA=$this->checkParameter($PARAM1);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM1;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM2))
		{
			$DATA=$this->checkParameter($PARAM2);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM2;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM3))
		{
			$DATA=$this->checkParameter($PARAM3);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM3;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM4))
		{
			$DATA=$this->checkParameter($PARAM4);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM4;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM5))
		{
			$DATA=$this->checkParameter($PARAM5);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM5;
			}
			else
				$PAGE_FLAG=0;
		}
		
		
		
		
		if($PAGE_FLAG==1)
		{	
			$META=$this->getHospitalListMeta($this->common_data['FILTER']);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/hospital_list_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	//Load Hospital Details*************************************************************	
	public function hospital($SLUG='')
	{			
		$this->common_data['PAGE_DETAILS']=$this->getHospital($SLUG)[0];
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			$META=$this->getHospitalDetailsMeta($SLUG);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/hospital_details', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	



	//Load Doctor based on Parameter*************************************************************	
	public function doctors($PARAM1="",$PARAM2="",$PARAM3="",$PARAM4="",$PARAM5="",$PARAM6="")
	{			
		$PAGE_FLAG=1;
		$this->common_data['FILTER']=array();
		
		
		if(!empty($PARAM1))
		{
			$DATA=$this->checkParameter($PARAM1);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM1;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM2))
		{
			$DATA=$this->checkParameter($PARAM2);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM2;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM3))
		{
			$DATA=$this->checkParameter($PARAM3);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM3;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM4))
		{
			$DATA=$this->checkParameter($PARAM4);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM4;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM5))
		{
			$DATA=$this->checkParameter($PARAM5);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM5;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM6))
		{
			$DATA=$this->checkParameter($PARAM6);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM6;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM7))
		{
			$DATA=$this->checkParameter($PARAM7);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM7;
			}
			else
				$PAGE_FLAG=0;
		}
		
		
		
		if($PAGE_FLAG==1)
		{	
			$META=$this->getDoctorListMeta($this->common_data['FILTER']);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/doctor_list_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	//Load Doctor Details*************************************************************	
	public function doctor($SLUG='')
	{			
		$this->common_data['PAGE_DETAILS']=$this->getDoctor($SLUG)[0];
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			$META=$this->getDoctorDetailsMeta($SLUG);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/doctor_details', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	



	//Load Cost based on Parameter*************************************************************	
	public function costs($PARAM1="",$PARAM2="",$PARAM3="",$PARAM4="",$PARAM5="")
	{			
		$PAGE_FLAG=1;
		$this->common_data['FILTER']=array();
		
		
		if(!empty($PARAM1))
		{
			$DATA=$this->checkParameter($PARAM1);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM1;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM2))
		{
			$DATA=$this->checkParameter($PARAM2);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM2;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM3))
		{
			$DATA=$this->checkParameter($PARAM3);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM3;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM4))
		{
			$DATA=$this->checkParameter($PARAM4);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM4;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM5))
		{
			$DATA=$this->checkParameter($PARAM5);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM5;
			}
			else
				$PAGE_FLAG=0;
		}
		
		
		
		
		if($PAGE_FLAG==1)
		{	
			$META=$this->getCostListMeta($this->common_data['FILTER']);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/cost_list_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	//Load Cost Details*************************************************************	
	public function cost($PROCEDURE='',$COUNTRY='',$CITY='')
	{			

		
		//Check Procedure
		$this->common_data['PROCEDURE_ID']=empty($PROCEDURE)?"":(empty($this->getProcedure($PROCEDURE))?"":$this->getProcedure($PROCEDURE)[0]['procedure_id']);
		
		//Check Country
		$this->common_data['COUNTRY_ID']=empty($COUNTRY)?"0":(empty($this->getCountry($COUNTRY))?"":$this->getCountry($COUNTRY)[0]['country_id']);
		
		//Check City
		$this->common_data['CITY_ID']=empty($CITY)?"":(empty($this->getCity($CITY))?"":$this->getCity($CITY)[0]['city_id']);
		
		
		$COST_DEATILS=$this->getCostDetails($this->common_data['PROCEDURE_ID'],$this->common_data['COUNTRY_ID'],$this->common_data['CITY_ID']);
		
		$this->common_data['PAGE_DETAILS']=empty($COST_DEATILS)?array():$COST_DEATILS[0];
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			$META=$this->getCostDetailsMeta($this->common_data['PAGE_DETAILS']['cost_id'],$this->common_data['CITY_ID']);
			$this->common_data[ 'META_TITLE' ]		=$META[ 'META_TITLE' ];
			$this->common_data[ 'META_DESCRIPTION' ]=$META[ 'META_DESCRIPTION' ];
			$this->common_data[ 'META_KEYWORD' ]	=$META[ 'META_KEYWORD' ];
			
			
			$this->common_data[ 'PAGE_TITLE' ]	=$META[ 'PAGE_TITLE' ];
			$this->common_data[ 'PAGE_TITLE_OTHER' ]	=$META[ 'META_KEYWORD' ];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/cost_details', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	



	//Load Blog based on Parameter*************************************************************	
	public function blogs($PARAM1="",$PARAM2="",$PARAM3="",$PARAM4="",$PARAM5="")
	{			
		$PAGE_FLAG=1;
		$this->common_data['FILTER']=array();
		
		
		if(!empty($PARAM1))
		{
			$DATA=$this->checkParameter($PARAM1);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM1;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM2))
		{
			$DATA=$this->checkParameter($PARAM2);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM2;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM3))
		{
			$DATA=$this->checkParameter($PARAM3);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM3;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM4))
		{
			$DATA=$this->checkParameter($PARAM4);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM4;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM5))
		{
			$DATA=$this->checkParameter($PARAM5);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM5;
			}
			else
				$PAGE_FLAG=0;
		}
		
		
		
		
		if($PAGE_FLAG==1)
		{	
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/blog_list_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	//Load Blog Details*************************************************************	
	public function blog($SLUG='')
	{			
		$this->common_data['PAGE_DETAILS']=$this->getBlog($SLUG)[0];
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			if(!empty($this->common_data['PAGE_DETAILS']['blog_meta_title']))
			$this->common_data[ 'META_TITLE' ]			=$this->common_data['PAGE_DETAILS']['blog_meta_title'];
			if(!empty($this->common_data['PAGE_DETAILS']['blog_meta_keyword']))
			$this->common_data[ 'META_KEYWORD' ]		=$this->common_data['PAGE_DETAILS']['blog_meta_keyword'];
			if(!empty($this->common_data['PAGE_DETAILS']['blog_meta_keyword']))
			$this->common_data[ 'META_DESCRIPTION' ]	=$this->common_data['PAGE_DETAILS']['blog_meta_description'];
			
			
			$this->common_data[ 'OG_TAG' ]	=$this->common_data['PAGE_DETAILS']['blog_og_tag'];
			$this->common_data[ 'SCHEMA' ]	=$this->common_data['PAGE_DETAILS']['blog_schema'];
			
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/blog_details', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	



	//Load Review based on Parameter*************************************************************	
	public function reviews($PARAM1="",$PARAM2="",$PARAM3="",$PARAM4="",$PARAM5="")
	{			
		$PAGE_FLAG=1;
		$this->common_data['FILTER']=array();
		
		
		if(!empty($PARAM1))
		{
			$DATA=$this->checkParameter($PARAM1);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM1;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM2))
		{
			$DATA=$this->checkParameter($PARAM2);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM2;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM3))
		{
			$DATA=$this->checkParameter($PARAM3);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM3;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM4))
		{
			$DATA=$this->checkParameter($PARAM4);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM4;
			}
			else
				$PAGE_FLAG=0;
		}
		
		if(!empty($PARAM5))
		{
			$DATA=$this->checkParameter($PARAM5);
			if(!empty($DATA[0]) and empty($this->common_data['FILTER'][$DATA[0]]))
			{
				$this->common_data['FILTER'][$DATA[0]]['ID']=$DATA[1];
				$this->common_data['FILTER'][$DATA[0]]['SLUG']=$PARAM5;
			}
			else
				$PAGE_FLAG=0;
		}
		
		
		
		
		if($PAGE_FLAG==1)
		{	
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/review_list_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	



	//Load Patient Visa based on Parameter*************************************************************	
	public function patientVisa($PARAM="")
	{			
		//Run SelectDB Function which select data from database (Page Details)
		$FIELD='*';
		$CON='IsDel="0" and visa_country="'.$PARAM.'"';
		$ORDER=array();
		$this->common_data['PAGE_DETAILS']=$this->FetchModel->SelectDB($FIELD,'tb_visa',$CON,$ORDER);
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{	
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/template/patient_visa_template', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}
	
	
	
	
	
	
	//Load Author Details*************************************************************	
	public function author($SLUG='')
	{			
		$this->common_data['PAGE_DETAILS']=$this->getAuthor($SLUG)[0];
		
		if(!empty($this->common_data['PAGE_DETAILS']))
		{				
			//Load View
			$this->template->write_view( 'meta', 'common/meta', $this->common_data );
			$this->template->write_view( 'header_asset', 'common/header_asset', $this->common_data );
			$this->template->write_view( 'header', 'common/header', $this->common_data );
			$this->template->write_view( 'content', 'modules/author_details', $this->common_data );
			$this->template->write_view( 'footer', 'common/footer', $this->common_data );
			$this->template->write_view( 'extra_element', 'common/extra_element', $this->common_data );
			$this->template->write_view( 'footer_asset', 'common/footer_asset', $this->common_data );
			$this->template->render();			
		}
		else
		{
			show_404();
		}			
	}


}