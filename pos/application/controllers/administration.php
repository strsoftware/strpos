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
		#METODO: muestra listado de empresas creadas
		function enterprise($accion, $id = false){
			if($_POST){
				$codigo 	=	$this->administration_model->setEnterprise($this->input->post(), $_SESSION['pos_user_id'], $accion);
				if ($codigo > 0) {
					if ($accion == "crear") { $_SESSION['ok']  = "REGÍSTRO CREADO EXITOSAMENTE"; }else
					if ($accion == "editar") { $_SESSION['ok'] = "REGÍSTRO ACTUALIZADO EXITOSAMENTE"; }
				}else{ $_SESSION['error'] = "OCURRIO UN PROBLEMA, POR FAVOR INTENTE DE NUEVO"; }
				redirect(base_url('administration/enterprise/crear'));

			}else if($id){
				$this->data["title"] 	= 	"Editar Empresa";
				$this->data["accion"] 	= 	"editar";

				$this->data["vista"] 	= 	"modules/administration/enterprise";
				$this->data["row"]		= 	$this->administration_model->getEnterprise($id);

			}else if($accion == "crear"){
				$this->data["title"] 	= 	"Crear Empresa";
				$this->data["accion"] 	= 	"crear";
				$this->data["focus"] 	= 	"pos_enterprise_name";
				$this->data["vista"] 	= 	"modules/administration/enterprise";

			}else{
				$this->data["result"]	= 	$this->administration_model->getEnterprise();
				$this->data["vista"]	=	"modules/administration/enterprise_maintenance";
			}

			if (isset($_SESSION['ok'])) { 	$this->data["ok"] = $_SESSION['ok']; unset($_SESSION['ok']); }
			if (isset($_SESSION['error'])){ $this->data["error"] = $_SESSION['error']; unset($_SESSION['error']); }

			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de usuarios del sistema
		function users(){
			$this->data["vista"]	=	"modules/administration/users";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de almacenes de la empresa
		function modules($accion, $id = false){
			if($_POST){
				$codigo 	=	$this->administration_model->setModule($this->input->post(), $_SESSION['pos_user_id'], $accion);
				if ($codigo > 0) {
					if ($accion == "crear") { $_SESSION['ok']  = "REGÍSTRO CREADO EXITOSAMENTE"; }else
					if ($accion == "editar") { $_SESSION['ok'] = "REGÍSTRO ACTUALIZADO EXITOSAMENTE"; }
				}else{ $_SESSION['error'] = "OCURRIO UN PROBLEMA, POR FAVOR INTENTE DE NUEVO"; }
				redirect(base_url('administration/modules/crear'));

			}else if($id){
				$this->data["title"] 	= 	"Editar Módulo";
				$this->data["accion"] 	= 	"editar";

				$this->data["vista"] 	= 	"modules/administration/modules";

				$this->data["row"]		= 	$this->administration_model->getModule($id);
				$this->data["status"]	= 	$this->administration_model->getModuleStatus();
				$this->data["module"]	= 	$this->STR_model->getModuleClassification();

			}else if($accion == "crear"){
				$this->data["title"] 	= 	"Crear Módulo";
				$this->data["accion"] 	= 	"crear";
				$this->data["focus"] 	= 	"pos_module_name";
				$this->data["vista"] 	= 	"modules/administration/modules";
				$this->data["status"]	= 	$this->administration_model->getModuleStatus();
				$this->data["module"]	= 	$this->STR_model->getModuleClassification();

			}else{
				$this->data["result"]	= 	$this->administration_model->getModule();
				$this->data["vista"]	=	"modules/administration/modules_maintenance";
			}

			if (isset($_SESSION['ok'])) { 	$this->data["ok"] = $_SESSION['ok']; unset($_SESSION['ok']); }
			if (isset($_SESSION['error'])){ $this->data["error"] = $_SESSION['error']; unset($_SESSION['error']); }

			$this->load->view("templates/template_main", $this->data);
		}



	}
?>