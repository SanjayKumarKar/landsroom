<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends MY_Controller 
{	
	
//Set Common things for this controller*************************************************************
	public $COMMON=array();
	
	function  __construct() {
        parent::__construct();
        $this->COMMON['DB']='tb_state';
        $this->COMMON['ID_FIELD']='state_id';
        $this->COMMON['VIEW_CONTROLLER']='state';
		
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
		$this->common_data['title'] 			= 	'State';
		$this->common_data['heading'] 			= 	'Manage Data';
		$this->common_data['description'] 		= 	'Manage info in an effective way.';
		$this->common_data['SITE'] 				= 	$this->siteDetails->SelectSiteDB();
		$this->common_data['THIS'] 				= 	$this;
		
		
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON='IsDel="0"';
		$ORDER=array('field'=>'country_name','direction'=>'asc');
		$this->common_data['COUNTRY']=$this->FetchModel->SelectDB($FIELD,'tb_country',$CON,$ORDER);
	}
	

	
	
	
	
	
	
	
//Index or List View**********************************************************************************
	public function index()
	{
		$this->common_data['MODE'] 	= 	"Active";
		
		//Load View
		$this->common_data['view'] 	= 	"Active List";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('importantButton','common/importantButtonListPage',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/index',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	

	
	
	
	
	
	
	
//Trash View**********************************************************************************
	public function trash()
	{
		$this->common_data['MODE'] 	= 	"Trash";
		
		//Load View
		$this->common_data['view'] 	= 	"Trash";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('importantButton','common/importantButtonListPage',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/index',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	

	
	
	
	
	
	
	
//Add View**********************************************************************************	
	public function add()
	{
		//Load View
		$this->common_data['view'] 	= 	"Add";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/add',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Add Form Submission	
	public function addSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('state_name','Title','required');
		$this->form_validation->set_rules('state_slug','Slug','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$insertData = array(
					'state_name' => $this->input->post('state_name'),
					'state_slug' => $this->input->post('state_slug'),
					'state_country_id' => $this->input->post('state_country_id'),
					'state_status' => $this->input->post('state_status'),
					'state_show_in_featured' => $this->input->post('state_show_in_featured'),
					'state_order_featured' => $this->input->post('state_order_featured'),
					'state_order_master' => $this->input->post('state_order_master')
			);
			//Run InsertDB Function which insert data into database
			$RET_VALUE=$this->AddModel->InsetDB($this->COMMON['DB'], $insertData);
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Submitted.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER']));
			}
			else
			{
				$this->session->set_flashdata('errorMSG','Data Can not be submitted.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/add'));
			}
		}
		else
		{
			//If validation error
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG',validation_errors());
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/add'));
		}
	}
	
	
	
	
	
	

	
	
//Edit View**********************************************************************************	
	public function edit($id=0)
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
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/edit',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Edit Form Submission	
	public function editSubmitted()
	{
		//Set form validatin rule from back-end
		$this->form_validation->set_rules('state_name','Title','required');
		$this->form_validation->set_rules('state_slug','Slug','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'state_name' => $this->input->post('state_name'),
					'state_slug' => $this->input->post('state_slug'),
					'state_country_id' => $this->input->post('state_country_id'),
					'state_status' => $this->input->post('state_status'),
					'state_show_in_featured' => $this->input->post('state_show_in_featured'),
					'state_order_featured' => $this->input->post('state_order_featured'),
					'state_order_master' => $this->input->post('state_order_master')
			);
			//Run UpdateDB Function which update data into database
			$CON=$this->COMMON['ID_FIELD'].'='.$this->input->post('id');
			$RET_VALUE=$this->EditModel->UpdateDB($this->COMMON['DB'],$updateData,$CON);
			
			if($RET_VALUE==TRUE)
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('successMSG','Information Successfully Updated.....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER']));
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
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/edit'));
		}
	}
	
	
	
	
	
	

	
	
