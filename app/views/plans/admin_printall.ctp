

<div class="mask1">
<h1 style="padding-top: 40px;">Semua Daftar Pengadaan Buku <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #c53437;">
          <th>ID</th>
          
          <th class="largest-row"><a>Judul</a></th>
          <th><a>Kategori</a></th>
          <th><a>Penerbit</a></th>
          <th><a>Pengarang</a></th>
          <th><a>Jumlah Buku</a></th>
          <th><a>Status</a></th>
          <th><a>Didaftarkan</a></th>
          
        </tr>
      </thead>

      <tbody id="booktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbook as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="entry_record_<?php echo $entry['Plan']['id']?>">
          <td class="aligncenter"><?php echo $entry['Plan']['id_plan']?></td>
          
          <td><?php echo $entry['Plan']['title']?></td>
          <td><?php echo $entry['Category']['name']?></td>
          <td><?php echo $entry['Plan']['penerbit']?></td>
          <td><?php echo $entry['Plan']['pengarang']?></td>
          <td class="aligncenter"><?php echo $entry['Plan']['jml_buku']?></td>
          
          <td class="aligncenter"><?php
          $pinjam = $entry['Plan']['active'];
          if ($pinjam == 1) {
            echo 'Terbeli';
          }else{
            echo 'Belum Terbeli';
          }
          ?></td>
          <td class="aligncenter"><?php echo $entry['Plan']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
