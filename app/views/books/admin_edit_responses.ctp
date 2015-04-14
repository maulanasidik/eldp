<td><?php echo $entry['Book']['id_buku']?></td>
<td style="text-align:left;"><?php echo $entry['Book']['title']?></td>
<td><?php echo $entry['Category']['name']?></td>
<td><?php echo $entry['Book']['penerbit']?></td>
<td><?php echo $entry['Book']['pengarang']?></td>
<td><?php echo $entry['Book']['onrent']?></td>
<td><?php echo $entry['Book']['jml_rusak']?></td>
<td>
  <?php $available = $entry['Book']['jml_buku']-($entry['Book']['jml_rusak'] + $entry['Book']['onrent']);?>
  <?php echo $available;?>
</td>
<td><?php echo $entry['Category']['Location']['lokasi']; ?></td>

<td class="actions">
  <a class="gotolinkanchor" data-title="View Book" data-width="900px" data-height="600px" data-url="<?php echo $this->webroot;?>admin/books/view/<?php echo $entry['Book']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>
  
  <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" data-url="<?php echo $this->webroot;?>admin/books/edit/<?php echo $entry['Book']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

  <div>
              <?php echo $form->create('Book',array('id'=>'bookform_do_fav_'.$entry['Book']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('BookFav.id',array('type'=>'hidden','value'=>$entry['Book']['id']));
              ?>

              <?php if($entry['Book']['favorite'] == 0):?>

                <?php echo $form->input('BookFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('BookFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="printview opennewtab" href="<?php echo $this->webroot;?>admin/books/barcode/<?php echo $entry['Book']['id']?>" ><i class="icon-barcode on-right"></i> Print barcode</a>

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/books/delete/<?php echo $entry['Book']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
</td>


<script type="text/javascript">
          

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
   window.entryid = 0;
    var options_bookdofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_bookdofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#bookform_do_fav_'+window.entryid).ajaxSubmit(options_bookdofav);
      //console.log("cetak1" + window.entryid);
      

      
    });


}); 

function showResponse_bookdofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#booktable #book_record_'+window.entryid).html(responseText);
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
