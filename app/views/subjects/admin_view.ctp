
	<div style="float:left;width:300px;margin-right:40px;">
			
		
		
		<label>Category Ebook</label>			
		<div class="input-control text" data-role="input-control">
		
		<?php
            echo $entry['Category']['name'];
        ?>
		</div>

		<label>Judul Pustaka</label>
		<div class="input-control text" data-role="input-control">
		
		<?php
            echo $entry['Subject']['title'];
        ?>
		
		
		</div>



		<label>Penerbit</label>
		<div class="input-control text" data-role="input-control">
			
		<?php
            echo $entry['Subject']['penerbit'];
        ?>
		
		</div>


		<label>Tahun</label>
		<div class="input-control text" data-role="input-control">
			<?php
            echo $entry['Subject']['tahun'];
        	?>
			
		</div>

		<label>Resensi</label>
		<div class="input-control textarea" data-role="input-control">
			<?php
            echo $entry['Subject']['details'];
        	?>
		</div>
		
		
		

	</div> <!--endbelah-->

	<div style="float:left;width:350px;margin-right:40px;">

		

		<div>
		<?php
		echo '<label>Cover</label>';
		if($entry['Subject']['cover']!=null){
		$vowels = array("img/");
		$cover = str_replace($vowels, "", $entry['Subject']['cover']);
		

		echo $html->image($cover,array('width'=>'100px'));
		}else{
			echo '<p>Belum ada cover</p>';
		}

		?>
		</div>
		<br/>
		

		<div>
		<label>File</label>

			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="movie_name" align="middle"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--[if !IE]>--><object type="application/x-shockwave-flash" data="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>" width="100%" height="100%"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--<![endif]--><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/></a><!--[if !IE]>--></object><!--<![endif]--></object>

			<a class="viewtonewwindow" data-title="View CD" data-width="750px" data-height="600px" data-url="<?php echo $this->webroot;?>admin/subjects/viewsingle/<?php echo $entry['Subject']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat full screen</a>
		</div>
		

		
		
		
		
    </div> <!--endbelah-->
    <div style="clear:both;float:none;margin-bottom:30px;"></div>
    
    <script type="text/javascript">

    $(".viewtonewwindow").on('click', function(){
    	//$.Dialog.close();
        //$('.loadingpagecontainer').show();
        console.log('clicked');
        
        var content = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="750px" height="500px" id="movie_name" align="middle"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--[if !IE]>--><object type="application/x-shockwave-flash" data="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>" width="750px" height="500px"><param name="movie" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>/<?php echo $entry['Subject']['file_name'];?>"/><param name="base" value="<?php echo $this->webroot;?>files/cd/<?php echo $entry['Subject']['id'];?>"/><!--<![endif]--><a href="http://www.adobe.com/go/getflash"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/></a><!--[if !IE]>--></object><!--<![endif]--></object>';
        $.Dialog.content(content);

        

        return false;

    });

    </script>
	