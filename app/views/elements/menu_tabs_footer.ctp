<div class="tabsel tabs-style-iconbox">
  
  <nav>
    <ul>
      <li>
        <a href="#" class="logoel2"><span class="logoelinside">Elibrary</span></a>
      </li>

      <?php if ($this->params['controller'] == 'rents' && $actionActive !='financelist' && $actionActive !='financelist2' && $actionActive !='chart' && $actionActive !='loose' && $actionActive !='chart_loose') :?>
      <li>
        <a class="icon icon-plus " id="addtransaksi"  data-modul="user" data-titlemodul="ID Member" data-desc="Untuk memulai peminjaman, atau pengembalian, silahkan masukkan<br/> ID member, atau scan barcode member." data-width="500px" data-height="375px" >
          <span style="margin-left: -17px;">Tambah Transaksi</span></a>
      </li>

      <?php if ($actionActive =='list'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/rents/list" class="icon icon-list2"><span style="margin-left: -4px;">Peminjaman</span></a>
      </li>

      <?php if ($actionActive =='listback'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/rents/listback" class="icon icon-list2"><span style="margin-left: -4px;">Pengembalian</span></a>
      </li>

      <?php if ($actionActive =='listbooking'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/rents/listbooking" class="icon icon-list2"><span style="margin-left: -4px;">Booking</span></a>
      </li>

      <?php if ($actionActive =='history'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/rents/history2" class="icon icon-list2"><span style="margin-left: -4px;">History Transaksi</span></a>
      </li>
      <?php endif;?>


      <?php if ($this->params['controller'] == 'notifications'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/notifications/add" data-title="Tambah Pengumuman" data-width="500px" data-height="375px" >
          <span style="margin-left: -17px;">Tambah Pengumuman</span></a>]
      </li>


      <?php if ($actionActive =='listnotif'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/notifications/listnotifications" class="icon icon-list2"><span style="margin-left: -4px;">List Pengumuman</span></a>
      </li>

      <?php if ($actionActive =='listnotifications_active'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/notifications/listnotifications_active" class="icon icon-list2"><span style="margin-left: -4px;">Pengumuman Aktif</span></a>
      </li>

      <?php if ($actionActive =='listnotifications_notactive'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/notifications/listnotifications_notactive" class="icon icon-list2"><span style="margin-left: -4px;">Pengumuman Tidak Aktif</span></a>
      </li>

      <?php if ($actionActive =='listnotifications_willactive'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a href="#!/url=<?php echo $this->webroot;?>admin/notifications/listnotifications_willactive" class="icon icon-list2"><span style="margin-left: -4px;">Pengumuman Akan Aktif</span></a>
      </li>
      <?php endif;?>
      
      <?php if($this->params['controller'] == 'books' && $actionActive !='chart_new_book'):?>
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
          <a href="section-iconbox-4" class="icon icon-search" data-modul="book" data-titlemodul="Buku" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
        </li>
        <li>
          <a href="<?php echo $this->webroot;?>admin/books/printall" class="printview opennewtab icon icon-printer"><span>Cetak</span></a>
        </li>
        <li>
          <a href="<?php echo $this->webroot;?>admin/books/barcode_all" class="printview opennewtab icon icon-barcode"><span>Cetak Barcode</span></a>
        </li>
      <?php endif;?>

      <?php if ($this->params['controller'] == 'ebooks' && $actionActive !='ebookcr'):?>
      <li>
        <a class="icon icon-plus showdialogwindow" data-url="<?php echo $this->webroot;?>admin/ebooks/add/2" data-title="Tambah Ebook" data-width="900px" data-height="500px" ><span>Tambah Ebook</span></a>]
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="ebook" data-titlemodul="Ebook" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="video" data-titlemodul="Video" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="audio" data-titlemodul="Audio" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="user" data-titlemodul="Member" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a class="icon icon-plus showdialogwindowspecial" data-url="<?php echo $this->webroot;?>admin/photos/add" data-title="Tambah Foto" data-width="900px" data-height="375px" ><span>Tambah Foto</span></a>]
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="photo" data-titlemodul="Photo" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="subject" data-titlemodul="Subject" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
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
        <a href="section-iconbox-4" class="icon icon-search" data-modul="comment" data-titlemodul="Comment" data-desc="Masukkan query pencarian berdasarkan title, pengarang, penerbit, <br/>atau deskripsi"><span>Pencarian</span></a>
      </li>
      
      <?php endif;?>


      <!--KEUANGAN FOOTER-->
      <?php if (($this->params['controller'] == 'rents') && ( $actionActive =='financelist' || $actionActive =='financelist2') ):?>

        <?php if ($actionActive =='financelist'):?>
        <li class="tab-current">
        <?php else:?>
        <li>
        <?php endif;?>
        <a class="icon icon-stats-dots" href="#!/url=<?php echo $this->webroot;?>admin/rents/financelist"><span>Laporan Keuangan</span></a>
      </li>


      <?php if (($this->params['controller'] == 'rents') && $actionActive =='financelist2'):?>
        <li class="tab-current">
      <?php else:?>
        <li>
      <?php endif;?>
        <a class="icon icon-stats-bars" data-modul="book" id="searchfinance" href="#!/url=<?php echo $this->webroot;?>admin/rents/financelist2"><span>Pencarian Laporan Keuangan</span></a>
      </li>

      
      <?php endif;?>

      <?php if(($this->params['controller'] == 'books' && $actionActive =='chart_new_book') || ($this->params['controller'] == 'rents' && ($actionActive =='chart' || $actionActive =='chart_loose'))):?>

        <?php if ($this->params['controller'] == 'rents' && $actionActive =='chart'):?>
          <li class="tab-current">
        <?php else:?>
          <li>
        <?php endif;?>
        <a class="icon icon-stats-dots" href="#!/url=<?php echo $this->webroot;?>admin/rents/chart"><span>Peminjaman</span></a>
        </li>
        
        <?php if (($this->params['controller'] == 'books') && ($actionActive =='chart_new_book')):?>
          <li class="tab-current">
        <?php else:?>
          <li>
        <?php endif;?>
        <a class="icon icon-stats-dots" href="#!/url=<?php echo $this->webroot;?>admin/books/chart"><span>Buku Baru</span></a>
        </li>


        <?php if ($this->params['controller'] == 'rents' && $actionActive =='chart_loose'):?>
          <li class="tab-current">
        <?php else:?>
          <li>
        <?php endif;?>
        <a class="icon icon-stats-dots" href="#!/url=<?php echo $this->webroot;?>admin/rents/chart_loose"><span>Buku Hilang/Rusak</span></a>
        </li> 

      <?php endif;?>
    </ul>
  </nav>
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


  $(".showdialogwindowspecial").on('click', function(){
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
        showdialogspecial(data,titlePage,Datawidth,Dataheight);
      } // success
    }); // ajax*/

  });




  $("#wrapper").on('click', 'a.gotolinkanchor', function() {

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

  $( '.tabsel-style-iconbox a' ).on( 'click', function () {
    window.titlerecord = $(this).find('span').text();
    
  }); // gotolink function

  $('.pagecontent h4.subheader').text(window.titlerecord);


  //START FOR SEARCH FUNCTION JS i try to make it dynamic

  window.searchcontaineractive =false;
  window.searchpageactive =false;
  window.dataModul;
  window.dataTitleModul;
  window.dataDescModul;
  window.querysearch;
  window.stateonaddtransaction;

  $( '.icon-search' ).on( "click", function(e) {

    e.preventDefault(); // avoids calling preview.php
    window.dataModul = $(this).data('modul');
    window.dataTitleModul = $(this).data('titlemodul');
    window.dataDescModul = $(this).data('desc');
    window.webrooturl = <?php echo $this->webroot;?>;
    window.backgroundImageIcon = $('.imageNavinside').css('background-image');
    $totalitemfound = '<?php echo $totalitemfound?>';

    
    //update all id element on search function
    $('.btn-search').attr('id','search'+window.dataModul+'submit');
    $('.btn-search').attr('id','search'+window.dataModul+'submit');
    $('.formsearch').attr('id',window.dataModul+'adminsearchform');
    $('form.formsearch').attr('action',window.webrooturl+'admin/'+window.dataModul+'s/search');

    $('.searchforminput').attr('name','data['+toTitleCase(window.dataModul)+'][keyword]')
    $('.searchcontainer header h1').text('Pencarian '+window.dataTitleModul);
    $('.searchcontainer header p').html(window.dataDescModul);

    $(this).parent().addClass('tab-current');
    $('.searchcontainer').show(0,function(){
      $('.searchcontainer').css('scale',1),
      $('.clearwhenreload').val('');
      $('.clearwhenreload').focus();
      $('#lightboxOverlay').show();
      $('.searchcontainer').transition({

        opacity: 1,
        top: '50%',
        duration: 200,
        easing: 'in'
      });
      window.searchcontaineractive = true;
    });
    

  }); // on
  
  $(".searchcontainer .btn-search").on('click',function(e) {
      e.preventDefault();
      $('#lightboxOverlay').hide(0,function(){
        $('.searchcontainer').transition({
          opacity: 0,
          top: '30%',
          scale: 0,
          duration: 300,
          easing: 'out',
          complete: function() {
            $('.searchcontainer').hide();
            $('.icon-search').parent().removeClass('tab-current');
            showsearchloading();
            //get last query
            window.querysearch = $('.searchforminput').val();
          }

        });
      });
      return false;
  });

  function showsearchloading(){
    setTimeout(function() {
      $('.imageNavinside').css('background-image', 'none');
      $('.pagecontent h2.header').text('LOADING');
      $('.pagecontent h4').text('Silahkan menunggu..');
      $('.contenareaajax').fadeOut(100);
      $('.pageinfo').fadeOut(100);
      $('.paginationadmin').fadeOut(100);
      
      
      $('.loadinginsidetitle').show(0,function(){

        $('.loadinginsidetitle').transition({
          y:'45px',
          opacity: 1,
          duration: 700,
          easing: 'in',

          complete: function() { 
            $('.searchcontainer .formsearch').ajaxSubmit(options_search);
          }
        })
      });
    }, 200);
    
  }

  var options_search = {
      success:       showResponse_search  // post-submit callback
  };

  function showResponse_search(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.loadinginsidetitle').transition({
          y:'0',
          opacity: 0,
          duration: 400,
          easing: 'out',

          complete: function() { 
            
            $('.pagecontent h2.header').text('Pencarian '+window.dataTitleModul);
            $('.pagecontent h4.subheader').text('Hasil pencarian untuk "'+window.querysearch+'" ');
            setTimeout(function() {

              $('.loadinginsidetitle').hide();
              $('.pageinfo').fadeIn(100);
              
              $('.imageNavinside').css('background-image', window.backgroundImageIcon);
              $('.contenareaajax').fadeIn(100);
              $('.contenareaajax').html(responseText);
              //make tab active is search
              $('.tabsel nav ul li').removeClass('tab-current');
              $('nav ul li .icon-search').parent().addClass('tab-current');
            }, 500);
          }
        });
        
        
      }, 3000);
  }
  //END FOR SEARCH THIS

  $( '#addtransaksi' ).on( "click", function(e) {

    e.preventDefault(); // avoids calling preview.php
    window.dataModul = $(this).data('modul');
    window.dataTitleModul = $(this).data('titlemodul');
    window.dataDescModul = $(this).data('desc');
    window.webrooturl = <?php echo $this->webroot;?>;
    window.backgroundImageIcon = $('.imageNavinside').css('background-image');
    $totalitemfound = '<?php echo $totalitemfound?>';

    
    //update all id element on search function
    $('.searchcontainer_transaksi .btn-search').attr('id','add_user_transaksi');
    $('.searchcontainer_transaksi .formsearch').attr('id','form_add_user_transaksi');
    $('.searchcontainer_transaksi form.formsearch').attr('action',window.webrooturl+'admin/'+window.dataModul+'s/search_home_result');

    $('.searchcontainer_transaksi .searchforminput').attr('name','data['+toTitleCase(window.dataModul)+'][input_id]')
    $('.searchcontainer_transaksi .searchforminput').attr('placeholder','Masukkan ID member disini')
    $('.searchcontainer_transaksi header h1').text(window.dataTitleModul);
    $('.searchcontainer_transaksi header p').html(window.dataDescModul);

    $(this).parent().addClass('tab-current');
    $('.searchcontainer_transaksi').show(0,function(){
      $('.searchcontainer_transaksi').css('scale',1),
      $('.clearwhenreload').val('');
      $('.clearwhenreload').focus();
      $('#lightboxOverlay').show();
      $('.searchcontainer_transaksi').transition({

        opacity: 1,
        top: '50%',
        duration: 200,
        easing: 'in'
      });
      window.searchcontaineractive = true;
      window.stateonaddtransaction = true;
    });
    

  }); // on

  $('.searchcontainer_transaksi').on('click','#add_user_transaksi',function(e){
      e.preventDefault();
      $('.icon-search').parent().removeClass('tab-current');
      showsearchloading_transaksi();
      
      
      return false;

  });

  function showsearchloading_transaksi(){
    setTimeout(function() {
      //$('.imageNavinside').css('background-image', 'none');
      //$('.pagecontent h2.header').text('LOADING');
      //$('.pagecontent h4').text('Silahkan menunggu..');
      //$('.contenareaajax').fadeOut(100);
      //$('.pageinfo').fadeOut(100);
      //$('.paginationadmin').fadeOut(100);
      $('#contentinsidebox').hide();
      $('#loadinginsidebox').fadeIn();
      
      $('#form_add_user_transaksi').ajaxSubmit(options_search_transaksi);
      
    }, 200);
    
  }

  var options_search_transaksi = {
      success:       showResponse_search_transaksi  // post-submit callback
  };

  function showResponse_search_transaksi(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.loadinginsidetitle').transition({
          y:'0',
          opacity: 0,
          duration: 400,
          easing: 'out',

          complete: function() { 
            
            $('.loadinginsidetitle').hide();
            
            
            $('.imageNavinside').css('background-image', window.backgroundImageIcon);
            $('.contenareaajax').fadeIn(100);

            setTimeout(function() {

              var $result = $(responseText).filter('#emptymember');
              var $emptymember = $result.attr("id");
              
              if($emptymember == 'emptymember'){
                alert('ID Member tidak ditemukan, silahkan masukkan kembali ID Member untuk memulai transaksi');
                $('#loadinginsidebox').hide();
                $('#contentinsidebox').fadeIn(100,function(){
                  $('#contentinsidebox .clearwhenreload').val('');
                  $('#contentinsidebox .clearwhenreload').focus();  
                });
                
              }else{
                $('.contenareaajax').html(responseText);
                $('#lightboxOverlay').hide(0,function(){
                  $('.searchcontainer').transition({
                    opacity: 0,
                    top: '30%',
                    scale: 0,
                    duration: 300,
                    easing: 'out',
                    complete: function() {
                      $('.searchcontainer_transaksi').hide();
                      $('#contentinsidebox').show();
                      $('#loadinginsidebox').hide();
                      $('.pagecontent h4.subheader').text('Penambahan Transaksi');
                      $('.pageinfo').hide();
                    }

                  });
                });
                
              }
              //make tab active is search
              $('.tabsel nav ul li').removeClass('tab-current');
              $('nav ul li .icon-search').parent().addClass('tab-current');
            }, 500);
          }
        });
        
        
      }, 3000);
  }
  //END FOR TRANSAKSI THIS

}); // ready


