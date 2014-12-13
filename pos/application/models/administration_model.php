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
                $post['pos_user_id']    =   $user;
                $this->db->insert("pos_enterprise", $post);
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->where('pos_enterprise_id', $post['pos_enterprise_id'])->update('pos_enterprise',$post);
                return $post['pos_enterprise_id'];

            }
        }


        function getModule($id = false){
            if ($id) {
                $result    =   $this->db->where("pos_module_id", $id)->get("v_pos_module")->row();
            }else{
                $result    =   $this->db->get("v_pos_module")->result();
            }
            return $result;
        }


        function setModule($post, $user, $accion){
            if ($accion == "crear") {
                $post['pos_user_id']    =   $user;
                $this->db->insert("pos_module", $post);
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->where('pos_module_id', $post['pos_module_id'])->update('pos_module',$post);
                return $post['pos_module_id'];

            }
        }


        function getModuleStatus(){
            $result    =   $this->db->get("pos_module_status")->result();
            return $result;
        }
        


	}
?>