<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Recursos_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenRecursos105(){
			$this->db->select('recurso');
			$this->db->from('recursos');
			$this->db->join('laboratorios_has_recursos', 'recursos_idrecursos=idrecursos','left');
			$this->db->where('laboratorios_idlaboratorios',105);

			$listaRecursos105=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaRecursos105->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;

				foreach ($listaRecursos105->result_array() as $value) {
					$arregloRecursos105[$indice] = $value['recurso']; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				 }
			
				return($arregloRecursos105);
			}else{
				$mensaje_error="No hay datos que cargar";
				return($mensaje_error);
			}//fin del else
			
		} //Fin de obtenRecursos105
		
		function obtenRecursos106(){
			$this->db->select('recurso');
			$this->db->from('recursos');
			$this->db->join('laboratorios_has_recursos', 'recursos_idrecursos=idrecursos','left');
			$this->db->where('laboratorios_idlaboratorios',106);

			$listaRecursos106=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaRecursos106->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;

				foreach ($listaRecursos106->result_array() as $value) {
					$arregloRecursos106[$indice] = $value['recurso']; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				 }
			
				return($arregloRecursos106);
			}else{
				$mensaje_error="No hay datos que cargar";
				return($mensaje_error);
			}//fin del else
		} //Fin de ObtenRecursos106
		
		function obtenRecursos219(){
			$this->db->select('recurso');
			$this->db->from('recursos');
			$this->db->join('laboratorios_has_recursos', 'recursos_idrecursos=idrecursos','left');
			$this->db->where('laboratorios_idlaboratorios',219);

			$listaRecursos219=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaRecursos219->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;

				foreach ($listaRecursos219->result_array() as $value) {
					$arregloRecursos219[$indice] = $value['recurso']; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				 }
			
				return($arregloRecursos219);
			}else{
				$mensaje_error="No hay datos que cargar";
				return($mensaje_error);
			}//fin del else
		}//Fin de ObtenRecursos219		

		function obtenRecursos220(){
			$this->db->select('recurso');
			$this->db->from('recursos');
			$this->db->join('laboratorios_has_recursos', 'recursos_idrecursos=idrecursos','left');
			$this->db->where('laboratorios_idlaboratorios',220);

			$listaRecursos220=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaRecursos220->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;

				foreach ($listaRecursos220->result_array() as $value) {
					$arregloRecursos220[$indice] = $value['recurso']; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				 }
			
				return($arregloRecursos220);
			}else{
				$mensaje_error="No hay datos que cargar";
				return($mensaje_error);
			}//fin del else
		}//Fin de ObtenRecursos219				
	} //Fin de la clase
?>

 