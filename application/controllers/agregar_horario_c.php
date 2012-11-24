<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Agregar_horario_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
			$this->load->model('Agregar_horario_m'); //Cargando mi modelo
						
			$this->load->library('form_validation');
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

			/**Validación del formulario**/			
			$this->form_validation->set_rules('nombreInput', 'nombreInput', 'callback_nombreInput_check');
			$this->form_validation->set_rules('numInput', 'numInput', 'callback_numInput_check');
			$this->form_validation->set_rules('ueaInput', 'ueaInput', 'callback_ueaInput_check');
			$this->form_validation->set_rules('claveInput', 'claveInput', 'callback_claveInput_check');
			$this->form_validation->set_rules('grupoInput', 'grupoInput', 'callback_grupoInput_check');
			$this->form_validation->set_rules('siglasInput', 'siglasInput', 'callback_siglasInput_check');
			$this->form_validation->set_rules('checkboxes[]', 'checkboxes', 'required');
			$this->form_validation->set_message('required','Debe seleccionar al menos un día');
			
			$datos=Array(
					'listaDivisiones' => $divisiones,
					'listaLaboratorios' => $laboratorios,
					'DataHorarios' => $DataHorarios['hora'],
			);
			
			if($this->form_validation->run()){

				echo "<pre>";
					print_r($_POST);
				echo "</pre>";
				
				//Insertando datos
				
				$numEmp=$this->Agregar_horario_m->obtenerIdProfesor($_POST['numInput']);
				
				if($numEmp==0){ //Si no existe el profesor en la base de datos, lo inserta
					$datos_profrT=Array(
						'nombre' => $_POST['nombreInput'],
						'numempleado' => $_POST['numInput'],
						'correo' => 'correo@correo.com',
					);					
					
					$this->db->insert('profesores', $datos_profrT);
					echo"No existía el profesor, así que insertaré en la base de datos <br>";
					print_r($datos_profrT); 
				}

				$idProf=$this->Agregar_horario_m->obtenerIdProfesor($_POST['numInput']); //Obteniendo id del profesor
				echo "<br>El id del profesor es:"; print_r($idProf);
				
				if($_POST['laboratoriosDropdown']=='AT-105')
					$id_lab=105;
				if($_POST['laboratoriosDropdown']=='AT-106')
					$id_lab=106;				
				if($_POST['laboratoriosDropdown']=='AT-219')
					$id_lab=219;
				if($_POST['laboratoriosDropdown']=='AT-220')
					$id_lab=220;
				
				
				/////////////////////////////////////////////////////////////////
				
				if($this->Agregar_horario_m->obtenerClaveUea($_POST['claveInput'])==0){ //Si la UEA no existe, la insertará
					$datos_ueaT=Array(
						'nombreuea' => $_POST['ueaInput'],
						'clave' => $_POST['claveInput'],
						'divisiones_iddivisiones' => $_POST['divisionesDropdown'],
					);
										
					$this->db->insert('uea', $datos_ueaT); 
					echo"<br>La uea no existía, así que la inserté en la BD::"; print_r($datos_ueaT);					
					
				};
				
				$iduea=$this->Agregar_horario_m->obtenerIdUea($_POST['claveInput']);
				echo "<br> el id de la uea es"; print_r($iduea);


				$datos_grupoT=Array(         //Insertando el grupo
						'grupo' => $_POST['grupoInput'],
						'siglas' => $_POST['siglasInput'],
						'uea_iduea' => $iduea,
						'profesores_idprofesores' => $idProf,
				);		
				echo"Insertando grupo en BD::";
				print_r($datos_grupoT);					
				
				$this->db->insert('grupo', $datos_grupoT); 
																		
				$idGrupo=$this->Agregar_horario_m->obtenerIdGrupo($_POST['grupoInput']);
				echo "<br>idGrupo:::::";print_r($idGrupo);	
				
				//OBTENIENDO ID DE HORARIO INICIAL
				switch ($_POST['HoraIDropdown']) {
					case '8':
						$horaI='08:00';
						break;
					case '8.5':
						$horaI='08:30';
						break;					
					case '9':
						$horaI='09:00';
						break;
					case '9.5':
						$horaI='09:30';
						break;
					case '10':
						$horaI='10:00';
						break;
					case '10.5':
						$horaI='10:30';
						break;						
					case '11':
						$horaI='11:00';
						break;
					case '11.5':
						$horaI='11:30';
						break;
					case '12':
						$horaI='12:00';
						break;												
					case '12.5':
						$horaI='12:30';
						break;
					case '13':
						$horaI='13:00';
						break;
					case '13.5':
						$horaI='13:30';
						break;
					case '14':
						$horaI='14:00';
						break;
					case '14.5':
						$horaI='14:30';
						break;
					case '15':
						$horaI='15:00';
						break;
					case '15.5':
						$horaI='15:30';
						break;
					case '16':
						$horaI='16:00';
						break;
					case '16.5':
						$horaI='16:30';
						break;
					case '17':
						$horaI='17:00';
						break;																																																													
					case '17.5':
						$horaI='17:30';
						break;
					case '18':
						$horaI='18:00';
						break;
					case '18.5':
						$horaI='18:30';
						break;
					case '19':
						$horaI='19:00';
						break;
					case '19.5':
						$horaI='19:30';
						break;
					case '20':
						$horaI='20:00';
						break;
					case '20.5':
						$horaI='20:30';
						break;		
					case '21':
						$horaI='21:00';
						break;																																								
				}

				//Operaciones de hora
				$idHoraI=$this->Agregar_horario_m->obtenerIdHora($horaI);
				$horas=($_POST['HoraFDropdown']-$_POST['HoraIDropdown'])*2;
							
				
				// for ($i=0; $i <$horas; $i++) { 
					// foreach ($_POST['checkboxes'] as $value) {
						// $datos_diaUeaHorarioT= Array(
							// 'iddias'=>$value,
							// 'iduea'=>$iduea,
							// 'idhorarios' => $idHoraI
						// );
// 	
						// $this->db->insert('dias_uea_has_horarios', $datos_diaUeaHorarioT); 
					// }
					// $idHoraI++;
// 
				// }


			}
			else{
				$this->load->view('agregar_horario_v', $datos);
			}
			

		} //Fin de index
		
	
		
		public function nombreInput_check($nombreInput){
				if($nombreInput==''){
						$this->form_validation->set_message('nombreInput_check','Campo obligatorio. Por favor, introduce nombre');
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

		public function grupoInput_check($grupoInput){
				if($grupoInput==''){
						$this->form_validation->set_message('grupoInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}
		
		public function siglasInput_check($siglasInput){
				if($siglasInput==''){
						$this->form_validation->set_message('siglasInput_check','Campo obligatorio');
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

		public function claveInput_check($claveInput){
				if($claveInput==''){
						$this->form_validation->set_message('claveInput_check','Campo obligatorio');
						return FALSE;
					
				}else
						return TRUE;
		}
	
	}//Fin de la clase
	
?>