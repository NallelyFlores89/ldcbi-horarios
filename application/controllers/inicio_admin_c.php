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
			$DataCBS['datosCBS']=$this->Inicio_m->ObtenListaUeasCBS(); //Obteniendo mis datos
			$DataCSH['datosCSH']=$this->Inicio_m->ObtenListaUeasCSH(); //Obteniendo mis datos

			$DataUPG['datosUPG']=$this->Inicio_m->obtenListaUeaProfesorGrupo();
			
			$DataUL105_1=$this->Inicio_m->ueas(105,1);
			$DataUMa105_1=$this->Inicio_m->ueas(105,2);
			$DataUMi105_1=$this->Inicio_m->ueas(105,3);
			$DataUJ105_1=$this->Inicio_m->ueas(105,4);
			$DataUV105_1=$this->Inicio_m->ueas(105,5);
			
			$DataUL106_1=$this->Inicio_m->ueas(106,1);
			$DataUMa106_1=$this->Inicio_m->ueas(106,2);
			$DataUMi106_1=$this->Inicio_m->ueas(106,3);
			$DataUJ106_1=$this->Inicio_m->ueas(106,4);
			$DataUV106_1=$this->Inicio_m->ueas(106,5);

			$DataUL219_1=$this->Inicio_m->ueas(219,1);
			$DataUMa219_1=$this->Inicio_m->ueas(219,2);
			$DataUMi219_1=$this->Inicio_m->ueas(219,3);
			$DataUJ219_1=$this->Inicio_m->ueas(219,4);
			$DataUV219_1=$this->Inicio_m->ueas(219,5);

			$DataUL220_1=$this->Inicio_m->ueas(220,1);
			$DataUMa220_1=$this->Inicio_m->ueas(220,2);
			$DataUMi220_1=$this->Inicio_m->ueas(220,3);
			$DataUJ220_1=$this->Inicio_m->ueas(220,4);
			$DataUV220_1=$this->Inicio_m->ueas(220,5);
									
			$DataHorarios['hora']=$this->Inicio_m->Obtenhorarios();

			$datos=Array(
					'listaueasCBI' => $DataCBI,
					'listaueasCBS' => $DataCBS,	
					'listaueasCSH' => $DataCSH,
					'listaUPG' => $DataUPG,
					'DataUL105_1' => $DataUL105_1,
					'DataUMa105_1' => $DataUMa105_1,
					'DataUMi105_1' => $DataUMi105_1,
					'DataUJ105_1' => $DataUJ105_1,
					'DataUV105_1' => $DataUV105_1,
					'DataUL106_1' => $DataUL106_1,
					'DataUMa106_1' => $DataUMa106_1,
					'DataUMi106_1' => $DataUMi106_1,
					'DataUJ106_1' => $DataUJ106_1,
					'DataUV106_1' => $DataUV106_1,
					'DataUL219_1' => $DataUL219_1,
					'DataUMa219_1' => $DataUMa219_1,
					'DataUMi219_1' => $DataUMi219_1,
					'DataUJ219_1'	=> $DataUJ219_1,
					'DataUV219_1' => $DataUV219_1,
					'DataUL220_1' => $DataUL220_1,
					'DataUMa220_1' => $DataUMa220_1,
					'DataUMi220_1' => $DataUMi220_1,
					'DataUJ220_1'	=> $DataUJ220_1,
					'DataUV220_1' => $DataUV220_1,
					'DataHorarios' => $DataHorarios['hora']
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
			redirect('loguin_c');
		}
		
	
	}//Fin de la clase
?>