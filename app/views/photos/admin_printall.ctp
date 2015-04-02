
<div class="mask1">
  <h1 style="padding-top: 40px;">Semua Daftar Photo <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #129aa1;">
          <th><a href="#">Id Pustaka</a></th>
          <th><a href="#">Judul</a></th>
          <th><a href="#">Kategori</a></th>
          <th><a href="#">Penerbit</a></th>
          <th><a href="#">Pengarang</a></th>
          <th><a href="#">Tahun</a></th>
          <th><a href="#">Didaftarkan</a></th>
          
        </tr>
      </thead>
      <tbody id="phototable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listphoto as $photo) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="entry_record_<?php echo $photo['Photo']['id'];?>">
          <td class="aligncenter"><?php echo $photo['Photo']['id_pustaka']?></td>
          <td><?php echo $photo['Photo']['title']?></td>
          <td><?php echo $photo['Category']['name']?></td>
          <td><?php echo $photo['Photo']['penerbit']?></td>
          <td><?php echo $photo['Photo']['pengarang']?></td>
          <td class="aligncenter"><?php echo $photo['Photo']['tahun']?></td>
          <td class="aligncenter"><?php echo $photo['Photo']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
