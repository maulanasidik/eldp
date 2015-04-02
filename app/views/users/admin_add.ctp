<?php echo $form->create('User',array('enctype'=>'multipart/form-data'));?>
<fieldset>

    <div style="float:left;width:350px;margin-right:40px;">
        
        <label>Username</label>
        <small>Dibutuhkan hanya untuk administrator, dan penjaga perpus</small>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('username',array('div'=>false,'label'=>false));
            ?>
        </div>


        <label>Password</label>
        <small>Dibutuhkan hanya untuk administrator, dan penjaga perpus</small>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('password',array('div'=>false,'label'=>false));
            ?>
        </div>
        
        
        <label>E-mail</label>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('email',array('div'=>false,'label'=>false));
            ?>
        </div>   

        <label>Telepon</label>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('telpon',array('div'=>false,'label'=>false));
            ?>
        </div>

        <label>Pilih Foto Profile</label>
        <?php
        echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
        ?>
        

    </div>

    <div style="float:left;width:350px;">

        <label>Nama</label>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('name',array('div'=>false,'label'=>false));
            ?>
        </div>

        <label>Lahir</label>
        <div class="input-control text" data-role="input-control">
            <?php
            echo $form->input('lahir',array('div'=>false,'label'=>false));
            ?>
        </div>

        <label>Alamat</label>
        <div class="input-control textarea" data-role="input-control">
            <?php
            echo $form->input('alamat',array('div'=>false,'label'=>false));
            ?>
        </div>

        <label>Group</label>
        <div class="input-control text" data-role="input-control">
            <?php
            
            echo $form->select("group_id", $groupselect, null, false);

            ?>
        </div>

        
    </div>
        
          

    <div style="clear:both;float:none;margin-bottom:30px;"/>
    <div class="submit">
        <button class="btn btn-2 btn-2g" type="submit">Submit</button>
    </div>


</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">



(function() {
    
function showResponse(responseText, statusText, xhr, $form)  { 

    setTimeout(function() {
        $('.loadingpagecontainer').hide();

        if(statusText=='success'){
          alert("berhasil menambah Member baru");  
        }else{
          alert("tidak berhasil menambah Member, silahkan coba kembali");  
        }
        $("#UserAddForm").clearForm();
        $(".formcontainer").show();
        $('#usertable').prepend(responseText);
        
    }, 2000);
        
    
} 

var options2 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse  // post-submit callback
};

// bind form2 using ajaxSubmit
$('#UserAddForm').on('submit', function(e) {
    $.Dialog.close();
    e.preventDefault(); // avoids calling preview.php
   
    $(".formcontainer").fadeOut();
   
    $('.loadingpagecontainer').show();
    $(this).ajaxSubmit(options2);
    

    return false;
});

})();
</script>