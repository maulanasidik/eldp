
<div class="mask1">
  <h1 style="padding-top: 40px;">Semua Daftar Ebook <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #77234E;">
          <th>ID Pustaka</th>
          <th><a>Judul</a></th>
          <th><a>Kategori</a></th>
          <th><a>Penerbit</a></th>
          <th><a>Pengarang</a></th>
          <th><a>Tahun</a></th>
          <th>Didaftarkan</th>
          
        </tr>
      </thead>
      <tbody id="ebooktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbuku as $daftarebook) : ?>
        <?php $no++; ?>
        <tr class="altrow " id="ebook_record_<?php echo $daftarebook['Ebook']['id']?>">
          <td class="aligncenter"><?php echo $daftarebook['Ebook']['id_pustaka']?></td>
          <td><?php echo $daftarebook['Ebook']['title']?></td>
          <td><?php echo $daftarebook['Category']['name']?></td>
          <td><?php echo $daftarebook['Ebook']['penerbit']?></td>
          <td><?php echo $daftarebook['Ebook']['pengarang']?></td>
          <td class="aligncenter"><?php echo $daftarebook['Ebook']['tahun']?></td>
          <td class="aligncenter"><?php echo $daftarebook['Ebook']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
