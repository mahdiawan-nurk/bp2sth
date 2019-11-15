 <div class="widget-box">
          <div class="widget-title"> 
             <a href="<?=base_url();?>index.php/datakoleksivegetasi/tambah_data" class="btn btn-info" ><i class="icon-file"></i> New Data</a>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="<?=base_url();?>index.php/datakoleksivegetasi/hapus_data">
           <table class="table table-striped table-bordered data" border="1">
      <thead>
        <tr>      
          <th>NO</th>
          <th>Nama Daerah</th>
          <th>Nama Ilmiah</th>
          <th>Family</th>
          <th>Act</th>
          <th></th>
          
        </tr>
      </thead>
      <tbody>
        <?php $no=0; foreach ($vegetasi as $k): ?>
          <tr>
            <td><?=$no+1?></td>
            <td><?=$k->nama_daerah?></td>
            <td><?=$k->nama_ilmiah?></td>
            <td><?=$k->family?></td>
            <td>
              <a href="<?=base_url();?>index.php/datakoleksivegetasi/edit_data/<?=$d->kode_qr?>" class="btn btn-warning btn-mini"><i class="icon-pencil"></i>Edit</a>

            </td>
            <td><input type="checkbox" name="pilih[]" value="<?=$k->id_vegetasi?>"></td>
          </tr>
        <?php $no++; endforeach ?>
             
      </tbody>
    </table>
    <button class="btn btn-danger"><i class="icon-trash"></i> Hapus</button>
    </form>
          </div>
        </div>
<script src="<?php echo base_url();?>public/assets/js/jquery.min.js"></script> 
 <script type="text/javascript">
  
$(document).ready(function(){
  
  $('.data').dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers",
    "sDom": '<""l>t<"F"fp>'
  });
  });
</script>