<td><?php echo $entry['Notification']['id']?></td>
<td><?php echo $entry['Notification']['title']?></td>
<td><?php echo $entry['Notification']['content']?></td>
<td><?php $notifcetak = $entry['Notification']['active'];
if($notifcetak  == 1){
  echo 'Aktif';
}else{
  echo "Tidak Aktif";
}
?>

</td>
<td><?php echo $entry['Notification']['publish_date']?></td>
<td><?php echo $entry['Notification']['expiration_date']?></td>


<td class="actions">
    
    <a class="gotolinkanchor" data-title="View Notification" data-width="350px" data-height="375" data-url="<?php echo $this->webroot;?>admin/notifications/view/<?php echo $entry['Notification']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a>

    <a class="gotolinkanchor" data-title="Edit Notification" data-width="500px" data-height="375" data-url="<?php echo $this->webroot;?>admin/notifications/edit/<?php echo $entry['Notification']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>
    
    <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/notifications/delete/<?php echo $entry['Notification']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
  </td>


<script type="text/javascript">
          

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#do_fav_<?php echo $entry['Notification']['id']?>" ).click(function() {
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#form_do_fav_<?php echo $entry['Notification']['id'];?>').ajaxSubmit(options2); 
      

      return false;
    });
}); 

function showResponse(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();
    $('#entry_record_<?php echo $entry['Notification']['id']?>').html(responseText);
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
