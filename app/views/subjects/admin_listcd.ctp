
<div class="pagecontent">
  <h2 class="header">MODUL PUSTAKA MULTIMEDIA</h2>
<div id="a" class="cd imageNavinside">&nbsp;</div>

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
          <th>ID Pustaka</th>
          <th> Cover</th>
          <th class="largest-row">Judul</th>
          <th>Kategori</th>
          <th>Penerbit</th>
          <th>Tahun</th>
          <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="cdtable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($entry as $entry) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="cd_record_<?php echo $entry['Subject']['id']?>">
          <td><?php echo $entry['Subject']['id_pustaka']?></td>
          <td><img src="<?php echo $this->webroot.$entry['Subject']['cover']?>"/ width="50"></td>
          <td><?php echo $entry['Subject']['title']?></td>
          <td><?php echo $entry['Category']['name']?></td>
          <td><?php echo $entry['Subject']['penerbit']?></td>
          <td><?php echo $entry['Subject']['tahun']?></td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="View CD" data-width="800px" data-height="500px" data-url="<?php echo $this->webroot;?>admin/subjects/view/<?php echo $entry['Subject']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>

            <a class="gotolinkanchor" data-title="Edit CD" data-width="900px" data-height="500px" data-url="<?php echo $this->webroot;?>admin/subjects/edit/<?php echo $entry['Subject']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

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

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/subjects/delete/<?php echo $entry['Subject']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
          </td>
        </tr>

        
        <?php endforeach;?>
        
      </tbody>
    </table>
    
    
  </div>
</div>
<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('paginate',array('data_scope' => 'pusmulscope','data_background'=>'#16d22a')); 
}
?> 


<script type="text/javascript">
          

$(document).ready(function() { 

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

</div>

<?php 

echo $this->renderElement('menu_tabs_footer'); 

?>

