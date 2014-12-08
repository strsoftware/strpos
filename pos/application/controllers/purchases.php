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
		function providers_maintenance(){
			$this->data["vista"]	=	"modules/purchases/providers_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}



	}
?>