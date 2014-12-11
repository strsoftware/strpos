<?php
	class administration_model extends CI_Model{


        function getEnterprise($id = false){
        	if ($id) {
        		$result    =   $this->db->where("pos_enterprise_id", $id)->get("pos_enterprise")->row();
        	}else{
        		$result    =   $this->db->get("pos_enterprise")->result();
        	}
            return $result;
        }


        function setEnterprise($post, $user, $accion){
            if ($accion == "crear") {
                $this->db->insert("pos_enterprise", $post);
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->where('pos_enterprise_id', $post['pos_enterprise_id'])->update('pos_enterprise',$post);
                return $post['pos_enterprise_id'];

            }
        }




	}
?>