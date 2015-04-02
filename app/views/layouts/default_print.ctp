<?php echo $html->css('print','',array('media'=>'print')); ?>

<div class="headerprint">
  
  <div>
  <?php

  if($profile['Profile']['image']!=null){?>
      <img style="float:left;margin-top:10px;" width="70" src="<?php echo $this->webroot.$profile['Profile']['image'];?>"/>
  <?php }else{
      echo '<p class="fontred">Belum ada foto</p>';
  }

  ?>
  </div>

  <h1 style="text-align: center;font-size: 1.5em"><?php echo $profile['Profile']['name'] ?></h1>
  <p style="text-align: center;-webkit-margin-before: 0em;-webkit-margin-after: 0em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;"><?php echo $profile['Profile']['alamat'] ?></p>
  <p style="text-align: center;
  -webkit-margin-before: 0em;-webkit-margin-after: 0em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;
}">No.Telepon: <?php echo $profile['Profile']['no_tlp'] ?>, E-mail: <?php echo $profile['Profile']['email'] ?></p>
 
  
  
</div>
<span class="rb-close"><a href="index-2.html"></a></span>
<?php e($content_for_layout); ?>
<script type="text/javascript">
window.print();
</script>