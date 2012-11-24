<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Recupera_pass_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        //$this->load->model('loguin_model'); // Load the model
			
	   	}

	    function index(){
	        $this->load->view('recupera_pass_v');
	    }
	

	}
?>