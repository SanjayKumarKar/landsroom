<?php
class AddModel extends CI_Model
{
	public function InsetDB($DB,$insertData)
	{
		if ($this->db->field_exists('createdOn', $DB))
			$creation=array('createdOn'=>date('Y-m-d H:i:s'));
		else
			$creation=array();

		$insertData=array_merge($insertData,$creation);
		
		if($this->db->insert($DB, $insertData))
			return TRUE;
		else
			return FALSE;
	}
}