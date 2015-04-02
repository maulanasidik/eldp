<div id="home-content" class="clearfix">
  <div id="shelf">
    <?php foreach ($books as $book) :?>
    
    <div class="itemisotope">
      <div class="box" >
        <div class="postim" >
          <div class="btitle">
            <h2><a href="#" rel="bookmark" title="Permanent Link to "><?php echo $book['Book']['title']?></a></h2>
          </div>
          <span class="inwriter"><?php echo $book['Book']['pengarang']?></span>
          <a href="<?php echo $this->webroot?>books/view/<?php echo $book['Book']['id']?>" class="ebookpopup fancybox.ajax">
            <img class="bookcover" src="<?php echo $this->webroot.$book['Book']['preview']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">
          </a>
        </div>
      </div>
      <div class="box-home">
        <div class="btitle-home">
          <h1><?php echo $book['Book']['title']?></h1>
          <p><?php echo $book['Book']['pengarang']?> - <?php echo $book['Book']['penerbit']?></p><br/>
          <h2>Sinopsis</h2>
          <p><?php echo $book['Book']['sinopsis']?></p>
        </div>
        <div class="list" >
          <a href="<?php echo $this->webroot?>books/view/<?php echo $book['Book']['id']?>" class="ebookpopup fancybox.ajax">
            <img class="bookcover" src="<?php echo $this->webroot.$book['Book']['preview']?>" alt="" style="display: inline-block; left: 0px; top: 0px; width: 150px;">
          </a>
        </div>
      </div>
      <div style="display:none"><div id="dataebook_<?php echo $book['Book']['id']?>" class="datapopup">
        
      </div><!--end display:none:-->
    </div><!--end itemisotope-->
    </div>
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

