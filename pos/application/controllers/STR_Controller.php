<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();

	class STR_Controller extends CI_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
  			$this->load->model('STR_model');
			$this->data['navbar']	=	$this->STR_model->getModuleClassification();
	    }


		/***********************************************************************************/
		#ACA IRAN LAS FUNCIONES GLOBALES DEL PROYECTO
		

	}

?>