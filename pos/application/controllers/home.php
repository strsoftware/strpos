<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once(APPPATH.'controllers/STR_Controller.php');
	class home extends STR_Controller {


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
	        if (!isset($_SESSION['pos_user_id'])) {
				redirect(base_url('login'));
	  		}else{
	  			$this->load->model('home_model');
	  		}
	    }


	    /***********************************************************************************/
		#METODO: Muestra el panel principal de la aplicacion
		function index(){
			$this->data['vista']	=	"modules/home/index";
			$this->load->view('templates/template_main', $this->data);
		}
	}

?>