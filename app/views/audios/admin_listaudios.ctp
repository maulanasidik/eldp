
<?php if($this->action != 'admin_search'):?>
<div class="pagecontent">
  <h2 class="header">MODUL AUDIO</h2>
  <h4 class="subheader">LIST AUDIO</h4>
<div id="a" class="Audio imageNavinside">
  &nbsp;
  <div class="loadinginsidetitle" style="display:none;">
    <img src="<?php echo $this->webroot;?>img/el2/loading-new.gif"> 
  </div>
</div>

<?php endif;?>


<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('header_paginate'); 
}
?> 
<div class="mask1 contenareaajax">
  <div class="transp actions">
   <table class="tables hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
        <th>Id Pustaka</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Penyanyi</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="audiotable">

        <?php 
        $no = 0;
        ?>
        <?php foreach ($listaudio as $audio) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="audio_record_<?php echo $audio['Audio']['id'];?>">
          <td><?php echo $audio['Audio']['id_pustaka']?></td>
          <td><?php echo $audio['Audio']['title']?></td>
          <td><?php echo $audio['Category']['name']?></td>
          <td><?php echo $audio['Audio']['sutradara']?></td>
          <td><?php echo $audio['Audio']['produksi']?></td>
          <td><?php echo $audio['Audio']['tahun']?></td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="View Audio" data-width="500px" data-height="200" data-url="<?php echo $this->webroot;?>admin/audios/view/<?php echo $audio['Audio']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a>

            <a class="gotolinkanchor" data-title="Edit Audio" data-width="700px" data-height="375" data-url="<?php echo $this->webroot;?>admin/audios/edit/<?php echo $audio['Audio']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

            <div>
              <?php echo $form->create('Audio',array('id'=>'audioform_do_fav_'.$audio['Audio']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('AudioFav.id',array('type'=>'hidden','value'=>$audio['Audio']['id']));
              ?>

              <?php if($audio['Audio']['favorite'] == 0):?>

                <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $audio['Audio']['id'];?>" id="do_fav_<?php echo $audio['Audio']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('AudioFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $audio['Audio']['id'];?>" id="do_fav_<?php echo $audio['Audio']['id']?>"  class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/audios/delete/<?php echo $audio['Audio']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
          </td>
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div>
</div>

<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('paginate',array('data_scope' => 'audioscope','data_background'=>'#A3D046')); 
}
?>


<script type="text/javascript">
          

$(document).ready(function() { 

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



</script>

<!--add to search function-->
<?php if(($this->action == 'admin_search')):
?> 
<script>
$('.pageinfo p').text('Ditemukan <?php echo count($listaudio);?> data untuk hasil pencarian "'+window.querysearch+'"');
</script>
<?php endif;?>

<!--add to search function-->

</div>

<?php
if($this->action != 'admin_search'):

echo $this->renderElement('menu_tabs_footer'); 

endif;
?>