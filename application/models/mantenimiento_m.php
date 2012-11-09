<?php
 	class Mantenimiento_m extends CI_Model {
		
		function __construct(){
				parent::__construct();
		}
	
		function getData() {
	 		$recursos = $this->db->get('recursos'); //obtenemos la tabla 'contacto'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
		    return $recursos->result(); //devolvemos el resultado de lanzar la query.
	 	}
	}
?>

