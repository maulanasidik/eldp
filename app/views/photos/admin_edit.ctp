<style type="text/css">

.uploadarea{
width: 100%;
margin-left: 10px;
background: #f3fcff;
border: 3px dotted #88bcca;
height: 100px;
margin-top: 40px;
padding: 40px 10px;
text-align: center;
vertical-align: middle;
display: table-cell;

    
}
#PhotoEditForm{
    overflow: scroll;
}
</style>
<?php echo $form->create('Photo',array('action'=>'edit','enctype'=>'multipart/form-data'));?>
<fieldset>

    <?php
    echo $form->input('id',array('div'=>false,'label'=>false));
    ?>

            

            <label>Judul</label>

            <div class="input-control text" data-role="input-control">
              <?php
                echo $form->input('title',array('div'=>false,'label'=>false));
              ?>
              
            </div>

            <label>Category Photo</label>     
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

            <label>Pengarang</label>

            <div class="input-control text" data-role="input-control">
              <?php
                echo $form->input('pengarang',array('div'=>false,'label'=>false));
              ?>
              
            </div>

            <label>Tahun</label>
            <div>
            <?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
            <?php //echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));   ?>
            </div>
            


            <div>
            
            <!--<?php
            echo '<label>Photo sebelumnya</label><br/>';?>
            <div class="input-control text" data-role="input-control" style="height:auto;">
                <div class="uploadcontainer default">
                  <div class="posterpreview  dropzone-previews">
                    <div class="dz-preview dz-processing dz-image-preview dz-success" id="fotoupload1"> 
                      <div class="dz-details">
                        <div class="dz-filename">
                          <span data-dz-name="">rack.png</span>
                        </div>
                      <div class="dz-size" data-dz-size=""><strong>0.3</strong> MiB</div>
                      <img data-dz-thumbnail="" alt="rack.png" src="">
                    </div>
                    <div class="dz-progress">
                      <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
                    </div>
                    <div class="dz-success-mark">
                      <span>✔</span>
                    </div>
                    <div class="dz-error-mark">
                      <span>✘</span>
                    </div>
                    <div class="dz-error-message">
                      <span data-dz-errormessage=""></span>
                    </div>
                    <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Buang File</a>
                  </div>
                </div>
                </div>

            </div>
            <?php if(!$current_photo):?>
              
              Belum ada photo
              
            <?php endif;

            ?>-->

            </div>

      
        
          

    <div style="clear:both;float:none;margin-bottom:30px;"/>
    <div class="submit">
        <button class="btn btn-2 btn-2g" type="submit">Submit</button>
    </div>


</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">



window.dropzoneElement = '<div id="uploadarea" class="uploadarea"><span>Tarik dan taruh foto ke area ini<br/></span><br/><img src="<?php echo $this->webroot;?>images/drop.png"/></div><div class="posterpreview  dropzone-previews"></div>';

$('.uploadcontainer').append(window.dropzoneElement);

window.count = 0;
window.countsuccess = 0;


$(document).ready(function() { 

    $('.window-overlay .shadow').css('overflow','scroll');
    $('.window-overlay .shadow').css('maxHeight','600px');
    
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#PhotoEditForm" ).on('submit', function(e) {
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
    $(".formcontainer").show();
    $('#photo_record_<?php echo $photo['Photo']['id']?>').html(responseText);
  }, 2000);
}

</script>