<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
         function __construct() {
     parent::__construct();  
    
       $this->load->helper('language');
       $this->load->library('session');
       
       
      
    }
	public function index()
	{
            
		$this->load->view('homepage');
                $this->load->view('templates/mapBody');
                $this->load->view('templates/footer');
	}
}
