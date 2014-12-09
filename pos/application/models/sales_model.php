<?php
	class sales_model extends CI_Model{

		function __construct() {
        parent::__construct();
       
    }


    function getCustomer($id){
    	if ($id) {

    		$query=$this->db->query("SELECT a.* FROM pos_client a WHERE a.pos_client_id=$id");
    	}else{
    		$query=$this->db->query("SELECT a.* FROM pos_client a");
    	}
return $query->result();

    }

     function setCustomerInsert($post){
        $query = $this->db->query("INSERT INTO pos_client(pos_client_fullname,pos_client_address,pos_client_nit,pos_client_phone,pos_user_id) 
            VALUES('$post[pos_client_fullname]', '$post[pos_client_address]', '$post[pos_client_nit]', '$post[pos_client_phone]', '$post[pos_user_id]') ");
    }

    function setCustomerUpdate($post){
    	$query = $this->db->query("UPDATE pos_client SET 
    		pos_client_fullname = '$post[pos_client_fullname]',
            pos_client_address    =   '$post[pos_client_address]',
            pos_client_nit       =   '$post[pos_client_nit]',
            pos_client_phone        =   '$post[pos_client_phone]'
            WHERE pos_client_id    =    $post[pos_client_id] ");


    }


		
	}
?>