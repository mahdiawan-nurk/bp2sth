<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 public function cek_sessi()
   {
   	if ($this->session->userdata('login')!=TURE) {
   		redirect('secure');
   	}
   }
	public function index()
	{
			$this->template->cek_sessi();
            
			$isi['p']='admin/dashboard';	
            $this->load->view('template/template',$isi);
           
	}
        
}
