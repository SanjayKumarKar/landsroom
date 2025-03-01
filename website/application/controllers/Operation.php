<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Operation extends MY_Controller {

	//Set Common things for this controller*************************************************************
	function __construct() {
		$COMMON = array();

		parent::__construct();
		$this->COMMON[ 'view_controller' ] = 'operation';

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
		//Load Mailer Library
		$this->load->library( 'mailer' );
		//Load Leadsquare Library
		$this->load->library( 'leadsquare' );
		//Initialize data
		$this->initData();
	}


	//Initialize Common Details
	private	function initData() 
	{		
		
	}
	
	public function updateUserType() 
	{
		$user_id = $this->get_userid();
		$user_types = $this->input->post('user_type'); // Get selected types (array)
	
		if ($user_id) {
			$data = [
				'user_type' => is_array($user_types) ? implode(',', $user_types) . ',' : '' // Convert array to CSV
			];
	
			$this->db->where('user_id', $user_id);
			$this->db->update('tb_user', $data);
	
			$this->session->set_flashdata('successContactMSG', 'User type updated successfully.');
			return redirect(front_base_url('owner-listing-page'));
                // redirect('Page');
				echo 1;
		} else {
			$this->session->set_flashdata('errorContactMSG', 'Failed to update user type.');
			return redirect(front_base_url('edit-post-property-form'));
                // redirect('Page');
				echo 0;
		}
	
		redirect(front_base_url('signin-page'));
	}

	// //Newsletter Form Submission*************************************************************	
	// public function editDetails() 
	// {
	// 		// //Run SelectDB Function which select data from database
	// 		// $FIELD = '*';
	// 		// $CON = 'IsDel="0"';
	// 		// $ORDER = array( "field" => "user_id ", "direction" => "desc" );
	// 		// $this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_user', $CON, $ORDER );
	// 		// return $this->common_data['list'];
	// 		return redirect(front_base_url('edit-details-page'));
	// }
	


	// //Newsletter Form Submission*************************************************************	
	// public function newsletterFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'newsletter_email', 'Email', 'required|valid_email' );
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'newsletter_email' => $this->input->post( 'newsletter_email' )
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_newsletter', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }
	
	
	
	
	// //Landing Page Form Submission*************************************************************	
	// public function lpFormSubmitted() 
	// {
	// 	$phone_number = $this->input->post('dial_code').''.$this->input->post('lp_contact'); 
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'lp_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'lp_email', 'Email', 'valid_email' );
	// 	$this->form_validation->set_rules( 'lp_contact', 'Mobile Number', 'required');
	// 	$this->form_validation->set_rules( 'lp_country', 'Country', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'lp_name' => $this->input->post( 'lp_name' ),
	// 			'lp_email' => $this->input->post( 'lp_email' ),
	// 			'lp_contact' => $phone_number,
	// 			'lp_subject' => $this->input->post( 'lp_subject' ),
	// 			'lp_source' => $this->input->post( 'lp_source' ),
	// 			'lp_message' => $this->input->post( 'lp_message'),
	// 			'lp_country' => $this->input->post( 'lp_country'),
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_lp_enquiry', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {			
				
	// 			$SUBJECT=$this->input->post( 'lp_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'lp_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'lp_name' )."<br>";
	// 			$MESSAGE.="Email:".$this->input->post( 'lp_email' )."<br>";
	// 			$MESSAGE.="Phone:".$phone_number."<br>";
	// 			$MESSAGE.="Country:".$this->input->post( 'lp_country' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'lp_source' )."<br>";
	// 			$MESSAGE.="Message:".$this->input->post( 'lp_message' )."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'lp_name' ),
	// 				'EmailAddress' => $this->input->post( 'lp_email' ),
	// 				'Phone' => $phone_number,
	// 				'mx_Medical_Problem' => $this->input->post( 'lp_message' ),
	// 				'mx_New_Country' => $this->input->post( 'lp_country' ),
	// 				'mx_Source_URI' => $this->input->post( 'lp_source' )
	// 			);
	// 			$this->leadsquare->pushLeadlp($dataArray);
				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you-lp?phone=' . urlencode($phone_number)));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }
	
	
	
	
	
	
	// public function lp_second_FormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'lp_contact', 'Mobile Number', 'required');

	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'lp_contact' => $this->input->post( 'lp_contact' ),
	// 			'looking_tratment' => $this->input->post( 'looking_tratment' ),
	// 			'looking_for' => $this->input->post( 'looking_for' ),
	// 			'medical_symptoms' => $this->input->post( 'medical_symptoms' ),
	// 			'sought_doctor_advice' => $this->input->post( 'sought_doctor_advice' ),
	// 			'taking_medication' => $this->input->post( 'taking_medication' ),
	// 			'past_surgeries' => $this->input->post( 'past_surgeries' ),
	// 			'prev_heart_attck' => $this->input->post( 'prev_heart_attck' ),
	// 			'known_allergy' => $this->input->post( 'known_allergy' ),
	// 			'plan_india' => $this->input->post( 'plan_india' )
	// 		);
			
	// 		$UPLOAD_PATH = "uploads/";
	// 		if ( !empty( $_FILES[ "enquiry_file" ][ "name" ] ) ) {
	// 			//upload Photo
	// 			$fileName1 = $_FILES[ "enquiry_file" ][ "name" ];
	// 			$document = rand( 11111111111111, 111111111111110 ) . $fileName1;
	// 			$TARGET_FILE1 = $UPLOAD_PATH . $document;
	// 			$TMP_NAME1 = $_FILES[ "enquiry_file" ][ "tmp_name" ];
				
	// 			$maxsize    = 5242880;
	// 			$acceptable = array(
	// 				'application/pdf',
	// 				'application/msword',
	// 				'image/jpeg',
	// 				'image/jpg',
	// 				'image/gif',
	// 				'image/png'
	// 			);
				
	// 			//Size Validation
	// 			if(($_FILES['enquiry_file']['size'] >= $maxsize) || ($_FILES["enquiry_file"]["size"] == 0)) {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Resume file too large. File must be less than 2 megabytes.' );
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			//Type Validation
	// 			if((!in_array($_FILES['enquiry_file']['type'], $acceptable)) && (!empty($_FILES["enquiry_file"]["type"]))) {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Invalid file type. Only PDF, Doc, JPG, GIF and PNG types are accepted.');
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			//Run Validation to Check form validation
	// 			if ( move_uploaded_file( $TMP_NAME1, $TARGET_FILE1 ) ) {
	// 				//Set Data into array
	// 				$insertData[ 'enquiry_file' ] = $document;
	// 			} else {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Unable to upload Resume.' );
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			$FILE_URL=file_upload_base_url($document);
	// 		}
			
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_lp_enquiry', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {				
				
				
				
	// 			$dataArray = array(
	// 				'Phone' => $this->input->post( 'lp_contact' ),
	// 				'mx_Are_You_Looking_for_Medical_Treatment_in_India' => $this->input->post( 'looking_tratment' ),
	// 				'mx_What_Medical_Treatment_are_You_Looking_For' => $this->input->post( 'looking_for' ),
	// 				'mx_Can_You_Describe_Your_Medical_Symptoms_in_Detail' => $this->input->post( 'medical_symptoms' ),
	// 				'mx_Have_You_Sought_Any_Doctor_Advice_for_these_Symp' => $this->input->post( 'sought_doctor_advice' ),
	// 				'mx_Are_You_Taking_Any_Medications_for_Your_Symptoms' => $this->input->post( 'taking_medication' ),
	// 				'mx_Have_You_Undergone_Any_Surgeries_in_the_Past' => $this->input->post( 'past_surgeries' ),
	// 				'mx_Have_You_Had_a_Previous_Heart_Attack' => $this->input->post( 'prev_heart_attck' ),
	// 				'mx_Do_You_Have_Any_Known_Allergies' => $this->input->post( 'known_allergy' ),
	// 				'mx_When_Do_You_Plan_to_Travel_for_Treatment' => $this->input->post( 'plan_india' ),
	// 				'mx_Attached_Reports' => $FILE_URL
	// 			);
	// 			//print_r($dataArray); exit;
	// 			$this->leadsquare->pushLeadlps($dataArray);
				
					
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
		
	// }
	
	
	

	// //Support Form Submission*************************************************************	
	// public function supportFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'support_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'support_email', 'Email', 'valid_email' );
	// 	$this->form_validation->set_rules( 'support_contact', 'Mobile Number', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'support_name' => $this->input->post( 'support_name' ),
	// 			'support_email' => $this->input->post( 'support_email' ),
	// 			'support_contact' => $this->input->post( 'support_contact' ),
	// 			'support_subject' => $this->input->post( 'support_subject' ),
	// 			'support_source' => $this->input->post( 'support_source' ),
	// 			'support_message' => $this->input->post( 'support_message')
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_support', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {			
				
	// 			$SUBJECT=$this->input->post( 'support_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'support_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'support_name' )."<br>";
	// 			$MESSAGE.="Email:".$this->input->post( 'support_email' )."<br>";
	// 			$MESSAGE.="Phone:".$this->input->post( 'support_contact' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'support_source' )."<br>";
	// 			$MESSAGE.="Message:".$this->input->post( 'support_message' )."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'support_name' ),
	// 				'EmailAddress' => $this->input->post( 'support_email' ),
	// 				'Phone' => $this->input->post( 'support_contact' ),
	// 				'Notes' => $this->input->post( 'support_message' ),
	// 				'mx_New_Country' => "",
	// 				'mx_Hospital_Name' => "",
	// 				'mx_Doctor_Name' => "",
	// 				'mx_Source_URI' => $this->input->post( 'support_source' )
	// 			);
	// 			$this->leadsquare->pushLead($dataArray);
				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }
	
	// //Enquiry Assistance Form Submission*************************************************************	
	// public function enquiryAssistanceFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'enquiry_assistance_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'enquiry_assistance_contact', 'Mobile Number', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'enquiry_assistance_name' => $this->input->post( 'enquiry_assistance_name' ),
	// 			'enquiry_assistance_contact' => $this->input->post( 'enquiry_assistance_contact' ),
	// 			'enquiry_assistance_subject' => $this->input->post( 'enquiry_assistance_subject' ),
	// 			'enquiry_assistance_source' => $this->input->post( 'enquiry_assistance_source' )
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_enquiry_assistance', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {			
				
	// 			$SUBJECT=$this->input->post( 'enquiry_assistance_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'enquiry_assistance_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'enquiry_assistance_name' )."<br>";
	// 			$MESSAGE.="Phone:".$this->input->post( 'enquiry_assistance_contact' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'enquiry_assistance_source' )."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'enquiry_assistance_name' ),
	// 				'EmailAddress' => "",
	// 				'Phone' => $this->input->post( 'enquiry_assistance_contact' ),
	// 				'Notes' => $this->input->post( 'enquiry_assistance_subject' ),
	// 				'mx_New_Country' => "",
	// 				'mx_Hospital_Name' => "",
	// 				'mx_Doctor_Name' => "",
	// 				'mx_Source_URI' => $this->input->post( 'enquiry_assistance_source' )
	// 			);
	// 			$this->leadsquare->pushLead($dataArray);
				
						
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }

	// //Enquiry Form Submission*************************************************************	
	// public function enquiryFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'enquiry_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'enquiry_email', 'Email', 'required|valid_email' );
	// 	$this->form_validation->set_rules( 'enquiry_contact', 'Mobile Number', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'enquiry_name' => $this->input->post( 'enquiry_name' ),
	// 			'enquiry_email' => $this->input->post( 'enquiry_email' ),
	// 			'enquiry_contact' => $this->input->post( 'enquiry_contact' ),
	// 			'enquiry_subject' => $this->input->post( 'enquiry_subject' ),
	// 			'enquiry_source' => $this->input->post( 'enquiry_source' ),
	// 			'enquiry_message' => $this->input->post( 'enquiry_message')
	// 		);
			
	// 		$UPLOAD_PATH = "uploads/";
	// 		if ( !empty( $_FILES[ "enquiry_file" ][ "name" ] ) ) {
	// 			//upload Photo
	// 			$fileName1 = $_FILES[ "enquiry_file" ][ "name" ];
	// 			$document = rand( 11111111111111, 111111111111110 ) . $fileName1;
	// 			$TARGET_FILE1 = $UPLOAD_PATH . $document;
	// 			$TMP_NAME1 = $_FILES[ "enquiry_file" ][ "tmp_name" ];
				
	// 			$maxsize    = 2097152;
	// 			$acceptable = array(
	// 				'application/pdf',
	// 				'application/msword',
	// 				'image/jpeg',
	// 				'image/jpg',
	// 				'image/gif',
	// 				'image/png'
	// 			);
				
	// 			//Size Validation
	// 			if(($_FILES['enquiry_file']['size'] >= $maxsize) || ($_FILES["enquiry_file"]["size"] == 0)) {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Resume file too large. File must be less than 2 megabytes.' );
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			//Type Validation
	// 			if((!in_array($_FILES['enquiry_file']['type'], $acceptable)) && (!empty($_FILES["enquiry_file"]["type"]))) {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Invalid file type. Only PDF, Doc, JPG, GIF and PNG types are accepted.');
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			//Run Validation to Check form validation
	// 			if ( move_uploaded_file( $TMP_NAME1, $TARGET_FILE1 ) ) {
	// 				//Set Data into array
	// 				$insertData[ 'enquiry_file' ] = $document;
	// 			} else {
	// 				//If validation error
	// 				$this->session->set_flashdata( 'errorMSG', 'Unable to upload Resume.' );
	// 				return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			}
				
	// 			$FILE_URL=file_upload_base_url($document);
	// 		}
			
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_enquiry', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {				
				
	// 			$SUBJECT=$this->input->post( 'enquiry_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'enquiry_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'enquiry_name' )."<br>";
	// 			$MESSAGE.="Email:".$this->input->post( 'enquiry_email' )."<br>";
	// 			$MESSAGE.="Phone:".$this->input->post( 'enquiry_contact' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'enquiry_source' )."<br>";
	// 			$MESSAGE.="Message:".$this->input->post( 'enquiry_message' )."<br>";
	// 			if(!empty($FILE_URL))
	// 			$MESSAGE.="File:".$FILE_URL."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'enquiry_name' ),
	// 				'EmailAddress' => $this->input->post( 'enquiry_email' ),
	// 				'Phone' => $this->input->post( 'enquiry_contact' ),
	// 				'Notes' => $this->input->post( 'enquiry_message' ),
	// 				'mx_New_Country' => "",
	// 				'mx_Hospital_Name' => "",
	// 				'mx_Doctor_Name' => "",
	// 				'mx_Source_URI' => $this->input->post( 'enquiry_source' )
	// 			);
	// 			$this->leadsquare->pushLead($dataArray);
				
					
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }
	
	// //Enquiry Doctor Form Submission*************************************************************	
	// public function enquiryDoctorFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'enquiry_doctor_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'enquiry_doctor_contact', 'Mobile Number', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'enquiry_doctor_name' => $this->input->post( 'enquiry_doctor_name' ),
	// 			'enquiry_doctor_contact' => $this->input->post( 'enquiry_doctor_contact' ),
	// 			'enquiry_doctor_subject' => $this->input->post( 'enquiry_doctor_subject' ),
	// 			'enquiry_doctor_source' => $this->input->post( 'enquiry_doctor_source' )
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_enquiry_doctor', $insertData );
			
	// 		if ( $RET_VALUE == TRUE ) {		
				
	// 			$SUBJECT=$this->input->post( 'enquiry_doctor_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'enquiry_doctor_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'enquiry_doctor_name' )."<br>";
	// 			$MESSAGE.="Phone:".$this->input->post( 'enquiry_doctor_contact' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'enquiry_doctor_source' )."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'enquiry_doctor_name' ),
	// 				'EmailAddress' => "",
	// 				'Phone' => $this->input->post( 'enquiry_doctor_contact' ),
	// 				'Notes' => "",
	// 				'mx_New_Country' => "",
	// 				'mx_Hospital_Name' => "",
	// 				'mx_Doctor_Name' => $this->input->post( 'enquiry_doctor_subject' ),
	// 				'mx_Source_URI' => $this->input->post( 'enquiry_doctor_source' )
	// 			);
	// 			$this->leadsquare->pushLead($dataArray);
				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }

	// //Enquiry Hospital Form Submission*************************************************************	
	// public function enquiryHospitalFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'enquiry_hospital_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'enquiry_hospital_email', 'Email', 'valid_email' );
	// 	$this->form_validation->set_rules( 'enquiry_hospital_contact', 'Mobile Number', 'required');
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 			'enquiry_hospital_name' => $this->input->post( 'enquiry_hospital_name' ),
	// 			'enquiry_hospital_email' => $this->input->post( 'enquiry_hospital_email' ),
	// 			'enquiry_hospital_contact' => $this->input->post( 'enquiry_hospital_contact' ),
	// 			'enquiry_hospital_subject' => $this->input->post( 'enquiry_hospital_subject' ),
	// 			'enquiry_hospital_source' => $this->input->post( 'enquiry_hospital_source' ),
	// 			'enquiry_hospital_message' => $this->input->post( 'enquiry_hospital_message')
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_enquiry_hospital', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {			
				
	// 			$SUBJECT=$this->input->post( 'enquiry_hospital_subject' );
				
	// 			$MESSAGE="Subject:".$this->input->post( 'enquiry_hospital_subject' )."<br>";
	// 			$MESSAGE.="Name:".$this->input->post( 'enquiry_hospital_name' )."<br>";
	// 			$MESSAGE.="Email:".$this->input->post( 'enquiry_hospital_email' )."<br>";
	// 			$MESSAGE.="Phone:".$this->input->post( 'enquiry_hospital_contact' )."<br>";
	// 			$MESSAGE.="Source:".$this->input->post( 'enquiry_hospital_source' )."<br>";
	// 			$MESSAGE.="Message:".$this->input->post( 'enquiry_hospital_message' )."<br>";
				
	// 			$this->mailer->sendMail($SUBJECT, $MESSAGE );
				
	// 			$dataArray = array(
	// 				'FirstName' => $this->input->post( 'enquiry_hospital_name' ),
	// 				'EmailAddress' => $this->input->post( 'enquiry_hospital_email' ),
	// 				'Phone' => $this->input->post( 'enquiry_hospital_contact' ),
	// 				'Notes' => $this->input->post( 'enquiry_hospital_message' ),
	// 				'mx_New_Country' => "",
	// 				'mx_Hospital_Name' => $this->input->post( 'enquiry_hospital_subject' ),
	// 				'mx_Doctor_Name' => "",
	// 				'mx_Source_URI' => $this->input->post( 'enquiry_hospital_source' )
	// 			);
	// 			$this->leadsquare->pushLead($dataArray);
				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect(front_base_url('thank-you'));
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }
	
	
	

	// /*//Appointment Form Submission*************************************************************	
	// public function appointmentFormSubmitted() 
	// {
	// 	//Set form validatin rule from back-end
	// 	$this->form_validation->set_rules( 'appointment_name', 'Name', 'required' );
	// 	$this->form_validation->set_rules( 'appointment_email', 'Email', 'required|valid_email' );
	// 	$this->form_validation->set_rules( 'appointment_contact', 'Mobile Number', 'numeric|exact_length[10]', array( 'exact_length[10]' => 'Should be 10 characters in length' ) );
	// 	//Run Validation to Check form validation
	// 	if ( $this->form_validation->run() ) {
	// 		//Set Data into array
	// 		$insertData = array(
	// 				'appointment_name' => $this->input->post('appointment_name'),
	// 				'appointment_contact' => $this->input->post('appointment_contact'),
	// 				'appointment_email' => $this->input->post('appointment_email'),
	// 				'appointment_speciality' => $this->input->post('appointment_speciality'),
	// 				'appointment_doctor' => $this->input->post('appointment_doctor'),
	// 				'appointment_message' => $this->input->post('appointment_message',false)
	// 		);
	// 		//Run InsertDB Function which insert data into database
	// 		$RET_VALUE = $this->AddModel->InsetDB( 'tb_appointment', $insertData );
	// 		if ( $RET_VALUE == TRUE ) {
				
	// 			//Send Lead Mail
	// 			$FROM=array('mail'=>$this->common_data[ 'SITE_EMAIL' ],'name'=>$this->common_data[ 'SITE_NAME' ]);
	// 			$TO=$this->common_data[ 'SITE_EMAIL' ];
	// 			$SUBJECT="Request Appointment";
	// 			$MSG="Name : ".$this->input->post('appointment_name')."<br>";
	// 			$MSG.="Contact No : ".$this->input->post('appointment_contact')."<br>";
	// 			$MSG.="Email : ".$this->input->post('appointment_email')."<br>";
	// 			$MSG.="Doctor : ".$this->getDoctorByID($this->input->post('appointment_doctor'))['doctor_name']."<br>";
	// 			$MSG.="Speciality : ".$this->getSpecialityByID($this->input->post('appointment_speciality'))[0]['speciality_title']."<br>";
	// 			$MSG.="Message : ".$this->input->post('appointment_message')."<br>";
	// 			$this->mailer->sendMail($FROM,$TO,$SUBJECT,$MSG);
				
	// 			//Set Flash Data and Redirect to List/Index Page
	// 			$this->session->set_flashdata( 'successContactMSG', 'Thank you for your message. We will revert within 24 hours on the email address or contact number supplied by you.' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 1;
	// 		} else {
	// 			$this->session->set_flashdata( 'errorContactMSG', 'Data Can not be submitted.....' );
	// 			return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 			echo 0;
	// 		}
	// 	} else {
	// 		//If validation error
	// 		//Set Flash Data and Redirect to List/Index Page
	// 		$this->session->set_flashdata( 'errorContactMSG', validation_errors() );
	// 		return redirect( $_SERVER[ 'HTTP_REFERER' ] );
	// 		echo 0;
	// 	}
	// }*/
	
	
	

	
	// //Filter Hospital*************************************************************	
	// public function getHospitalFilter() 
	// {
	// 	$speciality=$this->input->post('speciality');
	// 	$hospital=$this->input->post('hospital');
		
	// 	$BASE_URL=front_base_url('doctors');
		
	// 	if(!empty($speciality))
	// 		$BASE_URL.="/".$speciality;
		
	// 	if(!empty($hospital))
	// 		$BASE_URL.="/".$hospital;
		
	// 	return redirect($BASE_URL);
	// }
	
	
	

	
	// //Filter Cost*************************************************************	
	// public function getCostFilter() 
	// {
	// 	$speciality=$this->input->post('speciality');
	// 	$procedure=$this->input->post('procedure');
		
	// 	$BASE_URL=front_base_url('costs');
		
	// 	if(!empty($speciality))
	// 		$BASE_URL.="/".$speciality;
		
	// 	if(!empty($procedure))
	// 		$BASE_URL.="/".$procedure;
		
	// 	$BASE_URL.="/".$this->common_data[ 'COUNTRY_SLUG' ];
		
	// 	return redirect($BASE_URL);
	// }
	
	// //Filter  Procedure By Slug*************************************************************	
	// public function getProcedureBySlug() 
	// {
	// 	$speciality_slug=$this->input->post('speciality_slug');
		
	// 	$SPECIALITY_ID=$this->getSpeciality($speciality_slug)[0]['speciality_id'];
		
	// 	$PROCEDURE=$this->getProcedureBySpeciality($SPECIALITY_ID);
		
		
	// 	$PROCEDURE_LIST='<option value="">Select Treatment </option>';
		
	// 	foreach($PROCEDURE as $DATA)
	// 		$PROCEDURE_LIST.='<option value="'.$DATA['procedure_slug'].'">'.$DATA['procedure_title'].'</option>';
		
		
		
	// 	$VALUE=array('procedure'=>$PROCEDURE_LIST);
		
	// 	echo json_encode($VALUE);
	// }
	
	
	
	

	
	// //Get Search Data*************************************************************	
	// public function getSearchData() 
	// {
	// 	$search_text=$this->input->post('search_text');
	// 	//$search_text="dr";
	// 	$SEARCH_DATA="";
	// 	//echo $search_text;
		
	// 	if(!empty($search_text))
	// 	{
	// 		//Run SelectDB Function which select data from database
	// 		$FIELD = '*';
	// 		$CON = 'IsDel="0" and (hospital_name like "%'.$search_text.'%" or hospital_address like "%'.$search_text.'%")';
	// 		$ORDER = array( "field" => "hospital_name", "direction" => "asc" );
	// 		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_hospital', $CON, $ORDER );

	// 		if(!empty($this->common_data[ 'list' ]))
	// 		{
	// 			$SEARCH_DATA.='<h3>Hospital</h3>
	// 						   <ul>';
	// 								foreach($this->common_data[ 'list' ] as $DATA)
	// 								$SEARCH_DATA.='<li><a href="'.front_base_url('hospital/'.$DATA['hospital_slug']).'">'.$DATA['hospital_name'].'</a></li>';
	// 			$SEARCH_DATA.='</ul>';
	// 		}



	// 		//Run SelectDB Function which select data from database
	// 		$FIELD = '*';
	// 		$CON = 'IsDel="0" and (doctor_name like "%'.$search_text.'%" or doctor_short_details like "%'.$search_text.'%")';
	// 		$ORDER = array( "field" => "doctor_name", "direction" => "asc" );
	// 		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_doctor', $CON, $ORDER );

	// 		if(!empty($this->common_data[ 'list' ]))
	// 		{
	// 			$SEARCH_DATA.='<h3>Doctor</h3>
	// 						   <ul>';
	// 								foreach($this->common_data[ 'list' ] as $DATA)
	// 								$SEARCH_DATA.='<li><a href="'.front_base_url('doctor/'.$DATA['doctor_slug']).'">'.$DATA['doctor_name'].'</a></li>';
	// 			$SEARCH_DATA.='</ul>';
	// 		}



	// 		//Run SelectDB Function which select data from database
	// 		$FIELD = '*';
	// 		$CON = 'IsDel="0" and (cost_title like "%'.$search_text.'%" or cost_short_details like "%'.$search_text.'%")';
	// 		$ORDER = array( "field" => "cost_title", "direction" => "asc" );
	// 		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_cost', $CON, $ORDER );

	// 		if(!empty($this->common_data[ 'list' ]))
	// 		{
	// 			$SEARCH_DATA.='<h3>Treatment Cost</h3>
	// 						   <ul>';
	// 								foreach($this->common_data[ 'list' ] as $DATA)
	// 								{
	// 									$META=$this->getCostDetailsMeta($DATA['cost_id']);
	// 									$SLUG_DETAILS=$this->getCostDetailsURL($DATA['cost_id']);
										
	// 									$SEARCH_DATA.='<li><a href="'.$SLUG_DETAILS.'">'.$META[ 'PAGE_TITLE' ].'</a></li>';
										
	// 									$CITY=explode(",",$DATA['cost_city']);
										
	// 									foreach($CITY as $DATA_CITY)
	// 									{
	// 										$META=$this->getCostDetailsMeta($DATA['cost_id'],$DATA_CITY);
	// 										$SLUG_DETAILS=$this->getCostDetailsURL($DATA['cost_id'],$DATA_CITY);

	// 										$SEARCH_DATA.='<li><a href="'.$SLUG_DETAILS.'">'.$META[ 'PAGE_TITLE' ].'</a></li>';
	// 									}
	// 								}
	// 			$SEARCH_DATA.='</ul>';
	// 		}



	// 		//Run SelectDB Function which select data from database
	// 		$FIELD = '*';
	// 		$CON = 'IsDel="0" and (blog_title like "%'.$search_text.'%" or blog_short_details like "%'.$search_text.'%")';
	// 		$ORDER = array( "field" => "blog_title", "direction" => "asc" );
	// 		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_blog', $CON, $ORDER );

	// 		if(!empty($this->common_data[ 'list' ]))
	// 		{
	// 			$SEARCH_DATA.='<h3>Blog</h3>
	// 						   <ul>';
	// 								foreach($this->common_data[ 'list' ] as $DATA)
	// 								$SEARCH_DATA.='<li><a href="'.front_base_url('blog/'.$DATA['blog_slug']).'">'.$DATA['blog_title'].'</a></li>';
	// 			$SEARCH_DATA.='</ul>';
	// 		}



	// 		//Run SelectDB Function which select data from database
	// 		$FIELD = '*';
	// 		$CON = 'IsDel="0" and (page_title like "%'.$search_text.'%" or page_meta_description like "%'.$search_text.'%")';
	// 		$ORDER = array( "field" => "page_title", "direction" => "asc" );
	// 		$this->common_data[ 'list' ] = $this->FetchModel->SelectDB( $FIELD, 'tb_page', $CON, $ORDER );

	// 		if(!empty($this->common_data[ 'list' ]))
	// 		{
	// 			$SEARCH_DATA.='<h3>Page</h3>
	// 						   <ul>';
	// 								foreach($this->common_data[ 'list' ] as $DATA)
	// 								$SEARCH_DATA.='<li><a href="'.front_base_url($DATA['page_slug']).'">'.$DATA['page_title'].'</a></li>';
	// 			$SEARCH_DATA.='</ul>';
	// 		}
	// 	}
		
		
	// 	echo json_encode(array('data'=>$SEARCH_DATA));
	// }
	
	
	
	
	
	

	
}