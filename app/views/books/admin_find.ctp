<div class="sidebarpage">

    <div id="subNav">
      <a href="#!/url=<?php echo $this->webroot;?>admin/books/listbook"><img src="<?php echo $this->webroot;?>img/el2/Logomenu1-12.png" class="upbutton"> Daftar Buku</a>
      <a href="#!/url=<?php echo $this->webroot;?>admin/books/showfavorite"><img src="<?php echo $this->webroot;?>img/el2/Logomenu2-13.png" class="upbutton"> Buku Favorit</a>
      <a href="#!/url=<?php echo $this->webroot;?>admin/books/find"><img src="<?php echo $this->webroot;?>img/el2/Logomenu3-14.png" class="upbutton"> Cari</a>
    </div>
    
    <div id="a" class="book imageNavinside">&nbsp;</div>
  
    <div>
        <ul id="side">
            <h3>
                <a>Tambah Daftar Buku</a>
            </h3>
            <h3>
                <a>Cetak Daftar Buku</a>
            </h3>
        </ul>
    </div>
</div>

<div class="mask1">
  <div class="assets index">

    <h2>Pencarian Buku</h2>
    <div class="content-box">
    <div class="content-box-content">
      <div class="tags">
        <form enctype="multipart/form-data" id="BookAdminSearchForm" method="post" >
          <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>                                    <fieldset>
          <div class="input-control text" style="width:70%;">
              <input type="text" placeholder="ketikkan pencarian " name="data[Book][keyword]">
              <button type="submit" class="btn-search" id="searchbooksubmit"><img src="<?php echo $this->webroot;?>img/el2/Logomenu3-14.png" class="scbutton"></button>
          </div>
        </form>                                  
      </div>
    
    </div>
    
  </div>
</div>