<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Agregar_horario_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenerIdProfesor($numEmp){
			$this->db->select('idprofesores');
			$this->db->from('profesores');
			$this->db->where('numempleado',$numEmp);

			$idProfesor=$this->db->get(); 
			
			if(($idProfesor->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($idProfesor->result_array() as $value) {
					$idProfr[1] = $value['idprofesores']; //Guardando mis datos en un arreglo
				 }
			
				return($idProfr[1]);
			}else{
				return(0);
			}//fin del else
			
		} //Fin de obtenRecursos105
		
		function obtenerIdUea($clave){
			$this->db->select('iduea');
			$this->db->from('uea');
			$this->db->where('clave',$clave);
			

			$idUea=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($idUea->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($idUea->result_array() as $value) {
					$idU[1] = $value['iduea']; //Guardando mis datos en un arreglo
				 }
			
				return($idU[1]);
			}else{
				return(0);
			}//fin del else
			
		} //Fin obtenerIdUea

		
		function obtenerClaveUea($clave){
			$this->db->select('clave');
			$this->db->from('uea');
			$this->db->where('clave',$clave);
			

			$clave=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($clave->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($clave->result_array() as $value) {
					$c[1] = $value['clave']; //Guardando mis datos en un arreglo
				 }
			
				return($c[1]);
			}else{
				return(0);
			}//fin del else
			
		} //Fin obtenerIdUea
				
		function obtenerIdHora($HoraI){
			$this->db->select('idhorarios');
			$this->db->from('horarios');
			$this->db->where('hora',$HoraI);
			

			$idHora=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($idHora->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($idHora->result_array() as $value) {
					$idH[1] = $value['idhorarios']; //Guardando mis datos en un arreglo
				 }
			
				return($idH[1]);
			}else{
				return(-1);
			}			
			
		}

		function obtenerIdGrupo($grupo){
			$this->db->select('idgrupo');
			$this->db->from('grupo');
			$this->db->where('grupo',$grupo);
			

			$idGrupo=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($idGrupo->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($idGrupo->result_array() as $value) {
					$idG[1] = $value['idgrupo']; //Guardando mis datos en un arreglo
				 }
			
				return($idG[1]);
			}else{
				return(0);
			}			
			
		}
		
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

 