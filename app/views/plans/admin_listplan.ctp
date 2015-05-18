<style type="text/css">
tr.title_table th{
  color: #000;
}
td.actions a,a.actions{
  cursor: pointer;
}
.mask1{
    overflow: scroll;
}
</style>
<script type="text/javascript">
$('.window-overlay .shadow').css('overflow','scroll');
            $('.window-overlay .shadow').css('maxHeight','600px');
</script>

<br/>
<div>


  <a class="actions gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/plans/add" data-title="Tambah Pengadaan Buku" data-width="900px" data-height="375px"><i class=" icon-plus on-right" href="#"></i> Tambah Pengadaan Buku</a>

  <a style="margin-left:20px;" class="printview opennewtab" data-countinside="4" href="<?php echo $this->webroot?>admin/plans/printall"><i class="icon-printer on-right"></i> Cetak Pengadaan Buku</a>

  
</div>

<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('header_paginate'); 
}
?> 

<div class="contentinsideframe">

<div class="mask1">
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
          
          <th style="color:#fff;">ID</th>
          <th class="largest-row" style="color:#fff;">Judul</th>
          <th style="color:#fff;">Kategori</th>
          <th style="color:#fff;">Penerbit</th>
          <th style="color:#fff;">Pengarang</th>
          <th style="color:#fff;">Jumlah Buku</th>
          <th style="color:#fff;">Status</th>
          <th class="actions" style="color:#fff;">Actions</th>
        </tr>
      </thead>
      <tbody id="plantable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listplan as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="plan_record_<?php echo $entry['Plan']['id']?>">

          <td style="color:black"><?php echo $entry['Plan']['id_plan']?></td>
          <td style="color:black"><?php echo $entry['Plan']['title']?></td>
          <td style="color:black"><?php echo $entry['Category']['name']?></td>
          <td style="color:black"><?php echo $entry['Plan']['penerbit']?></td>
          <td style="color:black"><?php echo $entry['Plan']['pengarang']?></td>
          <td style="color:black"><?php echo $entry['Plan']['jml_buku']?></td>
          
          <td style="color:black"><?php $notifcetak = $entry['Plan']['active'];
          
          if($notifcetak  == 1){
            echo 'Terbeli';
          }else{
            echo "Belum Terbeli";
          }
          ?>

          </td>

          <td class="actions">

            <a class="gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/plans/view/<?php echo $entry['Plan']['id'] ?>" data-title="Lihat Pengadaan Buku" data-width="900px" data-height="375px"><i class=" icon-new-tab on-right" href="#"></i> Lihat</a>

            
            
            <a class="gotolinkondialog" data-url="<?php echo $this->webroot;?>admin/plans/edit/<?php echo $entry['Plan']['id'] ?>" data-title="Edit Pengadaan Buku" data-width="900px" data-height="375px"><i class=" icon-pencil on-right" href="#"></i> Edit</a>

            

            <a class="deleteitemtable" href="<?php echo $this->webroot;?>admin/plans/delete/<?php echo $entry['Plan']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>
          </td>
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div>
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