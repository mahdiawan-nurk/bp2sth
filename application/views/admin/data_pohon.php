 <style type="text/css">
   .th{
    background: green;
   }
 </style>
 <div class="widget-box">
          <div class="widget-title">
         <a href="<?=base_url();?>index.php/datakoleksipohon/tambah_data" class="btn btn-info" ><i class="icon-file"></i> New Data</a>
          </div>
        

          <div class="widget-content nopadding">

            <form method="POST" action="<?=base_url();?>index.php/datakoleksipohon/hapus_data">
            <table class="table table-striped table-bordered data" border="1">
      <thead>
        <tr >      
          <th class="th">NO</th>
          <th>Kode Pohon</th>
          <th>Nama Latin</th>
          <th>sinonim</th>
          <th>Nama Daerah</th>
          <!-- <th>Deskripsi</th>
          <th>Penyebaran</th>
          <th>Manfaat</th> -->
          <th>Kode QR</th>
          <th>Act</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          
            <?php $no=0; foreach ($pohon as $d): ?>
               <tr>
           <td><?=$no+1?></td>  
           <td><?=$d->kode_qr?></td>  
           <td><?=$d->nama_latin?></td> 
           <td><?=$d->sinonim?></td>  
           <td><?=$d->nama_daerah?></td>  
          <!--  <td><?=$d->kode_qr?></td> 
           <td><?=$d->kode_qr?></td>  
           <td><?=$d->kode_qr?></td>   -->
           <td><img src="<?= base_url('public/qrcode/'.$d->gambar_qr);?>" width="50px"></td>  
           <td >
            <div class="btn-group">
              <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle round">Aksi <span class="caret"></span></button>
             <ul class="dropdown-menu">
              <!-- <li><a href="#myModal2" data-toggle="modal"  ><i class="icon-picture"></i>Add Gambar</a></li> -->
              <li><a href="#myModal" data-toggle="modal" data="<?=$d->kode_qr?>" id="view-detail"><i class="icon-eye-open"></i>View Detail</a></li>
              <li><a href="<?=base_url();?>index.php/datakoleksipohon/edit_data/<?=$d->kode_qr?>"><i class="icon-pencil"></i>Edit</a></li>
            </ul>
            </div>
            
            
           </td>  
           <td><input type="checkbox" name="pilih[]" value="<?=$d->kode_qr?>"></td>
       </tr>
            <?php $no++; endforeach ?>
           
      </tbody>
    </table>
   <button class="btn btn-danger" ><i class="icon-trash" ></i> Hapus Pilih</button>
    </form>
 
          </div>
        </div>
        

            <div id="myModal" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                
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

  $('#view-detail').on('click',function() {
    
  });
  // $.gritter.add({
  //   title:  'Important Unread messages',
  //   text: 'You have 12 unread messages.',
  //   image:  '<?=base_url();?>public/assets/img/demo/envelope.png',
  //   sticky: false,
  //   time:2000
  // }); 
  });

</script>
<script>
var loadFile = function(event) { 
var reader = new FileReader(); reader.onload = function(){ 
var output = document.getElementById('output'); output.src = reader.result; }; 
reader.readAsDataURL(event.target.files[0]); 
};

var loadFile1 = function(event) { 
var reader = new FileReader(); reader.onload = function(){ 
var output = document.getElementById('output1'); output.src = reader.result; }; 
reader.readAsDataURL(event.target.files[0]); 
};
 </script>
 