<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Solicitar_laboratorio_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
	
		}
		
		function obtenListaDivisiones(){
			$this->db->select('nombredivision');
			$this->db->from('divisiones');

			$listaDivisiones=$this->db->get(); 
			
			if(($listaDivisiones->num_rows())>0){
				$indice=1;
				
				foreach ($listaDivisiones->result_array() as $value) {
					$arregloDivisiones[$indice] = $value['nombredivision'];
					$indice=$indice+1;
				}
				return ($arregloDivisiones);
			}else{
				return 0;
			}//fin del else
		} //Fin de obtenListaDivisiones

	
		function Obtenhorarios(){
			$this->db->select('hora');
			$this->db->from('horarios');
			
			$lHorarios=$this->db->get();

			if(($lHorarios->num_rows())>0){
				$indice=1;
				foreach ($lHorarios->result_array() as $value) {
					$arregloHorarios[$indice] = $value['hora'];
					$indice=$indice+1;
				}
				return ($arregloHorarios);
			}else{
				return 0;
			}//fin del else
			
		} //fin Obtenhorarios	
		
		function obtenerSemana(){
			$this->db->select('semana');
			$this->db->from('semanas');

			$semanas=$this->db->get(); 
			$indice=1;
			if(($semanas->num_rows())>0){
				foreach ($semanas->result_array() as $value) {
					$sem[$indice] = $value['semana']; 
					$indice++;
				 }
			
				return($sem);
			}else{
				return(0);
			}			
			
		}
		
		function horarioOcupado($labo, $sem, $dia, $hora){ //Función que verifica si el horario a ocupar está disponible
			
			$this->db->select('idgrupo');
			$this->db->from('laboratorios_grupo');
			$this->db->where('idlaboratorios',$labo);
			$this->db->where('semanas_idsemanas', $sem);			
			$this->db->where('dias_iddias',$dia);			
			$this->db->where('horarios_idhorarios',$hora);			
			
			$res=$this->db->get();
			
			if(($res->num_rows())>0){ //Si el horario ya está ocupado por otro grupo
				foreach ($res->result_array() as $value) {
					$ocupado[1]=$value['idgrupo'];
				}
				return $ocupado[1];
			}else{
				return -1;
			}			
			
		}
		
		function obtenLaboratorios(){
				
			$this->db->select('idlaboratorios, nombrelaboratorios');
			$this->db->from('laboratorios');

			$labos=$this->db->get(); 
			$indice=1;
			if(($labos->num_rows())>0){ 
				foreach ($labos->result_array() as $value) {
					$laboratorios[$indice] = $value; 
					$indice++;
				 }
			
				return($laboratorios);
			}else{
				return(0);
			}			
		} //Fin obtenLaboratorios	
		
		function obtenerIdHora($HoraI){
			$this->db->select('idhorarios');
			$this->db->from('horarios');
			$this->db->where('hora',$HoraI);
			

			$idHora=$this->db->get(); 
			
			if(($idHora->num_rows())>0){ 
				foreach ($idHora->result_array() as $value) {
					$idH[1] = $value['idhorarios']; 
				 }
			
				return($idH[1]);
			}else{
				return(-1);
			}			
			
		}	
				
	} //Fin de la clase
?>

 