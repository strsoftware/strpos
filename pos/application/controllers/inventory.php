<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(APPPATH.'controllers/STR_Controller.php');
	class inventory extends STR_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
	        if (!isset($_SESSION['pos_user_id'])) {
				redirect(base_url('login'));
	  		}else{
	  			$this->load->model('inventory_model');
	  		}
	    }


	    /***********************************************************************************/
		#METODO: muestra modulo de ajustes de inventario
		function inventory_adjustments(){
			$this->data["vista"]	=	"modules/inventory/inventory_adjustments";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de entradas inter sucursales
		function entries_interstores(){
			$this->data["vista"]	=	"modules/inventory/entries_interstores";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de salidas inter sucursales
		function outputs_interstores(){
			$this->data["vista"]	=	"modules/inventory/outputs_interstores";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de mantenimiento de articulos
		function articles_maintenance(){
			$this->data["vista"]	=	"modules/inventory/articles_maintenance";
			$this->load->view("templates/template_main", $this->data);
		}


	    /***********************************************************************************/
		#METODO: muestra modulo de mantenimiento de articulos
		function existence(){
			$this->data["vista"]	=	"modules/inventory/existence";
			$this->load->view("templates/template_main", $this->data);
		}


	}
?>