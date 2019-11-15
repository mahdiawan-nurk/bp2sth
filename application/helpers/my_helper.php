<?php 

function auto_kode()
{
	$ci=get_instance();

	$ci->db->select('RIGHT(data_pohon.kode_qr,4)as kode',false);
	$ci->db->from('data_pohon');
  	$ci->db->order_by('kode_qr','DESC');
  	$ci->db->limit(1);

  $query=$ci->db->get();
  if ($query->num_rows()<>0) {
    $data=$query->row();
    $kode=intval($data->kode)+1;
  }else{
    $kode=1;
  }

  $kode_max=str_pad($kode,4,"0",STR_PAD_LEFT);
  $kode_jadi="ARB".$kode_max."PHN";
  return $kode_jadi;
	
}

function j($data) {
	header('Content-Type: application/json');
	echo json_encode($data);
}

function gen_qr_code($name_file)
{
  $ci=get_instance();
            $ci->load->library('ciqrcode'); //pemanggilan library QR CODE

            $config['cacheable']  = true; //boolean, the default is true
            $config['cachedir']   = './public/'; //string, the default is application/cache/
            $config['errorlog']   = './public/'; //string, the default is application/logs/
            $config['imagedir']   = './public/qrcode/'; //direktori penyimpanan qr code
            $config['quality']    = true; //boolean, the default is true
            $config['size']     = '1024'; //interger, the default is 1024
            $config['black']    = array(224,255,255); // array, default is array(255,255,255)
            $config['white']    = array(70,130,180); // array, default is array(0,0,0)
            $ci->ciqrcode->initialize($config);

            $image_name=$name_file.'.png'; //buat name dari qr code sesuai dengan nim

            $params['data'] = $kode; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
            $ci->ciqrcode->generate($params);
            
}


?>