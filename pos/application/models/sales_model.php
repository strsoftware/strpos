<?php
	class sales_model extends CI_Model{


        function getCustomer($id = false){
        	if ($id) {
        		$result    =   $this->db->where("pos_client_id", $id)->get("pos_client")->row();
        	}else{
        		$result    =   $this->db->get("pos_client")->result();
        	}
            return $result;
        }


        function setCustomer($post, $user, $accion){
            if ($accion == "crear") {
                $this->db->insert("pos_client", $post);
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->where('pos_client_id', $post['pos_client_id'])->update('pos_client',$post);
                return $post['pos_client_id'];

            }
        }



	}
?>