<td><?php echo $entry['Photo']['id_pustaka']?></td>
<td><?php echo $entry['Photo']['title']?></td>
<td><?php echo $entry['Category']['name']?></td>
<td><?php echo $entry['Photo']['penerbit']?></td>
<td><?php echo $entry['Photo']['pengarang']?></td>
<td><?php echo $entry['Photo']['tahun']?></td>

  <td class="actions">
    
    <a class="gotolinkanchor" data-title="View Photo" data-width="500px" data-height="375" data-url="<?php echo $this->webroot;?>admin/photos/view/<?php echo $entry['Photo']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a>

            <a class="gotolinkanchor" data-title="Edit Photo" data-width="500px" data-height="375" data-url="<?php echo $this->webroot;?>admin/photos/edit/<?php echo $entry['Photo']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

            <div>
              <?php echo $form->create('Photo',array('id'=>'photoform_do_fav_'.$entry['Photo']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('PhotoFav.id',array('type'=>'hidden','value'=>$entry['Photo']['id']));
              ?>

              <?php if($entry['Photo']['favorite'] == 0):?>

                <?php echo $form->input('PhotoFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $entry['Photo']['id'];?>" id="do_fav_<?php echo $entry['Photo']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('PhotoFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $entry['Photo']['id'];?>" id="do_fav_<?php echo $entry['Photo']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/photos/delete/<?php echo $entry['Photo']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
  </td>


<script type="text/javascript">
          

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
   window.entryid = 0;
    var options_photodofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_photodofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#photoform_do_fav_'+window.entryid).ajaxSubmit(options_photodofav);
      //console.log("cetak1" + window.entryid);
      

      
    });
}); 

function showResponse_photodofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#phototable #photo_record_'+window.entryid).html(responseText);
    //console.log("cetak2"+window.entryid);
  }, 2000);
}



</script>
