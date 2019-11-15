<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Tambah Data Vegetasi</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/datakoleksivegetasi/simpan_data" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Nama Daerah</label>
                <div class="controls">
                  <input type="text" name="nama_daerah" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Nama Ilmiah</label>
                <div class="controls">
                  <input type="text" name="nama_ilmiah" id="email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Family</label>
                <div class="controls">
                  <input type="text" name="family" id="date">
                </div>
              </div>
             
              <div class="form-actions">
                <input type="submit" value="Simpan" class="btn btn-success">
                <input type="submit" value="Cancel" class="btn btn-info">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>