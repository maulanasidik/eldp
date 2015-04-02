<td><?php echo $entry['Subject']['id_pustaka']?></td>
<td><img src="<?php echo $this->webroot.$entry['Subject']['cover']?>"/ width="50"></td>
<td><?php echo $entry['Subject']['title']?></td>
<td><?php echo $entry['Category']['name']?></td>
<td><?php echo $entry['Subject']['penerbit']?></td>
<td><?php echo $entry['Subject']['tahun']?></td>

<td class="actions">
  <a class="gotolinkanchor" data-title="View CD" data-width="800px" data-height="500px" href="<?php echo $this->webroot;?>admin/subjects/view/<?php echo $entry['Subject']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>

  <a class="gotolinkanchor" data-title="Edit CD" data-width="900px" data-height="500px" href="<?php echo $this->webroot;?>admin/subjects/edit/<?php echo $entry['Subject']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

  <div>
    <?php echo $form->create('Subject',array('id'=>'form_do_fav_'.$entry['Subject']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
      echo $form->input('CDFav.id',array('type'=>'hidden','value'=>$entry['Subject']['id']));
    ?>

    <?php if($entry['Subject']['favorite'] == 0):?>

      <?php echo $form->input('CDFav.action',array('type'=>'hidden','value'=>1));?>
      <a data-entryid="<?php echo $entry['Subject']['id'];?>" id="do_fav_<?php echo $entry['Subject']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
    <?php else:?>
      <?php echo $form->input('CDFav.action',array('type'=>'hidden','value'=>0));?>
      <a data-entryid="<?php echo $entry['Subject']['id'];?>" id="do_fav_<?php echo $entry['Subject']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
    <?php endif;?>
    <?php echo $form->end();?>

  </div>

  <a class="deleteitemtable" href="<?php echo $this->webroot;?>admin/subjects/delete/<?php echo $entry['Subject']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
</td>


<script type="text/javascript">

         

$(document).ready(function() { 
    alert('<?php echo $flashMessage?>');
   window.entryid = 0;
    var options_cddofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_cddofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#form_do_fav_'+window.entryid).ajaxSubmit(options_cddofav);
      //console.log("cetak1" + window.entryid);
      

      
    });
}); 

function showResponse_cddofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#cdtable #cd_record_'+window.entryid).html(responseText);
    //console.log("cetak2"+window.entryid);
  }, 2000);
}



</script>

