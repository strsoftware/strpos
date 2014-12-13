<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(APPPATH.'controllers/STR_Controller.php');
	class sales extends STR_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
	        if (!isset($_SESSION['pos_user_id'])) {
				redirect(base_url('login'));
	  		}else{
	  			$this->load->model('sales_model');
	  		}
	    }


	    /***********************************************************************************/
		#METODO: muestra formulario para emitir una cotizacion
		function quote(){
			$this->data["vista"]	=	"modules/sales/quote";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra formulario para crear una orden de venta
		function orders(){
			$this->data["vista"]	=	"modules/sales/orders";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra formulario para facturar ventas
		function invoicing(){
			$this->data["vista"]	=	"modules/sales/invoicing";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra listado de productos con sus respectivos precios
		function price_list(){
			$this->data["vista"]	=	"modules/sales/price_list";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo administrador de clientes
		function customer($accion, $id = false){
			if($_POST){
				$codigo 	=	$this->sales_model->setCustomer($this->input->post(), $_SESSION['pos_user_id'], $accion);
				if ($codigo > 0) {
					if ($accion == "crear") { $_SESSION['ok']  = "REGÍSTRO CREADO EXITOSAMENTE"; }else
					if ($accion == "editar") { $_SESSION['ok'] = "REGÍSTRO ACTUALIZADO EXITOSAMENTE"; }
				}else{ $_SESSION['error'] = "OCURRIO UN PROBLEMA, POR FAVOR INTENTE DE NUEVO"; }
				redirect(base_url('sales/customer/crear'));

			}else if($id){
				$this->data["title"] 	= 	"Editar Cliente";
				$this->data["accion"] 	= 	"editar";

				$this->data["vista"] 	= 	"modules/sales/customer";
				$this->data["row"]		= 	$this->sales_model->getCustomer($id);

			}else if($accion == "crear"){
				$this->data["title"] 	= 	"Crear Cliente";
				$this->data["accion"] 	= 	"crear";
				$this->data["focus"] 	= 	"pos_client_fullname";
				$this->data["vista"] 	= 	"modules/sales/customer";

			}else{
				$this->data["result"]	= 	$this->sales_model->getCustomer();
				$this->data["vista"]	=	"modules/sales/customer_maintenance";
			}

			if (isset($_SESSION['ok'])) { 	$this->data["ok"] = $_SESSION['ok']; unset($_SESSION['ok']); }
			if (isset($_SESSION['error'])){ $this->data["error"] = $_SESSION['error']; unset($_SESSION['error']); }

			$this->load->view("templates/template_main", $this->data);
		}


	}
?>