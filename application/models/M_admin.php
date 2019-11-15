<?php if (!defined('BASEPATH')) exit ('No Direct Script Access Allowed');

class M_admin extends CI_Model{
    
    
    function __construct() {
        parent::__construct();
    }
    
    
  
    
    function cek_login($username, $password){
    
    $this->db->where('user', $username);
    $this->db->where('pass',$password); 
    $this->db->limit(1);
    $query = $this->db->get('admin');
    return $query;
    }
    
    public function tampilkan($value='')
    {
        return $this->db->get('admin')->result();
    }
    
    
}
