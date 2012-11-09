<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mantenimiento_c extends CI_Controller {
		
		 public function __construct() {
			 parent::__construct();
			 $this->load->helper(array('html', 'url'));

		 }
		
		 function index() {
			 $this->load->model('mantenimiento_m'); //cargamos el modelo
	
			 $data['page_title'] = "¡Copy Paste Reference! - Tutorial CodeIgniter";

			 // //Obtener datos de la tabla 'contacto'
			 $usuarios = $this->mantenimiento_m->getData(); //llamamos a la función getData() del modelo creado anteriormente.
			 $data['usuarios'] = $usuarios;
			 //load de vistas
			 $this->load->view('mantenimiento_v', $data); //llamada a la vista, que crearemos posteriormente
		 }
	
	}

?>

