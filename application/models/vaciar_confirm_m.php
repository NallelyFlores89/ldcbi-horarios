<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Vaciar_confirm_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenerIdGrupo($lab, $sem, $dias, $horario){
			$this->db->select('idgrupo');
			$this->db->from('laboratorios_grupo');
			$this->db->where('idlaboratorios',$lab);
			$this->db->where('semanas_idsemanas',$sem);
			$this->db->where('dias_iddias',$dias);
			$this->db->where('horarios_idhorarios',$horarios);
			
			$idGrupo=$this->db->get();

			if(($idGrupo->num_rows())>0){
				$indice=1;
				foreach ($idGrupo->result_array() as $value) {
					$idGr[1] = $value['idgrupo'];
				}
				return ($idGr);
			}else{
				return 0;
			}//fin del else
		
		} //Fin de obtenerGrupo
	
	} //Fin de la clase
?>

 