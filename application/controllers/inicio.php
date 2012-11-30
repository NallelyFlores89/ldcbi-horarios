<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Inicio extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Inicio_m'); //Cargando mi modelo
		
		}
	
		function index(){           //Cargamos vista
			
			$DataCBI['datosCBI']=$this->Inicio_m->obtenListaGruposCBI(); //Obteniendo mis datos
			$DataCBS['datosCBS']=$this->Inicio_m->ObtenListaUeasCBS(); //Obteniendo mis datos
			$DataCSH['datosCSH']=$this->Inicio_m->ObtenListaUeasCSH(); //Obteniendo mis datos

			$DataUPG['datosUPG']=$this->Inicio_m->obtenListaUeaProfesorGrupo();

			$DataUL=$this->Inicio_m->ueas(105,1);
			$DataUMa=$this->Inicio_m->ueas(105,2);
			$DataUMi=$this->Inicio_m->ueas(105,3);
			$DataUJ=$this->Inicio_m->ueas(105,4);
			$DataUV=$this->Inicio_m->ueas(105,5);
						
			$DataHorarios['hora']=$this->Inicio_m->Obtenhorarios();

			$datos=Array(
					'listaueasCBI' => $DataCBI,
					'listaueasCBS' => $DataCBS,	
					'listaueasCSH' => $DataCSH,
					'listaUPG' => $DataUPG,
					'DataUL' => $DataUL,
					'DataUMa' => $DataUMa,
					'DataUMi' => $DataUMi,
					'DataUJ' => $DataUJ,
					'DataUV' => $DataUV,
					'DataHorarios' => $DataHorarios['hora']
			);

			$this->load->view('inicio', $datos);
		}//Fin función
		
	
	}//Fin de la clase
?>