<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Elibrary Admin</title>
  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600' rel='stylesheet' type='text/css'>-->
  
  <meta name="viewport" content="width=1024,initial-scale=1.00, minimum-scale=1.00"/>

  <?php echo $html->css('responsive'); ?>
  <?php echo $html->css('metro-bootstrap'); ?>
  <?php echo $html->css('iconFont'); ?>
  <?php echo $html->css('typography'); ?>
  <?php echo $html->css('entypo/entypo'); ?>
  
  <?php echo $html->css('settings'); 
  echo $html->css('/skin/pink.flag/jplayer.pink.flag.css');
  ?>
  <?php 

  echo $html->css('dropzone'); 
  echo $html->css('styles'); 
  
  echo $html->css('/js/amcharts/plugins/export/export.css');

  
  
  
  ?>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <?php 

    echo $html->css('el2/layout'); 
    echo $html->css('el2/nav'); 
    echo $html->css('el2/tiles'); 
    echo $html->css('/plugins/lightbox/plugin.css'); 
    echo $html->css('/plugins/plugintemplate/plugin.css'); 
    echo $html->css('/plugins/tileslide/plugin.css'); 
    echo $html->css('/plugins/tileslideshow/plugin.css'); 
    echo $html->css('/plugins/tiletemplate/plugin.css'); 
    ?>
    
    <style>

    html{background-color:#0F6D32;}

    #bgImage { 
      position:fixed; top:0; left:0; z-index:-4; min-width:%;min-height:100%;
    }
    .tile{
      -webkit-transition-property: box-shadow, margin-left,  margin-top;
      -webkit-transition-duration: 0.25s, 0.5s, 0.5s;
      -moztransition-property: box-shadow, margin-left,  margin-top;
      -moz-transition-duration: 0.25s, 0.5s, 0.5s;
      -o-transition-property: box-shadow, margin-left,  margin-top;
      -o-transition-duration: 0.25s, 0.5s, 0.5s;
      -ms-transition-property: box-shadow, margin-left,  margin-top;
      -ms-transition-duration: 0.25s, 0.5s, 0.5s;
      transition-property: box-shadow, margin-left,  margin-top;
      transition-duration: 0.25s, 0.5s, 0.5s;
    }
    #subNavWrapper{
        position:relative;
        right:0;
        left:0;
    }
    /*#centerWrapper{
        margin-top:40px;
    }*/
    </style> 
    <!--[if IE]>
      <script src="js/html5.js"></script>
       <![endif]-->
      <!--[if lt IE 9]>
      <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="js/html5.js"></script>
    <![endif]-->
    <!--[if !IE]>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      
      
    <![endif]-->

      <!--[if !IE]>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <![endif]-->
    <script type="text/javascript">window.jQuery || document.write('<\/script><script type="text/javascript" src="<?php echo $this->webroot;?>js/el2/jquery1102.js"><\/script>')</script>
      
      <?php echo $javascript->link('/js/el2/plugins.js'); ?>
      
      
      <script type="text/javascript">

      
      scale = 150;
      spacing = 10;
      theme = '';
      $group.titles = [""];
      $group.spacingFull = [5];
      $group.inactive.opacity = "1";
      $group.inactive.clickable = "";
      $group.showEffect = 0;
      $group.direction = "horizontal";

      mouseScroll = "";

      siteTitle = 'E-Library 2.0';
      siteTitleHome = 'Home';
      showSpeed = 400;
      hideSpeed = 300;
      scrollSpeed = 550;

      device = "";
        scrollHeader = "";
        disableGroupScrollingWhenVerticalScroll = "";

      /*For background image*/
      bgMaxScroll= "";
      bgScrollSpeed = "";

      /*For responsive */
      autoRearrangeTiles = "1";
      autoResizeTiles = "1";
      rearrangeTreshhold = 2;

      /*Locale */
      lang = "en";
      l_pageNotFound = "";
      l_pageNotFoundDesc = "";
      l_menu = "";
      l_goToFullSiteRedirect = "";
      pageTitles = '';pageURL = '';
      </script>

      <?php
      echo $javascript->link('/plugins/lightbox/plugin.js');
      echo $javascript->link('/plugins/plugintemplate/plugin.js');
      echo $javascript->link('/plugins/tileslide/plugin.js');
      echo $javascript->link('/plugins/tileslideshow/plugin.js');
      echo $javascript->link('/plugins/tiletemplate/plugin.js');
      echo $javascript->link('/js/el2/functions.js');
      echo $javascript->link('/js/el2/main.js');
      ?>
      
      
      <noscript>
        <style>#tileContainer{display:block}</style>
      </noscript>

  <?php

  echo $javascript->link('jquery.jplayer.min.js');
  echo $javascript->link('/client/js/jwplayer.js');

  echo $javascript->link('amcharts/amcharts.js');
  echo $javascript->link('amcharts/serial.js');
  echo $javascript->link('amcharts/plugins/export/export.js');
  echo $javascript->link('amcharts/themes/light.js');



  
  ?>

  <?php echo $html->css('jquery.qtip'); ?>
  <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <link rel="stylesheet" type="text/css" href="css/ie8.css" />
  <![endif]-->

