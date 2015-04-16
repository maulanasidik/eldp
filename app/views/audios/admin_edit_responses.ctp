<td><?php echo $entry['Audio']['id_pustaka']?></td>
<td><?php echo $entry['Audio']['title']?></td>
<td><?php echo $entry['Category']['name']?></td>
<td><?php echo $entry['Audio']['sutradara']?></td>
<td><?php echo $entry['Audio']['produksi']?></td>
<td><?php echo $entry['Audio']['tahun']?></td>

  <td class="actions">
    <a class="gotolinkanchor" data-title="View Audio" data-width="500px" data-height="200" data-url="<?php echo $this->webroot;?>admin/audios/view/<?php echo $entry['Audio']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a>

    <a class="gotolinkanchor" data-title="Edit Audio" data-width="700px" data-height="375" data-url="<?php echo $this->webroot;?>admin/audios/edit/<?php echo $entry['Audio']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

    <div>
      <?php echo $form->create('Audio',array('id'=>'audioform_do_fav_'.$entry['Audio']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
        echo $form->input('AudioFav.id',array('type'=>'hidden','value'=>$entry['Audio']['id']));
      ?>

      <?php if($entry['Audio']['favorite'] == 0):?>

        <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>1));?>
        <a data-entryid="<?php echo $entry['Audio']['id'];?>" id="do_fav_<?php echo $entry['Audio']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
      <?php else:?>
        <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>0));?>
        <a data-entryid="<?php echo $entry['Audio']['id'];?>" id="do_fav_<?php echo $entry['Audio']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
      <?php endif;?>
      <?php echo $form->end();?>

    </div>

    <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/audios/delete/<?php echo $entry['Audio']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
  </td>


<script type="text/javascript">
          

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
   window.entryid = 0;
    var options_audiodofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_audiodofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#audioform_do_fav_'+window.entryid).ajaxSubmit(options_audiodofav);
      //console.log("cetak1" + window.entryid);
      

      
    });
}); 

function showResponse_audiodofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#audiotable #audio_record_'+window.entryid).html(responseText);
    //console.log("cetak2"+window.entryid);
  }, 2000);
}

//ADD FUNCTION AFTER RESPONSES

$( 'a.gotolinkanchor' ).on( 'click', function () {

  $('.loadingpagecontainer').show();
  console.log('clicked');

  var thisurl = $(this).data('url');
  var titlePage = $(this).data('title');

  var Datawidth = $(this).data('width');
  var Dataheight = $(this).data('height');

  console.log(thisurl);
  $.ajax({
    type: "GET",
    dataType: "html",
    cache: false,
    url: thisurl, // preview.php
    //data: $("#postp").serializeArray(), // all form fields
    success: function (data) {
      
      showdialog(data,titlePage,Datawidth,Dataheight);
    } // success
  }); // ajax

}); // gotolink function




$( '.deleteitemtable' ).on( "click", function(e) {

  e.preventDefault(); // avoids calling preview.php
  
  if(confirm('Apakah anda yakin akan menghapus item ini ?')){
      //$.fancybox.showLoading();

      var clickedItem = $(this);
      $('.loadingpagecontainer').show();
      
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: $(this).data('url'), // preview.php
        //data: $("#postp").serializeArray(), // all form fields
        success: function (data) {
          console.log(data);
          
          // on success, post (preview) returned data in fancybox
          if(data.status == "true"){

              //clickedItem.parents('tr').removeClass('details-open');
              
            clickedItem.parents('tr').fadeOut('slow',function(){
                $('.loadingpagecontainer').hide();
                clickedItem.parents('tr').remove();
                alert(data.flashMessage);
            });
          }else{

          }
        } // success
      }); // ajax

  }else{
      //alert('Batal menghapus')
  }
}); // on

//END FUNCTION AFTER RESPONSES



</script>
