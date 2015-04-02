
<div class="mask1">
  <h1 style="padding-top: 40px;">Semua Daftar Video <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #1682a9;">
          <th><a href="#">ID Pustaka</a></th>
          <th><a href="#">Judul</a></th>
          <th><a href="#">Kategori</a></th>
          <th><a href="#">Sutradara</a></th>
          <th><a href="#">Produksi</a></th>
          <th><a href="#">Tahun</a></th>
          <th>Didaftarkan</th>
          
        </tr>
      </thead>
      <tbody id="videotable">

        <?php 
        $no = 0;
        ?>
        <?php foreach ($listvideo as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="entry_record_<?php echo $entry['Video']['id']?>">
          <td class="aligncenter"><?php echo $entry['Video']['id_buku']?></td>
          <td><?php echo $entry['Video']['title']?></td>
          <td><?php echo $entry['Category']['name']?></td>
          <td><?php echo $entry['Video']['sutradara']?></td>
          <td><?php echo $entry['Video']['produksi']?></td>
          <td class="aligncenter"><?php echo $entry['Video']['tahun']?></td>
          <td class="aligncenter"><?php echo $entry['Video']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
