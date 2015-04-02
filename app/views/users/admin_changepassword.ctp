<?php echo $form->create('User',array('action'=>'admin_changepassword','enctype'=>'multipart/form-data'));?>
<fieldset>
<div style="float:left;width:350px;margin-right:40px;">

    <?php
    echo $form->input('id');?>



    <label>Password lama</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('password_old',array('div'=>false,'label'=>false,'type'=>'password'));
    ?>
    </div>

    <label>Password Baru</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('password_new',array('div'=>false,'label'=>false,'type'=>'password'));
    ?>
    </div>

    <label>Konfirmasi Password Baru</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('password_new2',array('div'=>false,'label'=>false,'type'=>'password'));
    ?>
    </div>


    <div class="submit">
    <button class="btn btn-2 btn-2g" type="submit">Submit</button>
    </div>


</div>


</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">
          

$(document).ready(function() { 
    var options2 = {
      dataType: "json",
      success:       showResponse  // post-submit callback
    };
 
    $( "#UserAdminChangepasswordForm" ).on('submit', function(e) {
      
      
     
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

    if(responseText.status == 'true'){
      $.Dialog.close();
      alert(responseText.flashMessage);  
    }else{
      alert(responseText.flashMessage);  
    }
    
    //$('#banner_record_<?php echo $change['User']['id']?>').html(responseText);
  }, 2000);
}

</script>