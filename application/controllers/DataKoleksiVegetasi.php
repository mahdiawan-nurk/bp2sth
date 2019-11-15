<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKoleksiVegetasi extends CI_Controller {

	 public function __construct()
   {
      parent::__construct();
      
     $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
     $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
     $this->output->set_header('Pragma: no-cache');
     $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
     
     
      $this->load->model('M_vegetasi');
     
    
   }
	public function index()
	{
          $this->template->cek_sessi();
            $isi['vegetasi']= $this->M_vegetasi->tampilkan();  
            $isi['p']='admin/data_koleksi';	
            $this->load->view('template/template',$isi);
            
	}

  public function tambah_data()
  {
    $this->template->cek_sessi();
      $isi['p']='admin/tambah_vegetasi';  
      $this->load->view('template/template',$isi);
  }

  public function edit_data()
  {
    $this->template->cek_sessi();
      $isi['p']='admin/edit_vegetasi';  
      $this->load->view('template/template',$isi);
  }

  public function simpan_data($value='')
  {
    $nama_d=$this->input->post('nama_daerah');
    $nama_l=$this->input->post('nama_ilmiah');
    $family=$this->input->post('family');
    $data = array('nama_daerah' =>$nama_d ,'nama_ilmiah'=>$nama_l,'family'=>$family );
    $this->db->insert('data_vegetasi', $data);
       echo "<script>
                alert(\"Data Berhasil Di Simpan\");
                window.location=\"".base_url('index.php/DataKoleksivegetasi')."\";
                </script>";
  }

  public function hapus_data($value='')
  {
    $id=$this->input->post('pilih');
    for($i=0;$i<count($id);$i++)
    {
      $this->db->delete('data_vegetasi', array('id_vegetasi' =>$id[$i] ));
    }
     echo "<script>
                alert(\"Data Berhasil Di Hapus\");
                window.location=\"".base_url('index.php/DataKoleksivegetasi')."\";
                </script>";
  
  }
        
}
