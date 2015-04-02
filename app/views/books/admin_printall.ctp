

<div class="mask1">
<h1 style="padding-top: 40px;">Semua Daftar Buku <?php echo $profile['Profile']['name'] ?></h1>
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table" style="background-color: #c53437;">
          <th>ID</th>
          <th>ISBN</th>
          <th class="largest-row"><a>Judul</a></th>
          <th><a>Kategori</a></th>
          <th><a>Penerbit</a></th>
          <th><a>Pengarang</a></th>
          <th><a>Jumlah Buku</a></th>
          <th><a>Rusak</a></th>
          <th><a>Bisa Dipinjam</a></th>
          <th><a>Didaftarkan</a></th>
          
        </tr>
      </thead>

      <tbody id="booktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbook as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow " id="entry_record_<?php echo $entry['Book']['id']?>">
          <td class="aligncenter"><?php echo $entry['Book']['id_buku']?></td>
          <td class="aligncenter"><?php echo $entry['Book']['isbn']?></td>
          <td><?php echo $entry['Book']['title']?></td>
          <td><?php echo $entry['Category']['name']?></td>
          <td><?php echo $entry['Book']['penerbit']?></td>
          <td><?php echo $entry['Book']['pengarang']?></td>
          <td class="aligncenter"><?php echo $entry['Book']['jml_buku']?></td>
          <td class="aligncenter"><?php echo $entry['Book']['jml_rusak']?></td>
          <td class="aligncenter"><?php
          $pinjam = $entry['Book']['bisa_dipinjam'];
          if ($pinjam == 1) {
            echo 'Iya';
          }else{
            echo 'Tidak';
          }
          ?></td>
          <td class="aligncenter"><?php echo $entry['Book']['created']?></td>
          
          
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <div class="bottom_line1">&nbsp;</div>
  </div>
