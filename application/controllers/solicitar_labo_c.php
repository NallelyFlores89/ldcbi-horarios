<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Solicitar_labo_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
			
			$this->load->library('form_validation');
			$this->load->library('email');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		}
		
		function index()	{           //Cargamos vista
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
			
			 
			$DataHorarios['hora']=$this->Solicitar_laboratorio_m->Obtenhorarios();
			$DataSem=$this->Solicitar_laboratorio_m->obtenerSemana();

			
			$datos=Array(
					'listaDivisiones' => $divisiones,
					'listaLaboratorios' => $laboratorios,
					'DataHorarios' => $DataHorarios['hora'],
					'DataSem' => $DataSem
					

			);

			/**Validación del formulario**/			
			$this->form_validation->set_rules('nombreInput', 'nombreInput', 'callback_nombreInput_check');
			$this->form_validation->set_rules('numInput', 'numInput', 'callback_numInput_check');
			$this->form_validation->set_rules('correoInput', 'correoInput', 'callback_correoInput_check');
			$this->form_validation->set_rules('ueaInput', 'ueaInput', 'callback_ueaInput_check');
			$this->form_validation->set_rules('claveInput', 'claveInput', 'callback_claveInput_check');
			$this->form_validation->set_rules('grupoInput', 'grupoInput', 'callback_grupoInput_check');
			$this->form_validation->set_rules('checkboxes[]', 'checkboxes', 'required');
			$this->form_validation->set_message('required','Debe seleccionar al menos un día');
			
			if($this->form_validation->run()){
				$datos_correo=Array(
					'nombre' => $_POST['nombreInput'],
					'numero' => $_POST['numInput'],
					'correo' => $_POST['correoInput'],
					'uea' =>$_POST['ueaInput'],
					'clave' => $_POST['claveInput'],
					'grupo' =>$_POST['grupoInput'],
					'division' => $_POST['divisionesDropdown'],
					'laboratorio' => $_POST['laboratoriosDropdown'],
					'laboratorio' => $_POST['laboratoriosDropdown'],
					'laboratorioAlt' => $_POST['laboratoriosAltDropdown'],
					'hora_i' => $_POST['HoraIDropdown'],
					'hora_f' => $_POST['HoraFDropdown'],
					'recursos' => $_POST['recursos'],
					'dias' => $_POST['checkboxes'],
					'semI' => $_POST['SemIDropdown'],
					'semF' => $_POST['SemFDropdown'],
 					'comentarios' => $_POST['comentarios']
				
				);
				
 				$config['protocol'] = 'mail';
				$config['wordwrap'] = FALSE;				
				$config['mailtype']='html';
 				$config_email['send_multipart'] = FALSE;  
				$this->email->initialize($config);
				$this->email->from('naye_flo89@hotmail.com', 'Nallely Flores');
				$this->email->to('anjudark89@gmail.com');
				$this->email->subject('Solicitud de laboratorio');
				$msj=$this->load->view('correo_v',$datos_correo,TRUE);			
				$this->email->message($msj);				
				$this->email->send();	
				echo $this->email->print_debugger();
			}
			else{
				$this->load->view('solicitar_lab_v', $datos);
			}
			

		} //Fin de index
		
				
		
		public function nombreInput_check($nombreInput){
				if($nombreInput==''){
						$this->form_validation->set_message('nombreInput_check','Campo obligatorio. Por favor, introduce nombre');
						return FALSE;
					
				}else
						return TRUE;
		}
		
		public function correoInput_check($correoInput){
				if($correoInput==''){
						$this->form_validation->set_message('correoInput_check','Campo de correo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}

		public function ueaInput_check($ueaInput){
				if($ueaInput==''){
						$this->form_validation->set_message('ueaInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}
		
		public function claveInput_check($ueaInput){
				if($ueaInput==''){
						$this->form_validation->set_message('claveInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}
		
		public function grupoInput_check($grupoInput){
				if($grupoInput==''){
						$this->form_validation->set_message('grupoInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}

		public function numInput_check($numInput){
				if($numInput==''){
						$this->form_validation->set_message('numInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}
	
	}//Fin de la clase
?>