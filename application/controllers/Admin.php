<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
      
     $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
     $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
     $this->output->set_header('Pragma: no-cache');
     $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
     
     
      $this->load->model('M_admin');
     
    
   }
  
	public function index()
	{	
		$this->template->cek_sessi();
           
            $isi['user']= $this->M_admin->tampilkan();  
            $isi['p']='admin/pengguna';	
            $this->load->view('template/template',$isi);
            
	}

	public function tambah_data($value='')
	{
		$this->template->cek_sessi();
		 $isi['p']='admin/tambah_pengguna';	
            $this->load->view('template/template',$isi);
	}

	public function edit_data($value='')
	{
		$this->template->cek_sessi();
		 $isi['p']='admin/edit_pengguna';	
            $this->load->view('template/template',$isi);
	}
        
}
