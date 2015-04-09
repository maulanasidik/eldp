<style type="text/css">
.datapopuppreview1 a{
  clear: both;
  margin-top: 5px;
}
.fancybox-nav span{
  visibility: visible;
}

</style>
<div id="home-content" class="clearfix">
  <div id="shelf">
    <?php foreach ($books as $book) :?>
    
    <div class="itemisotope">
    <!--oneset-->
      <div class="box" id="#">
        <a href="#dataebook<?php echo $book['Photo']['id']?>" class="ebookpopup">
          
          <img class="postim bittle" src="<?php echo $this->webroot?><?php echo $book['Photo']['cover']?>" width="150" height="190">
        </a>
      </div>

      <div class="box-home">
        <div class="btitle-home">
            <h1><?php echo $book['Photo']['title']?></h1>
                <p><?php echo $book['Photo']['pengarang']?> - <?php echo $book['Photo']['penerbit']?></p>
                <br/>
                <h2>Sinopsis</h2>
                <p><?php echo $book['Photo']['details']?></p>
        </div>
        <div class="list" >
          <a href="#dataebook<?php echo $book['Photo']['id']?>" class="ebookpopup">
            <img class="bookcover" src="<?php echo $this->webroot?><?php echo $book['Photo']['cover']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">
          </a>
        </div>
      </div>

      <div style="">
        <div id="dataebook<?php echo $book['Photo']['id']?>" class="datapopup">
        <div class="rack">
          <div class="previewinsidepopup">
            <img class="" src="<?php echo $this->webroot?><?php echo $book['Photo']['cover']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">
          </div>
          <div class="datapopuppreview1">
            
              <a class="imagegalerry fancybox.ajax datapopupbutton" href="<?php echo $this->webroot;?>photos/view/<?php echo $book['Photo']['id_pustaka'] ?>/1" title="#"><img src="<?php echo $this->webroot?>images/lihat-btn.png"/></a>
             
             <a href="<?php echo $this->webroot;?>photos/view/<?php echo $book['Photo']['id_pustaka'] ?>/2" title="#" class="imagegalerry fancybox.ajax datapopupbutton"><img style="" src="<?php echo $this->webroot?>client/images/icon-download-07.png"/></a>

              <a href="<?php echo $this->webroot.'comments/show_comments/'.$controllerActiveId.'/'.$book['Photo']['id'];?>" title="#" class="commentpopup datapopupbutton fancybox.ajax"><img style="" src="<?php echo $this->webroot?>client/images/comment-btn.png"/></a>
            
            <h1><?php echo $book['Photo']['title']?></h1>
            <p><?php echo $book['Photo']['penerbit']?> - <?php echo $book['Photo']['pengarang']?></p>
            <br/>
            <h2>Sinopsis</h2>
            <p><?php echo $book['Photo']['details']?></p>
            <br/>
          </div>
          <div class="bookdetailpopup2">
            <dl class="desc-detail">    
              <dt class="altrow">Id</dt>
                <dd class="altrow"><?php echo $book['Photo']['id']?>  &nbsp;</dd>
              <dt>Penerbit</dt>
                <dd><?php echo $book['Photo']['penerbit']?> &nbsp;</dd>
              <dt class="altrow">Pengarang</dt>
                <dd class="altrow"><?php echo $book['Photo']['pengarang']?> &nbsp;</dd>
              
            </dl>

          </div>

          <div class="bookcomment">
            <div style="display:none">
              <div id="commentbook" class="datapopup">
                <div class="commentbook">
                  <div class="postcomment" style="margin-top:30px;">
                    <div class="previewinsidepopup1">
                      <img class="" src="client/images/avatar2.png" alt="" style="display: inline-block; left: 0px; top: 0px; ">
                    </div>
                    <div class="datapopuppreview2">
                      <h2>Taufiq Ridha</h2>
                      <p>This script is a reusable system for adding a graphical keyboard interface to text fields, password fields and textareas so they can be filled with mouse only. It also adds easy access to special characters your existing keyboard may not otherwise have the ability to generate.</p>
                      <br/>
                  </div>
                </div>
                <div class="postcomment">
                  <div class="previewinsidepopup1">
                    <img class="" src="client/images/avatar1.png" alt="" style="display: inline-block; left: 0px; top: 0px; ">
                  </div>
                  <div class="datapopuppreview2">
                    <h2>Adden</h2>
                    <p>This script is a reusable system for adding a graphical keyboard interface to text fields, password fields and textareas so they can be filled with mouse only. It also adds easy access to special characters your existing keyboard may not otherwise have the ability to generate.</p>
                    <br/>
                  </div>
                </div>

                <div class="postcomment">
                  <div class="previewinsidepopup1">
                    <img class="" src="client/images/no_avatar.png" alt="" style="display: inline-block; left: 0px; top: 0px; ">
                  </div>
                  <div class="datapopuppreview2">
                    <textarea rows="4" cols="50" name="comment" form="usrform"></textarea>
                    <form action="demo_form.asp" id="usrform">
                      <input type="submit">
                    </form>
                    <p>Anda harus login terlebih dahulu untuk menambah komentar     &nbsp;<a href="#"> Login</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!--endcomment-->

          </div>

        </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    /*$("#photoview").on('click', function(){
        
        console.log('clicked');
        var thisurl = $(this).data('url');
        
        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: thisurl, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            fancygallery(data);
          } // success
        }); // ajax

    });*/

    function fancygallery(data){
      $.fancybox(
        [
          {"title":"image title","href":"<?php echo $this->webroot?>client/images/comment-btn.png"},
          {"title":"image title","href":"<?php echo $this->webroot?>client/images/comment-btn.png"},
          {"title":"image title","href":"<?php echo $this->webroot?>client/images/comment-btn.png"},
        ],
        {
          'padding':0
        }
      )
    }

    </script>
    <?php endforeach;?>

  </div>
