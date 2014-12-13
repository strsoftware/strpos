<?php
	class STR_model extends CI_Model{


        function getModuleClassification(){
        	$result    =   $this->db->order_by("pos_module_classification_position", "asc")->get("pos_module_classification")->result();
            return $result;
        }


	}
?>