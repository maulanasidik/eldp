<div class="formcontainer">
<div class="labs form">
<div id="edit_ebooks">
<div id="edit_ebooks-wrapper">
	<div class="loader loaderform" style="display:none;">
	    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
	    
	</div>
	<br/>
	<p class="statusload loaderformstatus" style="display:none;"> Memproses data, mohon menunggu </p>

	<?php echo $form->create('Subject',array('action'=>'admin_edit','enctype'=>'multipart/form-data'));?>
	<fieldset>
	
	<div style="float:left;width:350px;margin-right:40px;">
			
		<?php
		echo $form->input('id');
		echo $form->input('id_pustaka',array('type'=>'hidden'));
		?>
		
		<label>Category Ebook</label>			
		<div class="input-control text" data-role="input-control">
		
		<?php
            echo $form->select('category_id',$listCategory,null);
        ?>
		</div>

		<label>Judul Pustaka</label>
		<div class="input-control text" data-role="input-control">
		
		<?php
		echo $form->input('title',array('class'=>'text-input large-input', 'div'=>false,'label'=>false));
		
		?>
		
		</div>



		<label>Penerbit</label>
		<div class="input-control text" data-role="input-control">
			
		<?php
		echo $form->input('penerbit',array('class'=>'text-input large-input', 'div'=>false,'label'=>false));
		
		?>
		
		</div>


		<label>Pilih Tahun</label>
		<div class="input-control text" data-role="input-control">
			<?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'));?>
		</div>

		<label>Resensi</label>
		<div class="input-control textarea" data-role="input-control">
			<?php
			echo $form->input('details',array('class'=>'textarea large-input', 'div'=>false,'label'=>false));
			?>
		</div>
		
		
		

	</div> <!--endbelah-->
	<div style="float:left;width:350px;margin-right:40px;">

		

		<div>
		<?php
		echo '<span>Cover anda sebelumnya</span><br/>';
		if($entry['Subject']['cover']!=null){
		$vowels = array("img/");
		$cover = str_replace($vowels, "", $entry['Subject']['cover']);
		

		echo $html->image($cover,array('width'=>'100px'));
		}else{
			echo '<p>Belum ada cover</p>';
		}

		?>
		</div>

		<label>Ganti Cover file:</label>
		
		<div class="input-control text" data-role="input-control">
		
		<?php
		echo $form->input('File.image1', array('label'=>false, 'type'=>'file'));
		?>

		</div>

		<div>

		<span>File anda sebelumnya</span><br/>

		<?php
		if(($entry['Subject']['file_name']!=null) && ($entry['Subject']['folder_name']!=null)){?>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="movie_name" align="middle"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--[if !IE]>--><object type="application/x-shockwave-flash" data="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>" width="100%" height="100%"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--<![endif]--><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/></a><!--[if !IE]>--></object><!--<![endif]--></object>
		<?php
		}else{
			echo '<p>Belum ada file</p>';
		}
		?>
		</div>

		
		<label>Ganti file</label>
		
		<div class="input-control text" data-role="input-control">
		<?php
          echo $form->input('zipfile', array('label'=>false, 'type'=>'file'));
		?>
		</div>


		<label>Nama File Utama <br/><small>misal home.swf</small></label>
	  <div class="input-control text" data-role="input-control">
	  <?php
	  echo $form->input('file_name',array('div'=>false,'label'=>false));

	  ?>

	  </div>
		
    </div> <!--endbelah-->
    <div style="clear:both;float:none;margin-bottom:30px;"></div>
    <div class="submit">
    	<button class="btn btn-2 btn-2g" type="submit">Update</button>
    </div>
	</fieldset>
    
    <br/>
    <br/>
	<?php echo $form->end();?>
</div>
</div>
</div>
</div>

<script type="text/javascript">
          

$(document).ready(function() { 

	
    var options2 = {
      success:       showResponse  // post-submit callback
    };
 
    $( "#SubjectAdminEditForm" ).on('submit', function(e) {
      $.Dialog.close();
      
     
      $(".formcontainer").fadeOut();
     
      $('.loadingpagecontainer').show();
      $(this).ajaxSubmit(options2); 
      

      return false;
    });
}); 

function showResponse(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    $('.loadingpagecontainer').hide();
    $(".formcontainer").show();
    $('tbody#cdtable #cd_record_<?php echo $entry['Subject']['id']?>').html(responseText);
  }, 2000);
}

</script>


