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
          <form action="<?=base_url()?>index.php/datakoleksipohon/savedata" method="POST" class="form-horizontal" enctype='multipart/form-data'>
            <div class="control-group">
              <label class="control-label">Kode QR :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="QR Code" readonly="" name="qr_code" id="qr_code" value="<?=auto_kode();?>"  style="width: 90%"/>
                 <?php echo form_error('qr_code', '<div class="error">', '</div>');?>
                 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Latin :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Latin" name="nama_l"  style="width: 90%"/>
                <?php echo form_error('nama_l', '<div class="error">', '</div>');?>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sinonim :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Sinonim"  name="sinonim"  style="width: 90%"/>
                <?php echo form_error('sinonim', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Daerah :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Daerah" name="nama_d"  style="width: 90%"/>
                <?php echo form_error('nama_d', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Deskripsi:</label>
              <div class="controls" id="editor">
                <textarea class="form-control" id="isi" name="deskripsi" style="width: 90%"></textarea>
                <?php echo form_error('deskripsi', '<div class="error">', '</div>');?>
                 </div>
            </div>
            <div class="control-group">
              <label class="control-label" >Penyebaran</label>
              <div class="controls" id="">
                <textarea class="ckeditora" id="isi" name="penyebaran"  style="width: 90%"></textarea>
                 <?php echo form_error('penyebaran', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Manfaat</label>
              <div class="controls">
                <textarea class="ckeditora" id="isi"  style="width: 90%" name="manfaat"></textarea>
                 <?php echo form_error('manfaat', '<div class="error">', '</div>');?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gambar 1</label>
              <div class="controls">
               <input type="file" accept="image/*" multiple="" onchange="loadFile(event)" class="btn btn-default" name="gambar_1"><span class="alert alert-warning " style="width: 100px">Perhatian..!! Max Size Gambar 1 MB</span>
                 <img id="output_a" width="450px" style="width: 270px;height: 250px"/>  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gambar 2</label>
              <div class="controls">
               <input type="file" accept="image/*" multiple="" onchange="loadFileb(event)" class="btn btn-default" name="gambar_2"><span class="alert alert-warning " style="width: 100px">Perhatian..!! Max Size Gambar 1 MB</span>
                 <img id="output_b" style="width: 270px;height: 250px" />  
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