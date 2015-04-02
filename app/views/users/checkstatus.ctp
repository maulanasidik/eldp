<?php if(empty($user)):?>
<script type="text/javascript">

function closeLoading_booked(){
  $('#transaction_success').hide();
  $('#transaction_failed').hide();
  $('#RentBookedForm').clearForm();
  $('#UserCheckstatusForm').clearForm();
  $('.loadingbooking').hide();
  $('a.hideformmemberbooking').hide();
  $('a.showformmemberbooking').hide();
  $("div.showformmemberbooking").css({
    position: 'absolute',
    top: '-1000px'
  });
}
alert('tidak ditemukan data yang anda cari');
closeLoading_booked();
$.fancybox.close();
</script>
<?php else:?>
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
    <a class="history various fancybox.ajax" href="<?php echo $this->webroot;?>users/historyuser/<?php echo $user['User']['id'];?>">Lihat history</a>
  </div>
  <div class="history-resume">
    <div class="rowstatus">
      <span class="numberStatus"><?php echo $total_due_more ?></span>
      <span class="descStatus">Buku telat <br/>dikembalikan</span>
    </div>
    <div class="rowstatus" style="margin-right:10px;">
      <span class="numberStatus"><?php echo $total_booked ?></span>
      <span class="descStatus">Buku sedang <br/>di booking</span>
    </div>
    <div class="rowstatus">
      <span class="numberStatus"><?php echo $total_not_more ?></span>
      <span class="descStatus">Buku sedang <br/>dipinjam</span>
    </div>
  </div>
</div>
<?php endif;?>

<script type="text/javascript">
$(document).ready(function() {
  $(".various").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '100%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
});
</script>