</head>

  <body class="full ">

    <div class="loadingpagecontainer">
      <div class="loader loadingstateall" style="">
        <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    </div>
      <p class="loaderstat" style="color:#fff;">Memuat data <br/>mohon menunggu.. </p>
    </div>

  <img src='<?php echo $this->webroot;?>img/el2/bg/matdes.jpg' alt='background-image' id='bgImage'/>  

  <header>
    <div id="headerWrapper">
      <div id="headerCenter">
        
        
          
      </div>
    </div>

  </header>

  <div id="wrapper">



    <div id="centerWrapper">
      
      <div id="subhome" >
        <!--<a href="#!/" class="uphome">Profile Perpustakaan</a>
              <a href="#!/" class="uphome">Banner Management</a>
              <a href="#!/" class="uphome">Pengadaan Buku</a>
              <a href="#!/" class="uphome">Ubah Sandi</a>
              <a href="#!/" class="uphome">Alamat Server</a>
              <a href="#!/" class="uphome">Logout</a>-->
      </div>



   
      <?php e($content_for_layout); ?>
    </div>
  </div><!-- /container -->

  </div>
  

<div class="searchcontainer metro" style="display:none;opacity:0;">
  <header>
    <h1 style="font-size:30px;margin-top:20px;">Pencarian Buku</h1>
    <p style="text-align:center;color:#5f5f5f;"></p>
  </header>
  <?php echo $form->create('Book',array('action'=>'admin_search','enctype'=>'multipart/form-data','class'=>'formsearch'));?>
  <fieldset>
    <div class="input-control text" style="width:100%;">
        <input type="text" placeholder="ketikkan pencarian disini, kemudian tekan enter" name="data[Book][keyword]" class="searchforminput clearwhenreload" autocomplete="off"/>
        <button type="submit" class="btn-search" id="searchbooksubmit"></button>
    </div>
    
  </fieldset>
  <?php echo $form->end();?>
</div>



<div class="searchcontainer_transaksi metro" style="display:none;opacity:0;">
  <div id="loadinginsidebox">
    <h1>LOADING</h1>
    <p > Silahkan Menunggu</p>
    <img src="<?php echo $this->webroot;?>img/el2/Preloader_5.gif"/>
  </div>
  <div id="contentinsidebox">
    <header>
      <h1 style="font-size:30px;margin-top:20px;">Pencarian Buku</h1>
      <p style="text-align:center;color:#5f5f5f;"></p>
    </header>
    <?php echo $form->create('Book',array('action'=>'admin_search','enctype'=>'multipart/form-data','class'=>'formsearch'));?>
    <fieldset>
      <div class="input-control text" style="width:100%;">
          <input type="text" placeholder="ketikkan pencarian disini, kemudian tekan enter" name="data[Book][keyword]" class="searchforminput clearwhenreload" autocomplete="off"/>
          <button type="submit" class="btn-search" id="searchbooksubmit"></button>
      </div>
      
    </fieldset>
    <?php echo $form->end();?>
  </div>
