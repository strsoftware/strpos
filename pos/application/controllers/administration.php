<?php
	class administration extends CI_Controller{

		function empresa(){
			$this->data['header']	=	"templates/template_header";
			$this->data['menu']		=	"templates/template_menu";
			$this->data['vista']	=	"modules/administration/empresa";    //totas las vistas deberan se van a manejar como modulos bajo el esquema anterios   modulos/CONTROLADOR/METODO
			$this->data['footer']	=	"templates/template_footer";
			$this->load->view('templates/template_main', $this->data);
		}

	}
?>