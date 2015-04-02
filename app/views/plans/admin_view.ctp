
<div style="float:left;width:350px;margin-right:40px;">
    <label>Judul</label>

    <div class="input-control text" data-role="input-control">
      <?php
        echo $plan['Plan']['title'];
      ?>
      
    </div>
    <label>Kategori</label>

    <div class="input-control text" data-role="input-control">
    <?php
    echo $plan['Category']['name'];
    ?>
    </div>

    <label>Pengarang</label>
    <div class="input-control text" data-role="input-control">

    <?php
    echo $plan['Plan']['pengarang'];

    ?>
    </div>


     <label>Penerbit</label>
        <div class="input-control text" data-role="input-control">
    <?php
    echo $plan['Plan']['penerbit'];

    ?>

    </div>

    

</div>

<div style="float:left;width:350px;">

    <label>Tahun Terbit</label>
    <div><?php echo $plan['Plan']['tahun']?>
    </div>

    <label>Jumlah Buku</label>
    <div><?php echo $plan['Plan']['jml_buku']?>
    </div>
    
    <label>Status</label>
    <div>
        <?php $notifcetak = $entry['Plan']['active'];
          
          if($notifcetak  == 1){
            echo 'Terbeli';
          }else{
            echo "Belum Terbeli";
          }
          ?>
    </div>

    <label>Tanggal Didaftarkan</label>

    <div class="input-control text" data-role="input-control">
        <?php
            echo $plan['Plan']['created'];
        ?>
          
    </div>

    <label>Tanggal Edit Terakhir</label>

    <div class="input-control text" data-role="input-control">
        <?php
            echo $plan['Plan']['modified'];
        ?>
          
    </div>
        
</div>      

    <div style="clear:both;float:none;margin-bottom:30px;"/>
   