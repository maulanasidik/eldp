<?php if($this->action != 'admin_search'):?>
<div class="pagecontent">
  <h2 class="header">MODUL TRANSAKSI</h2>
  <h4 class="subheader">LIST TRANSAKSI</h4>
<div id="a" class="book imageNavinside">
  &nbsp;
  <div class="loadinginsidetitle" style="display:none;">
    <img src="<?php echo $this->webroot;?>img/el2/loading-new.gif"> 
  </div>
</div>

<?php endif;?>

<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('header_paginate'); 
}
?>

<?php if($this->action != 'admin_search'):?> 
<div class="mask1 contenareaajax">
<?php endif;?><!--This is only show if not search-->
  <div class="transp actions">
    <table class="tables hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
		<th class="smallest-row"><?php echo ('ID Transaksi');?></th>
		
		<th class="largest-row"><?php echo ('Judul Buku');?></th>

		<th class="largest-row"><?php echo ('Member');?></th>
		<th><?php echo ('Tanggal Booking');?></th>
		

		<th><?php echo ('Status');?></th>
          
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rents as $rent) : ?>
        <tr class="altrow ">
			<td class="smallest-row"><?php echo $rent['Rent']['id']?></td>
			<td><?php echo $rent['Book']['title']; ?></td>
			<td><?php echo $rent['User']['name']; ?></td>
			<td>
				<?php echo $time->niceShort($rent['Rent']['created'],null); ?>
			</td>
			

			

			<?php if($tipe == 3):?>
				<td class="smallest-row" id="kembali_<?php echo $rent['Rent']['id'];?>">
					<?php 
					echo '<span class="status out">Booking</span>';
					?>
				</td>
			<?php else:?>
				<td id="kembali_<?php echo $rent['Rent']['id'];?>">
					<span class="status out">Terbooking</span>
					
				</td>
			<?php endif;?>			
			
          	<?php if($tipe == 3 && $rent['Rent']['status']==1):?>
          	<td class="actions3">
	            <a href="<?php echo $this->webroot;?>ebooks/view/<?php echo $daftarebook['Ebook']['id']; ?>"><i class=" icon-plus on-right"></i> Proses Pinjam</a>

	            <a href="<?php echo $this->webroot;?>ebooks/view/<?php echo $daftarebook['Ebook']['id']; ?>"><i class=" icon-cancel on-right"></i> Cancel Booking</a>
          	</td>
          	<?php endif;?>
        </tr>
        <?php endforeach;?>
        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div> <!--end div for transp-->
  
<?php 
if($this->action != 'admin_search'){
echo $this->renderElement('paginate',array('data_scope' => 'rentscope','data_background'=>'#df9019')); 
}
?>

<!--add to search function-->
<?php if(($this->action == 'admin_search') || (count($listbook)!=0)):
?> 
<script>
$('.pageinfo p').text('Ditemukan <?php echo count($listbook);?> data untuk hasil pencarian "'+window.querysearch+'"');
</script>
<?php endif;?>

<!--add to search function-->


</div>

<?php
if($this->action != 'admin_search'):

echo $this->renderElement('menu_tabs_footer'); 

endif;
?>

