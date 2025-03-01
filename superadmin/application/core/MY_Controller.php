<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 

{
	function __construct()
	{
		parent::__construct();
		
		$this->common_data[ 'DATA_SHOW_IN_PAGES' ]=array(
			array("id"=>1,"content"=>"Hospital Listing"),
			array("id"=>2,"content"=>"Doctor Listing"),
			array("id"=>3,"content"=>"Hospital Details"),
			array("id"=>4,"content"=>"Doctor Details"),
			array("id"=>5,"content"=>"Cost Listing"),
			array("id"=>6,"content"=>"Cost Details"),
			array("id"=>7,"content"=>"Patient Visa ")
		);
	}


	public function generateSlug($data) {
		// Convert to lowercase
		$slug = strtolower($data);

		// Replace non-alphanumeric characters with hyphens
		$slug = preg_replace('/[^a-z0-9]+/i', '-', $slug);

		// Remove leading and trailing hyphens
		$slug = trim($slug, '-');

		return $slug;
	}


}


