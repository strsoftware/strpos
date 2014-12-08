<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(APPPATH.'controllers/STR_Controller.php');
	class administration extends STR_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
	        if (!isset($_SESSION['pos_user_id'])) {
				redirect(base_url('login'));
	  		}else{
	  			$this->load->model('administration_model');
	  		}
	    }


	    /***********************************************************************************/
		#METODO: muestra informacion de la empresa
		function enterprise(){
			$this->data["vista"]	=	"modules/administration/enterprise";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de almacenes de la empresa
		function stores(){
			$this->data["vista"]	=	"modules/administration/stores";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de usuarios del sistema
		function users(){
			$this->data["vista"]	=	"modules/administration/users";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de roles de usuario
		function role(){
			$this->data["vista"]	=	"modules/administration/role";
			$this->load->view("templates/template_main", $this->data);
		}



	}
?>