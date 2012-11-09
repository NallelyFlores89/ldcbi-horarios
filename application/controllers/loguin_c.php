<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Loguin_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('loguin_model'); // Load the model
			
	   	}

    function index( $msg = NULL ){
 		$data['msg'] = $msg;
        $this->load->view('admin_logueo_v', $data);
    }
	
	
	 public function process(){
      
        $result = $this->loguin_model->validate();// Validate the user can login         
		
		if(! $result){ // Now we verify the result
            // If user did not validate, then show them login page again
           	$msg = '<font color=red>Nombre de usuario y/o contraseña incorrectos</font><br />';
			$this->index($msg);
			
        }else{
            // If user did validate, send them to members area
            redirect('inicio_admin_c');
        }        
    } 
}
?>