</div>

<?php
//extract the get variables
    $url = $this->params['url'];
    unset($url['url']);
    $get_var = http_build_query($url);
     
    $arg1 = array(); $arg2 = array();
    //take the named url
    if(!empty($this->params['named']))
    $arg1 = $this->params['named'];
     
    //take the pass arguments
    if(!empty($this->params['pass']))
    $arg2 = $this->params['pass'];
     
    //merge named and pass
    $args = array_merge($arg1,$arg2);
     
    //add get variables
    $args["?"] = $get_var;
     
    $paginator->options(array('url' => $args));
    
?>
<div class="pageinfo">
  <p><?php 
  echo $paginator->counter(array(
        'format' => 'Halaman %page% dari total %pages% halaman,
                     menampilkan %current% data dari total %count% data.'
                     
  ));

  /*echo $paginator->counter(array(
        'format' => 'Halaman %page% dari %pages%,
                     menampilkan %current% data dari total %count% data,
                     menampilkan data %start%, sampai %end%'
  ));*/
  ?></p>
</div>
<div class="paging">
  
  <?php echo $paginator->prev('<strong>&#65513;</strong> '.__('previous', true), array('escape'=>false,'id'=>'prevpage'), null, array('escape'=>false,'id'=>'prevpage','class'=>'disabled'));?>
  
  <?php echo $paginator->numbers(array(
    'before' => '',
    'after' => '',
    'separator' => '',
    
    'class' => 'number'
  ));
  ?>

  <?php echo $paginator->next(__('next', true).' <strong>&#65515;</strong>', array('escape'=>false,'id'=>'nextpage'), null, array('escape'=>false,'id'=>'nextpage','class' => 'disabled'));?>
</div>

  <nav id="page_nav">
     <a href="#"></a>
  </nav>
<div class="bottomcover ">

  <div id="bottom">
    
    <div class="clear"> </div>
  </div>
</div></div>