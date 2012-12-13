<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Administracion_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');		
		}

		function obtenListaUeaProfesorGrupo(){
			$this->db->select('grupo.siglas, profesores.nombre, profesores.numempleado, profesores.correo, uea.nombreuea, uea.clave, grupo.grupo,idlaboratorios');
			$this->db->from('grupo'); 
			$this->db->join('profesores', 'grupo.profesores_idprofesores=profesores.idprofesores');
			$this->db->join('uea','grupo.uea_iduea=uea.iduea');
			$this->db->join('laboratorios_grupo','grupo.idgrupo=laboratorios_grupo.idgrupo');
							
			$this->db->distinct(); //Para que no se repitan los datos
			$listaUeaProfesorGrupo=$this->db->get();
			
			if(($listaUeaProfesorGrupo->num_rows())>0){
				$indice=1;
				
				foreach ($listaUeaProfesorGrupo->result_array() as $value) {
					$arregloUPG[$indice] = $value;
					$indice=$indice+1;
				}
				return ($arregloUPG);
			}else{
				return -1;
			}
			
		} //fin obtenListaUeaProfesorGrupo
		
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
				return(-1);
			}			
		} //Fin obtenLaboratorios

				
		function obtenDatosProfesor($numEmp){
				
			$this->db->select('nombre, numempleado, correo');
			$this->db->from('profesores');
			$this->db->where('numempleado', $numEmp);

			$profe=$this->db->get(); 
			if(($profe->num_rows())>0){
				foreach ($profe->result_array() as $value) {
					$profesor[1] = $value; 
				 }
			
				return($profesor[1]);
			}else{
				return(-1);
			}			
		} //Fin obtenLaboratorios				

		function obtenIdProf($numEmp){
				
			$this->db->select('idprofesores');
			$this->db->from('profesores');
			$this->db->where('numempleado', $numEmp);

			$ids=$this->db->get(); 
			if(($ids->num_rows())>0){
				foreach ($ids->result_array() as $value) {
					$id[1] = $value['idprofesores']; 
				 }
			
				return($id[1]);
			}else{
				return(-1);
			}			
		} //Fin obtenLaboratorios
		
		function obtenIdGrupo($grupo){
			$this->db->select('idgrupo');
			$this->db->from('grupo');
			$this->db->where('grupo', $grupo);
			
			$grupo=$this->db->get(); //Vacía el contenido de la consulta en la variable
			if(($grupo->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($grupo->result_array() as $value) {
					$idgrupo[1] = $value['idgrupo']; //Guardando mis datos en un arreglo
				 }
			
				return($idgrupo[1]);
			}else{
				return(-1);
			}						
						
		}
		
		function obtenDatosUEA($clave){
				
			$this->db->select('nombreuea, clave');
			$this->db->from('uea');
			$this->db->where('clave', $clave);

			$uea=$this->db->get(); //Vacía el contenido de la consulta en la variable
			if(($uea->num_rows())>0){ //Verificando si tengo datos a cargar
				foreach ($uea->result_array() as $value) {
					$uea_a[1] = $value; //Guardando mis datos en un arreglo
				 }
			
				return($uea_a[1]);
			}else{
				return(-1);
			}			
		} //Fin obtenLaboratorios	
		
		function editaProfesor($numEmp, $nuevo_nombre){
			$datos= Array(
				'nombre'=>$nuevo_nombre,
			);
			$this->db->where('numempleado',$numEmp);
			$this->db->update('profesores', $datos); 	
			
		}
		
		function editaUEA($clave, $nuevo_nombre){
			$datos=Array(
				'nombreuea' => $nuevo_nombre
			);
			$this->db->where('clave', $clave);
			$this->db->update('uea', $datos); 	
		}
		
		function obtenDatosLaboratoriosGrupo($idgrupo){
			$this->db->select('idlaboratorios, semanas_idsemanas, dias_iddias, horarios_idhorarios');
			$this->db->from('laboratorios_grupo');
			$this->db->where('idgrupo', $idgrupo);

			$res=$this->db->get(); //Vacía el contenido de la consulta en la variable
			if(($res->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;
				foreach ($res->result_array() as $value) {
					$resultado[$indice] = $value; //Guardando mis datos en un arreglo
					$indice++;
				 }
			
				return($resultado);
			}else{
				return(-1);
			}			
			
		}
		
		function editaGrupo($grupo, $nuevo_nombre){
			$datos=Array(
				'grupo' => $nuevo_nombre
			);
			$this->db->where('grupo', $grupo);
			$this->db->update('grupo', $datos); 			
		}

		function editaSiglas($grupo, $nuevo_siglas){
			$datos=Array(
				'siglas' => $nuevo_siglas
			);
			$this->db->where('grupo', $grupo);
			$this->db->update('grupo', $datos); 			
		}

		function borraGrupo($idgrupo, $idlab){
				
			$datos=Array(
				'idgrupo' => NULL
			);
			
			$this->db->where('idlaboratorios', $idlab);
			$this->db->where('idgrupo', $idgrupo);
			$this->db->update('laboratorios_grupo', $datos); 				
		}
		
		function eliminaGrupo($idgrupo){
			echo "grupos eliminado";				
		}
				
		function obtenGruposxProf($idprofesor){
			$this->db->select('idgrupo');
			$this->db->from('grupo');
			$this->db->where('profesores_idprofesores', $idprofesor);

			$res=$this->db->get(); //Vacía el contenido de la consulta en la variable
			if(($res->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;
				foreach ($res->result_array() as $value) {
					$resultado[$indice] = $value; //Guardando mis datos en un arreglo
					$indice++;
				 }
				return($resultado);
			}else{
				return(-1);
			}						
		}
		
		function editaLabo($idlab, $idgrupo, $iddia, $idsem, $idhora){
			$datos= Array(
				'idgrupo'=>$idgrupo,
			);
			$this->db->where('idlaboratorios',$idlab);
			$this->db->where('semanas_idsemanas', $idsem);
			$this->db->where('dias_iddias', $iddia);
			$this->db->where('horarios_idhorarios', $idhora);
			$this->db->update('laboratorios_grupo', $datos); 			
		}		

		
	
	} //Fin de la clase

?>


		

 