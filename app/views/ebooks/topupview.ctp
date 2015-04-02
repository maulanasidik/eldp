<div id="dataebook<?php echo $book['Ebook']['id']?>" class="datapopup">
        <div class="rack">
          <div class="previewinsidepopup">
            <img class="" src="<?php echo $this->webroot?><?php echo $book['Ebook']['cover']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">
          </div>
          <div class="datapopuppreview1">
            <?php if($book['Ebook']['type']==1):?>
              <a class="viewebook" href="<?php echo $this->webroot;?>files/ebooks/<?php echo $book['Ebook']['id'];?>" title="#"><img src="<?php echo $this->webroot?>images/lihat-btn.png"/></a></br>
            <?php else:?>
              <a class="viewebook" href="<?php echo $book['Ebook']['pdffile'];?>" title="#"><img src="<?php echo $this->webroot?>images/lihat-btn.png"/></a></br>
            <?php endif;?>

            <a href="<?php echo $this->webroot;?>ebooks/download?filename=<?php echo $book['Ebook']['pdffile'];?>" title="#"><img style="margin-top: 32px;margin-left: 141px;" src="<?php echo $this->webroot?>images/download-btn.png"/></a>
            <a class="commentpopup fancybox.ajax" style="margin-top: 34px;margin-left: 141px;" href="<?php echo $this->webroot.'comments/show_comments/'.$controllerActiveId.'/'.$book['Ebook']['id'];?>" data-libraryId="10"><img src="<?php echo $this->webroot?>client/images/comment-btn.png"/></a>

            <h1><?php echo $book['Ebook']['title']?></h1>
            <p><?php echo $book['Ebook']['pengarang']?></p>
            <br/>
            <h2>Sinopsis</h2>
            <p><?php echo $book['Ebook']['details']?></p>
            <br/>
          </div>
          <div class="bookdetailpopup2">
            <dl class="desc-detail">    
              <dt class="altrow">Id</dt>
                <dd class="altrow"><?php echo $book['Ebook']['id']?>  &nbsp;</dd>
              <dt>Penerbit</dt>
                <dd><?php echo $book['Ebook']['penerbit']?> &nbsp;</dd>
              <dt class="altrow">Pengarang</dt>
                <dd class="altrow"><?php echo $book['Ebook']['pengarang']?> &nbsp;</dd>
              <dt>Thn Terbit</dt>
                <dd><?php echo $book['Ebook']['tahun']?> &nbsp;</dd>
            </dl>

          </div>

          

        </div>
        </div>