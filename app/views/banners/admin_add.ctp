<?php echo $form->create('Banner',array('enctype'=>'multipart/form-data'));?>
<fieldset>
<div style="float:left;width:350px;margin-right:40px;">

    

    <label>Judul</label>
    <div class="input-control text" data-role="input-control">
    <?php
    echo $form->input('title',array('div'=>false,'label'=>false));
    ?>
    </div>

    <label>Pilih Gambar Banner</label>
        <?php
        echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
        ?>


    <label>Aktif ?</label>

    <div class="input-control" data-role="input-control">
      <?php

        echo $form->input('active',array('div'=>false,'label'=>false,'type'=>'checkbox'));
      ?>
      
    </div>

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

        if(statusText=='success'){
          alert("berhasil menambah banner baru");  
        }else{
          alert("tidak berhasil menambah banner, silahkan coba kembali");  
        }
        $("#BannerAddForm").clearForm();
        $(".formcontainer").show();
        

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

var options2 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse  // post-submit callback
};

// bind form2 using ajaxSubmit
$('#BannerAddForm').on('submit', function(e) {
    $.Dialog.close();
    e.preventDefault(); // avoids calling preview.php
   
    $(".formcontainer").fadeOut();
   
    $('.loadingpagecontainer').show();
    $(this).ajaxSubmit(options2);
    

    return false;
});

})();
</script>