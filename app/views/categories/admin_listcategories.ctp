<style type="text/css">
.actions{
  color: #fff;
}
</style>

<div class="pagecontent">
  <h2 class="header">CATEGORY</h2>
<div id="a" class="Category imageNavinside">&nbsp;</div>

<div class="mask1 contenareaajax">
  <div class="transp actions">
   <table class="tables hovered" cellpadding="0" cellspacing="0">
      
      <thead>
        <tr class="title_table">
          <th>Id</th>
          <th class="largest-row">Kategori</th>
          <?php if($tipe == 1):?>
          <th>Lama Peminjaman</th>
          <th>Denda Terlambat</th>
          <th>DDC</th>
          <th><Lokasi</th>
          <?php endif;?>
          <th>Keterangan</th>
          <th>Dibuat</th>
          <th>Diubah</th>
          <th class="actions">Aksi</th>
        </tr>
      </thead>
      <tbody id="categorytable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listcategory as $category) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $category['Category']['id'];?>">
          <td><?php echo $category['Category']['id']?></td>
          <td><?php echo $category['Category']['name']?></td>
          <?php if($tipe == 1):?>
          <td><?php echo $category['Category']['lama_peminjaman']?></td>
          <td><?php echo $category['Category']['denda_terlambat']?></td>
          <td><?php echo $category['Ddc']['keterangan']?></td>
          <td><?php echo $category['Location']['lokasi']?></td>
          <?php endif;?>
          <td><?php echo $category['Category']['keterangan']?></td>
          <td><?php echo $category['Category']['created']?></td>
          <td><?php echo $category['Category']['modified']?></td>


          <td class="actions">
            <!--a href="<?php echo $this->webroot;?>categories/view/<?php echo $category['Category']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a-->
            <a class="gotolinkanchor" data-title="Edit Category" data-width="785px" data-height="400px" data-url="<?php echo $this->webroot;?>admin/categories/edit/<?php echo $category['Category']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/categories/delete/<?php echo $category['Category']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
          </td>
        </tr>

        <script type="text/javascript">
          

        $(document).ready(function() { 
            var options2 = {
              success:       showResponse  // post-submit callback
            };
         
            $( "#do_fav_<?php echo $entry['Category']['id']?>" ).click(function() {
              $.Dialog.close();
              
             
              $(".formcontainer").fadeOut();
             
              $('.loadingpagecontainer').show();
              $('#form_do_fav_<?php echo $entry['Category']['id'];?>').ajaxSubmit(options2); 
              

              return false;
            });
        }); 
        
        function showResponse(responseText, statusText, xhr, $form)  { 
          setTimeout(function() {
            $('.loadingpagecontainer').hide();
            $(".formcontainer").show();
            $('#entry_record_<?php echo $entry['Category']['id']?>').html(responseText);
          }, 2000);
        }
        
        </script>
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    
  </div>
</div>

<?php 

echo $this->renderElement('menu_tabs_footer'); 

?>
