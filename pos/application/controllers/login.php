<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
	class login extends CI_Controller{


		/***********************************************************************************/
		#CONSTRUCTOR DEL CONTROLADOR
		public function __construct(){
	        parent::__construct();
  			$this->load->model('login_model');
	    }


		/***********************************************************************************/
		#METODO: Muestra el formulario de logueo del sistema
		function index(){
			if (isset($_SESSION['error'])) {
				$this->data['error']	=	$_SESSION['error'];
				unset($_SESSION['error']);
			}

			$this->data["vista"]	=	"modules/login/index";
			$this->load->view("templates/template_login", $this->data);
		}

		
		/***********************************************************************************/
		#METODO: Valida inicio de sesion de usuario
		function success(){
			if ($this->input->post('Username') && $this->input->post('Password')) {
				$user 	= $this->input->post('Username');
				$pass1 	= $this->input->post('Password');
				$pass   = md5($pass1);

				$query = $this->login_model->getUser($user, $pass);
				
				if ($query->num_rows() > 0) {
					$row = $query->row();

					if ($row->pos_user_status_id == 1) {

						$_SESSION['header'] 			= 	"templates/template_header";
						$_SESSION['menu'] 				= 	"templates/template_menu";
						$_SESSION['footer'] 			= 	"templates/template_footer";

						$_SESSION['pos_user_id']		= 	$row->pos_user_id;
						$_SESSION['pos_user_nick'] 		= 	$row->pos_user_nick;

						redirect(base_url());
					}else{
						$row 	=	$this->login_model->getSatus($row->pos_user_status_id);
						$_SESSION['error']	=	"Lo sentimos, su usario parece haber sido ".$row->pos_user_status_name.", por favor pongase en contácto con el centro de soluciones técnicas.";
					}
				}else{
					$_SESSION['error']	=	"El usuario y contraseña ingresados no coinciden";
				}
			}
			redirect(base_url('login'));
		}


		/***********************************************************************************/
		#METODO: destruye sesion
		function logout(){
			session_destroy();
			redirect(base_url('login'));
		}


	}
?>