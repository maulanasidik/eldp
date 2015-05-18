<?php if($this->action != 'admin_search'):?>
<div class="pagecontent">
  <h2 class="header">MODUL Ebook</h2>
  <h4 class="subheader">LIST BUKU</h4>
<div id="a" class="Ebook imageNavinside">&nbsp;
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

<?php if($this->action != 'admin_search'):?> 
<div class="mask1 contenareaajax">
<?php endif;?><!--This is only show if not search-->

  <div class="transp actions">
    <table class="tables hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
          <th>ID Pustaka</th>
          <th class="largest-row">Judul</th>
          <th>Kategori</th>
          <th>Penerbit</th>
          <th>Pengarang</th>
          <th>Tahun</th>
          <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="ebooktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbuku as $daftarebook) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="ebook_record_<?php echo $daftarebook['Ebook']['id']?>">
          <td><?php echo $daftarebook['Ebook']['id_pustaka']?></td>
          <td><?php echo $daftarebook['Ebook']['title']?></td>
          <td><?php echo $daftarebook['Category']['name']?></td>
          <td><?php echo $daftarebook['Ebook']['penerbit']?></td>
          <td><?php echo $daftarebook['Ebook']['pengarang']?></td>
          <td><?php echo $daftarebook['Ebook']['tahun']?></td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="View Ebook" data-width="550px" data-height="300px" data-url="<?php echo $this->webroot;?>admin/ebooks/view/<?php echo $daftarebook['Ebook']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>
            

            <a class="gotolinkanchor" data-title="Edit Ebook" data-width="900px" data-height="300px" data-url="<?php echo $this->webroot;?>admin/ebooks/edit/<?php echo $daftarebook['Ebook']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>



            <div>
              <?php echo $form->create('Ebook',array('id'=>'form_do_fav_'.$daftarebook['Ebook']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('EbookFav.id',array('type'=>'hidden','value'=>$daftarebook['Ebook']['id']));
              ?>

              <?php if($daftarebook['Ebook']['favorite'] == 0):?>

                <?php echo $form->input('EbookFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $daftarebook['Ebook']['id'];?>" id="do_fav_<?php echo $daftarebook['Ebook']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('EbookFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $daftarebook['Ebook']['id'];?>" id="do_fav_<?php echo $daftarebook['Ebook']['id']?>" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/ebooks/delete/<?php echo $daftarebook['Ebook']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
          </td>
        </tr>

        
        <?php endforeach;?>
        
      </tbody>
    </table>
    
    
  </div>
<?php if($this->action != 'admin_search'):?> 
</div>
<?php endif;?>

<?php 
if($this->action != 'admin_search'){

echo $this->renderElement('paginate',array('data_scope' => 'ebookscope','data_background'=>'#77234E')); 
}
?> 


<script type="text/javascript">
          

$(document).ready(function() { 

   window.entryid = 0;
    var options_ebookdofav = {

      //beforeSubmit:  showRequest,  // pre-submit callback 
      success:       showResponse_ebookdofav  // post-submit callback
    };

    $( '.nongoldehlo' ).on('click', function(){

      window.entryid = $(this).data('entryid');
      
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#form_do_fav_'+window.entryid).ajaxSubmit(options_ebookdofav);
      //console.log("cetak1" + window.entryid);
      

      
    });
}); 

function showResponse_ebookdofav(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();

    $('tbody#ebooktable #ebook_record_'+window.entryid).html(responseText);
    //console.log("cetak2"+window.entryid);
  }, 2000);
}



</script>


<!--add to search function-->
<?php if(($this->action == 'admin_search')):
?> 
<script>
$('.pageinfo p').text('Ditemukan <?php echo count($listbuku);?> data untuk hasil pencarian "'+window.querysearch+'"');
</script>
<?php endif;?>

<!--add to search function-->

</div>

<?php 
if($this->action != 'admin_search'):

echo $this->renderElement('menu_tabs_footer'); 

endif;

?>


