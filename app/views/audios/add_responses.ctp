<tr class="altrow " id="entry_record_<?php echo $audio['Audio']['id'];?>">
  <td><?php echo $audio['Audio']['id_pustaka']?></td>
<td><?php echo $audio['Audio']['title']?></td>
<td><?php echo $audio['Category']['name']?></td>
<td><?php echo $audio['Audio']['sutradara']?></td>
<td><?php echo $audio['Audio']['produksi']?></td>
<td><?php echo $audio['Audio']['tahun']?></td>

  <td class="actions">
    
    <a class="gotolinkanchor" data-title="View Audio" data-width="500px" data-height="200" href="<?php echo $this->webroot;?>admin/audios/view/<?php echo $audio['Audio']['id'];?>"><i class="  icon-new-tab on-right"></i> Lihat</a>

            <a class="gotolinkanchor" data-title="Edit Audio" data-width="500px" data-height="375" href="<?php echo $this->webroot;?>admin/audios/edit/<?php echo $audio['Audio']['id'];?>"><i class=" icon-pencil on-right"></i> Edit</a>

            <div>
              <?php echo $form->create('Audio',array('id'=>'form_do_fav_'.$audio['Audio']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('AudioFav.id',array('type'=>'hidden','value'=>$audio['Audio']['id']));
              ?>

              <?php if($audio['Audio']['favorite'] == 0):?>

                <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $audio['Audio']['id'];?>" id="do_fav_<?php echo $audio['Audio']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $audio['Audio']['id'];?>" id="do_fav_<?php echo $audio['Audio']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>
            
            <a class="deleteitemtable" href="<?php echo $this->webroot;?>admin/audios/delete/<?php echo $audio['Audio']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
  </td>
</tr>

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
      $('#form_do_fav_'+window.entryid).ajaxSubmit(options_audiodofav);
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



</script>
