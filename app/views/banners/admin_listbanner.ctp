<div>

  <a class="actions gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/banners/add" data-title="Tambah Banner" data-width="900px" data-height="375px"><i class=" icon-plus on-right" href="#"></i> Tambah Banner</a>

</div>

<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('header_paginate'); 
}
?> 
<div class="mask1">
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
          
          <th class="largest-row" style="color:#fff;">ID</th>
          <th style="color:#fff;">Banner</th>
          <th style="color:#fff;">Judul</th>
          <th style="color:#fff;">Aktif</th>
          <th style="color:#fff;">Didaftarkan</th>
          <th class="actions" style="color:#fff;">Actions</th>
        </tr>
      </thead>
      <tbody id="bannertable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbanner as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="banner_record_<?php echo $entry['Banner']['id']?>">

          <td style="color:black"><?php echo $entry['Banner']['id_pustaka']?></td>
          <td><img src="<?php echo $this->webroot.$entry['Banner']['file']?>"/ width="50"></td>
          <td style="color:black"><?php echo $entry['Banner']['title']?></td>
          <td style="color:black"><?php $aktif = $entry['Banner']['active'];
          if($aktif  == 1){
            echo 'Aktif';
          }else{
            echo "Tidak Aktif";
          }
          ?>

          </td>
          <td style="color:black"><?php echo $entry['Banner']['created']?></td>
          
          
          <td class="actions">


            <a class="gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/banners/view/<?php echo $entry['Banner']['id'] ?>" data-title="Lihat Pengadaan Buku" data-width="900px" data-height="375px"><i class=" icon-new-tab on-right" href="#"></i> Lihat</a>

            
            
            <a class="gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/banners/edit/<?php echo $entry['Banner']['id'] ?>" data-title="Edit Pengadaan Buku" data-width="900px" data-height="375px"><i class=" icon-pencil on-right" href="#"></i> Edit</a>

            

            <a class="deleteitemtable" href="<?php echo $this->webroot;?>admin/banners/delete/<?php echo $entry['Banner']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>




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
echo $this->renderElement('paginate',array('data_scope' => 'bannerscope','data_background'=>'#c53437')); 
}
?>



<script type="text/javascript">
          

$(document).ready(function() { 
  $(".gotolinkondialog").on('click', function(){
        $.Dialog.close();
        //$('.loadingpagecontainer').show();
        console.log('clicked');
        var thisurl = $(this).data('url');
        var titlePage = $(this).data('title');

        var Datawidth = $(this).data('width');
        var Dataheight = $(this).data('height');


        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: thisurl, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            showdialogondialog(data,titlePage,Datawidth,Dataheight);
          } // success
        }); // ajax

  });

  function showdialogondialog(datashow,titlePage,Datawidth,Dataheight){

      //$('.loadingpagecontainer').hide();
      
      $.Dialog({
          overlay: true,
          draggable:true,
          shadow: true,
          flat: false,
          width:Datawidth,
          height:Dataheight,
          padding: 10,
          icon: '<span class="icon icon-book"></span>',
          title: titlePage,
          shadow: true,
          onShow: function(_dialog){
              var content = datashow;
            $.Dialog.content(content);
            $('.window-overlay .shadow').css('overflow','scroll');
            $('.window-overlay .shadow').css('maxHeight','600px');
              
          }
      });
    }



  $( '.contentinsideframe' ).on( "click", "a.deleteitemtable", function(e) {

      e.preventDefault(); // avoids calling preview.php
      if(confirm('Apakah anda yakin akan menghapus item ini ?')){
          //$.fancybox.showLoading();

          var clickedItem = $(this);
          $('.loadingpagecontainer').show();
          
          $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
            url: this.href, // preview.php
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              console.log(data);
              
              // on success, post (preview) returned data in fancybox
              if(data.status == "true"){

                  //clickedItem.parents('tr').removeClass('details-open');
                  
                clickedItem.parents('tr').fadeOut('slow',function(){
                    $('.loadingpagecontainer').hide();
                    clickedItem.parents('tr').remove();
                    alert(data.flashMessage);
                });
              }else{

              }
            } // success
          }); // ajax

      }else{
          //alert('Batal menghapus')
      }
    }); // on
    

    $(".opennewtab").click(function() {
      var productLink = $(this);

      productLink.attr("target", "_blank");
      window.open(productLink.attr("href"));

      return false;
    });
   
}); 





</script>