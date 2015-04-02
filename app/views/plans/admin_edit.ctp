<?php echo $form->create('Plan',array('action'=>'edit','enctype'=>'multipart/form-data'));?>
<fieldset>
<div style="float:left;width:350px;margin-right:40px;">

    <?php
    echo $form->input('id');?>

    <label>ID Pengadaan Buku</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('id_plan',array('div'=>false,'label'=>false));
    ?>
    </div>

    <label>Judul Buku</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('title',array('div'=>false,'label'=>false));
    ?>
    </div>

    <label>Category</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->select('category_id',$categories,null);
    
    echo '</div>';
    ?>

    <label>Penerbit</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('penerbit',array('div'=>false,'label'=>false));

    ?>

    </div>

    <label>Pengarang</label>
    <div class="input-control text" data-role="input-control">

    <?php
    echo $form->input('pengarang',array('div'=>false,'label'=>false));

    ?>
    </div>

      <label>Tahun Produksi</label>
    <br><?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
    <?php //echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));   ?>


    

 

</div>

<div style="float:left;width:350px;">

  

    <label>Jumlah Buku</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('jml_buku',array('div'=>false,'label'=>false));

    ?>

    </div>


    <label>Terbeli ?</label>

    <div class="input-control" data-role="input-control">
      <?php

        echo $form->input('active',array('div'=>false,'label'=>false,'type'=>'checkbox'));
      ?>
      
    </div>

    <div>
    <label>Resensi</label>
        <div class="input-control textarea" data-role="input-control">
    <?php
    echo $form->input('sinopsis',array('div'=>false,'label'=>false));
    ?>
    </div>


    



<div style="clear:both;float:none;margin-bottom:30px;"/>
<br>
<div class="submit">
    <button class="btn btn-2 btn-2g" type="submit">Update</button>
</div>
</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">
          

$(document).ready(function() { 
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#PlanEditForm" ).on('submit', function(e) {
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $(this).ajaxSubmit(options2); 
      

      return false;
    });
}); 

function showResponse(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    //$(".formcontainer").show();
    alert('Berhasil merubah data');
    $('#PlanEditForm').html(responseText);
  }, 2000);
}

</script>