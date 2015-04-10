
<div class="pagecontent">
  <h2 class="header">DDC</h2>
<div id="a" class="ddc imageNavinside">&nbsp;</div>

<div class="mask1 contenareaajax">
  <div class="transp actions">
   <table class="tables hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
            <th><a href="/elips/ddcs/index/page:1/sort:id/direction:asc">Id</a></th>
            <th><a href="/elips/ddcs/index/page:1/sort:kode_ddc/direction:desc">Kode Ddc</a></th>
            <th><a href="/elips/ddcs/index/page:1/sort:keterangan/direction:asc">Keterangan</a></th>
            <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="videotable">

        <?php 
        $no = 0;
        ?>
        <?php foreach ($listddc as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="entry_record_<?php echo $entry['Ddc']['id']?>">
          
          <td><?php echo $entry['Ddc']['id']?></td>
          <td><?php echo $entry['Ddc']['kode_ddc']?></td>
          <td><?php echo $entry['Ddc']['keterangan']?></td>
          <td class="actions">
            <!--<a href="<?php echo $this->webroot;?>ddcs/view/<?php echo $entry['Ddc']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a-->
            <a class="gotolinkanchor" data-title="Edit Ddc" data-width="400px" data-height="300px" data-url="<?php echo $this->webroot;?>admin/ddcs/edit/<?php echo $entry['Ddc']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/ddcs/delete/<?php echo $entry['Ddc']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
          </td>
        </tr>

        <script type="text/javascript">
          

        $(document).ready(function() { 
            var options2 = {
              success:       showResponse  // post-submit callback
            };
         
            $( "#do_fav_<?php echo $entry['Ddc']['id']?>" ).click(function() {
              $.Dialog.close();
              
             
              $(".formcontainer").fadeOut();
             
              $('.loadingpagecontainer').show();
              $('#form_do_fav_<?php echo $entry['Ddc']['id'];?>').ajaxSubmit(options2); 
              

              return false;
            });
        }); 
        
        function showResponse(responseText, statusText, xhr, $form)  { 
          setTimeout(function() {
            $('.loadingpagecontainer').hide();
            $(".formcontainer").show();
            $('#entry_record_<?php echo $entry['Ddc']['id']?>').html(responseText);
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

echo $this->renderElement('ddcs_menu_tabs_footer'); 

?>
