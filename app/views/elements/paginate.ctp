

<div id="pagination" class="paginationadmin"> 
<?php echo $paginator->prev('<strong>&#65513;</strong> '.__('Sebelumnya', true), array('escape'=>false,'id'=>'prevpage','class'=>'linkpaginate','data-scope'=>$data_scope,'data-background'=>$data_background), null, array('escape'=>false,'id'=>'prevpage','class'=>'disabled_paginate_el','data-scope'=>$data_scope,'data-background'=>$data_background));?>

<?php echo $paginator->numbers(array(
  'before' => '',
  'after' => '',
  'separator' => '',
  'data-scope'=>$data_scope,
  'data-background'=>$data_background,
  'class' => 'number linkpaginate'
));
?>

<?php echo $paginator->next(__('Selanjutnya', true).' <strong>&#65515;</strong>', array('escape'=>false,'id'=>'nextpage','class'=>'linkpaginate','data-scope'=>$data_scope,'data-background'=>$data_background), null, array('escape'=>false,'id'=>'nextpage','class' => 'disabled_paginate_el','data-scope'=>$data_scope,'data-background'=>$data_background));?>

</div>
<script type="text/javascript">

$(document).on('click', '.paginationadmin a', function(e) {
        e.preventDefault();

       var gotourl = $(this).attr('href');

        var scope = $(this).data('scope');

        var background = $(this).data('background');

        window.colorfont = $(this).data('fontcolor');

        var table = $(this).data('table');



        
        
       
        
        setTimeout(function() {

          

          //$('.loadingstate').fadeOut();
         
          

         

          $.ajax({
            type: "POST",
            dataType: "html",
            cache: false,
            url: gotourl,
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              
              //$('#'+scope+'.contenareaajax').fadeIn();
              $('.pagecontent').html(data);

              //$('#'+scope+'.contenareaajax').find('tbody#categorytable').addClass(table);
              
              
              
            } // success
          }); // ajax

          
          
          
          

        }, 1000);
});


 



</script>