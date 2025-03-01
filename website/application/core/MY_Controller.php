<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		
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

		$this->initDataPrimary();
		
		$wishlist_count = $this->get_wishlist_count();

		// Make cart count globally available
		$this->load->vars(['wishlist_count' => $wishlist_count]);
	}





	//Initialize Common Details
	private	function initDataPrimary()
	{	
		//Current Controller
		$this->common_data[ 'THIS' ] = $this;
		
		//Get Site Details
		$this->common_data[ 'SITE' ] = $this->siteDetails->SelectSiteDB();
		
		$this->common_data[ 'SITE_URL' ]			=front_base_url();
		$this->common_data[ 'CURRENT_URL' ]			=current_url();
		$this->common_data[ 'CURRENT_URL_V2' ]		="http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";;
		$this->common_data[ 'FRONT_PAGE' ]			=$this->common_data['SITE'][0]['site_home_url'];
		$this->common_data[ 'PRIMARY_MENU' ]		=$this->common_data['SITE'][0]['site_primary_menu'];
		
		$this->common_data[ 'SITE_NAME' ]			=$this->common_data[ 'SITE' ][0]['site_name'];
		$this->common_data[ 'SITE_MOTO' ]			=$this->common_data[ 'SITE' ][0]['site_moto'];
		$this->common_data[ 'SITE_ABOUT' ]			=$this->common_data[ 'SITE' ][0]['site_about'];
		$this->common_data[ 'SITE_LOGO' ]			=file_upload_base_url($this->common_data[ 'SITE' ][0]['site_logo']);
		$this->common_data[ 'SITE_LOGO_REVERSE' ]	=file_upload_base_url($this->common_data[ 'SITE' ][0]['site_logo_reverse']);
		$this->common_data[ 'SITE_FAV_ICON' ]		=file_upload_base_url($this->common_data[ 'SITE' ][0]['site_fav_icon']);
		
		$this->common_data[ 'SITE_FACEBOOK' ]		=$this->common_data[ 'SITE' ][0]['site_facebook'];
		$this->common_data[ 'SITE_TWITTER' ]		=$this->common_data[ 'SITE' ][0]['site_twitter'];
		$this->common_data[ 'SITE_INSTAGRAM' ]		=$this->common_data[ 'SITE' ][0]['site_instagram'];
		$this->common_data[ 'SITE_LINKEDIN' ]		=$this->common_data[ 'SITE' ][0]['site_linkedin'];
		$this->common_data[ 'SITE_PINTEREST' ]		=$this->common_data[ 'SITE' ][0]['site_pinterest'];
		$this->common_data[ 'SITE_YOUTUBE' ]		=$this->common_data[ 'SITE' ][0]['site_youtube'];
		$this->common_data[ 'SITE_WHATSAPP' ]		=$this->common_data[ 'SITE' ][0]['site_whatsapp'];
		$this->common_data[ 'SITE_WHATSAPP_NUMBER' ]=$this->common_data[ 'SITE' ][0]['site_whatsapp_number'];
		$this->common_data[ 'SITE_TELEGRAM' ]		=$this->common_data[ 'SITE' ][0]['site_telegram'];
		$this->common_data[ 'SITE_CONTACT_NO' ]		=$this->common_data[ 'SITE' ][0]['site_contact'];
		$this->common_data[ 'SITE_CONTACT_NO_ALT' ]	=$this->common_data[ 'SITE' ][0]['site_contact_alternative'];
		$this->common_data[ 'SITE_EMAIL' ]			=$this->common_data[ 'SITE' ][0]['site_email'];
		$this->common_data[ 'SITE_ADDRESS' ]		=$this->common_data[ 'SITE' ][0]['site_address'];
		$this->common_data[ 'SITE_LOCATION' ]		=$this->common_data[ 'SITE' ][0]['site_location_map'];
		$this->common_data[ 'SITE_LOCATION_URL' ]	=$this->common_data[ 'SITE' ][0]['site_location_url'];
		
		$this->common_data[ 'SITE_CODE_HEADER' ]	=$this->common_data[ 'SITE' ][0]['site_code_header'];
		$this->common_data[ 'SITE_CODE_FOOTER' ]	=$this->common_data[ 'SITE' ][0]['site_code_footer'];
		
		$this->common_data[ 'META_TITLE' ]			=$this->common_data[ 'SITE' ][0]['site_name'];
		$this->common_data[ 'META_KEYWORD' ]		=$this->common_data[ 'SITE' ][0]['site_meta_keyword'];
		$this->common_data[ 'META_DESCRIPTION' ]	=$this->common_data[ 'SITE' ][0]['site_meta_description'];
		$this->common_data[ 'SEARCH_ENGINE' ]		=$this->common_data['SITE'][0]['site_discourage_search_engine']==1?true:false;
		
		$this->common_data[ 'OG_URL' ]				=front_base_url();
		$this->common_data[ 'OG_TYPE' ]				="website";
		$this->common_data[ 'OG_TITLE' ]			=$this->common_data[ 'SITE' ][0]['site_name'];
		$this->common_data[ 'OG_DESCRIPTION' ]		=$this->common_data[ 'SITE' ][0]['site_meta_description'];
		$this->common_data[ 'OG_IMAGE' ]			=file_upload_base_url($this->common_data[ 'SITE' ][0]['site_logo']);
		
		$this->common_data[ 'OG_TAG' ]			="";
		$this->common_data[ 'SCHEMA' ]			="";
		
		$this->common_data[ 'TWITTER_CARD' ]		="summary_large_image";
		$this->common_data[ 'TWITTER_URL' ]			=front_base_url();
		$this->common_data[ 'TWITTER_DOMAIN' ]		=$_SERVER['SERVER_NAME'];
		$this->common_data[ 'TWITTER_TITLE' ]		=$this->common_data[ 'SITE' ][0]['site_name'];
		$this->common_data[ 'TWITTER_DESCRIPTION' ]	=$this->common_data[ 'SITE' ][0]['site_meta_description'];
		$this->common_data[ 'TWITTER_IMAGE' ]		=file_upload_base_url($this->common_data[ 'SITE' ][0]['site_logo']);
		
		if(empty($this->session->userdata('FEATURED_COUNTRY')))
			$this->session->set_userdata('FEATURED_COUNTRY',101);
		
		
		$this->common_data[ 'FEATURED_COUNTRY' ]		=$this->session->userdata('FEATURED_COUNTRY'); //India
		$this->common_data[ 'COUNTRY_SLUG' ]=$this->common_data[ 'FEATURED_COUNTRY' ]>0?$this->getCountryID($this->common_data[ 'FEATURED_COUNTRY' ])['country_slug']:"";
	}
	

	public function get_userid()
	{
		if(!empty($this->session->userdata('login_id'))){
			return $this->session->userdata('login_id');
		}else{
			return $this->session->userdata('user_id');
		}
	}
	public function get_wishlist_count() 
	{
		// Check if the user is logged in
		if ($this->session->userdata('login_id')) {
			$user_id = $this->get_userid();
			$this->db->where(['user_id' => $user_id]);
			$this->db->from('tb_wishlist');
			return $this->db->count_all_results();
		}
	
		return 0; // Default if no cart exists
	}


	// public function get_address()
	// {
	// 	$user_id = $this->get_userid();
	// 	if ($user_id) {
	// 		$this->db->where(['user_id' => $user_id]);
	// 		$query = $this->db->get('ec_users');
	// 		if ($query->num_rows() > 0) {
	// 			return $query->row_array(); // Use row_array() instead for single row results
	// 		}
	// 	}else{
	// 		redirect('Login');
	// 	}
	// 	return []; // Return an empty array if no record found
	// }

	public function getUserDetails()
	{ 
		$user_id = $this->get_userid();
		if ($user_id) {
			$FIELD = '*';
			$CON = 'IsDel="0" and user_id='.$user_id;
			$ORDER = array();
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_user', $CON, $ORDER );
			
			return $this->common_data['list'];
		}
		// else{
		// 	// redirect('Login');
		// 	$this->session->set_flashdata( 'successContactMSG', '' );
		// 		return redirect(front_base_url('post-property-form'));
        //         // redirect('Page');
		// 		echo 1;
		// }
	}

	
	
	

















	//Get Menu
	public function getMenu($ID=0)
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and menu_id='.$ID;
		$ORDER = array( "field" => "menu_id", "direction" => "asc" );
		$this->common_data['list'] = $this->FetchModel->SelectDB( $FIELD, 'tb_menu', $CON, $ORDER );
		
		return json_decode(strtolower($this->common_data['list'][0]['menu_code']), true);
	}
	
	//Get Footer Menu
	public function getFooterMenu()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "footer_menu_order", "direction" => "asc" );
		$this->common_data['list'] = $this->FetchModel->SelectDB( $FIELD, 'tb_footer_menu', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	//Get Widget Data
	public function getWidgetData($area="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON='IsDel="0" and widget_area="'.$area.'"';
		$ORDER = array( "field" => "widget_order", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB($FIELD,'tb_widget',$CON,$ORDER);
		
		return $this->common_data['list'];
	}

	//Get Banner
	public function getBanner()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "banner_order", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_banner', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	//Generate Star Rating
	public function generateStarRating($COUNT=0)
	{ 
		$STAR="";
		for($i=1;$i<=$COUNT;$i++)
			$STAR.='<i class="fa-solid fa-star"></i>';
		
		return $STAR;
	}

	//Check Parameter
	public function checkParameter($PARAM)
	{ 
		//Check Country
		$COUNTRY=$this->getCountry($PARAM);
		
		//Check City
		$CITY=$this->getCity($PARAM);
		
		//Check Speciality
		$SPECIALITY=$this->getSpeciality($PARAM);
		
		//Check Specialist
		$SPECIALIST=$this->getSpecialist($PARAM);
		
		//Check Procedure
		$PROCEDURE=$this->getProcedure($PARAM);
		
		//Check Disease
		$DISEASE=$this->getDisease($PARAM);
		
		//Check Hospital
		$HOSPITAL=$this->getHospital($PARAM);
		
		$TYPE='';
		$ID='';
		
		if(!empty($COUNTRY))
		{
			$TYPE='COUNTRY_DATA';
			$ID=$COUNTRY[0]['country_id'];
		}
		elseif(!empty($CITY))
		{
			$TYPE='CITY_DATA';
			$ID=$CITY[0]['city_id'];
		}
		elseif(!empty($SPECIALITY))
		{
			$TYPE='SPECIALITY_DATA';
			$ID=$SPECIALITY[0]['speciality_id'];
		}
		elseif(!empty($SPECIALIST))
		{
			$TYPE='SPECIALIST_DATA';
			$ID=$SPECIALIST[0]['specialist_id'];
		}
		elseif(!empty($PROCEDURE))
		{
			$TYPE='PROCEDURE_DATA';
			$ID=$PROCEDURE[0]['procedure_id'];
		}
		elseif(!empty($DISEASE))
		{
			$TYPE='DISEASE_DATA';
			$ID=$DISEASE[0]['disease_id'];
		}
		elseif(!empty($HOSPITAL))
		{
			$TYPE='HOSPITAL_DATA';
			$ID=$HOSPITAL[0]['hospital_id'];
		}
		
		return array($TYPE,$ID);
	}

	//get Title
	public function getTitle($TYPE="",$COUNTRY_ID="0",$CITY_ID="0",$SPECIALITY_ID="0",$PROCEDURE_ID="0",$DISEASE_ID="0",$HOSPITAL_ID="0",$SPECIALIST_ID="0")
	{ 
		$TITLE_BASE="Best ";
		$TITLE_ORIGIN="";
		$TITLE_MEDICAL="";
		
		//Check Country
		$COUNTRY=$this->getCountryID($COUNTRY_ID);
		
		//Check City
		$CITY=$this->getCityID($CITY_ID);
		
		//Check Speciality
		$SPECIALITY=$this->getSpecialityByID($SPECIALITY_ID);
		
		//Check SPECIALIST
		$SPECIALIST=$this->getSpecialistByID($SPECIALIST_ID);
		
		//Check Procedure
		$PROCEDURE=$this->getProcedureByID($PROCEDURE_ID);
		
		//Check Disease
		$DISEASE=$this->getDiseaseByID($DISEASE_ID);
		
		//Check Disease
		$HOSPITAL=$this->getHospitalByID($HOSPITAL_ID);
		
		if(!empty($SPECIALIST))
			$TYPE="";
		
		if(!empty($COUNTRY))
			$TITLE_ORIGIN=" ".$TYPE." in ".$COUNTRY['country_name'];
		if(!empty($CITY))
			$TITLE_ORIGIN=" ".$TYPE." in ".$CITY['city_name'].",".$COUNTRY['country_name'];
		
		if(!empty($SPECIALITY))
			$TITLE_MEDICAL=$SPECIALITY['speciality_title'];
		if(!empty($SPECIALIST))
			$TITLE_MEDICAL=$SPECIALIST['specialist_title'];
		if(!empty($PROCEDURE))
			$TITLE_MEDICAL=$PROCEDURE['procedure_title'];
		if(!empty($DISEASE))
			$TITLE_MEDICAL=$DISEASE['disease_title'];
		
		$TITLE_EXTRACT=empty($TITLE_ORIGIN)?" ".$TYPE:$TITLE_ORIGIN;
		
		$TITLE=(empty($TITLE_MEDICAL) and empty($TITLE_ORIGIN))?$TITLE_BASE." ".$TYPE:$TITLE_BASE.$TITLE_MEDICAL.$TITLE_EXTRACT;
		
		if(!empty($HOSPITAL))
			$TITLE.=" at ".$HOSPITAL['hospital_name'];
		
		return $TITLE;
	}

	//get Slug
	public function getSlug($SLUG="",$COUNTRY_SLUG="",$CITY_SLUG="",$SPECIALITY_SLUG="",$PROCEDURE_SLUG="",$DISEASE_SLUG="",$SPECIALIST_SLUG="")
	{ 
		if(!empty($SPECIALITY_SLUG))
			$SLUG.=$SPECIALITY_SLUG."/";
		if(!empty($PROCEDURE_SLUG))
			$SLUG.=$PROCEDURE_SLUG."/";
		if(!empty($DISEASE_SLUG))
			$SLUG.=$DISEASE_SLUG."/";
		if(!empty($SPECIALIST_SLUG))
			$SLUG.=$SPECIALIST_SLUG."/";
		if(!empty($COUNTRY_SLUG))
			$SLUG.=$COUNTRY_SLUG."/";
		if(!empty($CITY_SLUG))
			$SLUG.=$CITY_SLUG."/";
		
		return $SLUG;
	}
	


	
	
	

/*********************************************************************Generate Meta Section Start***********************************************************/

	//get Doctor List Meta
	public function getDoctorListMeta($FILTER)
	{ 
		$COUNTRY_ID=empty($FILTER['COUNTRY_DATA']['ID'])?0:$FILTER['COUNTRY_DATA']['ID'];
		$CITY_ID=empty($FILTER['CITY_DATA']['ID'])?0:$FILTER['CITY_DATA']['ID'];
		$SPECIALITY_ID=empty($FILTER['SPECIALITY_DATA']['ID'])?0:$FILTER['SPECIALITY_DATA']['ID'];
		$PROCEDURE_ID=empty($FILTER['PROCEDURE_DATA']['ID'])?0:$FILTER['PROCEDURE_DATA']['ID'];
		$DISEASE_ID=empty($FILTER['DISEASE_DATA']['ID'])?0:$FILTER['DISEASE_DATA']['ID'];
		
		//Check Country
		$COUNTRY=$this->getCountryID($COUNTRY_ID);
		
		//Check City
		$CITY=$this->getCityID($CITY_ID);
		
		//Check Speciality
		$SPECIALITY=$this->getSpecialityByID($SPECIALITY_ID);
		
		//Check Procedure
		$PROCEDURE=$this->getProcedureByID($PROCEDURE_ID);
		
		//Check Disease
		$DISEASE=$this->getDiseaseByID($DISEASE_ID);
		
		$COUNTRY_NAME=!empty($COUNTRY)?$COUNTRY['country_name']:"";
		$CITY_NAME=!empty($CITY)?$CITY['city_name']:"";
		$SPECIALITY_NAME=!empty($SPECIALITY)?$SPECIALITY['speciality_title']:"";
		$DISEASE_NAME=!empty($DISEASE)?$DISEASE['disease_title']:"";
		$PROCEDURE_NAME=!empty($PROCEDURE)?$PROCEDURE['procedure_title']:"";
		
		$DEPT=!empty($PROCEDURE_NAME)?$PROCEDURE_NAME:(!empty($DISEASE_NAME)?$DISEASE_NAME:$SPECIALITY_NAME);

		$LOCATION=empty($CITY_NAME)?$COUNTRY_NAME:$CITY_NAME;
		
		$META[ 'META_TITLE' ]="Top $DEPT Doctors in $LOCATION ".date('Y')." | MediJourney";
		$META[ 'META_DESCRIPTION' ]="Find the Best $DEPT Doctors in $LOCATION, For Advanced $DEPT Treatments and Surgeries. Contact Medijourney For Expert Guidance From the Best Medical Professionals in $LOCATION. Your Path to Optimal $DEPT Care Starts Here.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		return $META;
	}	

	//get Doctor Details Meta
	public function getDoctorDetailsMeta($SLUG="")
	{ 
		$DOCTOR=$this->getDoctor($SLUG)[0];
		
		$Doctor_Name=$DOCTOR['doctor_name'];
		$Designation=empty($DOCTOR['doctor_designation'])?"":$this->getDesignation($DOCTOR['doctor_designation']);
		$Experience=$DOCTOR['doctor_year_of_experience'];
		$Specialist_Name=empty($DOCTOR['doctor_specialist_in'])?"":$this->getSpecialistIn($DOCTOR['doctor_specialist_in']);
		$Speciality=empty($DOCTOR['doctor_speciality'])?"":$this->getSpecialityByIDBulk($DOCTOR['doctor_speciality'])[0]['speciality_title'];
		$City_Name=empty($DOCTOR['doctor_city'])?"":$this->getCityID($DOCTOR['doctor_city'])['city_name'];
		$Country_Name=empty($DOCTOR['doctor_country'])?"":$this->getCountryID($DOCTOR['doctor_country'])['country_name'];



		$META[ 'META_TITLE' ]="$Doctor_Name, $Specialist_Name $City_Name, $Country_Name | MediJourney";
		$META[ 'META_DESCRIPTION' ]="Book Appointent For $Doctor_Name, $Designation of $Speciality Department with $Experience Years Experience in $City_Name, $Country_Name. Turst MediJorney Expertise for Your Health Journey with $Doctor_Name.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		return $META;
	}	

	//get Hospital List Meta
	public function getHospitalListMeta($FILTER)
	{ 
		$COUNTRY_ID=empty($FILTER['COUNTRY_DATA']['ID'])?0:$FILTER['COUNTRY_DATA']['ID'];
		$CITY_ID=empty($FILTER['CITY_DATA']['ID'])?0:$FILTER['CITY_DATA']['ID'];
		$SPECIALITY_ID=empty($FILTER['SPECIALITY_DATA']['ID'])?0:$FILTER['SPECIALITY_DATA']['ID'];
		$PROCEDURE_ID=empty($FILTER['PROCEDURE_DATA']['ID'])?0:$FILTER['PROCEDURE_DATA']['ID'];
		$DISEASE_ID=empty($FILTER['DISEASE_DATA']['ID'])?0:$FILTER['DISEASE_DATA']['ID'];
		
		//Check Country
		$COUNTRY=$this->getCountryID($COUNTRY_ID);
		
		//Check City
		$CITY=$this->getCityID($CITY_ID);
		
		//Check Speciality
		$SPECIALITY=$this->getSpecialityByID($SPECIALITY_ID);
		
		//Check Procedure
		$PROCEDURE=$this->getProcedureByID($PROCEDURE_ID);
		
		//Check Disease
		$DISEASE=$this->getDiseaseByID($DISEASE_ID);
		
		$COUNTRY_NAME=!empty($COUNTRY)?$COUNTRY['country_name']:"";
		$CITY_NAME=!empty($CITY)?$CITY['city_name']:"";
		$SPECIALITY_NAME=!empty($SPECIALITY)?$SPECIALITY['speciality_title']:"";
		$DISEASE_NAME=!empty($DISEASE)?$DISEASE['disease_title']:"";
		$PROCEDURE_NAME=!empty($PROCEDURE)?$PROCEDURE['procedure_title']:"";
		
		$DEPT=!empty($PROCEDURE_NAME)?$PROCEDURE_NAME:(!empty($DISEASE_NAME)?$DISEASE_NAME:$SPECIALITY_NAME);

		$LOCATION=empty($CITY_NAME)?$COUNTRY_NAME:$CITY_NAME;
		
		$META[ 'META_TITLE' ]="Top $DEPT Hospitals in $LOCATION ".date('Y')." | MediJourney";
		$META[ 'META_DESCRIPTION' ]="Find the Best $DEPT Hospitals in $LOCATION for ".date('Y')." on Medijourney. Explore Top-quality $DEPT Care Centers and Plan Your Medical Journey With us.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		
		return $META;
	}	

	//get Hospital Details Meta
	public function getHospitalDetailsMeta($SLUG="")
	{ 
		$HOSPITAL=$this->getHospital($SLUG)[0];
		
		$Hospital_Name=$HOSPITAL['hospital_name'];

		$META[ 'META_TITLE' ]="$Hospital_Name, Doctor Lists, Book Online Appointment | MediJourney";
		$META[ 'META_DESCRIPTION' ]="Explore the List of Doctors at $Hospital_Name and Book Online Appointments with MediJourney. Your Journey to Specialized Medical Care Starts Here.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		return $META;
	}

	//get Cost List Meta
	public function getCostListMeta($FILTER)
	{ 
		$COUNTRY_ID=empty($FILTER['COUNTRY_DATA']['ID'])?0:$FILTER['COUNTRY_DATA']['ID'];
		$CITY_ID=empty($FILTER['CITY_DATA']['ID'])?0:$FILTER['CITY_DATA']['ID'];
		$SPECIALITY_ID=empty($FILTER['SPECIALITY_DATA']['ID'])?0:$FILTER['SPECIALITY_DATA']['ID'];
		$PROCEDURE_ID=empty($FILTER['PROCEDURE_DATA']['ID'])?0:$FILTER['PROCEDURE_DATA']['ID'];
		$DISEASE_ID=empty($FILTER['DISEASE_DATA']['ID'])?0:$FILTER['DISEASE_DATA']['ID'];
		
		//Check Country
		$COUNTRY=$this->getCountryID($COUNTRY_ID);
		
		//Check City
		$CITY=$this->getCityID($CITY_ID);
		
		//Check Speciality
		$SPECIALITY=$this->getSpecialityByID($SPECIALITY_ID);
		
		//Check Procedure
		$PROCEDURE=$this->getProcedureByID($PROCEDURE_ID);
		
		//Check Disease
		$DISEASE=$this->getDiseaseByID($DISEASE_ID);
		
		$COUNTRY_NAME=!empty($COUNTRY)?$COUNTRY['country_name']:"";
		$CITY_NAME=!empty($CITY)?$CITY['city_name']:"";
		$SPECIALITY_NAME=!empty($SPECIALITY)?$SPECIALITY['speciality_title']:"";
		$DISEASE_NAME=!empty($DISEASE)?DISEASE['disease_title']:"";
		$PROCEDURE_NAME=!empty($PROCEDURE)?$PROCEDURE['procedure_title']:"";

		$LOCATION=empty($CITY_NAME)?$COUNTRY_NAME:$CITY_NAME;
		
		$DEPT=!empty($SPECIALITY_NAME)?$SPECIALITY_NAME:(!empty($PROCEDURE_NAME)?$PROCEDURE_NAME:$DISEASE_NAME);
		
		$META[ 'META_TITLE' ]="$DEPT Treatment Cost in $COUNTRY_NAME  | MediJourney";
		$META[ 'META_DESCRIPTION' ]="$DEPT Surgery Cost in $LOCATION. Medijourney Provide Clear Details About the Expenses, Hospital & $SPECIALITY_NAME Doctors, Helping You Plan Your Healthcare Journey Effectively.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		
		return $META;
	}	

	//get Cost Details Meta
	public function getCostDetailsMeta($ID="",$CITY_ID="")
	{ 
		$COST=$this->getCostById($ID)[0];
		
		$CITY_NAME=empty($CITY_ID)?"":(empty($this->getCityID($CITY_ID))?"":$this->getCityID($CITY_ID)['city_name']);
		$COUNTRY_NAME=empty($COST['cost_country'])?"":$this->getCountryID($COST['cost_country'])['country_name'];
		$SPECIALITY_NAME=empty($COST['cost_speciality'])?"":$this->getSpecialityByID($COST['cost_speciality'])['speciality_title'];
		$PROCEDURE_NAME=empty($COST['cost_procedure'])?"":$this->getProcedureByID($COST['cost_procedure'])['procedure_title'];
		$PRICE=empty($COST['cost_price'])?"":$COST['cost_price'];
		
		$LOCATION=empty($CITY_NAME)?$COUNTRY_NAME:$CITY_NAME;

		$META[ 'PAGE_TITLE' ]="$PROCEDURE_NAME Treatment Cost in $LOCATION";

		$META[ 'PAGE_TITLE_OTHER' ]="$PROCEDURE_NAME in $LOCATION";

		$META[ 'META_TITLE' ]="$PROCEDURE_NAME Treatment Cost in $LOCATION  | MediJourney";
		$META[ 'META_DESCRIPTION' ]="$PROCEDURE_NAME Surgery Cost Can Range From  $PRICE in $LOCATION. Medijourney Provide Clear Details About the Expenses, Hospital & $SPECIALITY_NAME Doctors, Helping You Plan Your Healthcare Journey Effectively.";
		$META[ 'META_KEYWORD' ]=$META[ 'META_DESCRIPTION' ];
		
		return $META;
	}	
	


	
	
	

/*********************************************************************Get Blog Section Start***********************************************************/	
	
	//Get Blog Category
	public function getBlogCategory($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($ID))
			$CON .= ' and blog_category_id="'.$ID.'"';
		$ORDER = array( "field" => "blog_category_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog_category', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get All Author
	public function getAuthor($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and author_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "author_name", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_author', $CON, $ORDER );
		
		return $this->common_data['list'];
	}


	
	//Get Author By ID
	public function getAuthorByID($ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and author_id="'.$ID.'"';
		$ORDER = array( "field" => "author_name", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_author', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get All Author Who are Doctor
	public function getAuthorDoctor($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_is_author="1"';
		if(!empty($SLUG))
			$CON.= ' and doctor_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Author Who are Doctor By ID 
	public function getDoctorAuthorByID($ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_is_author="1" and doctor_id="'.$ID.'"';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get All Reviewer
	public function getReviewer($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_is_reviewer="1"';
		if(!empty($SLUG))
			$CON.= ' and doctor_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	
	
	
	//Get Doctor Author Reviewer Featured List
	public function getDoctorAuthorReviewerFeaturedList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$TYPE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_show_in_featured="1"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',doctor_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',doctor_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',doctor_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',doctor_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',doctor_disease)';
		
		if($TYPE=="author")
			$CON.= ' and doctor_is_author="1"';
		if($TYPE=="reviewer")
			$CON.= ' and doctor_is_reviewer="1"';
		
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$LIMIT = array( "COUNT" => 1, "OFFSET" => 0 );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_doctor', $CON, $ORDER, $LIMIT);
		
		return $this->common_data['list'];
	}

	
	//Get All Blog
	public function getBlog($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and blog_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog
	public function getBlogLimit($OFFSET=0)
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$LIMIT = array( "COUNT" => 10, "OFFSET" => $OFFSET );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_blog', $CON, $ORDER, $LIMIT);
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Category
	public function getBlogByCategory($CATEGORY="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($CATEGORY))
		$CON.= ' and FIND_IN_SET('.$CATEGORY.', blog_blog_category_id)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Speciality
	public function getBlogBySpeciality($SPECIALITY="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$SPECIALITY.', blog_speciality)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Procedure
	public function getBlogByProcedure($PROCEDURE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$PROCEDURE.', blog_procedure)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Disease
	public function getBlogByDisease($DISEASE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$DISEASE.', blog_disease)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Hospital
	public function getBlogByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', blog_hospital)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Doctor
	public function getBlogByDoctor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and (FIND_IN_SET('.$ID.', blog_doctor) or FIND_IN_SET('.$ID.', blog_author_doctor) or FIND_IN_SET('.$ID.', blog_reviewer_doctor))';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}

	
	//Get Blog By Author
	public function getBlogByAuthor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', blog_author)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Blog List
	public function getBlogList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',blog_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',blog_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',blog_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',blog_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',blog_disease)';
		$ORDER = array( "field" => "blog_date", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Blog Section End*************************************************************/	
	


	
	
	

/*********************************************************************Get Country Section Start***********************************************************/
	
	//Get Country
	public function getCountry($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and country_status="1"';
		if(!empty($SLUG))
			$CON.= ' and country_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "country_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	
//Get All List Country Landing Page
	public function getAllCountry($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and country_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "country_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Country by ID
	public function getCountryID($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and country_status="1" and country_id="'.$ID.'"';
		$ORDER = array( "field" => "country_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER );
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0];
	}
	
	//Get Country Featured
	public function getCountryFeatured()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and country_status="1" and country_show_in_featured="1"';
		$ORDER = array( "field" => "country_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Country Featured
	public function getCostCountryFeatured($SPECIALITY_ID="",$PROCEDURE_ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and country_status="1" and country_show_in_featured="1" and country_id in (select cost_country from tb_cost where IsDel="0" and cost_speciality='.$SPECIALITY_ID.' and cost_procedure='.$PROCEDURE_ID.')';
		$ORDER = array( "field" => "country_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Country Section End*************************************************************/	
	


	
	
	

/*********************************************************************Get State Section Start***********************************************************/
	
	//Get State
	public function getState($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and state_status="1"';
		if(!empty($SLUG))
			$CON.= ' and state_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "state_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_state', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get State Featured
	public function getStateFeatured()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and state_status="1" and state_show_in_featured="1"';
		$ORDER = array( "field" => "state_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_state', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get State Section End*************************************************************/	
	


	
	
	

/*********************************************************************Get City Section Start***********************************************************/
	
	//Get City
	public function getCity($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and city_status="1"';
		if(!empty($SLUG))
			$CON.= ' and city_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "city_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_city', $CON, $ORDER );
		
		//echo $this->db->last_query();
		
		return $this->common_data['list'];
	}
	
	//Get City by ID
	public function getCityID($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and city_status="1" and city_id="'.$ID.'"';
		$ORDER = array( "field" => "city_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_city', $CON, $ORDER );
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0];
	}
	
	//Get City Featured
	public function getCityFeatured($COUNTRY="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and city_status="1" and city_show_in_featured="1"';
		if($COUNTRY>0)
			$CON.= ' and city_country_id="'.$COUNTRY.'"';
		$ORDER = array( "field" => "city_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_city', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get City By Country
	public function getCityByCountry($COUNTRY="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and city_status="1" and city_country_id="'.$COUNTRY.'"';
		$ORDER = array( "field" => "city_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_city', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get City Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Speciality Section Start***********************************************************/
	
	//Get Speciality
	public function getSpeciality($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and speciality_parent="0"';
		if(!empty($SLUG))
			$CON.= ' and speciality_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "speciality_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Header Speciality
	public function getHeaderSpeciality($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_header="1"';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_speciality', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_header="1"';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Cost Speciality
	public function getCostFeaturedSpeciality($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_cost_featured="1" and speciality_id in (select cost_speciality from tb_cost where IsDel="0")';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_speciality', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_cost_featured="1" and speciality_id in (select cost_speciality from tb_cost where IsDel="0")';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Featured Speciality
	public function getFeaturedSpeciality($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_featured="1" and speciality_parent="0"';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_speciality', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and speciality_show_in_featured="1" and speciality_parent="0"';
			$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Speciality By Category
	public function getSpecialityByCategory($CATEGORY="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and speciality_category="'.$CATEGORY.'" and speciality_parent="0"';
		$ORDER = array( "field" => "speciality_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Speciality By ID
	public function getSpecialityByID($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and speciality_id='.$ID;
		$ORDER = array( "field" => "speciality_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0];
	}
	
	//Get Speciality By ID
	public function getSpecialityByIDBulk($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and speciality_id IN ('.$ID.')';
		$ORDER = array( "field" => "speciality_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data['list'];
	}
	
	//Get Sub Speciality By Parent Specility
	public function getSubSpecialityByParentSpecility($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.',speciality_parent)';
		$ORDER = array( "field" => "speciality_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_speciality', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Speciality Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Procedure Section Start***********************************************************/
	
	//Get Procedure
	public function getProcedure($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and procedure_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "procedure_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Procedure
	public function getFeaturedProcedure($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and procedure_show_in_featured="1"';
			$ORDER = array( "field" => "procedure_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_procedure', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and procedure_show_in_featured="1"';
			$ORDER = array( "field" => "procedure_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Procedure By ID
	public function getProcedureByID($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and procedure_id='.$ID;
		$ORDER = array( "field" => "procedure_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0];
	}
	
	//Get Bulk Procedure By ID
	public function getProcedureBulk($ID="")
	{ 
		$ID=empty($ID)?"0":rtrim($ID, ',');
		
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and procedure_id IN ('.$ID.')';
		$ORDER = array( "field" => "procedure_title", "direction" => "asc" );
		return $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
	}
	
	//Get Procedure By Speciality
	public function getProcedureBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.',procedure_speciality_id)';
		$ORDER = array( "field" => "procedure_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
	//Get Featured Procedure By Speciality
	public function getFeaturedProcedureBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and procedure_show_in_featured="1" and FIND_IN_SET('.$ID.',procedure_speciality_id)';
		$ORDER = array( "field" => "procedure_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
	//Get Featured Procedure By Speciality
	public function getCostFeaturedProcedureBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and procedure_show_in_featured="1" and FIND_IN_SET('.$ID.',procedure_speciality_id) and procedure_id in (select cost_procedure from tb_cost where IsDel="0")';
		$ORDER = array( "field" => "procedure_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
/*********************************************************************Get Procedure Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Disease Section Start***********************************************************/
	
	//Get Disease
	public function getDisease($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and disease_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "disease_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_disease', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Disease
	public function getFeaturedDisease($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and disease_show_in_featured="1"';
			$ORDER = array( "field" => "disease_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_disease', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and disease_show_in_featured="1"';
			$ORDER = array( "field" => "disease_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_disease', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Disease By ID
	public function getDiseaseByID($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and disease_id='.$ID;
		$ORDER = array( "field" => "disease_order_featured", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_disease', $CON, $ORDER );
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0];
	}
	
	//Get Bulk Disease By ID
	public function getDiseaseBulk($ID="")
	{ 
		$ID=empty($ID)?"0":rtrim($ID, ',');
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and disease_id IN ('.$ID.')';
		$ORDER = array( "field" => "disease_title", "direction" => "asc" );
		return $this->FetchModel->SelectDB( $FIELD, 'tb_disease', $CON, $ORDER );
	}
	
	//Get Disease By Speciality
	public function getDiseaseBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.',disease_speciality_id)';
		$ORDER = array( "field" => "disease_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_disease', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
/*********************************************************************Get Disease Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Hospital Section Start***********************************************************/
	
	//Get Hospital
	public function getHospital($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and hospital_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Hospital
	public function getFeaturedHospital($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and hospital_show_in_featured="1"';
			$ORDER = array( "field" => "hospital_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_hospital', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and hospital_show_in_featured="1"';
			$ORDER = array( "field" => "hospital_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Featured Hospital By City
	public function getFeaturedHospitalCity($CITY="",$LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and hospital_show_in_featured="1"';
			if(!empty($CITY))
				$CON.= ' and FIND_IN_SET('.$CITY.',hospital_city)';
			$ORDER = array( "field" => "hospital_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_hospital', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and hospital_show_in_featured="1"';
			if(!empty($CITY))
				$CON.= ' and FIND_IN_SET('.$CITY.',hospital_city)';
			$ORDER = array( "field" => "hospital_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Hospital By ID
	public function getHospitalByID($ID="")
	{ 
		$ID=empty($ID)?"0":$ID;
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and hospital_id IN ('.$ID.')';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		
		return empty($this->common_data['list'])?"":$this->common_data['list'][0];
	}
	
	//Get Hospital By ID Bulk
	public function getHospitalByIDBulk($ID="0")
	{ 
		$ID=empty($ID)?"0":$ID;
		
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and hospital_id IN ('.$ID.')';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Hospital By Speciality
	public function getHospitalBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$SPECIALITY.',hospital_speciality)';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
	//Get Hospital List
	public function getHospitalList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$LIMIT="",$PAGINATION="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',hospital_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',hospital_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',hospital_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',hospital_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',hospital_disease)';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		
		
		if(empty($LIMIT) or empty($PAGINATION))
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		else
		{
			$OFFSET=($PAGINATION-1)*$LIMIT;
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>$OFFSET);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_hospital', $CON, $ORDER, $LIMIT);
		}
		
		return $this->common_data['list'];
	}
	
	//Get Landing Page Hospital List
	public function getLPHospitalList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$LIMIT="",$PAGINATION="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',hospital_country)';
		if(!empty($CITY_ID))
			$CON.= '  and hospital_city IN('.$CITY_ID.')';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',hospital_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',hospital_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',hospital_disease)';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		
		
		if(empty($LIMIT) or empty($PAGINATION))
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		else
		{
			$OFFSET=($PAGINATION-1)*$LIMIT;
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>$OFFSET);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_hospital', $CON, $ORDER, $LIMIT);
		}
		
		return $this->common_data['list'];
	}
	
	//Get Hospital Featured List
	public function getHospitalFeaturedList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and hospital_show_in_featured="1"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',hospital_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',hospital_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',hospital_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',hospital_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',hospital_disease)';
		$ORDER = array( "field" => "hospital_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Hospital Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Doctor Section Start***********************************************************/
	
	//Get Doctor
	public function getDoctor($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and doctor_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By ID
	public function getDoctorByID($ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_id="'.$ID.'"';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'][0];
	}
	
	//Get Doctor By ID Bulk
	public function getDoctorByIDBulk($ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_id IN ('.$ID.')';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Speciality
	public function getDoctorBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', `doctor_speciality`)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Procedure
	public function getDoctorByProcedure($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', `doctor_procedure`)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Disease
	public function getDoctorByDisease($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', `doctor_disease`)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Hospital
	public function getDoctorByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', `doctor_hospital`)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Hospital By Doctor ID
	public function getDoctorByHospitalByDoctor($HOSPITAL_ID="",$DOCTOR_ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$HOSPITAL_ID.', `doctor_hospital`) and doctor_id IN ('.$DOCTOR_ID.')';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor By Hospital
	public function getDoctorByHospitalCount($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.', `doctor_hospital`)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return count($this->common_data['list']);
	}
	
	//Get Featured Doctor
	public function getFeaturedDoctor($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and doctor_show_in_featured="1"';
			$ORDER = array( "field" => "doctor_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_doctor', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and doctor_show_in_featured="1"';
			$ORDER = array( "field" => "doctor_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Featured Doctor by City
	public function getFeaturedDoctorCity($CITY="",$LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and doctor_show_in_featured="1"';
			if(!empty($CITY))
				$CON.= ' and FIND_IN_SET('.$CITY.',doctor_city)';
			$ORDER = array( "field" => "doctor_order_featured", "direction" => "asc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_doctor', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and doctor_show_in_featured="1"';
			if(!empty($CITY))
				$CON.= ' and FIND_IN_SET('.$CITY.',doctor_city)';
			$ORDER = array( "field" => "doctor_order_featured", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Find a Doctor
	public function findADoctor($SPECIALITY="0",$DOCTOR_ID="0")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		
		if(!empty($SPECIALITY) and $SPECIALITY>"0")
			$CON.= ' and FIND_IN_SET('.$SPECIALITY.', `doctor_speciality`)';
		
		if(!empty($DOCTOR_ID) and $DOCTOR_ID>"0")
			$CON.= ' and doctor_id='.$DOCTOR_ID;
		
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Doctor List
	public function getDoctorList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$HOSPITAL_ID="",$SPECIALIST_ID="",$LIMIT="",$PAGINATION="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',doctor_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',doctor_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',doctor_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',doctor_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',doctor_disease)';
		if(!empty($HOSPITAL_ID))
			$CON.= '  and FIND_IN_SET('.$HOSPITAL_ID.',doctor_hospital)';
		if(!empty($SPECIALIST_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALIST_ID.',doctor_specialist_in)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		
		if(empty($LIMIT) or empty($PAGINATION))
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		else
		{
			$OFFSET=($PAGINATION-1)*$LIMIT;
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>$OFFSET);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_doctor', $CON, $ORDER, $LIMIT);
		}
		
		return $this->common_data['list'];
	}
	
	
	
	
	//Get Landing Page Doctor List
	public function getLPDoctorList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$HOSPITAL_ID="",$SPECIALIST_ID="",$LIMIT="",$PAGINATION="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',doctor_country)';
		if(!empty($CITY_ID))
			$CON.= '  and doctor_city IN('.$CITY_ID.')';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',doctor_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',doctor_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',doctor_disease)';
		if(!empty($HOSPITAL_ID))
			$CON.= '  and FIND_IN_SET('.$HOSPITAL_ID.',doctor_hospital)';
		if(!empty($SPECIALIST_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALIST_ID.',doctor_specialist_in)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		
		if(empty($LIMIT) or empty($PAGINATION))
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		else
		{
			$OFFSET=($PAGINATION-1)*$LIMIT;
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>$OFFSET);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_doctor', $CON, $ORDER, $LIMIT);
		}
		
		return $this->common_data['list'];
	}
	
	//Get Doctor Featured List
	public function getDoctorFeaturedList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and doctor_show_in_featured="1"';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',doctor_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',doctor_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',doctor_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',doctor_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',doctor_disease)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Similar Doctor List
	public function getSimilarDoctorList($COUNTRY_ID="0",$SPECIALITY_ID="0",$SPECIALIST_ID="0")
	{ 
		
		$SPECIALIST_ID=empty($SPECIALIST_ID)?"0":$SPECIALIST_ID;
		
		$SPECIALITY_ID=empty($SPECIALITY_ID)?"0":$SPECIALITY_ID;
		
		$COUNTRY_ID=empty($COUNTRY_ID)?"0":$COUNTRY_ID;
		
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$SPECIALIST_ID.',doctor_specialist_in)';
		$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		
		if(empty($this->common_data[ 'list' ]))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and FIND_IN_SET('.$SPECIALITY_ID.',doctor_speciality)';
			$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		}
		
		if(empty($this->common_data[ 'list' ]))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and FIND_IN_SET('.$COUNTRY_ID.',doctor_country)';
			$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		}
		
		if(empty($this->common_data[ 'list' ]))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and doctor_show_in_featured="1"';
			$ORDER = array( "field" => "doctor_order_master", "direction" => "asc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Doctor Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Cost Section Start***********************************************************/
	
	//Get Cost
	public function getCost($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and cost_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Cost By ID
	public function getCostById($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and cost_id="'.$ID.'"';
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Cost
	public function getFeaturedCost($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and cost_show_in_featured="1"';
			$ORDER = array( "field" => "cost_id", "direction" => "desc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_cost', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and cost_show_in_featured="1"';
			$ORDER = array( "field" => "cost_id", "direction" => "desc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Featured Cost By Speciality
	public function getFeaturedCostBySpeciality($SPECIALITY="",$LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and cost_show_in_featured="1" and FIND_IN_SET('.$SPECIALITY.',cost_speciality)';
			$ORDER = array( "field" => "cost_id", "direction" => "desc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_cost', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and cost_show_in_featured="1" and FIND_IN_SET('.$SPECIALITY.',cost_speciality)';
			$ORDER = array( "field" => "cost_id", "direction" => "desc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Cost List
	public function getCostList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',cost_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',cost_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',cost_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',cost_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',cost_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',cost_disease)';
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Cost Details URL
	public function getCostDetailsURL($COST_ID="",$TYPE="country")
	{ 
		$URL=front_base_url('cost/');
		
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and cost_id='.$COST_ID;
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$COST = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER )[0];
	
		
		if(!empty($COST['cost_procedure']))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and procedure_id='.$COST['cost_procedure'];
			$ORDER = array();
			$PROCEDURE = $this->FetchModel->SelectDB( $FIELD, 'tb_procedure', $CON, $ORDER )[0];
			
			$URL.=$PROCEDURE['procedure_slug']."/";
		}
		
		
		if(!empty($COST['cost_country']))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and country_id='.$COST['cost_country'];
			$ORDER = array();
			$COUNTRY = $this->FetchModel->SelectDB( $FIELD, 'tb_country', $CON, $ORDER )[0];
			
			$URL.=$COUNTRY['country_slug']."/";
		}
		
		if($TYPE!="country")
		{
			if(!empty($TYPE))
			{
				//Run SelectDB Function which select data from database
				$FIELD = '*';
				$CON = 'IsDel="0" and city_id IN ('.$TYPE.')';
				$ORDER = array();
				$CITY= $this->FetchModel->SelectDB( $FIELD, 'tb_city', $CON, $ORDER )[0];

				$URL.=$CITY['city_slug']."/";
			}
		}
		
		
		return $URL;
	}
	
	//Get Cost Details
	public function getCostDetails($PROCEDURE_ID="",$COUNTRY_ID="",$CITY_ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$COUNTRY_ID.',cost_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',cost_city)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',cost_procedure)';
		
		
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		// echo $this->db->last_query();
		
		return $this->common_data['list'];
	}
	
	//Get Cost List by Hospital
	public function getCostByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(3,cost_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',cost_hospital)';
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Cost List by Doctor
	public function getCostByDoctor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(4,cost_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',cost_doctor)';
		$ORDER = array( "field" => "cost_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Cost Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Review Section Start***********************************************************/
	
	//Get Review
	public function getReview()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "review_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_review', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Review
	public function getFeaturedReview($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and review_show_in_featured="1"';
			$ORDER = array( "field" => "review_id", "direction" => "desc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_review', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and review_show_in_featured="1"';
			$ORDER = array( "field" => "review_id", "direction" => "desc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_review', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Review List
	public function getReviewList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',review_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',review_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',review_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',review_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',review_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',review_disease)';
		$ORDER = array( "field" => "review_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_review', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Review List by Hospital
	public function getReviewByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(3,review_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',review_hospital)';
		$ORDER = array( "field" => "review_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_review', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Review List by Doctor
	public function getReviewByDoctor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(4,review_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',review_doctor)';
		$ORDER = array( "field" => "review_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_review', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Review Section End*************************************************************/
	


	
	
	

/*********************************************************************Get FAQ Section Start***********************************************************/
	
	//Get FAQ
	public function getFAQ()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "faq_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_faq', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get FAQ List
	public function getFAQList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',faq_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',faq_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',faq_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',faq_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',faq_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',faq_disease)';
		$ORDER = array( "field" => "faq_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_faq', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get FAQ List by Hospital
	public function getFAQByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(3,faq_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',faq_hospital)';
		$ORDER = array( "field" => "faq_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_faq', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get FAQ List by Doctor
	public function getFAQByDoctor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(4,faq_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',faq_doctor)';
		$ORDER = array( "field" => "faq_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_faq', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get FAQ Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Content Section Start***********************************************************/
	
	//Get Content
	public function getContent()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "content_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_content', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Content List
	public function getContentList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',content_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',content_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',content_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',content_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',content_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',content_disease)';
		$ORDER = array( "field" => "content_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_content', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Content Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Testimonial Section Start***********************************************************/
	
	//Get Testimonial
	public function getTestimonial()
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_testimonial', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Featured Testimonial
	public function getFeaturedTestimonial($LIMIT="")
	{ 
		if(!empty($LIMIT))
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and testimonial_show_in_featured="1"';
			$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
			$LIMIT=array("COUNT"=>$LIMIT,"OFFSET"=>0);
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDBLimit( $FIELD, 'tb_testimonial', $CON, $ORDER, $LIMIT);
		}
		else
		{
			//Run SelectDB Function which select data from database
			$FIELD = '*';
			$CON = 'IsDel="0" and testimonial_show_in_featured="1"';
			$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
			$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_testimonial', $CON, $ORDER );
		}
		
		return $this->common_data['list'];
	}
	
	//Get Testimonial List by Hospital
	public function getTestimonialByHospital($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(3,testimonial_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',testimonial_hospital)';
		$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_testimonial', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Testimonial List by Doctor
	public function getTestimonialByDoctor($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET(4,testimonial_page)';
		if(!empty($ID))
			$CON.= '  and FIND_IN_SET('.$ID.',testimonial_doctor)';
		$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_testimonial', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Testimonial List
	public function getTestimonialList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',testimonial_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',testimonial_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',testimonial_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',testimonial_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',testimonial_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',testimonial_disease)';
		$ORDER = array( "field" => "testimonial_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_testimonial', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Testimonial Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Doctor Talk Section Start***********************************************************/
	
	//Get Doctor Talk List
	public function getDoctorTalkList($COUNTRY_ID="",$CITY_ID="",$SPECIALITY_ID="",$PROCEDURE_ID="",$DISEASE_ID="",$PAGE="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($PAGE))
			$CON.= '  and FIND_IN_SET('.$PAGE.',doctor_talk_page)';
		if(!empty($COUNTRY_ID))
			$CON.= '  and FIND_IN_SET('.$COUNTRY_ID.',doctor_talk_country)';
		if(!empty($CITY_ID))
			$CON.= '  and FIND_IN_SET('.$CITY_ID.',doctor_talk_city)';
		if(!empty($SPECIALITY_ID))
			$CON.= '  and FIND_IN_SET('.$SPECIALITY_ID.',doctor_talk_speciality)';
		if(!empty($PROCEDURE_ID))
			$CON.= '  and FIND_IN_SET('.$PROCEDURE_ID.',doctor_talk_procedure)';
		if(!empty($DISEASE_ID))
			$CON.= '  and FIND_IN_SET('.$DISEASE_ID.',doctor_talk_disease)';
		$ORDER = array( "field" => "doctor_talk_id", "direction" => "desc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor_talk', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
/*********************************************************************Get Doctor Talk Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Specialist In Start***********************************************************/
	
	//Get Specialist
	public function getSpecialist($SLUG="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0"';
		if(!empty($SLUG))
			$CON.= ' and specialist_slug="'.$SLUG.'"';
		$ORDER = array( "field" => "specialist_title", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_specialist', $CON, $ORDER );
		
		return $this->common_data['list'];
	}
	
	//Get Specialist By ID
	public function getSpecialistByID($ID="")
	{ 
		$ID=empty($ID)?"0":$ID;
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and specialist_id="'.$ID.'"';
		$ORDER = array( "field" => "specialist_title", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_specialist', $CON, $ORDER );
		
		
		return empty($this->common_data['list'][0])?array():$this->common_data['list'][0]; 
	}
	
	//Get Specialist IN
	public function getSpecialistIn($ID="0")
	{ 
		$ID=empty($ID)?"0":$ID;
		//Run SelectDB Function which select data from database		
		$FIELD='*';
		$CON='IsDel="0" and specialist_id IN ('.$ID.')';
		$ORDER=array('field'=>'specialist_title','direction'=>'asc');
		$this->common_data['list']=$this->FetchModel->SelectDB($FIELD,'tb_specialist',$CON,$ORDER);
		
		
		return implode(', ', array_column($this->common_data['list'], 'specialist_title'));
	}
	
	//Get Specialist By Speciality
	public function getSpecialistBySpeciality($ID="")
	{ 
		//Run SelectDB Function which select data from database
		$FIELD = '*';
		$CON = 'IsDel="0" and FIND_IN_SET('.$ID.',specialist_speciality)';
		$ORDER = array( "field" => "specialist_title", "direction" => "asc" );
		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_specialist', $CON, $ORDER );
		
		return empty($this->common_data['list'])?array():$this->common_data[ 'list' ];
	}
	
/*********************************************************************Get Specialist In Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Designation Start***********************************************************/
	
	//Get Designation IN
	public function getDesignation($ID="0")
	{ 
		$ID=empty($ID)?"0":$ID;
		//Run SelectDB Function which select data from database		
		$FIELD='*';
		$CON='IsDel="0" and doctor_designation_id IN ('.$ID.')';
		$ORDER=array('field'=>'doctor_designation_title','direction'=>'asc');
		$this->common_data['list']=$this->FetchModel->SelectDB($FIELD,'tb_doctor_designation',$CON,$ORDER);
		
		
		return implode(', ', array_column($this->common_data['list'], 'doctor_designation_title'));
	}
	
/*********************************************************************Get Designation Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Qualification Start***********************************************************/
	
	//Get Qualification IN
	public function getQualification($ID="0")
	{ 
		$ID=empty($ID)?"0":$ID;
		//Run SelectDB Function which select data from database		
		$FIELD='*';
		$CON='IsDel="0" and doctor_qualification_id IN ('.$ID.')';
		$ORDER='FIELD(doctor_qualification_id, '.$ID.')';
		$this->common_data['list']=$this->FetchModel->SelectDBCustomOrder($FIELD,'tb_doctor_qualification',$CON,$ORDER);
		
		
		return implode(', ', array_column($this->common_data['list'], 'doctor_qualification_title'));
	}
	
/*********************************************************************Get Qualification Section End*************************************************************/
	


	
	
	

/*********************************************************************Get Accreditation Start***********************************************************/
	
	//Get Accreditation IN
	public function getAccreditation($ID="0")
	{ 
		$ID=empty($ID)?"0":$ID;
		
		//Run SelectDB Function which select data from database		
		$FIELD='*';
		$CON='IsDel="0" and accreditation_id IN ('.$ID.')';
		$ORDER=array('field'=>'accreditation_id','direction'=>'asc');
		return $this->FetchModel->SelectDB($FIELD,'tb_accreditation',$CON,$ORDER);
	}
	
/*********************************************************************Get Accreditation Section End*************************************************************/
	
	
	
	
	
	
}