//Details View**********************************************************************************	
	public function details($id=0)
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
		$this->common_data['view'] 	= 	"Details View";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/details',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
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
	
	
	
	
	
	
//Data Fetch**************************************************************************	
	
	 public function getData()
	 {
			$params = $_REQUEST;
		 	
		 	if($_REQUEST["mode"]=="All")	$CONDITION = "(".$this->COMMON['DB'].".IsDel='0' or ".$this->COMMON['DB'].".IsDel='1') ";
		 	elseif($_REQUEST["mode"]=="Active") $CONDITION = $this->COMMON['DB'].".IsDel='0' ";
		 	elseif($_REQUEST["mode"]=="Trash") $CONDITION =  $this->COMMON['DB'].".IsDel='1' ";
		 
		 	//Run SelectDB Function which select data from database
			$FIELD='*';
			$ORDER=array('field'=>$this->COMMON['DB'].'.'.$this->COMMON['ID_FIELD'],'direction'=>'desc');
			$LIMIT=$params['length']<=0?array():array("COUNT"=>$params['length'],"OFFSET"=>$params['start']);
		 
		 
		 	//Set Search Parameter(Change)
			$searColumns = array('state_id','country_name','state_name');
			if( !empty($params['search']['value']) ) {
				$where="AND (";
				for($i=0;$i<count($searColumns);$i++)
					{
				$where .= $searColumns[$i]." Like '%".$params['search']['value']."%' OR ";
					} 
				$CONDITION .=substr($where,0,strlen($where)-3);
				$CONDITION .=")";
			}
		 
		 
		 	//Join Tables(Change)
			$JOIN=array(
				array('table'=>'tb_country', 'join_key'=>'tb_country.country_id = tb_state.state_country_id')
			);
		 
		 
		 	//It will change as per single or multiple table(Change)
			$results['ALL']=$this->FetchModel->SelectJoinDB($FIELD,$this->COMMON['DB'],$JOIN,$CONDITION,$ORDER);
			$results['DATA']= $this->FetchModel->SelectJoinDBLimit($FIELD,$this->COMMON['DB'],$JOIN,$CONDITION,$ORDER,$LIMIT);
		 
			$datas = array();
			if(count($results['DATA'])>0){
				foreach ($results['DATA'] as $DATA) {
					$nestedData=array();
					$nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
									   <input type="checkbox" class="checkboxes operation_checkbox" value="'.$DATA[$this->common_data['default_id_field']].'" />
										<span></span>
									</label>';
					
					
					
					//Change Field which you want to show (Start)

					$nestedData[] = $DATA['state_id'];
					$nestedData[] = $DATA['state_name'];
					$nestedData[] = $DATA['country_name'];
					$nestedData[] = $DATA['state_status']==0?'<span class="badge badge-danger">Inactive</span>':'<span class="badge badge-success">Active</span>';
					$nestedData[] = $DATA['state_show_in_featured']==0?'<span class="badge badge-danger">No</span>':'<span class="badge badge-success">Yes</span>';
					
					//Change Field which you want to show (End)
					
					
					
					$action='<div class="btn-group">
								<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>
										<a href="'.base_url($this->COMMON['VIEW_CONTROLLER'].'/edit/'.$DATA[$this->common_data['default_id_field']]).'">
											<i class="fa fa-pencil-square-o" style="color:darkorange"></i> Edit </a>
									</li>';
								if($_REQUEST["mode"]=='Trash') 
								{
								$action.='<li>
										<a href="javascript:;" id="'.$DATA[$this->common_data['default_id_field']].'" onClick="restore_from_trash(this.id,\''.base_url($this->COMMON['VIEW_CONTROLLER'].'/restoreFromTrash/'.$DATA[$this->common_data['default_id_field']]).'\')">

											<i class="fa fa-refresh" style="color:darkgreen"></i> Restore 
										</a>
									</li>';
									
								}
								elseif($_REQUEST["mode"]=='Active') 
								{
								$action.='<li>
										<a href="javascript:;" id="'.$DATA[$this->common_data['default_id_field']].'" onClick="move_to_trash(this.id,\''.base_url($this->COMMON['VIEW_CONTROLLER'].'/moveToTrash/'.$DATA[$this->common_data['default_id_field']]).'\')">

											<i class="fa fa-trash" style="color:darkgreen"></i> Move to Trash 
										</a>
									</li>';
								}
					
								
								$action.='<li>
										<a href="javascript:;" id="'.$DATA[$this->common_data['default_id_field']].'" onClick="delete_forever(this.id,\''.base_url($this->COMMON['VIEW_CONTROLLER'].'/deleteForever/'.$DATA[$this->common_data['default_id_field']]).'\')">

											<i class="fa fa-trash" style="color:darkred"></i> Delete Forever 
										</a>
									</li>
								</ul>
							</div>';
					
					
					
					$nestedData[] = $action;
				
					$datas[] = $nestedData; 

				}
							
				$json_data = array(
					"draw"            => intval($params['draw'] ),   
					"recordsTotal"    => intval(count($results['DATA'])),  
					"recordsFiltered" => intval(count($results['ALL'])),
					"data"            => $datas
					);
				 echo json_encode($json_data); exit; 
			}else{
				$json_data = array(
				"draw"            => intval($params['draw'] ),   
				"recordsTotal"    => intval(count($results['ALL'])),  
				"recordsFiltered" => intval(count($results['ALL'])),
				"data"            => $datas
				);
			 echo json_encode($json_data); exit;
			}
	}
	
	
	
	
	
	

	
	
