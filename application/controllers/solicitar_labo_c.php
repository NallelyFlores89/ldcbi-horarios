<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Solicitar_labo_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
		
		}
	
		function Solicitar_Laboratorio()	{           //Cargamos vista
		
			$DataDivision['datosDivision']=$this->Solicitar_laboratorio_m->ObtenListaDivisiones(); //Obteniendo mis datos
	
			if($DataDivision['datosDivision'] > 0){
				foreach ($DataDivision['datosDivision'] as $indice => $division) {
					$divisiones['divisiones'][$indice]=$division;
				}
				
			}else{
				$mensaje='No hay datos';
				$divisiones['divisiones'][1]=$mensaje;
			}		
			
			$DataLabos['datosLabos']=$this->Solicitar_laboratorio_m->ObtenListaLaboratorios(); //Obteniendo mis datos

			if($DataLabos['datosLabos'] > 0){
				foreach ($DataLabos['datosLabos'] as $indice => $laboratorio) {
					$laboratorios['laboratorios'][$indice]=$laboratorio;
				}
				
			}else{
				$mensaje='No hay datos';
				$laboratorios['laboratorios'][1]=$mensaje;
			}			
			
			$datos=Array(
					'listaDivisiones' => $divisiones,
					'listaLaboratorios' => $laboratorios,

			);
			$this->load->view('solicitar_lab_v', $datos);
		
		} //Fin de SolicitarLaboratorio
		
		
	}//Fin de la clase
?>