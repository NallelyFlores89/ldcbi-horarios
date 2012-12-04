<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Inicio_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenListaGruposCBI(){
			$this->db->select('nombreuea, grupo.siglas, nombredivision');
			$this->db->from('uea');
			$this->db->join('divisiones', 'uea.divisiones_iddivisiones=divisiones.iddivisiones');
			$this->db->join('grupo', 'uea.iduea=grupo.uea_iduea');
			$this->db->where('uea.divisiones_iddivisiones',1);

			$listaUeasCBI=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCBI->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;
				foreach ($listaUeasCBI->result_array() as $value) {
					//print_r($value['nombreuea']);
					$arregloUeasCBI[$indice] = $value; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				}
				return ($arregloUeasCBI); //Regreso información al controlador
			}else{
				return (-1);
			}//fin del else
		} //Fin de obtenListaUeasCBI
		
		function obtenListaUeasCBS(){
			$this->db->select('nombreuea, grupo.siglas, nombredivision');
			$this->db->from('uea');
			$this->db->join('divisiones', 'uea.divisiones_iddivisiones=divisiones.iddivisiones');
			$this->db->join('grupo', 'uea.iduea=grupo.uea_iduea');
			$this->db->where('uea.divisiones_iddivisiones',2);

			$listaUeasCBS=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCBS->num_rows())>0){
				$indice=1;
				foreach ($listaUeasCBS->result_array() as $value) {
					$arregloUeasCBS[$indice] = $value;
					$indice=$indice+1;
				}
				
				//print_r($arregloUeas);
				return ($arregloUeasCBS);
			}else{
				$mensaje_error="No hay datos que cargar";
				return (-1);
			}//fin del else
		}//Fin de obtenListaUeasCBS
		
		function obtenListaUeasCSH(){
			$this->db->select('nombreuea, grupo.siglas, nombredivision');
			$this->db->from('uea');
			$this->db->join('divisiones', 'uea.divisiones_iddivisiones=divisiones.iddivisiones');
			$this->db->join('grupo', 'uea.iduea=grupo.uea_iduea');
			$this->db->where('uea.divisiones_iddivisiones',3);

			$listaUeasCSH=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCSH->num_rows())>0){
				$indice=1;
				
				foreach ($listaUeasCSH->result_array() as $value) {
					$arregloUeasCSH[$indice] = $value;
					$indice=$indice+1;
				}
				return ($arregloUeasCSH);
			}else{
 				return (-1);
			}//fin del else
		}//Fin de obtenListaUeasCSH
				
		function obtenListaUeaProfesorGrupo(){
			$this->db->select('uea.nombreuea, grupo.siglas, grupo.grupo, profesores.nombre');
			$this->db->from('grupo');
			$this->db->join('profesores', 'grupo.profesores_idprofesores=profesores.idprofesores');
			$this->db->join('uea','grupo.uea_iduea=uea.iduea');
			

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

		
		function ueas($labo,$dia){
			$this->db->select('idgrupo');
			$this->db->from('laboratorios_grupo');
			$this->db->where('idlaboratorios',$labo);			
			$this->db->where('dias_iddias',$dia);			
			$this->db->order_by('horarios_idhorarios', "asc"); 
			
			$ueaL=$this->db->get();
			
			if(($ueaL->num_rows())>0){
				$indice=1;
				$indice2=1;
				
				foreach ($ueaL->result_array() as $value) {
					//$uL[$indice]=$value['idgrupo'];
					
					$this->db->select('siglas');
					$this->db->from('grupo');
					$this->db->where('idgrupo', $value['idgrupo']);
					
					$ueas=$this->db->get();
					
					if($ueas->num_rows()>0){
						foreach ($ueas->result_array() as $value2) {
							$nombreUeas[$indice2]=$value2['siglas'];
						}
					}
					else{
						$nombreUeas[$indice2]='';
					}
					
					$indice++;
					$indice2++;
				}

				return ($nombreUeas);
			 }else{
			 	return 'No hay datos';
			}//fin del else
		
		} //fin ueas
		
				
		function Obtenhorarios(){
			$this->db->select('hora');
			$this->db->from('horarios');
			
			$lHorarios=$this->db->get();
			//print_r($lHorarios->result_array());

			if(($lHorarios->num_rows())>0){
				$indice=1;
				foreach ($lHorarios->result_array() as $value) {
					$arregloHorarios[$indice] = $value['hora'];
					$indice++;
				}
				return ($arregloHorarios);
			}else{
				return 0;
			}//fin del else
			
		} //fin Obtenhorarios
		

				
	} //Fin de la clase

?>


		

 