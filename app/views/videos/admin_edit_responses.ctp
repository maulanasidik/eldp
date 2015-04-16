<td><?php echo $entry['Video']['id_buku']?></td>
<td><img src="<?php echo $this->webroot.$entry['Video']['cover']?>"/ width="50"></td>
<td style="text-align:left;"><?php echo $entry['Video']['title']?></td>
<td><?php echo $entry['Category']['name']?></td>
<td><?php echo $entry['Video']['sutradara']?></td>
<td><?php echo $entry['Video']['produksi']?></td>
<td><?php echo $entry['Video']['tahun']?></td>

<td class="actions">
  <a class="gotolinkanchor" data-title="View Video" data-width="500px" data-height="400px" data-url="<?php echo $this->webroot;?>admin/videos/view/<?php echo $entry['Video']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>

  <a class="gotolinkanchor" data-title="Edit Video" data-width="700px" data-height="300px" data-url="<?php echo $this->webroot;?>admin/videos/edit/<?php echo $entry['Video']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

  <div>
              <?php echo $form->create('Video',array('id'=>'form_do_fav_'.$entry['Video']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('VideoFav.id',array('type'=>'hidden','value'=>$entry['Video']['id']));
              ?>

              <?php if($entry['Video']['favorite'] == 0):?>

                <?php echo $form->input('VideoFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $entry['Video']['id'];?>" id="do_fav_<?php echo $entry['Video']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('VideoFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $entry['Video']['id'];?>" id="do_fav_<?php echo $entry['Video']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/videos/delete/<?php echo $entry['Video']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
          </td>


<script type="text/javascript">
          

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
   window.entryid = 0;
    var options_videodofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_videodofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#form_do_fav_'+window.entryid).ajaxSubmit(options_videodofav);
      //console.log("cetak1" + window.entryid);
      

      
    });
}); 

function showResponse_videodofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#videotable #entry_record_'+window.entryid).html(responseText);
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