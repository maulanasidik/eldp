<style type="text/css">
.rb-span-12 h1{
  color: #fff;
}
.loaddefaultcontent{
  display: block;
  line-height: 0;

}
.submit button:hover{
  background: #98c141;
}
.inputdatefinance{
  
  width:405px;
  float: left;
}
.metro .inputdatefinance .date, .date1{
  margin-top: 0;
}
.tags:after{
  clear: both;
  display: none;
}

#parent div {
    display:none;
    position: absolute;
    top: 0;
    left: 0;
}
#parent div:first-child {
    display:block;
}
</style>


        <div id="tileContainer" class="" style="width: 1097.5px; height: 579px;">

          <div id="pratile" style="width: 1200.5px; height: 100px; display: block;">
  
  <li style="width: 192px; height: 192px;  margin: -30px 0 0 -170px;">
    <a class="dropdown-toggle" href="#"><img src="<?php echo $this->webroot;?>images/icon-login-08.png" style="width: 104px; height: 104px;"></a>

    <ul class="dropdown-menu" data-role="dropdown" style="display: none;">
      <li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/profiles/edit" data-title="Profile Perpustakaan" data-width="900px" data-height="400px">Profile Perpustakaan</a>
      </li>

      <li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/banners/listbanner" data-title="Banner Management" data-width="900px" data-height="400px">Banner Management</a>
      </li>

      <!--li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/banners/listbanner" data-title="Profile Perpustakaan" data-width="900px" data-height="375px">Banner Management</a>
      </li-->

      <li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/plans/listplan" data-title="Pengadaan Buku" data-width="900px" data-height="375px">Pengadaan Buku</a>
      </li>

      <li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/users/changepassword" data-title="Ubah Sandi" data-width="900px" data-height="375px">Ubah Sandi</a>
      </li>

      <li><a class="gotolink showdialogwindow" data-url="<?php echo $this->webroot;?>admin/profiles/changeip" data-title="Edit IP Address" data-width="900px" data-height="375px">Alamat Server</a>
      </li>

  </ul>
  </li>

  <li style="width: 300px; height: 192px;  margin:-18px 0px 0 303px;">
    <a href="#!/"><img src="<?php echo $this->webroot;?>client/images/Logo-ELDP-User-05.png" style="width: 232px; height: 70px;"></a>
  </li>



  <li style="width: 104px; height: 104px;  margin:-15px 0px 0px 367px;">
    <a href="#!/url=<?php echo $this->webroot;?>logout" id="logout_btn"><img src="<?php echo $this->webroot;?>client/images/icon-logout-08.png" ></a>
  </li>
  
