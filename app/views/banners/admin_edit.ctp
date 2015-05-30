<?php echo $form->create('Banner',array('action'=>'edit','enctype'=>'multipart/form-data'));?>
<fieldset>
<div style="float:left;width:350px;margin-right:40px;">

    <?php
    echo $form->input('id');?>



    
    </div>

    <label>Judul</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('title',array('div'=>false,'label'=>false));
    ?>
    </div>

    <div>
    <?php
    echo '<span>Gambar Banner sebelumnya</span><br/>';
    if($banner['Banner']['file']!=null){?>
        <img width="50" src="<?php echo $this->webroot.$banner['Banner']['file'];?>"/>
    <?php }else{
        echo '<p>Belum ada Gambar Banner</p>';
    }

    ?>
    </div>

    <label>Ganti Gambar Banner:</label>

    <div class="input-control text" data-role="input-control">

    <?php
    echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
    ?>

    </div>

    <label>Aktif ?</label>

    <div class="input-control" data-role="input-control">
      <?php

        echo $form->input('active',array('div'=>false,'label'=>false,'type'=>'checkbox'));
      ?>
      
    </div>



</div>

<div class="submit">
    <button class="btn btn-2 btn-2g" type="submit">Upload</button>
</div>
</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">
          

$(document).ready(function() { 
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#BannerEditForm" ).on('submit', function(e) {
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


    if(statusText=='success'){
      alert("berhasil merubah data");  
    }else{
      alert("tidak berhasil merubah data, silahkan coba kembali");  
    }

    var titlePage = "List Banner";

    var Datawidth = '900px';
    var Dataheight = '375px';

    $.ajax({
      type: "GET",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot;?>admin/banners/listbanner', // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        showdialogondialog(data,titlePage,Datawidth,Dataheight);
      } // success
    }); // ajax

  }, 2000);
}


function showdialogondialog(datashow,titlePage,Datawidth,Dataheight){

  //$('.loadingpagecontainer').hide();
  
  $.Dialog({
      overlay: true,
      draggable:true,
      shadow: true,
      flat: false,
      width:Datawidth,
      height:Dataheight,
      padding: 10,
      icon: '<span class="icon icon-book"></span>',
      title: titlePage,
      shadow: true,
      onShow: function(_dialog){
          var content = datashow;
        $.Dialog.content(content);
        $('.window-overlay .shadow').css('overflow','scroll');
        $('.window-overlay .shadow').css('maxHeight','600px');
          
      }
  });
}

</script>