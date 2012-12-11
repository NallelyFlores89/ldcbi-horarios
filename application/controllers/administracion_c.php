<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Administracion_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('administracion_m'); // Load the model
			
	   	}

	    function index(){
			$data['datosUPG']=$this->administracion_m->obtenListaUeaProfesorGrupo();
	        $this->load->view('administracion_v', $data);
	    }
		
		function elimina_profesor($numEmp){
			$this->load->view('elimina_profr');	
		}

		function elimina_grupo($grupo){
			$this->load->view('elimina_grupo_v');	
		}		
		function edita($numEmp, $grupo, $claveUEA, $idlab){
			
			
		}
		

	}
?>