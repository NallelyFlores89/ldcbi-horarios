<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Vaciar_confirm_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
			$this->load->model('Vaciar_confirm_m'); //Cargando mi modelo
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>'); 
			
			
		}
		
		function index(){           //Cargamos vista
			
			if(! $this->session->userdata('validated')){
				redirect('loguin_c');
				}else{
				
				$this->form_validation->set_rules('checkboxes2[]', 'checkboxes2', 'required');
				$this->form_validation->set_message('required','Escoja al menos un laboratorio');
				
				if($this->form_validation->run()){
					$indice=1;
					foreach ($_POST['checkboxes2'] as $idlaboratorio) { //laboratorios
						$idsgrupo[$indice]=$this->Vaciar_confirm_m->obtenerIdGrupo($idlaboratorio); //Obteniendo ids de los grupos a eliminar
						$this->Vaciar_confirm_m->vaciarLaboratorio($idlaboratorio); //Vaciando tabla del laboratorio $idlaboratorio								
						$indice++;
					}					
					
					foreach ($idsgrupo as $value) {
						if($value==-1){
							echo "<br>horario vacío, nada por eliminar";
						}else{
							$gr = array_unique($value, SORT_REGULAR);
							echo "<br> grupos a eliminar";print_r($gr);
							foreach ($gr as $valor2) {
								$this->db->delete('grupo', array('idgrupo' => $valor2));
							}
						}
					}
					//Se recargará la página de horarios y se cerrará la confirmación de vaciar horarios
					echo "<script languaje='javascript' type='text/javascript'>
	                        window.opener.location.reload();
	                   		window.close();</script>";			
				}else{
						$this->load->view('vaciar_confirm_v');
				}
	
			}
		}	
	}//Fin de la clase
?>