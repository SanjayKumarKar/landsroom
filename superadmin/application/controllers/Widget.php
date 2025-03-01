<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends MY_Controller 
{	
	
//Set Common things for this controller*************************************************************
	public $COMMON=array();
	
	function  __construct() {
        parent::__construct();
        $this->COMMON['DB']='tb_widget';
        $this->COMMON['ID_FIELD']='widget_id';
        $this->COMMON['VIEW_CONTROLLER']='widget';
		
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
		$this->common_data['title'] 			= 	'Module';
		$this->common_data['heading'] 			= 	'Manage Data';
		$this->common_data['description'] 		= 	'Manage info in an effective way.';
		$this->common_data['SITE'] 				= 	$this->siteDetails->SelectSiteDB();
		$this->common_data['THIS'] 				= 	$this;
	}
	

	
	
	
	
	
	
	
//List View**********************************************************************************
	public function index($loadListView="")
	{
		//Run SelectJoinDB Function which select data from multiple Table of database
		$FIELD='*';
		$CON='IsDel="0" and widget_area="'.$loadListView.'"';
		$ORDER=array();
		$this->common_data['list']=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON,$ORDER);
		
		
		$this->common_data['loadview'] 	= 	$loadListView;
		//Load View
		$this->common_data['view'] 	= 	"Content List";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('importantButton','common/importantButtonListPageWidget',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/'.$loadListView,$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	

	
	
	
	
	
	
	
//Trash View**********************************************************************************
	public function trash($loadListView="")
	{
		//Run SelectJoinDB Function which select data from multiple Table of database
		$FIELD='*';
		$CON='IsDel="1" and widget_area="'.$loadListView.'"';
		$ORDER=array();
		$this->common_data['list']=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON,$ORDER);
		
		
		$this->common_data['loadview'] 	= 	$loadListView;
		
		//Load View
		$this->common_data['view'] 	= 	"Content List";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('importantButton','common/importantButtonListPageWidget',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/'.$loadListView,$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	

	
	
	
	
//Add View**********************************************************************************	
	public function add($loadAddView="")
	{
		//Load View
		$this->common_data['view'] 	= 	"Add";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/'.$loadAddView,$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Add Form Submission	
	public function addSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('widget_area','Widget Area','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$insertData = array(
					'widget_area' => $this->input->post('widget_area'),
					'widget_order' => empty($this->input->post('widget_order'))?0:$this->input->post('widget_order'),
					'widget_details' => json_encode($this->input->post('widget_details',false))
			);
			//Run InsertDB Function which insert data into database
			$RET_VALUE=$this->AddModel->InsetDB($this->COMMON['DB'], $insertData);
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Submitted.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER']."/index/".$this->input->post('widget_area')));
			}
			else
			{
				$this->session->set_flashdata('errorMSG','Data Can not be submitted.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/add/'.$this->input->post('widget_area')."Add"));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/add/'.$this->input->post('widget_area')."Add"));
		}
	}
	
	
	
	
	
	

	
	
//Edit View**********************************************************************************	
	public function edit($loadEditView,$id=0)
	{
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON=$this->COMMON['ID_FIELD'].'='.$id;
		$ORDER=array('field'=>$this->COMMON['ID_FIELD'],'direction'=>'desc');
		$this->common_data['list']=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON,$ORDER);
		
		if(empty($this->common_data['list']))
		{
			echo "<script type='text/javascript'>window.history.back();</script>"; die;
		}
		
		//Load View
		$this->common_data['view'] 	= 	"Edit";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/'.$loadEditView,$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Edit Form Submission	
	public function editSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('widget_area','Widget Area','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'widget_area' => $this->input->post('widget_area'),
					'widget_order' => empty($this->input->post('widget_order'))?0:$this->input->post('widget_order'),
					'widget_details' => json_encode($this->input->post('widget_details',false))
			);
			//Run UpdateDB Function which update data into database
			$CON=$this->COMMON['ID_FIELD'].'='.$this->input->post('id');
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('widget_area')."Edit/".$this->input->post('id')));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','Information can not be Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('widget_area')."Edit/".$this->input->post('id')));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$this->input->post('widget_area')."Edit/".$this->input->post('id')));
		}
	}
	
	
	
	
	
	
	
	

	
	
//Remove And Restore Action**************************************************************************
	//Move To Trash Folder (Single Item)
	public function moveToTrash($id=0)
	{
		//Set Data into array
		$updateData = array(
				'IsDel' => '1'
		);
		//Run UpdateDB Function which update data into database
		$CON=$this->COMMON['ID_FIELD'].'='.$id;
		$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
	}
	
	//Delete Forever (Single Item)
	public function deleteForever($id=0)
	{
		//Run DeleteDB Function which remove data from database
		$CON=$this->COMMON['ID_FIELD'].'='.$id;
		$this->DeleteModel->DeleteDB($this->COMMON['DB'],$CON);
	}
	
	//Restore From Trash (Single Item)
	public function restoreFromTrash($id=0)
	{
		//Set Data into array
		$updateData = array(
				'IsDel' => '0'
		);
		//Run UpdateDB Function which update data into database
		$CON=$this->COMMON['ID_FIELD'].'='.$id;
		$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
	}
	
	//Move To Trash Folder (Multiple Item)
	public function moveToTrashMultiple()
	{
		if($this->input->post('checkbox_value'))
		{	
			$id = $this->input->post('checkbox_value');
			for($count = 0; $count < count($id); $count++)
			{
				//Set Data into array
				$updateData = array(
						'IsDel' => '1'
				);
				//Run UpdateDB Function which update data into database
				$CON=$this->COMMON['ID_FIELD'].'='.$id[$count];
				$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			}
		}
	}
	
	//Delete Forever (Multiple Item)
	public function deleteForeverMultiple()
	{
		if($this->input->post('checkbox_value'))
		{	
			$id = $this->input->post('checkbox_value');
			for($count = 0; $count < count($id); $count++)
			{
				//Run DeleteDB Function which remove data from database
				$CON=$this->COMMON['ID_FIELD'].'='.$id[$count];
				$this->DeleteModel->DeleteDB($this->COMMON['DB'],$CON);
			}
		}
	}
	
	//Restore From Trash (Multiple Item)
	public function restoreFromTrashMultiple()
	{
		if($this->input->post('checkbox_value'))
		{	
			$id = $this->input->post('checkbox_value');
			for($count = 0; $count < count($id); $count++)
			{
				//Set Data into array
				$updateData = array(
						'IsDel' => '0'
				);
				//Run UpdateDB Function which update data into database
				$CON=$this->COMMON['ID_FIELD'].'='.$id[$count];
				$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			}
		}
	}
	
	
	
}
