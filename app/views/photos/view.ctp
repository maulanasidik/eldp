<?php if($type == 1):?>
<style type="text/css">
.fancybox-next span{
	left: auto;
	right: 20px;
}

.fancybox-prev span{
	left: 20px;
	
}
.fancybox-nav span{
	visibility: visible;
}

</style>
<script type="text/javascript">
$(function(){
$.fancybox(
[
<?php foreach ($photos as $item) :?>
	  {"title":"<?php echo $item['Upload']['name'] ?>","href":"<?php echo $this->webroot?>files/photos/<?php echo $item['Upload']['photo_id'] ?>/<?php echo $item['Upload']['name'] ?>"},
<?php endforeach;?>
],
{
  'padding':0
}
)
});
</script>
<?php else:?>


<div class="history-resume">
    
    <table cellpadding="0" cellspacing="0" width="60%">
  	<tr>
	    <th><?php echo 'No';?></th>
	    <th>Foto</th>
	    <th>Aksi</th>
  	</tr>

	<?php
    $no = 0;
    $i = 0;
    foreach ($photos as $item):
    	$no++;
    ?>
	<tr>

	    <td><?php echo $no;?></td>
	    <td><img src="<?php echo $this->webroot?>files/photos/<?php echo $item['Upload']['photo_id'] ?>/<?php echo $item['Upload']['name'] ?>" width="100px"/></td>
	    
	    <td style="align:center;"><a href="<?php echo $this->webroot?>photos/downloadfile?folderid=<?php echo $item['Upload']['photo_id'] ?>&filename=<?php echo $item['Upload']['name'] ?>">DOWNLOAD</a></td>
  	</tr>

  	<?php endforeach;?>
  
  
  </table>


<?php endif;?>