
<div class="pagecontent">
  <h2 class="header">KOMENTAR</h2>
<div id="a" class="comments imageNavinside">&nbsp;</div>

<div class="mask1 contenareaajax">
  <div class="transp actions">
   <table class="tables hovered" cellpadding="0" cellspacing="0">
      
      <thead>
        <tr class="title_table">

          <th><a href="/elips/comments/index/page:1/sort:id/direction:asc">Id</a></th>                        
          <th><a href="/elips/comments/index/page:1/sort:username/direction:asc">Member</a></th>
          <th><a href="/elips/comments/index/page:1/sort:nama/direction:asc">Comment</a></th>
          <!--<th><a href="/elips/comments/index/page:1/sort:lahir/direction:asc">Status</a></th>-->
          <th><a href="/elips/comments/index/page:1/sort:lahir/direction:asc">Created</a></th>
          <th class="actions">Actions</th>
        </tr>
      </thead>

      <tbody id="locationtable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listcomment as $com) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $com['Comment']['id'];?>">
            <td><?php echo $com['Comment']['id'] ?></td>
            <td><?php echo $com['User']['name']?></td>
            <td><?php echo $com['Comment']['content'] ?></td>
            <!--<td><?php echo $com['Comment']['status'] ?></td>--> 
            <td><?php echo $com['Comment']['created'] ?></td>
          <td class="actions">
            
            <!--a class="gotolinkanchor" data-title="View Comment" data-width="500px" data-height="375" href="<?php echo $this->webroot;?>admin/comments/view/<?php echo $com['Comment']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a-->

            <!--<a class="gotolinkanchor" data-title="Setujui Comment" data-width="500px" data-height="375" href="<?php echo $this->webroot;?>admin/comments/confirm/<?php echo $com['Comment']['id'] ?>"><i class=" icon-thumbs-up on-right"></i> Setujui</a>-->
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/comments/delete/<?php echo $com['Comment']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
          </td>
        </tr>

        <script type="text/javascript">
          

        $(document).ready(function() { 
            var options2 = {
              success:       showResponse  // post-submit callback
            };
         
            $( "#do_fav_<?php echo $entry['Comment']['id']?>" ).click(function() {
              $.Dialog.close();
              
             
              $(".formcontainer").fadeOut();
             
              $('.loadingpagecontainer').show();
              $('#form_do_fav_<?php echo $entry['Comment']['id'];?>').ajaxSubmit(options2); 
              

              return false;
            });
        }); 
        
        function showResponse(responseText, statusText, xhr, $form)  { 
          setTimeout(function() {
            $('.loadingpagecontainer').hide();
            $(".formcontainer").show();
            $('#entry_record_<?php echo $entry['Comment']['id']?>').html(responseText);
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