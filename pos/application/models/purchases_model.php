<?php
	class purchases_model extends CI_Model{


		function getProvider($id = false){
        	if ($id) {
        		$result    =   $this->db->where("pos_provider_id", $id)->get("pos_provider")->row();
        	}else{
        		$result    =   $this->db->get("pos_provider")->result();
        	}
            return $result;
        }


        function setProvider($post, $user, $accion){
            if ($accion == "crear") {
                $post['pos_user_id'] = $user;
                $this->db->insert("pos_provider", $post);
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->where('pos_provider_id', $post['pos_provider_id'])->update('pos_provider',$post);
                return $post['pos_provider_id'];

            }
        }



        function getStatusProvider(){
            $result    =   $this->db->get("pos_provider_status")->result();
            return $result;
        }



		
	}
?>