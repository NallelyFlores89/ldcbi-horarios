<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Recursos_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Recursos_m'); //Cargando mi modelo
		
		}
	
		function Recursos()	{           //Cargamos vista

			$DataRecursos105['datosRecursos']=$this->Recursos_m->obtenRecursos105(); //Obteniendo mis datos
			
			foreach ($DataRecursos105['datosRecursos'] as $indice => $valor) {
				$Recursos105['recursos'][$indice]=$valor;		
				
			}

			$DataRecursos106['datosRecursos']=$this->Recursos_m->obtenRecursos106(); //Obteniendo mis datos
			
			foreach ($DataRecursos106['datosRecursos'] as $indice => $valor) {
				$Recursos106['recursos'][$indice]=$valor;		
				
			}			

			$DataRecursos219['datosRecursos']=$this->Recursos_m->obtenRecursos219(); //Obteniendo mis datos
			
			foreach ($DataRecursos219['datosRecursos'] as $indice => $valor) {
				$Recursos219['recursos'][$indice]=$valor;		
				
			}

			$DataRecursos220['datosRecursos']=$this->Recursos_m->obtenRecursos220(); //Obteniendo mis datos
			
			foreach ($DataRecursos220['datosRecursos'] as $indice => $valor) {
				$Recursos220['recursos'][$indice]=$valor;		
				
			}
			
			$RecursosLabos=Array(
				'recursos105'=> $Recursos105,
				'recursos106'=> $Recursos106,
				'recursos219'=> $Recursos219,
				'recursos220'=> $Recursos220
			);
		
			$this->load->view('recursos_v',$RecursosLabos);
		
		} //Fin de SolicitarLaboratorio
		
		
	}//Fin de la clase
?>