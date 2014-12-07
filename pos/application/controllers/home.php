<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class home extends CI_Controller {

		function index(){
			$this->data['header']	=	"templates/template_header";
			$this->data['menu']		=	"templates/template_menu";
			$this->data['vista']	=	"modules/home/index";
			$this->data['footer']	=	"templates/template_footer";
			$this->load->view('templates/template_main', $this->data);
		}
	}

?>