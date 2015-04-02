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
#PhotoAddForm{
    overflow: scroll;
}
</style>
<?php echo $form->create('Photo',array('enctype'=>'multipart/form-data'));?>
<fieldset>

            
            <?php
            echo $form->input('id_pustaka',array('type'=>'hidden','div'=>false,'label'=>false,'value'=>$lastidtoinsert_id2));
            ?>

            <?php
            echo $form->input('cover',array('type'=>'hidden','div'=>false,'label'=>false,'id'=>'photocoverfield'));
            ?>
              
            

            <label>Judul</label>

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

            <label>Pengarang</label>

            <div class="input-control text" data-role="input-control">
              <?php
                echo $form->input('pengarang',array('div'=>false,'label'=>false));
              ?>
              
            </div>

            <label>Tahun</label>
            <div class="input-control text" data-role="input-control">
                
                <?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
                <?php //echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));   ?>
            </div>

            <div class="input-control text" data-role="input-control" style="height:auto;">
                <div class="uploadcontainer default">
                </div>

            </div>
        

        
        <?php
        echo $form->input('mediafiles', array('label'=>false, 'type'=>'file','style'=>'visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;'));
        ?>

        <?php
        echo $form->input('file',array('type'=>'hidden','id'=>'lesson_filename_tosave'));
        ?>

        <?php
        echo $form->input('file_type',array('type'=>'hidden','id'=>'lesson_filetype_tosave'));
        ?>

        <?php
        echo $form->input('file_extension',array('type'=>'hidden','id'=>'lesson_fileextension_tosave'));
        ?>

    <div style="clear:both;float:none;margin-bottom:30px;"/>
    <div class="submit">
        <button class="btn btn-2 btn-2g" type="submit">Submit</button>
    </div>


</fieldset>


<?php echo $form->end();?>



<script type="text/javascript">



(function() {

window.dropzoneElement = '<div id="uploadarea" class="uploadarea"><span>Tarik dan taruh foto ke area ini<br/></span><br/><img src="<?php echo $this->webroot;?>images/drop.png"/></div><div class="posterpreview  dropzone-previews"></div>';

$('.uploadcontainer').append(window.dropzoneElement);

window.count = 0;
window.countsuccess = 0;
var myDropzone = new Dropzone("#uploadarea", { 
      paramName: "data[Photo][mediafiles]", // The name that will be used to transfer the file
      url: "<?php echo $this->webroot;?>admin/photos/uploadfiles/",
      
      previewsContainer: ".posterpreview",
      addRemoveLinks:true,
      acceptedFiles: 'image/*',
      dictRemoveFile: 'Buang File',
      dictInvalidFileType: 'Anda tidak diizinkan mengupload file tipe ini, file yang diizinkan hanya gambar',
      

  
    init: function() {


        

        this.on("addedfile", function(file,data) { 
          
          
        });

        this.on("sending", function(file, xhr, formData) {
            
            
            formData.append("data[Photo][lessonId]", '<?php echo $lastidtoinsert_id2;?>'); // Will send the filesize along with the file as POST data.
            formData.append("data[Photo][name]", file.name); // Will send the 
            formData.append("data[Photo][countfile]", window.count); // Will send the filesize along with the file as POST data.
        });

        this.on("success", function(file,data) { 
            
            window.count ++;
            window.countsuccess ++;

            console.log('count'+ window.count);
            console.log('countsukses'+ countsuccess);
            
            $('.uploadcontainer').append('<input id="filename_fotoupload'+window.countsuccess+'" type="hidden" value="'+data.file_name+'">');

            $('.uploadcontainer').append('<input id="folder_fotoupload'+window.countsuccess+'" type="hidden" value="'+data.idfolder+'">');

            $('.uploadcontainer').append('<input id="photo_fotoupload'+window.countsuccess+'" type="hidden" value="'+data.id_photo+'">');

            $('#photocoverfield').val('files/photos/'+data.idfolder+'/'+data.file_name);
            

            var previewelement = file.previewElement;

            $(previewelement).prop('id', 'fotoupload'+window.countsuccess);
            //$('.dz-remove').attr('id','fotoupload'+window.countsuccess);

            $('.dz-remove').on('click',function(){

                var idremove = $(this).parent().attr('id');
                
                console.log(idremove);

                var filename_todelete =  $('.uploadcontainer #filename_'+idremove).val();
                var folder_id_todelete = $('.uploadcontainer #folder_'+idremove).val();
                var id_photo_todelete = $('.uploadcontainer #photo_'+idremove).val();
                
                var urldelete  = '<?php echo $this->webroot;?>admin/photos/deletefiles?folder_id='+folder_id_todelete+'&filename='+filename_todelete+'&countfile='+window.count+'&id_photo='+id_photo_todelete;

                console.log(urldelete);

                $.ajax({
                    type: "POST",
                    dataType: "html",
                    cache: false,
                    url: urldelete,
                    //data: $("#postp").serializeArray(), // all form fields
                    success: function (data) {
                      
                    } // success
                }); // ajax*/
            });

          
        });

        this.on("error", function(file,data) {
            window.count ++;
        });

        


        this.on("removedfile", function(file,data) {
            
            window.count --;
            console.log('count'+ window.count);
          
          
        });
    }
});


function showResponse(responseText, statusText, xhr, $form)  { 

    setTimeout(function() {
        $('.loadingpagecontainer').hide();

        if(statusText=='success'){
          alert("berhasil menambah Photo baru");  
        }else{
          alert("tidak berhasil menambah Photo, silahkan coba kembali");  
        }
        $("#PhotoAddForm").clearForm();
        $(".formcontainer").show();
        $('#phototable').prepend(responseText);
        
    }, 2000);
        
    
} 

var options2 = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse  // post-submit callback
};

// bind form2 using ajaxSubmit
$('#PhotoAddForm').on('submit', function(e) {
    $.Dialog.close();
    e.preventDefault(); // avoids calling preview.php
   
    $(".formcontainer").fadeOut();
   
    $('.loadingpagecontainer').show();
    $(this).ajaxSubmit(options2);
    

    return false;
});

})();
</script>