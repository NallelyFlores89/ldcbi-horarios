<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Inicio_admin_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Inicio_m'); //Cargando mi modelo
			$this->check_isvalidated();
			
		
		}
	
		function index(){           //Cargamos vista
			
			$DataCBI['datosCBI']=$this->Inicio_m->obtenListaGruposCBI(); //Obteniendo mis datos
			$DataCBS['datosCBS']=$this->Inicio_m->ObtenListaUeasCBS(); 
			$DataCSH['datosCSH']=$this->Inicio_m->ObtenListaUeasCSH(); 

			$DataUPG['datosUPG']=$this->Inicio_m->obtenListaUeaProfesorGrupo();
			
			for ($sem=1; $sem <= 13 ; $sem++) { 
				for ($dia=1; $dia <=5 ; $dia++) { 
					$Data['$DataU105_'.$sem.'_'.$dia]=$this->Inicio_m->ueas(105,$sem,$dia);
				}
			}

			for ($sem=1; $sem <= 13 ; $sem++) { 
				for ($dia=1; $dia <=5 ; $dia++) { 
					$Data['$DataU106_'.$sem.'_'.$dia]=$this->Inicio_m->ueas(106,$sem,$dia);
				}

			}
				
			for ($sem=1; $sem <= 13 ; $sem++) { 
				for ($dia=1; $dia <=5 ; $dia++) { 
					$Data['$DataU219_'.$sem.'_'.$dia]=$this->Inicio_m->ueas(219,$sem,$dia);
				}
			}
			
			for ($sem=1; $sem <= 13 ; $sem++) { 
				for ($dia=1; $dia <=5 ; $dia++) { 
					$Data['$DataU220_'.$sem.'_'.$dia]=$this->Inicio_m->ueas(220,$sem,$dia);
				}
			}

			$DataHorarios['hora']=$this->Inicio_m->Obtenhorarios();

			$datos=Array(
					'listaueasCBI' => $DataCBI,
					'listaueasCBS' => $DataCBS,	
					'listaueasCSH' => $DataCSH,
					'listaUPG' => $DataUPG,
					'DataHorarios' => $DataHorarios['hora'],
					'Data' => $Data
			);

			$this->load->view('inicio_admin_v', $datos);
		}//Fin función index
		
		private function check_isvalidated(){
			if(! $this->session->userdata('validated')){
				redirect('loguin_c');
			}
		}
	
		public function do_logout(){
			$this->session->sess_destroy();
			redirect('inicio');
		}

		
		
	
	}//Fin de la clase
?>