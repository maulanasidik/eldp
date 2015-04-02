<?php echo $form->create('Subject',array('action'=>'admin_add','enctype'=>'multipart/form-data'));?>
<fieldset>
<div style="float:left;width:350px;margin-right:40px;">


    <!--<label>ID Pustaka</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('id_pustaka',array('disabled'=>'disabled','div'=>false,'label'=>false,'value'=>$lastidtoinsert_id2));
    ?>
    
    </div>-->

    <label>Judul Pustaka</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('title',array('div'=>false,'label'=>false));
    ?>
    </div>

    <label>Category</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->select('category_id',$listCategory,null);
    ?>
    </div>

    <label>Penerbit</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('penerbit',array('div'=>false,'label'=>false));

    ?>

    </div>

    <div>
    <label>Tahun Terbit</label>
    <?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');
    ?>
    
    </div>

    
    


 

</div>

<div style="float:left;width:350px;">

  
  <label>Resensi</label>
    <div class="input-control textarea" data-role="input-control">
    <?php
    echo $form->input('details',array('div'=>false,'label'=>false));
    ?>
    </div>
  

  <div>
    <label>Pilih file cover</label>
    <?php
    echo $form->input('File.image1', array('label'=>false, 'type'=>'file'));
    ?>
  </div>
  <br/>
  <div>
    <label>Pilih file CD Pembelajaran <br/><small>dalam format zip</small></label>
    <?php
    echo $form->input('zipfile', array('label'=>false, 'type'=>'file'));
    ?>
  </div>
  <br/>

  <label>Nama File Utama <br/><small>misal home.swf</small></label>
  <div class="input-control text" data-role="input-control">
  <?php
  echo $form->input('file_name',array('div'=>false,'label'=>false));

  ?>

  </div>

  <br/>
  <br/>
  <div class="submit">
        <button class="btn btn-2 btn-2g" type="submit">Upload</button>
  </div>
  
  </fieldset>
  
</div>



<?php echo $form->end();?>


<script type="text/javascript">



(function() {
    
function showResponse(responseText, statusText, xhr, $form)  { 

    setTimeout(function() {
        $('.loadingpagecontainer').hide();

        
        $("#SubjectAdminAddForm").clearForm();
        $(".formcontainer").show();
        $('#cdtable').prepend(responseText);
        
    }, 2000);
        
    
} 

var options2 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse  // post-submit callback
};

// bind form2 using ajaxSubmit
$('#SubjectAdminAddForm').on('submit', function(e) {
    $.Dialog.close();
    e.preventDefault(); // avoids calling preview.php
   
    $(".formcontainer").fadeOut();
   
    $('.loadingpagecontainer').show();
    $(this).ajaxSubmit(options2);
    

    return false;
});

})();
</script>