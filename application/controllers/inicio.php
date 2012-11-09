<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Inicio extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Ueas_division_m'); //Cargando mi modelo
		
		}
	
		function index(){           //Cargamos vista
			
			$DataCBI['datosCBI']=$this->Ueas_division_m->ObtenListaUeasCBI(); //Obteniendo mis datos
			
			foreach ($DataCBI['datosCBI'] as $indice => $uea) {
				$ueasCBI['ueasCBI'][$indice]=$uea;
			//	print_r($uea2);
			}
			

			$DataCBS['datosCBS']=$this->Ueas_division_m->ObtenListaUeasCBS(); //Obteniendo mis datos
			
			foreach ($DataCBS['datosCBS'] as $indiceCBS => $ueaCBS) {
				$ueasCBS['ueasCBS'][$indiceCBS]=$ueaCBS;
			}

			$DataCSH['datosCSH']=$this->Ueas_division_m->ObtenListaUeasCSH(); //Obteniendo mis datos

			if($DataCSH['datosCSH'] > 0){
				foreach ($DataCSH['datosCSH'] as $indiceCSH => $ueaCSH) {
					$ueasCSH['ueasCSH'][$indiceCSH]=$ueaCSH;
				}
				
			}else{
				$mensaje='No hay datos';
				$ueasCSH['ueasCSH'][1]=$mensaje;
			}
			
			$DataUeaGrupoProfesor['datosUeaProfesor']=$this->Ueas_division_m->ObtenListaUeaGrupoProfesor();
			print_r($DataUeaGrupoProfesor);		
			
			$datos=Array(
					'listaueasCBI' => $ueasCBI,
					'listaueasCBS' => $ueasCBS,	
					'listaueasCSH' => $ueasCSH	
			);
			$this->load->view('inicio', $datos);

		}//Fin función
		
	
	}//Fin de la clase
?>