$("#wrapper").on('click', 'a.deleteitemtable', function(e) {

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
              
            clickedItem.parents('tr').fadeOut('slow',function(e){
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



$( '#lightboxOverlay' ).on( "click", function(e) {
  $('.clearwhenreload').val('');

  if((window.stateonaddtransaction == false) && (window.searchcontaineractive == true)){

    $('#lightboxOverlay').hide();
    $('.searchcontainer').transition({
      opacity: 0,
      top: '30%',
      duration: 200,
      easing: 'out',
      complete: function() {
        $('.searchcontainer').hide();
        $('.icon-search').parent().removeClass('tab-current');
      }

    });

    

  }else{

    $('#lightboxOverlay').hide();
    $('.searchcontainer_transaksi').transition({
      opacity: 0,
      top: '30%',
      duration: 200,
      easing: 'out',
      complete: function() {
        $('.searchcontainer_transaksi').hide();
        $('#addtransaksi').parent().removeClass('tab-current');
      }
    });
    window.location.href = "<?php echo $this->webroot;?>admin/users#!/url=/eldp/admin/rents/list";
    console.log('option2');
    
  }

}); // on

function toTitleCase(str) {
    return str.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}


//searchfinance

var options_finance_seacrh = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse_finance_search_home  // post-submit callback
};


$('#dofindfinance').on('click', function(e) {
    
    setTimeout(function() {
      window.backgroundImageIcon = $('.imageNavinside').css('background-image');
      $('.imageNavinside').css('background-image', 'none');
      $('.pagecontent h2.header').text('LOADING');
      $('.pagecontent h4').text('Silahkan menunggu..');
      $('.contenareaajax').fadeOut(100);
      $('.pageinfo').fadeOut(100);
      
      
      $('.loadinginsidetitle').show(0,function(){

        $('.loadinginsidetitle').transition({
          y:'45px',
          opacity: 1,
          duration: 700,
          easing: 'in',

          complete: function() { 
            $('#RentAdminFinancesearchForm').ajaxSubmit(options_finance_seacrh);
          }
        })
      });
    }, 200);

    
    

    
    console.log('submitted');
    

    return false;
}); 




$('#dofindtransaction').on('click', function(e) {
    
    setTimeout(function() {
      window.backgroundImageIcon = $('.imageNavinside').css('background-image');
      $('.imageNavinside').css('background-image', 'none');
      $('.pagecontent h2.header').text('LOADING');
      $('.pagecontent h4').text('Silahkan menunggu..');
      $('.contenareaajax').fadeOut(100);
      $('.pageinfo').fadeOut(100);
      
      
      $('.loadinginsidetitle').show(0,function(){

        $('.loadinginsidetitle').transition({
          y:'45px',
          opacity: 1,
          duration: 700,
          easing: 'in',

          complete: function() { 
            $('#RentAdminSearchhistoryForm').ajaxSubmit(options_history_seacrh);
          }
        })
      });
    }, 200);

    
    

    
    console.log('submitted');
    

    return false;
}); 


var options_history_seacrh = {
    //target:        '#output2',   // target element to update
    //beforeSubmit:  showRequest,  // pre-submit callback
    success:       showResponse_history_search_home  // post-submit callback
};

function showResponse_finance_search_home(responseText, statusText, xhr, $form)  { 

  setTimeout(function() {
        $('.loadinginsidetitle').transition({
          y:'0',
          opacity: 0,
          duration: 400,
          easing: 'out',

          complete: function() { 
            
            $('.pagecontent h2.header').text('Pencarian Transaksi Keuangan');
            $('.pagecontent h4').text('Hasil Pencarian');
            setTimeout(function() {

              $('.loadinginsidetitle').hide();
              $('.pageinfo').fadeIn(100);
              
              $('.imageNavinside').css('background-image', window.backgroundImageIcon);
              $('.contenareaajax').fadeIn(100);
              $('.containerajaxtable').fadeIn();

              $('.containerajaxtable').html(responseText);
              //make tab active is search
              
              
            }, 500);
          }
        });
        
        
      }, 3000);
  
    
} 




function showResponse_history_search_home(responseText, statusText, xhr, $form)  { 

  setTimeout(function() {
        $('.loadinginsidetitle').transition({
          y:'0',
          opacity: 0,
          duration: 400,
          easing: 'out',

          complete: function() { 
            
            $('.pagecontent h2.header').text('Pencarian Transaksi ');
            $('.pagecontent h4').text('Hasil Pencarian');

            setTimeout(function() {

              $('.loadinginsidetitle').hide();
              $('.pageinfo').fadeIn(100);
              
              $('.imageNavinside').css('background-image', window.backgroundImageIcon);
              $('.contenareaajax').fadeIn(100);
              $('.containerajaxtable').fadeIn();

              $('.containerajaxtable').html(responseText);
              //make tab active is search
              
              
            }, 500);
          }
        });
        
        
      }, 3000);
  
    
} 





</script>