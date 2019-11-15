 <div class="widget-box">
          <div class="widget-title"> 
           <a href="<?=base_url();?>index.php/admin/tambah_data" class="btn btn-primary" ><i class="icon-plus"></i> Add User</a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data" border="1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Aksi</th>
                  <th></th>
                
                </tr>
              </thead>
              <tbody>
               <?php $no=0; foreach ($user as $u): ?>
                 <tr>
                   <td><?=$no+1?></td>
                   <td><?=$u->user?></td>
                   <td>
                     <a href="<?=base_url();?>index.php/admin/edit_data" class="btn btn-warning btn-mini"><i class="icon-pencil"></i> Edit</a>
                   </td>
                   <td><input type="checkbox" name="pilih[]" value="<?=$u->id?>"></td>
                 </tr>
               <?php $no++; endforeach ?>
                
              </tbody>
            </table>
            <button class="btn btn-danger"><i class="icon-trash"></i> Hapus User</button>
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