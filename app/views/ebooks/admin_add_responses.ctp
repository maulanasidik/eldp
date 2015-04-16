
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
              <?php echo $form->create('Ebook',array('idform_do_fav_'.$daftarebook['Ebook']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
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


<script type="text/javascript">
  

$(document).ready(function() { 
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#do_fav_<?php echo $entry['Ebook']['id']?>" ).click(function() {
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $('#form_do_fav_<?php echo $entry['Ebook']['id'];?>').ajaxSubmit(options2); 
      

      return false;
    });
}); 

function showResponse(responseText, statusText, xhr, $form)  { 
          $('.loadingpagecontainer').hide();
          if(statusText=='success'){
            alert("berhasil menjadikan favorite");  
          }else{
            alert("tidak berhasil berhasil menjadikan favorite, silahkan coba kembali");  
          }
          //$("#EbookAdminAddForm").clearForm();
          $(".formcontainer").show();
          $('#ebook_record_<?php echo $entry['Ebook']['id']?>').html('');
          $('#ebook_record_<?php echo $entry['Ebook']['id']?>').html(responseText);
}

</script>