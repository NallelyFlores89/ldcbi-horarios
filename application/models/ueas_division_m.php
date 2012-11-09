<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Ueas_division_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenListaUeasCBI(){
			$this->db->select('nombreuea, iduea');
			$this->db->from('divisiones, uea');
			$this->db->where('divisiones_iddivisiones',1);
			$this->db->where('iddivisiones',1);

			$listaUeasCBI=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCBI->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;
				foreach ($listaUeasCBI->result_array() as $value) {
					//print_r($value['nombreuea']);
					$arregloUeasCBI[$indice] = $value['nombreuea']; //Guardando mis datos en un arreglo
					$indice=$indice+1;
				}
				
				//print_r($arregloUeas);
				return ($arregloUeasCBI); //Regreso información al controlador
			}else{
				$mensaje_error="No hay datos que cargar";
				return ($mensaje_error);
			}//fin del else
		} //Fin de obtenListaUeasCBI
		
		
		function obtenListaUeasCBS(){
			$this->db->select('nombreuea, iduea');
			$this->db->from('divisiones, uea');
			$this->db->where('divisiones_iddivisiones',2);
			$this->db->where('iddivisiones',2);

			$listaUeasCBS=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCBS->num_rows())>0){
				$indice=1;
				foreach ($listaUeasCBS->result_array() as $value) {
					//print_r($value['nombreuea']);
					$arregloUeasCBS[$indice] = $value['nombreuea'];
					$indice=$indice+1;
				}
				
				//print_r($arregloUeas);
				return ($arregloUeasCBS);
			}else{
				$mensaje_error="No hay datos que cargar";
				return ($mensaje_error);
			}//fin del else
		}//Fin de obtenListaUeasCBS
		
		function obtenListaUeasCSH(){
			$this->db->select('nombreuea, iduea');
			$this->db->from('divisiones, uea');
			$this->db->where('divisiones_iddivisiones',3);
			$this->db->where('iddivisiones',3);

			$listaUeasCSH=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeasCSH->num_rows())>0){
				$indice=1;
				
				foreach ($listaUeasCSH->result_array() as $value) {
					//print_r($value['nombreuea']);
					$arregloUeasCSH[$indice] = $value['nombreuea'];
					$indice=$indice+1;
				}
				return ($arregloUeasCSH);
			}else{
				return 0;
			}//fin del else
		}//Fin de obtenListaUeasCSH
		
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
		}
		
		function obtenListaUeaGrupoProfesor(){
			
			$this->db->select('nombreuea,nombregrupo,nombre');
			$this->db->from('uea, grupo, profesores');
			$this->db->join('profesores_has_uea', 'profesores_idprofesores=idprofesores','left');
			$this->db->where('idgrupo','iduea');
			$this->db->where('profesores_has_uea.uea_iduea','iduea');

			
			$listaUeaGrupoProfesor=$this->db->get(); //Vacía el contenido de la consulta en la variable
			
			if(($listaUeaGrupoProfesor->num_rows())>0){
				$indice=1;
				
				foreach ($listaUeaGrupoProfesor->result_array() as $value) {
					print_r($value);
					// $arregloLaboratorios[$indice] = $value['nombrelaboratorios'];
					// $indice=$indice+1;
				}
				 return ($arregloLaboratorios);
			}else{
				return 'hfhf';
			}//fin del else
		}		
				
	} //Fin de la clase
?>

 