<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Vaciar_confirm_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('Solicitar_laboratorio_m'); //Cargando mi modelo
			$this->load->model('Vaciar_confirm_m'); //Cargando mi modelo
			
			
			
		}
		
		function index(){           //Cargamos vista
			
			$indice=1;
			if($_POST!=NULL){
				$indice=1;
				for ($j=1; $j <=13; $j++) { //semanas
					for ($i=1; $i <=27; $i++) { //horas
						for($k=1; $k<=5; $k++) { //dias
							
							$datos_laboratorios_grupoT= Array(
								'idgrupo'=>NULL,
							);
							
							$grupoB=$this->Vaciar_confirm_m->obtenerIdGrupo(105, $j, $k, $i);
							if($grupoB!=-1 AND $grupoB[1]!=NULL){
								$gruposB[$indice]=$grupoB[1];
								$indice++;
							}
							
							$this->db->where('idlaboratorios',105);
							$this->db->where('semanas_idsemanas', $j);
							$this->db->where('dias_iddias', $k);
							$this->db->where('horarios_idhorarios', $i);
							$this->db->update('laboratorios_grupo', $datos_laboratorios_grupoT); //Insertando en la tabla de laboratorios_grupo
						}
					}
				}
				echo"<br>Vaciando la tabla de horarios</br>";
				echo "<br>Vaciando grupos </br>";
				$gruposB2=array_unique($gruposB,SORT_REGULAR);
				
				foreach ($gruposB2 as $value) {
					$this->db->delete('grupo', array('idgrupo' => $value)); 
				}
				
				//Se recargará la página de horarios y se cerrará la confirmación de vaciar horarios
				echo "<script languaje='javascript' type='text/javascript'>
                        window.opener.location.reload();
                    window.close();</script>";
			}			
			$this->load->view('vaciar_confirm_v');
		}
	
	}//Fin de la clase
	
?>