//Extra Code**************************************************************************
	//Check State Slug Existance and Generate Alternative
	public function checkStateSlug()
	{
		$slug=$this->input->post('state_slug');
		$slug_prev=$this->input->post('state_slug_prev');
		if($slug!=$slug_prev)
		{
			//Run SelectDBCount Function which get number of row from database
			$FIELD='state_id';
			$CON='state_slug="'.$slug.'"';
			$RET_VALUE=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON);
			if(count($RET_VALUE)==0)
				$VALUE=array('state_slug'=>$slug);
			else
			{
				//Run SelectDBCount Function which get number of row from database
				$FIELD='state_id';
				$CON='state_slug like "'.$slug.'%"';
				$RET_VALUE=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON);
				$slug=$slug.'-'.(count($RET_VALUE)+1);
				$VALUE=array('state_slug'=>$slug);
			}
		}
		else
			$VALUE=array('state_slug'=>$slug);
		
		echo json_encode($VALUE);
	}
	
	//Check Slug Existance and Generate Alternative
	public function getSlug($DATA)
	{
		$slug=$this->generateSlug($DATA);
			
		//Run SelectDBCount Function which get number of row from database
		$FIELD='state_id';
		$CON='state_slug="'.$slug.'"';
		$RET_VALUE=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON);
		if(count($RET_VALUE)>0)
		{
			//Run SelectDBCount Function which get number of row from database
			$FIELD='state_id';
			$CON='state_slug like "'.$slug.'%"';
			$RET_VALUE=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CON);
			$slug=$slug.'-'.(count($RET_VALUE)+1);
		}
		
		return $slug;
	}
	

	
	
	
	
	
	
	
//Import View**********************************************************************************	
	public function import()
	{
		//Load View
		$this->common_data['view'] 	= 	"Import";
		$this->template->write_view('header','common/header',$this->common_data);
		$this->template->write_view('leftSidebar','common/leftSidebar',$this->common_data);
		$this->template->write_view('pageBarTitle','common/pageBarTitle',$this->common_data);
		$this->template->write_view('commonMSG','common/commonMSG',$this->common_data);
		$this->template->write_view('content','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/import',$this->common_data);
		$this->template->write_view('extra','modules/'.$this->COMMON['VIEW_CONTROLLER'].'/extra',$this->common_data);
		$this->template->write_view('mediaManager','common/mediaManager',$this->common_data);
		$this->template->write_view('footer','common/footer',$this->footer_data);
		$this->template->render();
	}
	
//Import Form Submission	
	public function importSubmitted()
	{
		$file=$_FILES["file_to_be_import"];
		// Check the MIME type or file extension to ensure it's an Excel file
		$allowedMimeTypes = ['application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
		$allowedExtensions = ['xls', 'xlsx'];

		$fileInfo = finfo_open(FILEINFO_MIME_TYPE);
		$fileMimeType = finfo_file($fileInfo, $file["tmp_name"]);
		finfo_close($fileInfo);
		$fileExtension = pathinfo($file["name"], PATHINFO_EXTENSION);

		if (in_array($fileMimeType, $allowedMimeTypes) && in_array($fileExtension, $allowedExtensions) && isset($file["name"])) 
		{
			$path = $file["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			$worksheet  = $object->getSheetByName('Data List');
			$highestRow = $worksheet->getHighestRow();
			$highestColumn = $worksheet->getHighestColumn();
			$COUNT=0;
			for($row=2; $row<=$highestRow; $row++)
			{
				if(!empty($worksheet->getCellByColumnAndRow(0, $row)->getValue()))
				{
					//Set Data into array
					$insertData = array(
							'state_name' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
							'state_slug' => $this->getSlug($worksheet->getCellByColumnAndRow(0, $row)->getValue()),
							'state_country_id' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
							'state_show_in_featured' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
							'state_order_featured' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
							'state_order_master' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
							'state_status' => $worksheet->getCellByColumnAndRow(5, $row)->getValue()
					);
					//Run InsertDB Function which insert data into database
					$RET_VALUE=$this->AddModel->InsetDB($this->COMMON['DB'], $insertData);
					$COUNT++;
				}
			}
			
			//Run Validation to Check form validation
			if($COUNT>0) 
			{
				$this->session->set_flashdata('successMSG',$COUNT.' row imported successfully....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER']));
			}
			else
			{
				//Set Flash Data and Redirect to List/Index Page
				$this->session->set_flashdata('errorMSG','No row imported ....');
				return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/import'));
			}
		}
		else
		{
			//Set Flash Data and Redirect to List/Index Page
			$this->session->set_flashdata('errorMSG','Invalid file ....');
			return redirect(base_url($this->COMMON['VIEW_CONTROLLER'].'/import'));
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	//get State By Country
	public function getState()
	{
		$country=$this->input->post('country');
		
		if (is_array($country)) {
			$check_data=implode(",",$country);
		} else {
			$check_data=$country;
		}
		
		
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON='IsDel="0" and state_country_id IN ('.$check_data.')';
		$ORDER=array('field'=>'state_name','direction'=>'asc');
		$this->common_data['DATA']=$this->FetchModel->SelectDB($FIELD,'tb_state',$CON,$ORDER);
		
		echo json_encode($this->common_data['DATA']);
	}
}
