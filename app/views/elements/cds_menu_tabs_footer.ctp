<div class="tabs tabs-style-iconbox">
  <a href="#" class="logoelinside">Elibrary</a>
  <nav>
    <ul>
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