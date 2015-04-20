<?php if($this->action != 'admin_search'):?>
<div class="pagecontent">
  <h2 class="header">MODUL PENGUMUMAN</h2>
  <h4 class="subheader">LIST PENGUMUMAN AKTIF</h4>
<div id="a" class="book imageNavinside">
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

<?php if($this->action != 'admin_search'):?> 
<div class="mask1 contenareaajax">
<?php endif;?><!--This is only show if not search-->
  <div class="transp actions">
    <table class="tables hovered" cellpadding="0" cellspacing="0">
      <thead>
      <tr class="title_table">
        <th>Id</th>
        <th class="largest-row"><a href="#">Judul</a></th>
        <th><a href="#">Isi</a></th>
        <th><a href="#">Aktif</a></th>
        <th><a href="#">Publish</a></th>
        <th><a href="#">Expired</a></th>
        <th class="actions">Actions</th>
      </tr>
    </thead>

      <tbody id="locationtable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listnotif as $notif) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $notif['Notification']['id'];?>">
          <td><?php echo $notif['Notification']['id']?></td>
          <td><?php echo $notif['Notification']['title']?></td>
          <td><?php echo $notif['Notification']['content']?></td>
          <td><?php $notifcetak = $notif['Notification']['active'];
          if($notifcetak  == 1){
            echo 'Aktif';
          }else{
            echo "Tidak Aktif";
          }
          ?>

          </td>
          <td><?php echo $notif['Notification']['publish_date']?></td>
          <td><?php echo $notif['Notification']['expiration_date']?></td>


          <td class="actions">
            
            <a class="gotolinkanchor" data-title="View Notification" data-width="350px" data-height="375" data-url="<?php echo $this->webroot;?>admin/notifications/view/<?php echo $notif['Notification']['id'] ?>"><i class="  icon-new-tab on-right"></i> Lihat</a>


            <a class="gotolinkanchor" data-title="Edit Notification" data-width="500px" data-height="375" data-url="<?php echo $this->webroot;?>admin/notifications/edit/<?php echo $notif['Notification']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>
            
            <a class="deleteitemtable" data-url="<?php echo $this->webroot;?>admin/notifications/delete/<?php echo $notif['Notification']['id']?>" ><i class="icon-cross on-right"></i> Hapus</a>
            
          </td>
        </tr>

        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div> <!--end div for transp-->
  
<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('paginate',array('data_scope' => 'notificationscope','data_background'=>'#109079')); 
}
?>


<script type="text/javascript">
          

        $(document).ready(function() { 
            var options2 = {
              success:       showResponse  // post-submit callback
            };
         
            $( "#do_fav_<?php echo $notif['Notification']['id']?>" ).click(function() {
              $.Dialog.close();
              
             
              $(".formcontainer").fadeOut();
             
              $('.loadingpagecontainer').show();
              $('#form_do_fav_<?php echo $notif['Notification']['id'];?>').ajaxSubmit(options2); 
              

              return false;
            });
        }); 
        
        function showResponse(responseText, statusText, xhr, $form)  { 
          setTimeout(function() {
            $('.loadingpagecontainer').hide();
            $(".formcontainer").show();
            $('#entry_record_<?php echo $notif['Notification']['id']?>').html(responseText);
          }, 2000);
        }
        
        </script>


<!--add to search function-->
<?php if(($this->action == 'admin_search') || (count($listnotif)!=0)):
?> 
<script>
$('.pageinfo p').text('Ditemukan <?php echo count($listnotif);?> data untuk hasil pencarian "'+window.querysearch+'"');
</script>
<?php endif;?>

<!--add to search function-->



</div>

<?php
if($this->action != 'admin_search'):

echo $this->renderElement('menu_tabs_footer'); 

endif;
?>
