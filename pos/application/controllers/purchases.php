<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(APPPATH.'controllers/STR_Controller.php');
	class purchases extends STR_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
	        if (!isset($_SESSION['pos_user_id'])) {
				redirect(base_url('login'));
	  		}else{
	  			$this->load->model('purchases_model');
	  		}
	    }


	    /***********************************************************************************/
		#METODO: muestra formualio para crear ordenes de compra
		function purchase_order(){
			$this->data["vista"]	=	"modules/purchases/purchase_order";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra formualio para generar recibos por compra
		function purchase_receipt(){
			$this->data["vista"]	=	"modules/purchases/purchase_receipt";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra formualio para ingresar facturas por compra
		function invoice_entry(){
			$this->data["vista"]	=	"modules/purchases/invoice_entry";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de administracion de articulos
		function articles_maintenance(){
			$this->data["vista"]	=	"modules/purchases/articles_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de administracion de almacenes
		function stores_maintenance(){
			$this->data["vista"]	=	"modules/purchases/stores_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de administracion de proveedores
		function providers($accion, $id = false){
			if($_POST){
				$codigo 	=	$this->purchases_model->setProvider($this->input->post(), $_SESSION['pos_user_id'], $accion);
				if ($codigo > 0) {
					if ($accion == "crear") { $_SESSION['ok']  = "REGÍSTRO CREADO EXITOSAMENTE"; }else
					if ($accion == "editar") { $_SESSION['ok'] = "REGÍSTRO ACTUALIZADO EXITOSAMENTE"; }
				}else{ $_SESSION['error'] = "OCURRIO UN PROBLEMA, POR FAVOR INTENTE DE NUEVO"; }
				redirect(base_url('purchases/providers/crear'));

			}else if($id){
				$this->data["status"]	= 	$this->purchases_model->getStatusProvider();
				$this->data["title"] 	= 	"Editar Proveedor";
				$this->data["accion"] 	= 	"editar";
				$this->data["vista"] 	= 	"modules/purchases/providers";
				$this->data["row"]		= 	$this->purchases_model->getProvider($id);

			}else if($accion == "crear"){
				$this->data["status"]	= 	$this->purchases_model->getStatusProvider();
				$this->data["title"] 	= 	"Crear Proveedor";
				$this->data["accion"] 	= 	"crear";
				$this->data["focus"] 	= 	"pos_provider_fullname";
				$this->data["vista"] 	= 	"modules/purchases/providers";

			}else{
				$this->data["result"]	= 	$this->purchases_model->getProvider();
				$this->data["vista"]	=	"modules/purchases/providers_maintenance";
			}

			if (isset($_SESSION['ok'])) { 	$this->data["ok"] = $_SESSION['ok']; unset($_SESSION['ok']); }
			if (isset($_SESSION['error'])){ $this->data["error"] = $_SESSION['error']; unset($_SESSION['error']); }

			$this->load->view("templates/template_main", $this->data);
		}



	}
?>