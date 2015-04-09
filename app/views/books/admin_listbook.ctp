<div class="pagecontent">
  <h2 class="header">MODUL BUKU</h2>
  <h4 class="subheader">LIST BUKU</h4>
<div id="a" class="book imageNavinside">&nbsp;</div>

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
          <th>ID</th>
          <th class="largest-row"><a href="#">Judul</a></th>
          <th><a href="#">Kategori</a></th>
          <th><a href="#">Penerbit</a></th>
          <th><a href="#">Pengarang</a></th>
          <th><a href="#">Dipinjam</a></th>
          <th><a href="#">Rusak</a></th>
          <th><a href="#">Tersedia</a></th>
          <th><a href="#">Letak</a></th>
          <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="booktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbook as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="book_record_<?php echo $entry['Book']['id']?>">

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
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('BookFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="printview opennewtab" href="<?php echo $this->webroot;?>admin/books/barcode/<?php echo $entry['Book']['id']?>" ><i class="icon-barcode on-right"></i> Print barcode</a>

            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/books/delete/<?php echo $entry['Book']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>


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
echo $this->renderElement('paginate',array('data_scope' => 'ebookscope','data_background'=>'#c53437')); 
}
?>


<script type="text/javascript">
          

$(document).ready(function() { 

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




</script>

</div>

<?php 

echo $this->renderElement('menu_tabs_footer'); 

?>





