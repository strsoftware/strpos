<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
	class login extends CI_Controller{


		/***********************************************************************************/
		#FUNCION PRINCIPAL ENCARGADA DE MOSTRAR EL FORMULARIO DE LOGUEO
		function index(){
			if (isset($_SESSION['error'])) {
				$this->data['error']	=	$_SESSION['error'];
				unset($_SESSION['error']);
			}
			$this->data["vista"]	=	"module/login/index";
			$this->load->view("template/template_login", $this->data);
		}


		
		/***********************************************************************************/
		#FUNCION ENCARGADA DE VALIDAR EL INICIO DE SESSION DE LOS USUARIOS
		function success(){
			if ($this->input->post('ntr_user_nick') && $this->input->post('ntr_user_pass')) {
				$nick 	= $this->input->post('ntr_user_nick');
				$pass 	= $this->input->post('ntr_user_pass');

				$query = $this->db->query("SELECT * FROM ntr_user WHERE ntr_user_nick = '$nick' AND ntr_user_pass = '$pass' ");
				
				if ($query->num_rows() > 0) {
					$row = $query->row();

					if ($row->ntr_user_status == 'Activo') {

						$_SESSION['ntr_user_id']		= 	$row->ntr_user_id;
						$_SESSION['ntr_user_nick'] 		= 	$row->ntr_user_nick;
						$_SESSION['ntr_user_type_id'] 	= 	$row->ntr_user_type_id;

						switch ( $row->ntr_user_type_id ) {
							case 1:case 2:
								if ($row->ntr_user_type_id == 1) { $_SESSION['ntr_user_menu'] 	= 	"template/menu_admin"; }
								else{ $_SESSION['ntr_user_menu'] 	= 	"template/menu_colaborador"; }
								
								$queryu = $this->db->query("SELECT * FROM ntr_team WHERE ntr_user_id = $row->ntr_user_id ");
								$rowu 	= $queryu->row();
								
								$_SESSION['ntr_user_name']		= 	$rowu->ntr_team_firstname.' '.$rowu->ntr_team_lastname;
								$_SESSION['ntr_user_email']		= 	$rowu->ntr_team_email;
								$_SESSION['ntr_user_img']		= 	$rowu->ntr_team_img_profile;

							break;
							case 3:
								$_SESSION['ntr_user_menu'] 	= 	"template/menu_usuario";
								$queryu = $this->db->query("SELECT * FROM v_ntr_client WHERE ntr_user_id = $row->ntr_user_id ");
								$rowu 	= $queryu->row();

								$_SESSION['ntr_client_id']				= 	$rowu->ntr_client_id;
								$_SESSION['ntr_user_name']				= 	$rowu->ntr_client_firstname.' '.$rowu->ntr_client_lastname;
								$_SESSION['ntr_user_postal_code']		= 	$rowu->ntr_client_postal_code;
								$_SESSION['ntr_user_address']			= 	$rowu->ntr_client_address;
								$_SESSION['ntr_user_phone']				= 	$rowu->ntr_client_phone;
								$_SESSION['ntr_user_cellphone']			= 	$rowu->ntr_client_cellphone;
								$_SESSION['ntr_user_email']				= 	$rowu->ntr_client_email;
								$_SESSION['ntr_user_img']				= 	$rowu->ntr_client_img_profile;
								$_SESSION['ntr_user_sponsor']			= 	$rowu->ntr_client_sponsor;
								$_SESSION['ntr_user_registration']		= 	$rowu->ntr_client_registration;
								$_SESSION['ntr_user_court_date']		= 	$rowu->ntr_client_court_date;
								$_SESSION['ntr_user_status_id']			= 	$rowu->ntr_client_status_id;
								$_SESSION['ntr_user_sponsor_name']		= 	$rowu->ntr_client_sponsor_name;
								$_SESSION['ntr_rank_name']				= 	$rowu->ntr_rank_name;
								$_SESSION['ntr_user_status_name']		= 	$rowu->ntr_client_status_name;
								$_SESSION['ntr_client_facebook']		= 	$rowu->ntr_client_facebook;
								$_SESSION['ntr_client_twitter']			= 	$rowu->ntr_client_twitter;
								$_SESSION['ntr_client_linkedin']		= 	$rowu->ntr_client_linkedin;
								$_SESSION['ntr_client_skype']			= 	$rowu->ntr_client_skype;
							break;
						}
						redirect(base_url());
					}else{
						$_SESSION['error']	=	"Al parecer su usuario aparece como inactivo, por favor comuniquese a soporte t&eacute;cnico.";
					}
				}else{
					$_SESSION['error']	=	"Su usuario y contrase&ntilde;a no coinciden, por favor, verifique y vuelva a intentarlo.";
				}
			}
			redirect(base_url('login'));
		}



		/***********************************************************************************/
		#FUNCION ENCARGADA DE CERRAR SESSION
		function logout(){
			session_destroy();
			redirect(base_url('login'));
		}




	}
?>