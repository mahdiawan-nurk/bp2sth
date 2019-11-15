<style type="text/css">
  .error{
    color: red;
  }
</style>
<div class="widget-box">
 
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tambah Data</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?=base_url()?>index.php/datakoleksipohon/updatedata" method="POST" class="form-horizontal" enctype='multipart/form-data'>
            <div class="control-group">
              <label class="control-label">Kode QR :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="QR Code" readonly="" name="qr_code" id="qr_code" value="<?=$pohon->kode_qr?>" />
                 <?php echo form_error('qr_code', '<div class="error">', '</div>');?>
                 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Latin :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Latin" name="nama_l" value="<?=$pohon->nama_latin?>" />
                <?php echo form_error('nama_l', '<div class="error">', '</div>');?>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sinonim :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Sinonim"  name="sinonim" value="<?=$pohon->sinonim?>" />
                <?php echo form_error('sinonim', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Daerah :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Daerah" name="nama_d" value="<?=$pohon->nama_daerah?>" />
                <?php echo form_error('nama_d', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Deskripsi:</label>
              <div class="controls" id="editor">
                <textarea class="ckeditor" id="isi" name="deskripsi"><?=$pohon->deskripsi?> </textarea>
                <?php echo form_error('deskripsi', '<div class="error">', '</div>');?>
                 </div>
            </div>
            <div class="control-group">
              <label class="control-label" >Penyebaran</label>
              <div class="controls" id="">
                <textarea class="ckeditor" id="isi" name="penyebaran"><?=$pohon->penyebaran?></textarea>
                 <?php echo form_error('penyebaran', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Manfaat</label>
              <div class="controls">
                <textarea class="ckeditor" id="isi" style="width: 75%" name="manfaat"><?=$pohon->manfaat?></textarea>
                 <?php echo form_error('manfaat', '<div class="error">', '</div>');?>
              </div>
            </div>
          <?php $pic = array(); foreach ($gambar as $k) {
            
            $pic[]=$k->nama_file;

          } ?>
            <div class="control-group">
              <label class="control-label">Gambar 1</label>
              <div class="controls">
               <input type="file" accept="image/*" multiple="" onchange="loadFile(event)" class="btn btn-default" name="gambar_1"><span class="alert alert-warning " style="width: 100px">Perhatian..!! Max Size Gambar 1 MB</span>
                 <img id="output_a" width="450px" style="width: 270px;height: 250px" src="<?=base_url();?>public/gambar/<?=$pic[0]?>"/>  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gambar 2</label>
              <div class="controls">
               <input type="file" accept="image/*" multiple="" onchange="loadFileb(event)" class="btn btn-default" name="gambar_2"><span class="alert alert-warning " style="width: 100px">Perhatian..!! Max Size Gambar 1 MB</span>
                 <img id="output_b" style="width: 270px;height: 250px" src="<?=base_url();?>public/gambar/<?=$pic[1]?>" />  
              </div>

            </div>
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
               <button type="submit" class="btn btn-primary">Cancel</button>
            </div>
          </form>
        </div>
      
      </div>


<script type="text/javascript">
  var loadFile = function(event) { 
var reader = new FileReader(); reader.onload = function(){ 
var output = document.getElementById('output_a'); output.src = reader.result; }; 
reader.readAsDataURL(event.target.files[0]); 
};

var loadFileb = function(event) { 
var reader = new FileReader(); reader.onload = function(){ 
var output = document.getElementById('output_b'); output.src = reader.result; }; 
reader.readAsDataURL(event.target.files[0]); 
};
</script>