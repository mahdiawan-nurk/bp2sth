<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class M_pohon extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
    }
    
    function simpan_data($data){   
    return $this->db->insert('data_pohon',$data);
    
   
    }
    function simpan_gambar($data){   
   
    return $this->db->insert_batch('gambar_pohon', $data);
  
    }
    
    function tampilkan(){
         
        $query = $this->db->get('data_pohon');
        return $query->result();    
        
    }
    
    function get_by_id_pohon($id){
        $this->db->where('kode_qr', $id);
        $query = $this->db->get('data_pohon');
        return $query->row();   
        
    }
     function get_by_id_gambar($id){
        
        $query = $this->db->get_where('gambar_pohon',array('kode_qr' =>$id , ));
        return $query->result();   
        
    }
    
    function hapus($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('barang');
        return $query;
    }
    
    
     function perbarui($kode, $nama, $jumlah, $satuan, $harga, $id){   
     
         $data = array(
        'kode'=>$kode,
        'nama'=>$nama,
        'jumlah'=>$jumlah,
        'satuan'=>$satuan,
        'harga'=>$harga
    );    
        $this->db->where('id', $id);
        return $this->db->update('barang', $data); 
    
    }
    
    
}
