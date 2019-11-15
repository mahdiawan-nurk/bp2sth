<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKoleksiPohon extends CI_Controller {

	   public function __construct()
   {
      parent::__construct();
      
     $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
     $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
     $this->output->set_header('Pragma: no-cache');
     $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
     $this->load->library('form_validation');
     
      $this->load->model('M_pohon');
     
    
   }
	public function index()
	{
            $this->template->cek_sessi();
            $isi['pohon']= $this->M_pohon->tampilkan();  
            $isi['p']='admin/data_pohon';	
            $this->load->view('template/template',$isi);
          
	}

  public function tambah_data()
  {
    $this->template->cek_sessi();
      $isi['p']='admin/tambah_data';  
      $this->load->view('template/template',$isi);
  }

  public function edit_data()
  {
    $this->template->cek_sessi();
    $id=$this->uri->segment(3);
    $isi['pohon']=$this->M_pohon->get_by_id_pohon($id);
    $isi['gambar']=$this->M_pohon->get_by_id_gambar($id);
     $isi['p']='admin/edit_data';  
      $this->load->view('template/template',$isi);

  }

  public function hapus_data()
  {
    $id=$this->input->post('pilih');
    for ($i=0;$i< count($id);$i++)
    {
      $this->db->delete('data_pohon',array('kode_qr' =>$id[$i]  ));
      $this->db->delete('gambar_pohon',array('kode_qr' =>$id[$i]  ));
    }
    echo "<script>
                alert(\"Data Berhasil Di Hapus\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";
  }
        
  public function saveData()
  {
    $this->template->cek_sessi();
    $this->form_validation->set_rules('qr_code', 'qr_code', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('nama_l', 'nama_l', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('sinonim', 'sinonim', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('nama_d', 'nama_d', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('penyebaran', 'penyebaran', 'required', array('required' => 'Tidak Boleh Kosong.'));
    $this->form_validation->set_rules('manfaat', 'manfaat', 'required', array('required' => 'Tidak Boleh Kosong.'));
  
  if ($this->form_validation->run() == FALSE)
                {
                  $isi['pesan']= array(form_error('qr_code'),form_error('sinonim'),form_error('nama_d'),form_error('deskripsi'),form_error('penyebaran'),form_error('manfaat'));
                    $isi['p']='admin/tambah_data';  
                  $this->load->view('template/template',$isi);

                }
                else
                {

                $kode_qr=$this->input->post('qr_code'); 
                $nama_l=$this->input->post('nama_l'); 
                $sinonim=$this->input->post('sinonim'); 
                $nama_d=$this->input->post('nama_d'); 
                $deskripsi=$this->input->post('deskripsi'); 
                $penyebaran=$this->input->post('penyebaran'); 
                $manfaat=$this->input->post('manfaat'); 
                gen_qr_code($kode_qr);
              $config['upload_path']=("./public/gambar/");
              $config['allowed_types']='jpg|png|jpeg';
              $config['max_size']=1024;

            $this->load->library('upload', $config);
           
              if ($this->upload->do_upload("gambar_1")) {
                $upload_data = $this->upload->data();
                $gambar_1 = $upload_data['file_name'];
                $i=true;
                
              }else{
                $i=false;
                // echo "gagal";
                }

               if ($this->upload->do_upload("gambar_2")) {
                 $upload_data = $this->upload->data();
                  $gambar_2 = $upload_data['file_name'];
                $j=true;
               
              }else{
                $j=false;
                // echo "gagal";
                }  
           if ($i==true AND $j==true) {
             $data = array('kode_qr' =>$kode_qr ,'nama_latin'=>$nama_l,'sinonim'=>$sinonim,'nama_daerah'=>$nama_d,'deskripsi'=>$deskripsi,'penyebaran'=>$penyebaran,'manfaat'=>$manfaat,'gambar_qr'=>$kode_qr.".png" );
            $gambar = array(
                          array(
                                  'kode_qr' =>$kode_qr,
                                  'nama_file' => $gambar_1,
                                  'type' => $kode_qr."_1"
                                  
                          ),
                          array(
                                  'kode_qr' => $kode_qr,
                                  'nama_file' =>$gambar_2,
                                  'type' =>$kode_qr."_2"
                                  
                          )
                  );
            $this->M_pohon->simpan_data($data);
            $this->M_pohon->simpan_gambar($gambar);
             echo "<script>
                alert(\"Simpan Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";

            }else{
              echo "<script>
                alert(\"Simpan Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon/tambah_data')."\";
                </script>";
            }
               
            }
              
        
             

                
  }

  public function updateData()
  {
    $this->template->cek_sessi();
               $kode_qr=$this->input->post('qr_code'); 
                $nama_l=$this->input->post('nama_l'); 
                $sinonim=$this->input->post('sinonim'); 
                $nama_d=$this->input->post('nama_d'); 
                $deskripsi=$this->input->post('deskripsi'); 
                $penyebaran=$this->input->post('penyebaran'); 
                $manfaat=$this->input->post('manfaat'); 
               
              $config['upload_path']=("./public/gambar/");
              $config['allowed_types']='jpg|png|jpeg';
              $config['max_size']=1024;

            $this->load->library('upload', $config);
            $data = array('nama_latin'=>$nama_l,'sinonim'=>$sinonim,'nama_daerah'=>$nama_d,'deskripsi'=>$deskripsi,'penyebaran'=>$penyebaran,'manfaat'=>$manfaat);
              if ($this->upload->do_upload("gambar_1")) {
                $upload_data = $this->upload->data();
                $gambar_1 = $upload_data['file_name'];
                $i=true;
                
              }else{
                $i=false;
                // echo "gagal";
                }

               if ($this->upload->do_upload("gambar_2")) {
                 $upload_data = $this->upload->data();
                  $gambar_2 = $upload_data['file_name'];
                $j=true;
               
              }else{
                $j=false;
                // echo "gagal";
                }  
           if ($i==true AND $j==true) {
                 $get_id_1=$this->M_pohon->get_gambar_by_id($kode_qr.'_1');
                 $get_id_2=$this->M_pohon->get_gambar_by_id($kode_qr.'_2');
                 
                $gambar = array(
                          array(
                                  'id' =>$get_id_1->id,
                                  'nama_file' => $gambar_1,
                                  'type' => $kode_qr.'_1'
                                  
                          ),
                          array(
                                  'id' =>$get_id_2->id,
                                  'nama_file' =>$gambar_2,
                                  'type' =>$kode_qr.'_2'
                                  
                          )
                  );
                $this->M_pohon->perbarui_data($kode_qr,$data);
                $this->M_pohon->perbarui_gambar_all($kode_qr,$gambar);

                echo "<script>
                alert(\"Update Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";
            }else{
              if ($i==true) {
                $get_id=$this->M_pohon->get_gambar_by_id($kode_qr.'_1');
                $gambar_a =array(
                                  'kode_qr' =>$kode_qr,
                                  'nama_file' => $gambar_1,
                                  'type' => $kode_qr.'_1'
                                  
                          );

                $this->M_pohon->perbarui_data($kode_qr,$data);
                $this->M_pohon->perbarui_gambar_by_id($get_id->id,$gambar_a);
                echo "<script>
                alert(\"Update Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";
              }elseif ($j==true) {
                  $get_id=$this->M_pohon->get_gambar_by_id($kode_qr.'_2');
               $gambar_b =array(
                                  'kode_qr' =>$kode_qr,
                                  'nama_file' => $gambar_2,
                                  'type' => $kode_qr.'_2'
                                  
                          );
               $this->M_pohon->perbarui_data($kode_qr,$data);
                $this->M_pohon->perbarui_gambar_by_id($get_id->id,$gambar_b);
                echo "<script>
                alert(\"Update Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";
              }else{
                $this->M_pohon->perbarui_data($kode_qr,$data);
                echo "<script>
                alert(\"Update Data Berhasil Di Lakukan\");
                window.location=\"".base_url('index.php/DataKoleksiPohon')."\";
                </script>";
              }
            }
  }
}
