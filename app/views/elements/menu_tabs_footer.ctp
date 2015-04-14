<div class="tabs tabs-style-iconbox">
  
  <nav>
    <ul>
      <li>
        <a href="#" class="logoel2"><span class="logoelinside">Elibrary</span></a>
      </li>
      
      <?php if ($this->params['controller'] == 'books'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/books/add" data-title="Tambah Buku" data-width="900px" data-height="375px" ><span>Tambah Buku</span></a>]
      </li>


      <?php if ($actionActive =='listbook'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/books/listbook" class="icon icon-list2"><span>List Buku</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/books/showfavorite" class="icon icon-star-full"><span>Buku Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/books/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/books/barcode_all" class="printview opennewtab icon icon-barcode"><span>Cetak Barcode</span></a>
      </li>
      <?php endif;?>

      <?php if ($this->params['controller'] == 'ebooks'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/ebooks/add" data-title="Tambah Ebook" data-width="900px" data-height="500px" ><span>Tambah Ebook</span></a>]
      </li>


      <?php if ($actionActive =='listebook'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/ebooks/listebook" class="icon icon-list2"><span>List Ebook</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/ebooks/showfavorite" class="icon icon-star-full"><span>Ebook Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/ebooks/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'videos'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/videos/add" data-title="Tambah Video" data-width="900px" data-height="375px" ><span>Tambah Video</span></a>]
      </li>


      <?php if ($actionActive =='listvideo'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/videos/listvideo" class="icon icon-list2"><span>List Video</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/videos/showfavorite" class="icon icon-star-full"><span>Video Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/videos/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'audios'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/audios/add" data-title="Tambah Audio" data-width="750px" data-height="375px" ><span>Tambah Audio</span></a>]
      </li>


      <?php if ($actionActive =='listaudio'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/audios/listaudios" class="icon icon-list2"><span>List Audio</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/audios/showfavorite" class="icon icon-star-full"><span>Audio Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/audios/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'categories'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/categories/add" data-title="Tambah Kategori" data-width="900px" data-height="375px" >
          <span style="margin-left: -17px;">Tambah Kategori</span></a>]
      </li>


      <?php if ($actionActive =='listcategory' && $tipe == 1):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/1" class="icon icon-list2"><span style="margin-left: -4px;">Kategori Buku</span></a>
      </li>

      <?php if ($actionActive == 'listcategory' && $tipe == 2):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/2" class="icon icon-list2"><span style="margin-left: -5px;">Kategori Ebook</span></a>
      </li>

      <?php if ($actionActive == 'listcategory' && $tipe == 3):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/3" class="icon icon-list2"><span>Kategori Video</span></a>
      </li>

      <?php if ($actionActive == 'listcategory' && $tipe == 4):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/4" class="icon icon-list2"><span style="margin-left: -2px;">Kategori Audio</span></a>
      </li>

      <?php if ($actionActive == 'listcategory' && $tipe == 5):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/5" class="icon icon-list2"><span style="margin-left: 1px;">Kategori Photo</span></a>
      </li>

      <?php if ($actionActive == 'listcategory' && $tipe == 6):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/6" class="icon icon-list2"><span style="margin-left: -30px;">Kategori CD Pembelajaran</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'users'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/users/add" data-title="Tambah Member" data-width="900px" data-height="375px" ><span>Tambah Member</span></a>]
      </li>


      <?php if ($actionActive =='listuser'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/users/listmembers" class="icon icon-list2"><span>List Member</span></a>
      </li>

      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>

      <li>
        <a href="<?php echo $this->webroot;?>admin/users/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <li>
        <a href="<?php echo $this->webroot;?>admin/users/barcode_all" class="printview opennewtab icon icon-barcode"><span>Cetak Barcode</span></a>
      </li>
      
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'photos'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/photos/add" data-title="Tambah Foto" data-width="900px" data-height="375px" ><span>Tambah Foto</span></a>]
      </li>


      <?php if ($actionActive =='listphoto'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/photos/listphotos" class="icon icon-list2"><span>List Foto</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/photos/showfavorite" class="icon icon-star-full"><span>Foto Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/photos/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'subjects'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/subjects/add" data-title="Tambah Pustaka Multimedia" data-width="900px" data-height="375px" ><span>Tambah Pustaka Multimedia</span></a>]
      </li>


      <?php if ($actionActive =='entry'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/subjects/listcd" class="icon icon-list2"><span>List Pustaka Multimedia</span></a>
      </li>

      <?php if ($actionActive =='showfavorite'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
      <a href="#!/url=<?php echo $this->webroot;?>admin/subjects/showfavorite" class="icon icon-star-full"><span>Pustaka Multimedia Favorit</span></a>
      </li>


      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      <li>
        <a href="<?php echo $this->webroot;?>admin/subjects/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
      </li>
      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'ddcs'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/ddcs/add" data-title="Tambah DDC" data-width="750px" data-height="375px" ><span>Tambah DDC</span></a>]
      </li>


      <?php if ($actionActive =='listddc'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/ddcs/listddc" class="icon icon-list2"><span>List DDC</span></a>
      </li>

      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'locations'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/locations/add" data-title="Tambah Lokasi" data-width="750px" data-height="375px" ><span>Tambah Lokasi</span></a>]
      </li>


      <?php if ($actionActive =='listlocation'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/locations/listlocations" class="icon icon-list2"><span>List Lokasi</span></a>
      </li>

      
      <?php endif;?>

      <?php if ($this->params['controller'] == 'comments'):?>
      
      <?php if ($actionActive =='listcomment'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/comments/listcomments" class="icon icon-list2"><span>List Komentar</span></a>
      </li>

      <li>
        <a href="section-iconbox-4" class="icon icon-search"><span>Pencarian</span></a>
      </li>
      
      <?php endif;?>



    </ul>
  </nav>
</div>


<div class="searchcontainer metro">
  <?php echo $form->create('Book',array('action'=>'admin_search','enctype'=>'multipart/form-data'));?>
  <fieldset>
    <div class="input-control text" style="width:100%;">
        <input type="text" placeholder="ketikkan pencarian " name="data[Book][keyword]"/>
        <button type="submit" class="btn-search" id="searchbooksubmit"></button>
    </div>
    
  </fieldset>
  <?php echo $form->end();?>
</div>

<script type="text/javascript">


$(document).ready(function() { 
  

  $(".opennewtab").click(function() {
    var productLink = $(this);

    productLink.attr("target", "_blank");
    window.open(productLink.attr("href"));

    return false;
  });


  $(".showdialogwindow").on('click', function(){
    $('.loadingpagecontainer').show();
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
        showdialog(data,titlePage,Datawidth,Dataheight);
      } // success
    }); // ajax*/

  });


  $( 'a.gotolinkanchor' ).on( 'click', function () {

    $('.loadingpagecontainer').show();
    console.log('clicked');

    var thisurl = $(this).data('url');
    var titlePage = $(this).data('title');

    var Datawidth = $(this).data('width');
    var Dataheight = $(this).data('height');

    console.log(thisurl);
    $.ajax({
      type: "GET",
      dataType: "html",
      cache: false,
      url: thisurl, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {
        
        showdialog(data,titlePage,Datawidth,Dataheight);
      } // success
    }); // ajax

  }); // gotolink function

  $( '.tabs-style-iconbox a' ).on( 'click', function () {
    window.titlerecord = $(this).find('span').text();
    
  }); // gotolink function

  $('.pagecontent h4.subheader').text(window.titlerecord);

}); // ready

$( '.deleteitemtable' ).on( "click", function(e) {

  e.preventDefault(); // avoids calling preview.php
  
  if(confirm('Apakah anda yakin akan menghapus item ini ?')){
      //$.fancybox.showLoading();

      var clickedItem = $(this);
      $('.loadingpagecontainer').show();
      
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: $(this).data('url'), // preview.php
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

</script>