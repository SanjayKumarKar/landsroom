<?php
class Mailer {
	private $mail_header;
	private $mail_footer;
	private $CI;

	function __construct() {
		
		$this->CI = & get_instance();
		$this->CI->load->library( 'email' );

		$this->CI =& get_instance();
		$this->CI->load->library('email');		
		
		$config = Array();
		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_crypto'] = 'ssl';
		$config['smtp_user'] = 'info@medijourney.co.in'; //Change This
		$config['smtp_pass'] = 'qwslzylbqkvgodsd '; //Change This
		$config['smtp_port'] = 465;
		$config['mailtype'] = 'html';
		
		$this->CI->email->initialize($config);
		$this->CI->email->set_newline("\r\n");
	}

	public function sendMail($SUBJECT, $MESSAGE ) //done
	{
		//Send to the User
		$this->CI->email->from( 'info@medijourney.co.in', "MediJourney Website" );
		
		$recipientEmails = [
			'ankit.rathi@fnp.com',
			'rishabh@fnp.com',
			'yogender.p@medijourney.co.in',
			'fazal.a@medijourney.co.in',
			'altamush@medijourney.co.in',
			'info@medijourney.co.in'
		];
		
		

		$toEmails = implode(',', $recipientEmails);

		$this->CI->email->to($toEmails);
		
		$this->CI->email->subject( $SUBJECT );

		$this->CI->email->message( $MESSAGE );
		if ( $this->CI->email->send() )
			return true;
		else
			return false;
	}


}