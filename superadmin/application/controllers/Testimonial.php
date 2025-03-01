<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends MY_Controller 
{	
	
//Set Common things for this controller*************************************************************
	public $COMMON=array();
	
	function  __construct() {
        parent::__construct();
        $this->COMMON['DB']='tb_testimonial';
        $this->COMMON['ID_FIELD']='testimonial_id';
        $this->COMMON['VIEW_CONTROLLER']='testimonial';
		
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
		$this->common_data['title'] 			= 	'Testimonial';
		$this->common_data['heading'] 			= 	'Manage Data';
		$this->common_data['description'] 		= 	'Manage info in an effective way.';
		$this->common_data['SITE'] 				= 	$this->siteDetails->SelectSiteDB();
		$this->common_data['THIS'] 				= 	$this;
		
		
		
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON='IsDel="0"';
		$ORDER=array('field'=>'country_name','direction'=>'asc');
		$this->common_data['COUNTRY']=$this->FetchModel->SelectDB($FIELD,'tb_country',$CON,$ORDER);
		
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON='IsDel="0"';
		$ORDER=array('field'=>'state_name','direction'=>'asc');
		$this->common_data['STATE']=$this->FetchModel->SelectDB($FIELD,'tb_state',$CON,$ORDER);
		
		//Run SelectDB Function which select data from database
		$FIELD='*';
		$CON='IsDel="0"';
		$ORDER=array('field'=>'city_name','direction'=>'asc');
		$this->common_data['CITY']=$this->FetchModel->SelectDB($FIELD,'tb_city',$CON,$ORDER);
		
		// //Run SelectDB Function which select data from database
		// $FIELD='*';
		// $CON='IsDel="0"';
		// $ORDER=array('field'=>'speciality_title','direction'=>'asc');
		// $this->common_data['SPECIALITY']=$this->FetchModel->SelectDB($FIELD,'tb_speciality',$CON,$ORDER);
		
		// //Run SelectDB Function which select data from database
		// $FIELD='*';
		// $CON='IsDel="0"';
		// $ORDER=array('field'=>'procedure_title','direction'=>'asc');
		// $this->common_data['PROCEDURE']=$this->FetchModel->SelectDB($FIELD,'tb_procedure',$CON,$ORDER);
		
		// //Run SelectDB Function which select data from database
		// $FIELD='*';
		// $CON='IsDel="0"';
		// $ORDER=array('field'=>'disease_title','direction'=>'asc');
		// $this->common_data['DISEASE']=$this->FetchModel->SelectDB($FIELD,'tb_disease',$CON,$ORDER);
		
		// //Run SelectDB Function which select data from database
		// $FIELD='*';
		// $CON='IsDel="0"';
		// $ORDER=array('field'=>'doctor_name','direction'=>'asc');
		// $this->common_data['DOCTOR']=$this->FetchModel->SelectDB($FIELD,'tb_doctor',$CON,$ORDER);
		
		// //Run SelectDB Function which select data from database
		// $FIELD='*';
		// $CON='IsDel="0"';
		// $ORDER=array('field'=>'hospital_name','direction'=>'asc');
		// $this->common_data['HOSPITAL']=$this->FetchModel->SelectDB($FIELD,'tb_hospital',$CON,$ORDER);
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
		$this->form_validation->set_rules('testimonial_title','Title','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$insertData = array(
					'testimonial_country' => empty($this->input->post('testimonial_country'))?"0":implode(",",$this->input->post('testimonial_country')),
					'testimonial_state' => empty($this->input->post('testimonial_state'))?"0":implode(",",$this->input->post('testimonial_state')),
					'testimonial_city' => empty($this->input->post('testimonial_city'))?"0":implode(",",$this->input->post('testimonial_city')),	
					// 'testimonial_speciality' => empty($this->input->post('testimonial_speciality'))?"0":implode(",",$this->input->post('testimonial_speciality')),
					// 'testimonial_procedure' => empty($this->input->post('testimonial_procedure'))?"0":implode(",",$this->input->post('testimonial_procedure')),
					// 'testimonial_disease' => empty($this->input->post('testimonial_disease'))?"0":implode(",",$this->input->post('testimonial_disease')),
					// 'testimonial_doctor' => empty($this->input->post('testimonial_doctor'))?"0":implode(",",$this->input->post('testimonial_doctor')),
					// 'testimonial_hospital' => empty($this->input->post('testimonial_hospital'))?"0":implode(",",$this->input->post('testimonial_hospital')),
					'testimonial_title' => $this->input->post('testimonial_title'),
					'testimonial_short_details' => $this->input->post('testimonial_short_details'),
					'testimonial_details' => $this->input->post('testimonial_details',false),
					'testimonial_image' => $this->input->post('testimonial_image'),
					//'testimonial_video_id' => $this->input->post('testimonial_video_id'),
					'testimonial_page' => empty($this->input->post('testimonial_page'))?"0":implode(",",$this->input->post('testimonial_page')),
					'testimonial_show_in_featured' => $this->input->post('testimonial_show_in_featured')
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
		$this->form_validation->set_rules('testimonial_title','Title','required');
		//Run Validation to Check form validation
		if($this->form_validation->run()) 
		{
			//Set Data into array
			$updateData = array(
					'testimonial_country' => empty($this->input->post('testimonial_country'))?"0":implode(",",$this->input->post('testimonial_country')),
					'testimonial_state' => empty($this->input->post('testimonial_state'))?"0":implode(",",$this->input->post('testimonial_state')),
					'testimonial_city' => empty($this->input->post('testimonial_city'))?"0":implode(",",$this->input->post('testimonial_city')),	
					// 'testimonial_speciality' => empty($this->input->post('testimonial_speciality'))?"0":implode(",",$this->input->post('testimonial_speciality')),
					// 'testimonial_procedure' => empty($this->input->post('testimonial_procedure'))?"0":implode(",",$this->input->post('testimonial_procedure')),
					// 'testimonial_disease' => empty($this->input->post('testimonial_disease'))?"0":implode(",",$this->input->post('testimonial_disease')),
					// 'testimonial_doctor' => empty($this->input->post('testimonial_doctor'))?"0":implode(",",$this->input->post('testimonial_doctor')),
					// 'testimonial_hospital' => empty($this->input->post('testimonial_hospital'))?"0":implode(",",$this->input->post('testimonial_hospital')),
					'testimonial_title' => $this->input->post('testimonial_title'),
					'testimonial_short_details' => $this->input->post('testimonial_short_details'),
					'testimonial_details' => $this->input->post('testimonial_details',false),
					'testimonial_image' => $this->input->post('testimonial_image'),
					//'testimonial_video_id' => $this->input->post('testimonial_video_id'),
					'testimonial_page' => empty($this->input->post('testimonial_page'))?"0":implode(",",$this->input->post('testimonial_page')),
					'testimonial_show_in_featured' => $this->input->post('testimonial_show_in_featured')
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
			$searColumns = array('testimonial_title');
			if( !empty($params['search']['value']) ) {
				$where="AND (";
				for($i=0;$i<count($searColumns);$i++)
					{
				$where .= $searColumns[$i]." Like '%".$params['search']['value']."%' OR ";
					} 
				$CONDITION .=substr($where,0,strlen($where)-3);
				$CONDITION .=")";
			}
		 
		 
		 	//It will change as per single or multiple table(Change)
			$results['ALL']=$this->FetchModel->SelectDB($FIELD,$this->COMMON['DB'],$CONDITION,$ORDER);
			$results['DATA']= $this->FetchModel->SelectDBLimit($FIELD,$this->COMMON['DB'],$CONDITION,$ORDER,$LIMIT);
		 
			$datas = array();
			if(count($results['DATA'])>0){
				foreach ($results['DATA'] as $DATA) {
					$nestedData=array();
					$nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
									   <input type="checkbox" class="checkboxes operation_checkbox" value="'.$DATA[$this->common_data['default_id_field']].'" />
										<span></span>
									</label>';
					
					
					
					//Change Field which you want to show (Start)

					$nestedData[] = $DATA['testimonial_title'];
					$nestedData[] = $DATA['testimonial_show_in_featured']==0?'<span class="badge badge-danger">No</span>':'<span class="badge badge-success">Yes</span>';
					
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
							'testimonial_title' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
							'testimonial_country' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
							'testimonial_state' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
							'testimonial_city' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),	
							// 'testimonial_speciality' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
							// 'testimonial_procedure' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
							// 'testimonial_disease' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
							// 'testimonial_doctor' => $worksheet->getCellByColumnAndRow(7, $row)->getValue(),
							// 'testimonial_hospital' => $worksheet->getCellByColumnAndRow(8, $row)->getValue(),
							//'testimonial_video_id' => $worksheet->getCellByColumnAndRow(9, $row)->getValue(),
							'testimonial_page' => $worksheet->getCellByColumnAndRow(10, $row)->getValue(),
							'testimonial_show_in_featured' => $worksheet->getCellByColumnAndRow(11, $row)->getValue(),
							'testimonial_image' => '51ba570fe68fc088e0a942bdf8700cdce7eb8b1d/'.$worksheet->getCellByColumnAndRow(12, $row)->getValue(),
							'testimonial_short_details' => $worksheet->getCellByColumnAndRow(13, $row)->getValue(),
							'testimonial_details' => '<p>'.$worksheet->getCellByColumnAndRow(14, $row)->getValue().'</p>'
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
	
	

	
	
}
