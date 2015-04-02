<div class="rack">
  <div class="previewinsidepopup">
    <img class="" src="<?php echo $this->webroot.$book['Book']['preview']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">

  </div>

  <div class="datapopuppreview">
    <ul>
      <li class="bookavailable_button">
      <?php $available = $book['Book']['jml_buku']-($book['Book']['jml_rusak']+$book['Book']['onrent']);
      $available2 = $book['Book']['bisa_dipinjam'];
      if(($available > 0) && ($available2 == 1)):?>
        <a href="#" title="Booking" class="bookingpopup" data-bookid="<?php echo $book['Book']['id']?>"><img src="<?php echo $this->webroot;?>client/images/booking-btn.png"/></a>
      <?php else:?>
        <span style="padding: 10px;background: rgba(0,0,0,0.5);color: #fff;margin-left: 13px;margin-bottom: 5px;display: inline-block;"> Buku tidak tersedia </span>
      <?php endif;?>
      </li>
      <li><a href="<?php echo $this->webroot.'comments/show_comments/'.$controllerActiveId.'/'.$book['Book']['id'];?>" title="#" class="commentpopup fancybox.ajax"><img style="" src="<?php echo $this->webroot?>client/images/comment-btn.png"/></a></li>
    </ul>

    <h1><?php echo $book['Book']['title']?></h1>
    <p class="pengarang"><?php echo $book['Book']['pengarang']?> - <?php echo $book['Book']['penerbit']?></p>
    <h2>Sinopsis</h2>
    <p><?php echo $book['Book']['sinopsis']?></p>
    <br/>
  </div>

  <div class="bookdetailpopup">
    <div class="bookdetailpopupRow">
      <dl class="desc-detail">    
        <dt class="altrow">Id Buku</dt>
        <dd class="altrow"><?php echo $book['Book']['id_buku']?>  &nbsp;</dd>
        <dt class="altrow">DDC</dt>
        <dd class="altrow"><?php echo $book['Category']['Ddc']['kode_ddc']?> - <?php echo $book['Category']['Ddc']['keterangan']?></dd>
        <dt>Kode ISBN</dt>
        <dd><?php echo $book['Book']['isbn']?> &nbsp;</dd>
        <dt class="altrow">Kategori</dt>
        <dd class="altrow"><?php echo $book['Category']['name']?> &nbsp;</dd>
        <dt>Penerbit</dt>
        <dd><?php echo $book['Book']['penerbit']?> &nbsp;</dd>
        <dt class="altrow">Pengarang</dt>
        <dd class="altrow"><?php echo $book['Book']['pengarang']?> &nbsp;</dd>
        <dt>Thn Terbit</dt>
        <dd><?php echo $book['Book']['tahun']?> &nbsp;</dd>
      </dl>
    </div>
    <div class="bookdetailpopupRow">
      <dl class="desc-detail">
        <dt class="altrow">Jml Buku</dt>
        <dd class="altrow"><?php echo $book['Book']['jml_buku']?> &nbsp;</dd>
        <dt>Buku Tersedia</dt>
        <dd class="bookavailablestatus"><?php $available = $book['Book']['jml_buku']-($book['Book']['jml_rusak']+$book['Book']['onrent']);?>
    <?php echo $available;?> &nbsp;</dd>
        <dt class="altrow">Letak Simpan</dt>
        <dd class="altrow"><?php echo $book['Category']['Location']['lokasi']?> &nbsp;<?php echo $book['Category']['Location']['keterangan']?></dd>
        <dt>Dapat Dipinjam</dt>
        <dd>Iya &nbsp;</dd>
        <dt class="altrow">Buku Favorite</dt>
        <dd class="altrow" id="favorite_status">Iya &nbsp;</dd>
        <dt>Jenis Buku</dt>
        <dd>Fisik</dd>
      </dl>
    </div>
  </div>

  <div  class="bookcomment">
    <div style="display:none">
      <div class="datapopup">
        <div id="commentbook" class="commentbook">
          

          <div class="postcomment">
            <div class="previewinsidepopup1">
              <img class="" src="client/images/no_avatar.png" alt="" style="display: inline-block; left: 0px; top: 0px; ">
            </div>
            <div class="datapopuppreview2">
              <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Tulis komentar anda disini"></textarea>
                <input type="submit">
            </div>
          </div>
        </div>
    </div>
  </div><!--endcomment-->
  </div>
</div><!--endrack-->