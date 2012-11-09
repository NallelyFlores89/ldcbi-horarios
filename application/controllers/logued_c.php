<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* This is only viewable to those members that are logged in
 */
 class Logued_c extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
	}
	
	public function index(){		// If the user is validated, then this function will run
		
		echo 'Congratulations, you are logged in.';
		$this->load->view('inicio_admin_v', $datos);
		
		// Add a link to logout
		echo '<br /><a href=''.base_url().'home/do_logout'>Logout Fool!</a>';		
	}
	
	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('loguin_c');
		}
	}
	
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('loguin_c');
	}
 }
 ?>