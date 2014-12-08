<?php
	class login_model extends CI_Model{


		function getUser($user, $pass){
			$query 	=	$this->db->where("pos_user_nick", $user)->where("pos_user_pass", $pass)->get("pos_user");

			return $query;
		}



		function getSatus($id){
			$row 	=	$this->db->where("pos_user_status_id", $id)->get("pos_user_status")->row();

			return $row;
		}


	}
?>