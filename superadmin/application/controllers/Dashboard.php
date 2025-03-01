<?php

defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );



class Dashboard extends MY_Controller

{

	function __construct()

	{

		$COMMON = array();



		parent::__construct();

		$this->COMMON[ 'DB' ] = '';

		$this->COMMON[ 'ID_FIELD' ] = '';

		$this->COMMON[ 'VIEW_CONTROLLER' ] = 'dashboard';



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



		$this->initData();

	}





	//Initialize Common Details

	private	function initData()

	{

		$this->common_data[ 'view_controller' ] = $this->COMMON[ 'VIEW_CONTROLLER' ];

		$this->common_data[ 'title' ] = 'Dashboard';

		$this->common_data[ 'heading' ] = 'Admin Dashboard';

		$this->common_data[ 'description' ] = 'statistics, charts, recent events and reports';

		$this->common_data[ 'SITE' ] = $this->siteDetails->SelectSiteDB();

		$this->common_data[ 'THIS' ] = $this;

	}









	//Index or List View

	public function index()
	{

		$this->common_data[ 'view' ] = "Home";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		//$this->template->write_view('importantButton','common/importantButtonListPage',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/index',$this->common_data);
		//$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data );
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
	
	
	
	
	public function averageRating($rating_field)
	{
		$FIELD='AVG('.$rating_field.') as AVG';
		$CON='IsDel="0" and '.$rating_field.'!=""';
		$ORDER=array('field'=>'rating_id','direction'=>'desc');
		$this->common_data['RATING']=$this->FetchModel->SelectDB($FIELD,'tb_rating',$CON,$ORDER);
		
		return $this->common_data['RATING'][0]['AVG'];
	}
	
	
	
	public function countRating($rating_field)
	{
		$FIELD='COUNT('.$rating_field.') as COUNT';
		$CON='IsDel="0" and '.$rating_field.'!=""';
		$ORDER=array('field'=>'rating_id','direction'=>'desc');
		$this->common_data['RATING']=$this->FetchModel->SelectDB($FIELD,'tb_rating',$CON,$ORDER);
		
		return $this->common_data['RATING'][0]['COUNT'];
	}
	
	
	
	public function responseRating($rating_field)
	{
		$FIELD='count(rating_id) as COUNT';
		$CON='IsDel="0" and '.$rating_field.'!=""';
		$ORDER=array('field'=>'rating_id','direction'=>'desc');
		$this->common_data['RATING']=$this->FetchModel->SelectDB($FIELD,'tb_rating',$CON,$ORDER);
		
		return $this->common_data['RATING'][0]['COUNT'];
	}

}