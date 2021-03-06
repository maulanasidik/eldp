
<div class="pagecontent">
  <h2 class="header">LOKASI</h2>
<div id="a" class="Location imageNavinside">&nbsp;</div>

<div class="mask1 contenareaajax">
  <div class="transp actions">
   <table class="tables hovered" cellpadding="0" cellspacing="0">
      
      <thead>
        <tr class="title_table">
          <th>Id</th>
          <th>Lokasi</th>
          <th>Keterangan</th>
          <th>Dibuat</th>
          <th>Diubah</th>
          <th class="actions">Aksi</th>
        </tr>
      </thead>

      <tbody id="locationtable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listlocation as $location) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $location['Location']['id'];?>">
          <td><?php echo $location['Location']['id']?></td>
          <td><?php echo $location['Location']['lokasi']?></td>
          <td><?php echo $location['Location']['keterangan']?></td>
          <td><?php echo $location['Location']['created']?></td>
          <td><?php echo $location['Location']['modified']?></td>


          <td class="actions">
            
            <a class="gotolinkanchor" data-title="Edit Location" data-width="400px" data-height="300" data-url="<?php echo $this->webroot;?>admin/locations/edit/<?php echo $location['Location']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/locations/delete/<?php echo $location['Location']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
          </td>
        </tr>

        <script type="text/javascript">
          

        $(document).ready(function() { 
            var options2 = {
              success:       showResponse  // post-submit callback
            };
         
            $( "#do_fav_<?php echo $entry['Location']['id']?>" ).click(function() {
              $.Dialog.close();
              
             
              $(".formcontainer").fadeOut();
             
              $('.loadingpagecontainer').show();
              $('#form_do_fav_<?php echo $entry['Location']['id'];?>').ajaxSubmit(options2); 
              

              return false;
            });
        }); 
        
        function showResponse(responseText, statusText, xhr, $form)  { 
          setTimeout(function() {
            $('.loadingpagecontainer').hide();
            $(".formcontainer").show();
            $('#entry_record_<?php echo $entry['Location']['id']?>').html(responseText);
          }, 2000);
        }
        
        </script>
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
</div>

<?php 

echo $this->renderElement('menu_tabs_footer'); 

?>
