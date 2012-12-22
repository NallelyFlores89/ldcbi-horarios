<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Recupera_pass_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('recupera_pass_m');
			$this->load->library('email');
		}

	    function index(){
			if($_POST != NULL){
				$existe=$this->recupera_pass_m->verificaCorreo($_POST['correoInput']);
				if($existe!=-1){
					// $config['protocol'] = 'mail';
					// $config['wordwrap'] = FALSE;				
					// $config['mailtype']='html';
	 				// $config_email['send_multipart'] = FALSE;  
					// $this->email->initialize($config);
					// $this->email->from('naye_flo89@hotmail.com', 'Nallely Flores');
					// $this->email->to('anjudark89@gmail.com');
					// $this->email->subject('Recupera tu contraseña');
					// $msj='su password es '.$existe;			
					// $this->email->message($msj);				
					// $this->email->send();					
					echo "<label>La clave de la contraseña ha sido enviada a su dirección de correo electrónico</label>";
					$this->load->view('recupera_pass_v');
				}else{
					echo "<label class='error'>El correo no existe en la base de datos</label>";
			        $this->load->view('recupera_pass_v');
				}
			}else{
		        $this->load->view('recupera_pass_v');
			}
	    }
	

	}
?>