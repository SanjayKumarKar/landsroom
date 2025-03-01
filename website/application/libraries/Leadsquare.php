<?php
class Leadsquare {
	private $CI;

	function __construct() {
		
		$this->CI = & get_instance();
	}

	public function pushLead($DATA)
	{
		
		$FirstName=empty($DATA['FirstName'])?"":$DATA['FirstName'];
		$EmailAddress=empty($DATA['EmailAddress'])?"":$DATA['EmailAddress'];
		$Phone=empty($DATA['Phone'])?"":$DATA['Phone'];
		$Notes=empty($DATA['Notes'])?"":$DATA['Notes'];
		$mx_Country=empty($DATA['mx_Country'])?"":$DATA['mx_Country'];
		$mx_Hospital_Name=empty($DATA['mx_Hospital_Name'])?"":$DATA['mx_Hospital_Name'];
		$mx_Doctor_Name=empty($DATA['mx_Doctor_Name'])?"":$DATA['mx_Doctor_Name'];
		$mx_Source_URI=empty($DATA['mx_Source_URI'])?"":$DATA['mx_Source_URI'];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u%24rcc447cde85dfe03bb00d2e8eeae0f946&secretKey=c886f243e469bd0b37b7dc230c06043bd2700946',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>'[

			{
				"Attribute": "FirstName",
				"Value": "'.$FirstName.'"
			},
			{
				"Attribute": "EmailAddress",
				"Value": "'.$EmailAddress.'"
			},
			{
				"Attribute": "Phone",
				"Value": "'.$Phone.'"
			},
			{
				"Attribute": "Notes",
				"Value": "'.$Notes.'"
			},
			{
				"Attribute": "mx_Country",
				"Value": "'.$mx_Country.'"
			},
			{
				"Attribute": "Source",
				"Value": "Website Contact Form"
			},
			{
				"Attribute": "Origin",
				"Value": "Contact Form"
			},
			{
				"Attribute": "mx_Hospital_Name",
				"Value": "'.$mx_Hospital_Name.'"
			},
			{
				"Attribute": "mx_Doctor_Name",
				"Value": "'.$mx_Doctor_Name.'"
			},
			{
				"Attribute": "mx_Source_URI",
				"Value": "'.$mx_Source_URI.'"
			},
			{
				"Attribute": "SearchBy",
				"Value": "Phone"
			}

		]',
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		  ),
		));

		echo '[

			{
				"Attribute": "FirstName",
				"Value": "'.$FirstName.'"
			},
			{
				"Attribute": "EmailAddress",
				"Value": "'.$EmailAddress.'"
			},
			{
				"Attribute": "Phone",
				"Value": "'.$Phone.'"
			},
			{
				"Attribute": "Notes",
				"Value": "'.$Notes.'"
			},
			{
				"Attribute": "mx_Country",
				"Value": "'.$mx_Country.'"
			},
			{
				"Attribute": "Source",
				"Value": "Website Contact Form"
			},
			{
				"Attribute": "Origin",
				"Value": "Contact Form"
			},
			{
				"Attribute": "mx_Hospital_Name",
				"Value": "'.$mx_Hospital_Name.'"
			},
			{
				"Attribute": "mx_Doctor_Name",
				"Value": "'.$mx_Doctor_Name.'"
			},
			{
				"Attribute": "mx_Source_URI",
				"Value": "'.$mx_Source_URI.'"
			},
			{
				"Attribute": "SearchBy",
				"Value": "Phone"
			}

		]';
		$response = curl_exec($curl);

		curl_close($curl);
		//echo $response;
		//die;

	}


}