<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Administracion_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}

		function obtenListaUeaProfesorGrupo(){
			$this->db->select('idprofesores,grupo.idgrupo,uea.iduea,profesores.nombre, profesores.numempleado, profesores.correo, uea.nombreuea, uea.clave, grupo.grupo,idlaboratorios');
			$this->db->from('grupo'); 
			$this->db->join('profesores', 'grupo.profesores_idprofesores=profesores.idprofesores');
			$this->db->join('uea','grupo.uea_iduea=uea.iduea');
			$this->db->join('laboratorios_grupo','grupo.idgrupo=laboratorios_grupo.idgrupo');
							
			$this->db->distinct();
			$listaUeaProfesorGrupo=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeaProfesorGrupo->num_rows())>0){
				$indice=1;
				
				foreach ($listaUeaProfesorGrupo->result_array() as $value) {
					$arregloUPG[$indice] = $value;
					$indice=$indice+1;
				}
				return ($arregloUPG);
			}else{
				return -1;
			}//fin del else
			
		} //fin obtenListaUeaProfesorGrupo
		

				
	} //Fin de la clase

?>


		

 