</div>




  
  <?php echo $javascript->link('jquery.form.min.js'); ?>

  
  <?php echo $javascript->link('modernizr.custom.js'); ?>
  <?php echo $javascript->link('jquery.widget.js'); ?>


  <?php echo $javascript->link('metro.min.js'); ?>

  
  <?php echo $javascript->link('jquery.debouncedresize.js'); ?>

  <?php echo $javascript->link('retina.js'); ?>
  <?php echo $javascript->link('jquery.qtip.js'); ?>
  <?php echo $javascript->link('settings.js'); ?>
  <?php echo $javascript->link('dropzone.js'); 
  echo $javascript->link('/client/js/jquery.transit.min.js');
  ?>
  <?php echo $javascript->link('custom.js'); 
  ?>


  
  <script type="text/javascript">
    

    window.areatoswitch = '';
    $( '.contenareaajax' ).on( "click", "a.deleteitemtable", function(e) {

      e.preventDefault(); // avoids calling preview.php
      if(confirm('Apakah anda yakin akan menghapus item ini ?')){
          //$.fancybox.showLoading();

          var clickedItem = $(this);
          $('.loadingpagecontainer').show();
          
          $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
            url: $(this).data('url'), // preview.php
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              console.log(data);
              
              // on success, post (preview) returned data in fancybox
              if(data.status == "true"){

                  //clickedItem.parents('tr').removeClass('details-open');
                  
                clickedItem.parents('tr').fadeOut('slow',function(){
                    $('.loadingpagecontainer').hide();
                    clickedItem.parents('tr').remove();
                    alert(data.flashMessage);
                });
              }else{

              }
            } // success
          }); // ajax

      }else{
          //alert('Batal menghapus')
      }
    }); // on

     
    




    $(".gotolinkspecial").on('click', function(){
        $('.loadingpagecontainer').show();
        console.log('clicked');
        var thisurl = $(this).data('url');
        var titlePage = $(this).data('title');

        var Datawidth = $(this).data('width');
        var Dataheight = 300;


        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: thisurl, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            showdialogspecial(data,titlePage,Datawidth);
            
          } // success
        }); // ajax

    });

    

    $( '.contenareaajax' ).on( 'click', 'a.gotolinkanchor', function () {

        $('.loadingpagecontainer').show();
        console.log('clicked');

        var thisurl = $(this).data('href');
        var titlePage = $(this).data('title');

        var Datawidth = $(this).data('width');
        var Dataheight = $(this).data('height');

        console.log(thisurl);
        $.ajax({
          type: "GET",
          dataType: "html",
          cache: false,
          url: thisurl, // preview.php
          //data: $("#postp").serializeArray(), // all form fields
          success: function (data) {
            
            showdialog(data,titlePage,Datawidth,Dataheight);
            

          } // success
        }); // ajax

      
    }); // ready


    function showdialogspecial(datashow,titlePage,Datawidth,Dataheight){

      $('.loadingpagecontainer').hide();
      
      $.Dialog({
          overlay: true,
          draggable:true,
          shadow: true,
          flat: true,
          width:Datawidth,
          height:400,
          padding: 10,
          icon: '<span class="icon icon-book"></span>',
          title: titlePage,
          shadow: true,
          onShow: function(_dialog){
            var content = datashow;
            $.Dialog.content(content);
            $('.window-overlay .shadow').css('overflow','scroll');
            $('.window-overlay .shadow').css('maxHeight','600px');
              
          }
      });
    }

  


    function showdialog(datashow,titlePage,Datawidth,Dataheight){

      $('.loadingpagecontainer').hide();
      
      $.Dialog({
          overlay: true,
          draggable:true,
          shadow: true,
          flat: true,
          width:Datawidth,
          height:Dataheight,
          padding: 10,
          icon: '<span class="icon icon-book"></span>',
          title: titlePage,
          shadow: true,
          onShow: function(_dialog){
              var content = datashow;

            
            $.Dialog.content(content);
              
          }
      });
    }



    

  
    $(".changepage").on('click', function(){

        
        

        var gotourl = $(this).attr('href');

        var scope = $(this).data('scope');

        var background = $(this).data('background');

        var colorfont = $(this).data('fontcolor');

        var table = $(this).data('table');



        $('.rb-span-12 h3 a').css('color','#fff');
        $(this).css('color',colorfont);
        $('.spinner_container').show();
        $('#'+scope+'.contenareaajax').hide();
        $('.tohide').hide();
        $( ".keteranganatas" ).animate({
          height:"13px"
          
        }, 1000, function() {
        // Animation complete.
        });

        //$('.imageNavinside').hide();
        //$('.preloadersmall').show();
        
        

        //$('.loadingstate').show();


        
        var classElement = $(this);
        $('.'+scope+'.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        
        setTimeout(function() {

          

          //$('.loadingstate').fadeOut();
          $('.tohide').show();
          $( ".keteranganatas" ).animate({
            height:"190px"
            
          }, 1000, function() {
          // Animation complete.
          });
          window.areatoswitch = $(classElement).data('countinside');
          console.log(window.areatoswitch);
          switch(window.areatoswitch) {
          case 1:
              $('.countinside_1_container').show();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
              break;
          case 2:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').show();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
              break;

          case 3:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').show();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
              break;

          case 4:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').show();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
              break;

          case 5:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').show();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
              break;

          case 6:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').show();
              $('.countinside_7_container').hide();
              break;

          case 7:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').show();
              break;

          default:
              $('.countinside_1_container').hide();
              $('.countinside_2_container').hide();
              $('.countinside_3_container').hide();
              $('.countinside_4_container').hide();
              $('.countinside_5_container').hide();
              $('.countinside_6_container').hide();
              $('.countinside_7_container').hide();
          }


          $('.spinner_container').hide();

          $.ajax({
            type: "POST",
            dataType: "html",
            cache: false,
            url: gotourl,
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              

              
              $('#'+scope+'.contenareaajax').fadeIn();
              $('#'+scope+'.contenareaajax').html(data);

              $('#'+scope+'.contenareaajax').find('tbody#categorytable').addClass(table);
              
              
              
            } // success
          }); // ajax

          
          $('.'+scope+'.contentareatoload').css({
            'background-color': background,
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
          });
          //$('.preloadersmall').hide();
          //$('.imageNavinside').show();

          //function for add transaction
          $('#cancel_transaction_first').attr('data-scope',areatoswitch);
          

        }, 1000);

        
    transcation_back();  
        
    });
    

    


    $(".loaddefaultcontent").on('click', function(){
        
        var gotourl = $(this).data('href');

        var scope = $(this).data('scope');

        var background = $(this).data('background');

        var colorfont = $(this).data('fontcolor');

        var table = $(this).data('table');


        $('a.changepage').css('color','#fff');
        $(this).parent().find('.rb-overlay > .rb-week .menufirst > a').css('color',colorfont);
        
        $('.countinside_1_container').show();
        $('.countinside_2_container').hide();
        $('.countinside_3_container').hide();
        $('.countinside_4_container').hide();
        $('.countinside_5_container').hide();
        $('.countinside_6_container').hide();
        $('.countinside_7_container').hide();

        $('.spinner_container').show();
        $('#'+scope+'.contenareaajax').hide();
 
        var classElement = $(this);
        $('.'+scope+'.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });

        $( ".keteranganatas" ).animate({
          height:"190px"
          
        }, 1000, function() {
        // Animation complete.
        });
        
        setTimeout(function() {

          $('.spinner_container').hide();

          $.ajax({
            type: "POST",
            dataType: "html",
            cache: false,
            url: gotourl,
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              
              $('#'+scope+'.contenareaajax').fadeIn();
              $('#'+scope+'.contenareaajax').html(data);

              $('#'+scope+'.contenareaajax').find('tbody#categorytable').addClass(table);
              
              $('.'+scope+'.contentareatoload').css({
                'background-color': background,
                '-webkit-transition': 'background-color 300ms linear',
                '-moz-transition': 'background-color 300ms linear',
                '-o-transition': 'background-color 300ms linear',
                '-ms-transition': 'background-color 300ms linear',
                'transition': 'background-color 300ms linear'
              });
              
            } // success
          }); // ajax

        }, 2000);
        window.areatoswitch = 1;
        transcation_back();

    });  
    $( '.rb-span-12' ).on( "click", "a.laporanchange", function() {
    
      
      var actionactive = $(this).data('actionactive');
      var datayeartoprocess = $(this).data('yeartoprocees');
      
      $('.button_dropdown_changeyear').text(datayeartoprocess);
      console.log(actionactive);
      var url_current_year = actionactive+'/'+datayeartoprocess;
      var url_current_year_minus_4 = actionactive+'/'+(datayeartoprocess-4);
      var url_current_year_minus_3 = actionactive+'/'+(datayeartoprocess-3);
      var url_current_year_minus_1 = actionactive+'/'+(datayeartoprocess-1);
      var url_current_year_minus_2 = actionactive+'/'+(datayeartoprocess-2);

      $(this).parent().parent().parent().find('.keteranganatas ul.laporandropdown li a#url_current_year').attr('href',url_current_year);

      $(this).parent().parent().parent().find('.keteranganatas ul.laporandropdown li a#url_current_year_minus_4').attr('href',url_current_year_minus_4);

      $(this).parent().parent().parent().find('.keteranganatas ul.laporandropdown li a#url_current_year_minus_3').attr('href',url_current_year_minus_3);

      $(this).parent().parent().parent().find('.keteranganatas ul.laporandropdown li a#url_current_year_minus_1').attr('href',url_current_year_minus_1);

      $(this).parent().parent().parent().find('.keteranganatas ul.laporandropdown li a#url_current_year_minus_2').attr('href',url_current_year_minus_2);

      

    }); 


    $(".loaddefaultcontent.laporanchange").on('click', function(){
    
      
      var actionactive = $(this).data('actionactive');
      var datayeartoprocess = $(this).data('yeartoprocees');
      $('.button_dropdown_changeyear').text(datayeartoprocess);
      console.log(actionactive);
      var url_current_year = actionactive+'/'+datayeartoprocess;
      var url_current_year_minus_4 = actionactive+'/'+(datayeartoprocess-4);
      var url_current_year_minus_3 = actionactive+'/'+(datayeartoprocess-3);
      var url_current_year_minus_1 = actionactive+'/'+(datayeartoprocess-1);
      var url_current_year_minus_2 = actionactive+'/'+(datayeartoprocess-2);
      $(this).parent().find('.rb-overlay .rb-week ul.laporandropdown li a#url_current_year').attr('href',url_current_year);
      $(this).parent().find('.rb-overlay .rb-week ul.laporandropdown li a#url_current_year_minus_4').attr('href',url_current_year_minus_4);

      $(this).parent().find('.rb-overlay .rb-week ul.laporandropdown li a#url_current_year_minus_3').attr('href',url_current_year_minus_3);

      $(this).parent().find('.rb-overlay .rb-week ul.laporandropdown li a#url_current_year_minus_1').attr('href',url_current_year_minus_1);

      $(this).parent().find('.rb-overlay .rb-week ul.laporandropdown li a#url_current_year_minus_2').attr('href',url_current_year_minus_2);

    }); 
    

    $(".laporan_changeyear").on('click', function(){

        var gotourl = $(this).attr('href');

        var text = $(this).text();

        var scope = $(this).data('scope');

        var background = $(this).data('background');

        

        var table = $(this).data('table');



        $('.dropdown_changeyear').hide();
        $('.button_dropdown_changeyear').text(text);
        
        $('.spinner_container').show();
        $('#'+scope+'.contenareaajax').hide();
        
        

        //$('.imageNavinside').hide();
        //$('.preloadersmall').show();
        
        

        //$('.loadingstate').show();


        
        var classElement = $(this);
        $('.'+scope+'.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        
        setTimeout(function() {

          

          //$('.loadingstate').fadeOut();
          
          


          $('.spinner_container').hide();

          $.ajax({
            type: "POST",
            dataType: "html",
            cache: false,
            url: gotourl,
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              
              $('#'+scope+'.contenareaajax').fadeIn();
              $('#'+scope+'.contenareaajax').html(data);

              $('#'+scope+'.contenareaajax').find('tbody#categorytable').addClass(table);
              
              
              
            } // success
          }); // ajax

          
          $('.'+scope+'.contentareatoload').css({
            'background-color': background,
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
          });
          //$('.preloadersmall').hide();
          //$('.imageNavinside').show();

          //function for add transaction
          $('#cancel_transaction_first').attr('data-scope',areatoswitch);
          

        }, 1000);

        
    transcation_back();  
        
    });
    
    
        
    $( '.contenareaajax' ).on( "click", "a.deleteitemtable", function() {

      
      if (confirm('Apakah anda yakin akan menghapus item ini ?')) {
      
          //$.fancybox.showLoading();

          var clickedItem = $(this);
          $('.loadingpagecontainer').show();
          
          $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
            url: this.href, // preview.php
            //data: $("#postp").serializeArray(), // all form fields
            success: function (data) {
              console.log(data);
              
              // on success, post (preview) returned data in fancybox
              if(data.status == "true"){

                  //clickedItem.parents('tr').removeClass('details-open');
                  
                clickedItem.parents('tr').fadeOut('slow',function(){
                    $('.loadingpagecontainer').hide();
                    clickedItem.parents('tr').remove();
                    alert(data.flashMessage);
                });
              }else{

              }
            } // success
          }); // ajax

      }
    
    }); // on
    

    function showResponse(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.bookscope.contentareatoload').css({
            'background-color': '#c53437',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#bookscope.contenareaajax').fadeIn();

        $('#bookscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 


    function showResponse_searchphoto(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.photoscope.contentareatoload').css({
            'background-color': '#129aa1',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#photoscope.contenareaajax').fadeIn();

        $('#photoscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    

    var options_searchphoto = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchphoto  // post-submit callback
    };

    $('#searchphotosubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#photoscope.contenareaajax').hide();
        $('#PhotoAdminSearchForm').ajaxSubmit(showResponse_searchphoto);
        

        $('.photoscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });

    function showResponse_searchuser(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.memberscope.contentareatoload').css({
            'background-color': '#99C342',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#memberscope.contenareaajax').fadeIn();

        $('#memberscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_searchuser = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchuser  // post-submit callback
    };

    $('#searchusersubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#memberscope.contenareaajax').hide();
        $('#UserAdminSearchForm').ajaxSubmit(options_searchuser);
        

        $('.memberscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });

    function showResponse_searchebook(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.ebookscope.contentareatoload').css({
            'background-color': '#77234E',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#ebookscope.contenareaajax').fadeIn();

        $('#ebookscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_searchebook = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchebook  // post-submit callback
    };

    $('#searchebooksubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#ebookscope.contenareaajax').hide();
        $('#EbookAdminSearchForm').ajaxSubmit(options_searchebook);
        

        $('.ebookscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });
    


    function showResponse_searchvideo(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.videoscope.contentareatoload').css({
            'background-color': '#1682a9',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#videoscope.contenareaajax').fadeIn();

        $('#videoscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_searchvideo = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchvideo  // post-submit callback
    };

    $('#searchvideosubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#videoscope.contenareaajax').hide();
        $('#VideoAdminSearchForm').ajaxSubmit(options_searchvideo);
        

        $('.videoscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });

    function showResponse_searchaudio(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.audioscope.contentareatoload').css({
            'background-color': '#A3D046',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#audioscope.contenareaajax').fadeIn();

        $('#audioscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_searchaudio = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchaudio  // post-submit callback
    };

    $('#searchaudiosubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#audioscope.contenareaajax').hide();
        $('#AudioAdminSearchForm').ajaxSubmit(options_searchaudio);
        

        $('.audioscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });


    function showResponse_searchcomment(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.commentscope.contentareatoload').css({
            'background-color': '#E3328C',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#commentscope.contenareaajax').fadeIn();

        $('#commentscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_searchcomment = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchcomment  // post-submit callback
    };

    $('#searchcommentsubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#commentscope.contenareaajax').hide();
        $('#CommentAdminSearchForm').ajaxSubmit(options_searchcomment);
        

        $('.commentscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });



    //search cd

    function showResponse_search_cd(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.pusmulscope.contentareatoload').css({
            'background-color': '#16d22a',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        $('#pusmulscope.contenareaajax').fadeIn();

        $('#pusmulscope.contenareaajax').html(responseText);

        
      }, 2000);
        
    } 

    var options_search_cd = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_search_cd  // post-submit callback
    };

    $('#searchcdsubmit').on('click', function(e) {
       
        $('.spinner_container').show();
        $('#pusmulscope.contenareaajax').hide();
        $('#SubjectAdminSearchForm').ajaxSubmit(options_search_cd);
        

        $('.pusmulscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        return false;
    });




    //create transactionprocess
    $(".addtransactionbutton").on('click', function(){
          
          $('.tohide_transaction').hide();
          

          $('.content_transaction_container').fadeOut();
          
          $('.addtransaction_container').addClass('active');
          $( ".addtransaction_container" ).animate({
            marginLeft:"0",
          
          }, 500, function() {
        // Animation complete.
          });
          $('#input_id_user_searchhome').val('');
          $('#input_id_user_searchhome').focus();
          $('.changepage').css({'color':'#fff'});

          $('.iconlarge2').addClass('active');
          
          
          return false;
    });

    
    $("#cancel_transaction_first").on('click', function(){
      if(confirm('Apakah anda yakin ingin membatalkan transaksi ini ?')){
        transcation_back();
        $('.content_transaction_container').fadeIn();
        //var dataContainer = $(this).data('scope');
        console.log(window.areatoswitch);
        $('.countinside_'+window.areatoswitch+'_container').fadeIn();
        $('.datalink'+window.areatoswitch).css({'color':'rgb(194, 241, 95)'});
      }else{

      }
      
      return false;

    });

    function transcation_back(){
      $('.addtransaction_container').css({'margin-left':'-300px'});
      $('.addtransaction_container').removeClass('active');
      $('.iconlarge2').removeClass('active');


    }




    function showResponse_user_search_home(responseText, statusText, xhr, $form)  { 
      
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.rentscope.contentareatoload').css({
            'background-color': '#df9019',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        

        $('#rentscope.contenareaajax').fadeIn();

        $('#rentscope.contenareaajax').html(responseText);

        
        $('.tab-control').tabcontrol({
            effect: 'fade' // or 'slide'
        });
        focustoinputrents();
        $('.tab-control').tabcontrol().bind("tabcontrolchange", function(event, frame){
          var id = $(frame).attr("id");
          if(id=='_page_1'){
            focustoinputrents();
          }
        });

        
      }, 2000);
        
    } 

    var options_user_seacrh = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_user_search_home  // post-submit callback
    };

    $('#search_user_home_submit').on('click', function(e) {
        
        
        $('.content_transaction_container').show();
        $('.spinner_container').show();
        $('#rentscope.contenareaajax').hide();
        $('#UserSearchHomeResultForm').ajaxSubmit(options_user_seacrh);
        

        $('.rentscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });    


    $('.rb-close').on('click', function(e) {

      $.ajax({
        type: "POST",
        
        dataType: "JSON",
        cache: false,
        url: '<?php echo $this->webroot;?>/admin/users/getlivereport',
        
        success: function (data) {
          
          //$('#'+scope+'.contenareaajax').fadeIn();
          $('#livereport_booking').text(data.booking);
          $('#livereport_late').text(data.late);
          $('#livereport_back').text(data.back);  
          
        } // success
      }); // ajax

      return false;
    });


    $(".opennewtab").click(function() {
      var productLink = $(this);

      productLink.attr("target", "_blank");
      window.open(productLink.attr("href"));

      return false;
    });
      


    function showResponse_finance_search_home(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.financescope.contentareatoload').css({
            'background-color': '#007599',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        

        $('#financescope.contenareaajax').fadeIn();

        $('#financescope.contenareaajax').html(responseText);


        $('.tab-control').tabcontrol({
            effect: 'fade' // or 'slide'
        });
        
        $('.tab-control').tabcontrol().bind("tabcontrolchange", function(event, frame){
          var id = $(frame).attr("id");
          if(id=='_page_1'){
            focustoinputrents();
          }
        });

        
      }, 2000);
        
    } 

    var options_finance_seacrh = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_finance_search_home  // post-submit callback
    };


    $('#dofindfinance').on('click', function(e) {
        
        
        $('.content_transaction_container').show();
        $('.spinner_container').show();
        $('#financescope.contenareaajax').hide();
        $('#RentAdminFinancesearchForm').ajaxSubmit(options_finance_seacrh);
        

        $('.financescope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    }); 


    function showResponse_searchhistory_home(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        $('.spinner_container').hide();
        
        $('.rentscope.contentareatoload').css({
            'background-color': '#df9019',
            '-webkit-transition': 'background-color 300ms linear',
            '-moz-transition': 'background-color 300ms linear',
            '-o-transition': 'background-color 300ms linear',
            '-ms-transition': 'background-color 300ms linear',
            'transition': 'background-color 300ms linear'
        });

        

        $('#rentscope.contenareaajax').fadeIn();

        $('#rentscope.contenareaajax').html(responseText);


        $('.tab-control').tabcontrol({
            effect: 'fade' // or 'slide'
        });
        
        $('.tab-control').tabcontrol().bind("tabcontrolchange", function(event, frame){
          var id = $(frame).attr("id");
          if(id=='_page_1'){
            focustoinputrents();
          }
        });

        
      }, 2000);
        
    } 

    var options_searchhistory = {
        //target:        '#output2',   // target element to update
        //beforeSubmit:  showRequest,  // pre-submit callback
        success:       showResponse_searchhistory_home  // post-submit callback
    };


    $('#dofindtransaction').on('click', function(e) {
        
        
        $('.content_transaction_container').show();
        $('.spinner_container').show();
        $('#rentscope.contenareaajax').hide();
        $('#RentAdminSearchhistoryForm').ajaxSubmit(options_searchhistory);
        

        $('.rentscope.contentareatoload').css({
          'background-color': '#fff',
          '-webkit-transition': 'background-color 200ms linear',
          '-moz-transition': 'background-color 200ms linear',
          '-o-transition': 'background-color 200ms linear',
          '-ms-transition': 'background-color 200ms linear',
          'transition': 'background-color 200ms linear'

        });
        console.log('submitted');
        

        return false;
    });

    



    $(".showdialogwindow").on('click', function(){
      $('.loadingpagecontainer').show();
      console.log('clicked');
      var thisurl = $(this).data('url');
      var titlePage = $(this).data('title');

      var Datawidth = $(this).data('width');
      var Dataheight = $(this).data('height');

      
      $.ajax({
        type: "GET",
        dataType: "html",
        cache: false,
        url: thisurl, // preview.php
        //data: $("#postp").serializeArray(), // all form fields
        success: function (data) {
          showdialog(data,titlePage,Datawidth,Dataheight);
        } // success
      }); // ajax*/

    });
  </script>
  

 </body>
</html>