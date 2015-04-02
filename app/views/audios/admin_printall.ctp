<div class="mask1">
<h1 style="padding-top: 40px;">Semua Daftar Audio <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #A3D046;">
        <th><a href="#">Id Pustaka</a></th>
        <th><a href="#">Judul</a></th>
        <th><a href="#">Kategori</a></th>
        <th><a href="#">Penyanyi</a></th>
        <th><a href="#">Pengarang</a></th>
        <th><a href="#">Tahun</a></th>
        <th>Didaftarkan</th>
          
        </tr>
      </thead>
      <tbody id="audiotable">

        <?php 
        $no = 0;
        ?>
        <?php foreach ($listaudio as $audio) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $audio['Audio']['id'];?>">
          <td class="aligncenter"><?php echo $audio['Audio']['id_pustaka']?></td>
          <td><?php echo $audio['Audio']['title']?></td>
          <td><?php echo $audio['Category']['name']?></td>
          <td><?php echo $audio['Audio']['sutradara']?></td>
          <td><?php echo $audio['Audio']['produksi']?></td>
          <td class="aligncenter"><?php echo $audio['Audio']['tahun']?></td>
          <td class="aligncenter"><?php echo $audio['Video']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
