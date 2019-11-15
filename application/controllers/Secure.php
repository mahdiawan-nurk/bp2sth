<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {
 public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('M_admin');
    
    
   }


	public function index()
	{
    if ($this->session->userdata('login')==TRUE ) {
      redirect('welcome');
    }else{
      $this->load->view('login');
    }
		
	}

	public function act_login()
	{
		$this->form_validation->set_rules('pengguna', 'pengguna', 'required', array('required' => 'Pengguna Tidak Boleh Kosong.'));
     $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password Tidak Boleh Kosong'));

         if ($this->form_validation->run() == FALSE)
                {
                	$error['pesan']= array(form_error('pengguna'),form_error('password'));
                     $this->load->view('login',$error); 
                }
                else
                {
         
         $user=$this->input->post('pengguna');        
         $password=$this->input->post('password');  
         $pass=sha1($password);  

         $cek_login=$this->M_admin->cek_login($user,$pass); 

         	if ($cek_login->num_rows()>0) {
         		$hsl=$cek_login->row();
              	$data = array('user_name' => $hsl->user, 'login' => TRUE);
    			$this->session->set_userdata($data);
    			redirect('welcome');
              }     

                }
	
	}

	 function logout(){
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();  
    redirect('secure');
    
    }
}
