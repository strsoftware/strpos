<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends CI_Controller {

	public function index(){
		    $this->data['header']	=	"templates/template_header";
			$this->data['menu']		=	"templates/template_menu";
			$this->data['vista']	=	"prueba/table";    //totas las vistas deberan se van a manejar como modulos bajo el esquema anterios   modulos/CONTROLADOR/METODO
			$this->data['footer']	=	"templates/template_footer";
			$this->load->view('templates/template_main', $this->data);
		
	}
}

?>