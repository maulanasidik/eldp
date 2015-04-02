<style type="text/css">
	.metro h2.totalkas {
		font-size: 21px;
		color: #fff;
		line-height: 40px;
		margin-bottom: 27px;
		font-weight: 300;
		width: 300px;
		float: left;
	}
	.bottom_line{
		clear: both;
		display: none;
	}
	.buttonlist_finance{
		float:right;
		margin-right: 20px;
		margin-top: 40px;
	}
</style>
<?php

function waktuindo($datawaktu)
{
    $waktu=explode('-',$datawaktu);
    if ($waktu[1] == '01')  //jika 01 maka januari
        {
            $bulan='Januari';
        }
    elseif ($waktu[1] == '02')  
        {
            $bulan='Februari';
        }
    elseif ($waktu[1] == '03')  
        {
            $bulan='Maret';
        }
    elseif ($waktu[1] == '04')  
        {
            $bulan='April';
        }
    elseif ($waktu[1] == '05')  
        {
            $bulan='Mei';
        }
    elseif ($waktu[1] == '06')  
        {
            $bulan='Juni';
        }
    elseif ($waktu[1] == '07')  
        {
            $bulan='Juli';
        }
    elseif ($waktu[1] == '08')  
        {
            $bulan='Agustus';
        }
    elseif ($waktu[1] == '09')  
        {
            $bulan='September';
        }
    elseif ($waktu[1] == '10')  
        {
            $bulan='Oktober';
        }
    elseif ($waktu[1] == '11')  
        {
            $bulan='November';
        }
    elseif ($waktu[1] == '12')  
        {
            $bulan='Desember';
        }
    else  
        {
            $bulan='00';
        }
    echo"$waktu[2] $bulan $waktu[0]";
}


?>
<div class="mask1 content_transaction_container">
  <div class="actions">
    
    <h2 class="totalkas" style="width:550px;"> Data Peminjaman dari <?php echo $startdate_print;?> s/d <?php echo $enddate_print;?></h2>

    

    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #c53437;font-size:1.1em;">
		<th class="smallest-row"><?php echo ('ID Transaksi');?></th>
		
		<th class="largest-row"><?php echo ('Judul Buku');?></th>

		<th class="largest-row"><?php echo ('Member');?></th>
		<?php if($tipe == 3):?>
			<th><?php echo ('Tanggal Booking');?></th>
		<?php else:?>
			<th><?php echo ('Tanggal Pinjam');?></th>
			<th><?php echo ('Tanggal Kembali');?></th>
			<th><?php echo ('Tanggal Dikembalikan');?></th>
		<?php endif;?>
		
		<?php if($tipe != 3):?>
			<th><?php echo ('Telat');?></th>
			<th><?php echo ('Denda');?></th>

		<?php endif;?>
		<th><?php echo ('Status');?></th>
		<th><?php echo ('Catatan');?></th>
          
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this_transaction as $rent) : ?>
        <tr class="altrow ">
			<td class="smallest-row"><?php echo $rent['Rent']['id']?></td>
			<td><?php echo $rent['Book']['title']; ?></td>
			<td><?php echo $rent['User']['name']; ?></td>

			<?php if($tipe == 3):?>
				<td>
					<?php echo waktuindo($rent['Rent']['created']); ?>
				</td>
			<?php else:?>
				<td>
					<?php echo waktuindo($rent['Rent']['tgl_pinjam']); ?>
				</td>
				<td>
					<?php echo waktuindo($rent['Rent']['tgl_kembali']); ?>
				</td>
				<td>
					<?php 
					
						echo waktuindo($rent['Rent']['tgl_dikembalikan']); 
					?>
				</td>
			<?php endif;?>

			
				<td>
					<?php 
					//$currentdate
					$today = $rent['Rent']['tgl_dikembalikan'];
					$kembali = $rent['Rent']['tgl_kembali']; 
					//$tgl_kembali = date('Y-m-d',$kembali);
					
					$diff = abs(strtotime($today) - strtotime($kembali));
					
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $years*30*60*60*24)/ (60*60*24));
					if($today < $kembali || $days == 0){
					echo '-';
					}else{
					printf("%d hari\n",  $days);
					}
					 ?>
				</td>

				<td>

					<?php 
					
					//print_r($rent);
					//$currentdate
					if(empty($rent['Rent']['denda'])){
					echo '-';
					}else{
					echo 'Rp '.$rent['Rent']['denda'];
					}
					
					 ?>
				</td>
			

			<?php if($tipe == 3):?>
				<td class="smallest-row" id="kembali_<?php echo $rent['Rent']['id'];?>">
					<?php 
					echo '<span class="status out">Booking</span>';
					?>
				</td>
			<?php else:?>
				<td id="kembali_<?php echo $rent['Rent']['id'];?>">
					<?php 
					$status1 = $rent['Rent']['status'];
					$status2 = $rent['Rent']['tipe'];
					if($status1==2 && $status2==2){
						echo '<span class="status kembali">Pengembalian</span>';
					}else if($status1==2 && $status2==4){
						echo '<span class="status rusak">Hilang/ Rusak</span>';
					}else if($status1==1 && $status2==1){
						echo '<span class="status rusak">Peminjaman</span>';
					}else if($status1==2 && $status2==1){
						echo '<span class="status rusak">Peminjaman</span>';
					}else if($status1==1 && $status2==3){
						echo '<span class="status rusak">Booking</span>';

					}else{
						echo '<span class="status rusak">Tidak Terdata</span>';
					}
					?>
				</td>
			<?php endif;?>			
				<td class="smallest-row" id="kembali_<?php echo $rent['Rent']['id'];?>">
					<?php 
					echo $rent['Rent']['notes'];
					?>
				</td>
          	
        </tr>
        <?php endforeach;?>
        
      </tbody>
    </table>
    <div class="bottom_line">&nbsp;</div>
  </div>
</div>




