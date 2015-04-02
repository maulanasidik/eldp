<?php echo $html->css('print','',array('media'=>'print')); ?>

<style type="text/css">
  body{
    margin: 0;
    text-align: left;
  }
</style>

<?php e($content_for_layout); ?>
<script type="text/javascript">
window.print();
</script>