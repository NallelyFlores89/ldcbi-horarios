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
					$idProfr[1] = $value['idprofesores']; 
				 }
			
				return($idProfr[1]);
			}else{
				return(-1);
			}//fin del else
			
		} //Fin de obtenRecursos105
		
		function obtenerIdUea($clave){
			$this->db->select('iduea');
			$this->db->from('uea');
			$this->db->where('clave',$clave);
			

			$idUea=$this->db->get(); 
			
			if(($idUea->num_rows())>0){ 
				foreach ($idUea->result_array() as $value) {
					$idU[1] = $value['iduea']; 
				 }
			
				return($idU[1]);
			}else{
				return(-1);
			}//fin del else
			
		} //Fin obtenerIdUea

		
		function obtenerClaveUea($clave){
			$this->db->select('clave');
			$this->db->from('uea');
			$this->db->where('clave',$clave);
			
			$clave=$this->db->get(); 
			
			if(($clave->num_rows())>0){ 
				foreach ($clave->result_array() as $value) {
					$c[1] = $value['clave']; 
				 }
			
				return($c[1]);
			}else{
				return(-1);
			}//fin del else
			
		} //Fin obtenerIdUea
				
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

		function obtenerIdGrupo($grupo){
			$this->db->select('idgrupo');
			$this->db->where('grupo',$grupo);
		
			$idGrupo=$this->db->get('grupo'); 
			
			if(($idGrupo->num_rows())>0){ 
				foreach ($idGrupo->result_array() as $value) {
					$idG[1] = $value['idgrupo']; 
				 }
			
				return($idG[1]);
			}else{
				return(-1);
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
		
		function inserta_profesores($nombre, $num_emp, $correo){
				
			$datos=Array(
				'nombre' => $nombre,
				'numempleado' => $num_emp,
				'correo' => $correo,
			);		

			$this->db->insert('profesores', $datos); //Insertan en la tabla profesores
			
		} //Fin insertaProfesor
		
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
		
		function inserta_uea($nombre, $clave, $iddivision){
			$datos=Array(
				'nombreuea' => $nombre,
				'clave' => $clave,
				'divisiones_iddivisiones' => $iddivision,
			);
								
			$this->db->insert('uea', $datos); 
			
		}
		
		function inserta_grupo($grupo, $siglas, $iduea, $idprof){
			$datos=Array(         //Insertando el grupo
				'grupo' => $grupo,
				'siglas' => $siglas,
				'uea_iduea' => $iduea,
				'profesores_idprofesores' => $idprof,
			);	
			$this->db->insert('grupo', $datos); //Inserta en la tabla grupo
		}
		
	} //Fin de la clase
?>

 