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
		#METODO: muestra formulario para ingresar facturas de ventas
		function invoice_entry(){
			$this->data["vista"]	=	"modules/sales/invoice_entry";
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
		function customer_maintenance(){
			$this->data["result"]= $this->sales_model->getCustomer("");
			$this->data["vista"]	=	"modules/sales/customer_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}


		function customer_new(){

			$this->data["vista"] = "modules/sales/customer_edit";
			$this->load->view("templates/template_main", $this->data);

		}

		function customer_new_success(){
			if ($_POST) {
				$this->sales_model->setCustomerInsert($this->input->post());
				$_SESSION['ok']= "clientes creado exitosamente"	;		
			}
			$this->data["vista"]	=	"modules/sales/customer_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}


		function customer_edit($id){
			$query 					=	$this->sales_model->getCustomer($id);
			$this->data["result"]	= 	$query[0];
			$this->data["vista"] = "modules/sales/customer_edit";
			$this->load->view("templates/template_main", $this->data);
		}

		function customer_edit_success(){
			if ($_POST) {
				$this->sales_model->setCustomerUpdate($this->input->post());
				$_SESSION['ok']="cliente actualizado corresctamente";
			}
			$this->data["vista"]	=	"modules/sales/customer_maintenance";
			$this->load->view("templates/template_main", $this->data);

		}

	}
?>