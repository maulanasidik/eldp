<style type="text/css">
table tr th, table tr td{
  font-size: 0.9em;
}
</style>
<div id="profilepopup">
  <div class="profile-resume">
    <div class="avatar-frame">
      
      <img class="avatar" src="<?php echo $this->webroot;?>images/user-ico.png" style="margin-bottom:8px;">
    </div>
    <h1><small style="font-style:italic;font-weight:normal;">Hai,</small> <?php echo $user['User']['name'] ?></h1>
    <p>
      <strong>ID Member:</strong> <?php echo $user['User']['id_member'] ?><br/>
      <strong>TTL:</strong> <?php echo $user['User']['lahir'] ?><br/>
      <strong>Alamat:</strong> <?php echo $user['User']['alamat'] ?><br/>
    </p>
  </div>
  <div class="history-resume">
    
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
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
          <?php echo $time->niceShort($rent['Rent']['created'],null); ?>
        </td>
      <?php else:?>
        <td>
          <?php echo $time->niceShort($rent['Rent']['tgl_pinjam'],null); ?>
        </td>
        <td>
          <?php echo $time->niceShort($rent['Rent']['tgl_kembali'],null); ?>
        </td>
        <td>
          <?php 
          
            echo $time->niceShort($rent['Rent']['tgl_dikembalikan']); 
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

  </div>
</div>
