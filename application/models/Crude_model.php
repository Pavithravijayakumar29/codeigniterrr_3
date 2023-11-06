<?php 
class Crude_model extends CI_Model 
{

function saverecords($data) 
{
	
   $this->db->insert('crud',$data);
	return true;

}

// function display_records() 
// {
	
//    $query = $this->db->get('crud');
// 	return $query->result();

// }
// function displayrecordsById($id) 
// {
	
//    $query = $this->db->query(" select * from crud where id=' ".$id." ' ");
// 	return $query->result();

// }

}

?>
