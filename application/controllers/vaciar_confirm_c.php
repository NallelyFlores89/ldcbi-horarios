<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Vaciar_confirm_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
			
		}
		
		function index(){           //Cargamos vista
			
			if($_POST!=NULL){
				for ($j=1; $j <=13; $j++) { 
					for ($i=1; $i <=27; $i++) { 
						for($k=1; $k<=5; $k++) {
							$datos_laboratorios_grupoT= Array(
								'idgrupo'=>NULL,
							);
							$this->db->where('idlaboratorios',105);
							$this->db->where('semanas_idsemanas', $j);
							$this->db->where('dias_iddias', $k);
							$this->db->where('horarios_idhorarios', $i);
							$this->db->update('laboratorios_grupo', $datos_laboratorios_grupoT); //Insertando en la tabla de laboratorios_grupo
						}
					}
				}
				
				
				echo"Vaciando la tabla de horarios";
			}			
			$this->load->view('vaciar_confirm_v');
		}
	
	}//Fin de la clase
	
?>