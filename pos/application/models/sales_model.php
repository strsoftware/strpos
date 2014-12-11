<?php
	class sales_model extends CI_Model{


        function getCustomer($id){
        	if ($id) {
        		$result    =   $this->db->where("pos_client_id", $id)->get("pos_client")->row();
        	}else{
        		$result    =   $this->db->get("pos_client")->result();
        	}
            return $result;
        }


        function setCustomer($post, $user, $accion){

            if ($accion == "crear") {
                $this->db->query("INSERT INTO pos_client(pos_client_fullname, pos_client_address, pos_client_nit, pos_client_phone, pos_user_id) 
                            VALUES('$post[pos_client_fullname]', '$post[pos_client_address]', '$post[pos_client_nit]', '$post[pos_client_phone]', $user) ");
                return $this->db->insert_id();

            }else if ($accion == "editar") {
                $this->db->query("UPDATE pos_client SET 
                            pos_client_fullname     =   '$post[pos_client_fullname]',
                            pos_client_address      =   '$post[pos_client_address]',
                            pos_client_nit          =   '$post[pos_client_nit]',
                            pos_client_phone        =   '$post[pos_client_phone]'
                            WHERE pos_client_id     =    $post[pos_client_id] ");

                return $post['pos_client_id'];
            }

           

        }

		
	}
?>