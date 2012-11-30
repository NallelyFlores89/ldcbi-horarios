<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Solicitar_laboratorio_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
	
		}
			
		
		function obtenListaDivisiones(){
			$this->db->select('nombredivision');
			$this->db->from('divisiones');

			$listaDivisiones=$this->db->get(); //Vacía el contenido de la consulta en la variable
			//print_r($listaDivisiones->result_array());
			//return($listaDivisiones->result_array());
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

	/////////////////////////////////////////////////////////////////////////////
	
		function obtenListaLaboratorios(){
			$this->db->select('nombrelaboratorios');
			$this->db->from('laboratorios');

			$listaLaboratorios=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaLaboratorios->num_rows())>0){
				$indice=1;
				
				foreach ($listaLaboratorios->result_array() as $value) {
					$arregloLaboratorios[$indice] = $value['nombrelaboratorios'];
					$indice=$indice+1;
				}
				return ($arregloLaboratorios);
			}else{
				return 0;
			}//fin del else
		} //fin de ObtenListaLaboratorios
		
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

			$semanas=$this->db->get(); //Vacía el contenido de la consulta en la variable
			$indice=1;
			if(($semanas->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($semanas->result_array() as $value) {
					$sem[$indice] = $value['semana']; //Guardando mis datos en un arreglo
					$indice++;
				 }
			
				return($sem);
			}else{
				return(0);
			}			
			
		}	
				
	} //Fin de la clase
?>

 