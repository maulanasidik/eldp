<style type="text/css">
	.metro h2.totalkas {
		font-size: 21px;
		color: #414141;
		line-height: 40px;
		margin-bottom: 27px;
		font-weight: 300;
		width: 350px;
		float: left;
	}
	.bottom_line{
		clear: both;
		display: none;
	}
	label{
		color: #20292f;
	}
	#dofindfinance{
		margin-left: 40px;
		margin-top: 10px;
	}
	.headerfinance{
		padding: 15px 0 15px 180px;
	}
</style>



<div class="pagecontent">
  <h2 class="header">MODUL KEUANGAN</h2>
  <h4 class="subheader">LIST KEUANGAN</h4>
<div id="a" class="book imageNavinside">
  &nbsp;
  <div class="loadinginsidetitle" style="display:none;">
    <img src="<?php echo $this->webroot;?>img/el2/loading-new.gif"> 
  </div>
</div>

<div class="pageinfo">
  <p> <strong>Silahkan masukkan terlebih dahulu tanggal awal dan tanggal akhir untuk data yang ingin anda cari</strong></p>
</div>



<?php
date_default_timezone_set('Asia/Jakarta');
?>


<div class="mask1 content_transaction_container contenareaajax">

  
    <div class="headerfinance metro clearfix">
	    
	    <div class="tags">
	    	<?php echo $form->create('Rent',array('action'=>'admin_financesearch','enctype'=>'multipart/form-data','autocomplete'=>'off'));?>
	        
	        <div class="inputdatefinance">
	        <?php
	          echo $form->input('tgl_awal',array('type'=>'date','label'=>'Tanggal awal'));
	        ?>
	        </div>

	        <div class="inputdatefinance">
	        <?php
	          echo $form->input('tgl_akhir',array('type'=>'date','label'=>'Tanggal akhir'));
	        ?>
	        </div>

	        <button id="dofindfinance" type="submit" style="float:left;" class="default large">Submit</button>
	        <?php echo $form->end();?>
		</div>

	</div>

	<div class="containerajaxtable">

	</div>

  




<!--add to search function-->

<!--add to search function-->

</div>

<?php

echo $this->renderElement('menu_tabs_footer'); 

?>


