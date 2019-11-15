<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('qr_code');
        if ($id == '') {
           
            $kontak = array('error'=>"Please Insert Yout QR Code");
        } else {
            $this->db->where('kode_qr', $id);
            $data = $this->db->get('data_pohon');
             $this->db->where('kode_qr', $id);
            $gambar = $this->db->get('gambar_pohon');
            if ($data->num_rows()>0 AND $gambar->num_rows()>0 ) {
                $data1=$data->row();
                 $d = array();
                 foreach ($gambar->result() as $k) {
                    
                     $d[]=base_url().'public/gambar/'.$k->nama_file;
                    
                 }
                 $jsn = array('nama_latin'=>$data1->nama_latin,'sinonim'=>$data1->sinonim,'nama_daerah'=>$data1->nama_daerah,'deskripsi'=>$data1->deskripsi,'penyebaran'=>$data1->penyebaran,'manfaat'=>$data1->manfaat,'gambar_1'=>$d[0],'gambar_2'=>$d[1]);
            $kontak=array('data'=>$jsn);

            }else{
                $kontak = array('Error' =>"Not Found For Data In Database" );
            }
            
        }
        $this->response($kontak, 200);
    }

    //Masukan function selanjutnya disini
        function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'nomor'    => $this->post('nomor'));
        $insert = $this->db->insert('telepon', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>