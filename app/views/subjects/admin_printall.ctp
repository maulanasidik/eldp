
<div class="mask1">
  <h1 style="padding-top: 40px;">Semua Daftar Pustaka Multimedia <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #1682a9;">
          <th>ID Pustaka</th>
          <th class="largest-row">Judul</th>
          <th>Kategori</th>
          <th>Penerbit</th>
          <th>Tahun</th>
          <th>Resensi</th>
          <th>Letak Folder</th>
          <th>File Utama</th>
          <th>Zip File</th>
          <th>Tanggal Dibuat</th>
          
        </tr>
      </thead>
      <tbody id="cdtable">

        <?php 
        $no = 0;
        ?>
        <?php foreach ($entry as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="cd_record_<?php echo $entry['Subject']['id']?>">
          <td><?php echo $entry['Subject']['id_pustaka']?></td>
          <td><?php echo $entry['Subject']['title']?></td>
          <td><?php echo $entry['Category']['name']?></td>
          <td><?php echo $entry['Subject']['penerbit']?></td>
          <td><?php echo $entry['Subject']['tahun']?></td>
          <td><?php echo $entry['Subject']['details']?></td>
          <td><?php echo $entry['Subject']['folder_name']?></td>
          <td><?php echo $entry['Subject']['file_name']?></td>
          <td><?php echo 'CD-'.$entry['Subject']['id_pustaka'].'.zip';?></td>
          <td><?php echo $entry['Subject']['created']; ?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