</div>

            <a id="tileSlideshow0-0_35--0_25" class="tile tileSlideshow group0 noClick" style="margin-top: 5px; margin-left: 56px; width: 190px; height: 190px; display: block; background: rgb(103, 59, 183);" data-pos="5-56-190" data-n="0"> 
        
            <div id="parent">

              <div class="tile-content">
                <h1 class="slide">
                  <span id="livereport_booking" class="slides">
                  <?php          
                 echo $booking; 
                 ?>
                  </span>
                  </br><small class="sml"> Buku</small></br></h1>
                  <span class="ket" >Yang Sedang Di Booking</span>
              </div>
              <div class="tile-content">
                <h1 class="slide">
                  <span id="livereport_back" class="slides">
                  <?php
                    echo $back;
                   ?></span>
                  </br><small class="sml"> Buku</small></br></h1>
                  <span class="ket" style="margin-left:13px;">Harus Dikembalikan Hari Ini</span>
              </div>
              <div class="tile-content">
                <h1 class="slide">
                  <span id="livereport_late" class="slides">
                  <?php
                    echo $late;
                   ?></span>
                  </br><small class="sml"> Buku</small></br></h1>
                  <span class="ket">Terlambat Dikembalikan</span>
              </div>
            </div>
               
            
            
            <div class="tileLabelWrapper bottom">
              <div class="tileLabel bottom" style="border-bottom-color:#11528f;">Live Report</div>
          </div> 
          </a>
          
          <a href="#!/url=<?php echo $this->webroot;?>admin/rents/list" class="tile tileCentered group0 " style="margin-top: 5px; margin-left: 264px; width: 390px; height: 86px; display: block; background: rgb(255, 214, 0);" data-pos="5-264-390"> 
            <div class="container" style="background:#FFD600;" onmouseover="javascript:$(this).css('background','#FFF')" onmouseout="javascript:$(this).css('background','#FFD600')">

              <h3 style="color:#FFF" onmouseover="javascript:$(this).css('color','#509601')" onmouseout="javascript:$(this).css('color','#FFF')">
              <img title="" alt="" style="margin-top:0px;margin-left:0px;" src="<?php echo $this->webroot;?>img/el2/icons/box_info.png" height="48" width="48">
              Transaksi
              </h3>
            </div>
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/rents/financelist" class="tile tileCentered group0 " style="margin-top: 109px; margin-left: 264px; width: 390px; height: 86px; display: block; background: rgb(255, 214, 0);" data-pos="109-264-390"> 
          <div class="container" style="background:#FFD600;" onmouseover="javascript:$(this).css('background','#FFF')" onmouseout="javascript:$(this).css('background','#FFD600')">
            <h3 style="color:#FFF" onmouseover="javascript:$(this).css('color','#509601')" onmouseout="javascript:$(this).css('color','#FFF')">
                 <img title="" alt="" style="margin-top:0px;margin-left:0px;" src="<?php echo $this->webroot;?>img/el2/icons/box_info.png" height="48" width="48">
            
            Keuangan    
          </h3>
          
          </div>
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/notifications/listnotifications" id="tileSlideshow0-4_25--0_25" class="tile tileSlideshow group0" style="margin-top: 5px; margin-left: 680px; width: 190px; height: 190px; display: block; background: rgb(103, 59, 183);" data-pos="5-680-190" data-n="0"> 
        

              <div class="tile-content">
                <h1 class="slide">
                  <span class="slides">
                  <?php          
                 echo $notifactive; 
                 ?>
                  </span>
                  </br><small style="font-size:20px; margin-left: -13px;"> Pengumuman</small></br></h1>
                  <span class="ket" style="margin-left: 41px;">Yang Sedang Aktif</span>
              </div>

              <script>    function Divs() {
        var divs= $('#parent div'),
            now = divs.filter(':visible'),
            next = now.next().length ? now.next() : divs.first(),
            speed = 1;
    
        now.fadeOut(speed);
        next.fadeIn(speed);
    }
    
    $(function () {
        setInterval(Divs, 5500);
    });</script>
         

          <div class="tileLabelWrapper bottom" >
            <div class="tileLabel bottom" style="border-bottom-color:#11528f;">Anouncement</div>
          </div> 
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/books/listbook" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 0px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-0-190" data-doslide="1"> 
            <div class="slideText" style="
                    height:76px; width:100%;top:190px;    ">
            <h3>Book</h3>    
          </div>
            <div class="imageWrapper">
              <div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
              <img src="<?php echo $this->webroot;?>img/el2/Book-01.png" alt="" title="" style="width:104.5px;"> 
                </div>
            <div class="tileLabelWrapper top" style="border-top-color:#00BFFF;">
              <div class="tileLabel top">Book</div>
            </div>
          </div> 
         
          </a>

            <a href="#!/url=<?php echo $this->webroot;?>admin/ebooks/listebook" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 240px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-240-190" data-doslide="1"> 
              <div class="slideText" style="
                    height:76px; width:100%;top:190px;    ">
            <h3>E-Book</h3>    
          </div>
            <div class="imageWrapper">
              <div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
              <img src="<?php echo $this->webroot;?>img/el2/ebook-02.png" alt="" title="" style="width:104.5px;"> 
                </div>
            <div class="tileLabelWrapper top" style="border-top-color:#00BFFF;">
              <div class="tileLabel top">E-Book</div>
            </div>
          </div>       
          </a>

            <a href="#!/url=<?php echo $this->webroot;?>admin/videos/listvideo" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 480px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-480-190" data-doslide="1">   
          <div class="slideText" style="
                  height:76px; width:100%;top:190px;    ">
          <h3>Video</h3>    
        </div>
          <div class="imageWrapper">
            <div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
            <img src="<?php echo $this->webroot;?>img/el2/video-03.png" alt="" title="" style="width:104.5px;"> 
              </div>
          <div class="tileLabelWrapper top" style="border-top-color:#00BFFF;">
            <div class="tileLabel top">Video</div>
          </div>
        </div> 
          </a>

            <a href="#!/url=<?php echo $this->webroot;?>admin/audios/listaudios" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 720px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-720-190" data-doslide="1"> 
          <div class="slideText" style="
                  height:76px; width:100%;top:190px;    ">
          <h3>Audio</h3>    
        </div>
          <div class="imageWrapper">
            <div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
            <img src="<?php echo $this->webroot;?>img/el2/audio-04.png" alt="" title="" style="width:104.5px;"> 
              </div>
          <div class="tileLabelWrapper top" style="border-top-color:#00BFFF;">
            <div class="tileLabel top">Audio</div>
          </div>
        </div>       
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/categories/listcategories/1" id="tileScroll0_0-2_25" class="tile tileScroll group0 " style="margin-top: 405px; margin-left: 0px; width: 310px; height: 70px; display: block; background: rgb(205, 220, 57);" data-pos="405-0-310"> 
            <div class="tileTitle" style="margin-left:105px; margin-top:14px; color: #673BB7;">Kategori</div>
          <div class="divScroll" style="margin-left: 12px; opacity: 1; margin-top: 0px;"></div>
            <script>scrollTile("0_0-2_25",[],2500,0)</script>
            </a>



            <a href="#!/url=<?php echo $this->webroot;?>admin/users/listmembers" id="tileSlideshow0-2_25-2_25" class="tile tileSlideshow group0 " style="margin-top: 405px; margin-left: 360px; width: 70px; height: 70px; display: block; background: #FFD600;" data-pos="405-360-70" data-n="0"> 

          
            <div class="imageCenterer" style="width: 46px; margin-left: 13px; margin-top: 2px;">
              <img src="<?php echo $this->webroot;?>img/el2/member.png" alt="" title="" style="width:104.5px;"> 
            </div>

          <div class="tileLabelWrapper bottom">
            <div class="tileLabel bottom" style="border-bottom-color:#11528f;">Member</div>
          </div> 
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/photos/listphotos" id="tileSlideshow0-3-2_25" class="tile tileSlideshow group0 " style="margin-top: 405px; margin-left: 480px; width: 70px; height: 70px; display: block; background: #FFD600;" data-pos="405-480-70" data-n="0"> 
        
            <div class="imageCenterer" style="width: 46px; margin-left: 13px; margin-top: 3px;">
                <img src="<?php echo $this->webroot;?>img/el2/foto.png" alt="" title="" style="width:104.5px;"> 
            </div>
          <div class="tileLabelWrapper bottom">
            <div class="tileLabel bottom" style="border-bottom-color:#11528f;">Foto</div>
          </div> 
          </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/subjects/listcd" id="tileScroll0_3_75-2_25" class="tile tileScroll group0 " style="margin-top: 405px; margin-left: 600px; width: 310px; height: 70px; display: block; background: rgb(205, 220, 57);" data-pos="405-600-310"> 
          <div class="tileTitle" style="margin-left:34px; margin-top:14px; color: #673BB7;">Pustaka Multimedia</div>
        <div class="divScroll" style="margin-left: 12px; opacity: 1; margin-top: 0px;">
        </div>

          <script>scrollTile("0_3_75-2_25",[],2500,0)</script>

            </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/ddcs/listddc" class="tile group0 " style="margin-top: 485px; margin-left: 80px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-80-94"> 
            <div style="line-height:30px; font-weight:300; margin-top:10px; margin-left:10px;">
            <div style="font-size:20px; margin-left:-10px; margin-top:37px; line-height:20px;">Kode DDC</div>
          </div>        
          
          </a>

            <a href="#!/url=<?php echo $this->webroot;?>admin/locations/listlocations" class="tile group0 " style="margin-top: 485px; margin-left: 240px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-240-94"> 
          <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;">
            <div style="font-size:20px;line-height:15px;">Location</div>
          </div>        
        </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/rents/chart" class="tile group0 " style="margin-top: 485px; margin-left: 400px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-400-94"> 
            <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;">
            <div style="font-size:20px;line-height:15px;">Laporan</div>
          </div>
        </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/comments/listcomments" class="tile group0 " style="margin-top: 485px; margin-left: 560px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-560-94"> 
            <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:8px;">
            <div style="font-size:18px;line-height:15px;">Komentar</div>
          </div>
        </a>


            <a href="#!/url=<?php echo $this->webroot;?>admin/ebooks/cr" class="tile group0 " style="margin-top: 485px; margin-left: 720px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-720-94"> 
            <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:5px;">
            <div style="font-size:20px;line-height:20px;">Ebook CR</div>
          </div>
        </a>
        <img id="logoedusoft" src="<?php echo $this->webroot;?>images/logo-edu-small.png">
        </div>
        <div id="contentWrapper" >
          <div id="content">
          </div>


        </div>
        

  
  
  <div id="catchScroll"></div>
  <script type="text/javascript">
  $('#logoedusoft').css('display','block');
  $('#logout_btn').on('click',function(){
    window.location.href = '<?php echo $this->webroot;?>users/logout';  
  });
  

  </script>

