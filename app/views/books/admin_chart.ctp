
<style type="text/css">
.metro h2.charttitle {
	font-size: 26px;
	color: #fff;
	line-height: 40px;
	margin-bottom: 27px;
	font-weight: 300;
	width: 100%;
	
}
</style>

<script>
	

    var chart;

    var chartData = [
    {
        "bulan": "Januari",
        "jumlah": "<?php echo $jumlahbulan1; ?>",
        "color": "#FF0F00"
    },
    {
        "bulan": "Februari",
        "jumlah": "<?php echo $jumlahbulan2; ?>",
        "color": "#FF6600"
    },
    {
        "bulan": "Maret",
        "jumlah": "<?php echo $jumlahbulan3; ?>",
        "color": "#FF9E01"
    },
    {
        "bulan": "April",
        "jumlah": "<?php echo $jumlahbulan4; ?>",
        "color": "#FCD202"
    },
    {
        "bulan": "Mei",
        "jumlah": "<?php echo $jumlahbulan5; ?>",
        "color": "#F8FF01"
    },
    {
        "bulan": "Juni",
        "jumlah": "<?php echo $jumlahbulan6; ?>",
        "color": "#B0DE09"
    },
    {
        "bulan": "July",
        "jumlah": "<?php echo $jumlahbulan7; ?>",
        "color": "#04D215"
    },
    {
        "bulan": "Agustus",
        "jumlah": "<?php echo $jumlahbulan8; ?>",
        "color": "#0D8ECF"
    },
    {
        "bulan": "September",
        "jumlah": "<?php echo $jumlahbulan9; ?>",
        "color": "#0D52D1"
    },
    {
        "bulan": "Oktober",
        "jumlah": "<?php echo $jumlahbulan10; ?>",
        "color": "#2A0CD0"
    },
    {
        "bulan": "November",
        "jumlah": "<?php echo $jumlahbulan11; ?>",
        "color": "#8A0CCF"
    },
    {
        "bulan": "Desember",
        "jumlah": "<?php echo $jumlahbulan12; ?>",
        "color": "#CD0D74"
    },
    
];


    var chart = AmCharts.makeChart("chartdiv", {
        type: "serial",
        dataProvider: chartData,
        categoryField: "bulan",
        depth3D: 20,
        angle: 30,
        theme: "light",
        titles: [
	    {
	      size: 20,
	      text: "Jumlah Buku Baru <?php echo $year;?>"
	    }
	  	],

        categoryAxis: {
            labelRotation: 90,
            gridPosition: "start",
            title: "Bulan"
        },

        valueAxes: [{
            title: "Jumlah"
        }],

        graphs: [{
        	
            valueField: "jumlah",
            colorField: "color",
            type: "column",
            lineAlpha: 0,
            fillAlphas: 1
        }],

        chartCursor: {
            cursorAlpha: 0,
            zoomable: false,
        },
        "export": {
            "enabled": true,
            "menu": [
            {
		      "format": "JPG",
		      "label": "Save as JPG",
		      "title": "Export chart to JPG",
		    }, 
		    {
		      "format": "xlsx",
		      "label": "Save as xlsx",
		      "title": "Export chart to JPG",
		    },"PRINT"
		    ]
        }

    });
</script>

<div class="pagecontent">
  <h2 class="header">LAPORAN</h2>
  <h4 class="subheader">TRANSAKSI PEMINJAMAN</h4>
<div id="a" class="book imageNavinside">
  &nbsp;
  <div class="loadinginsidetitle" style="display:none;">
    <img src="<?php echo $this->webroot;?>img/el2/loading-new.gif"> 
  </div>
</div>

<div class="mask1 contenareaajax">

	<div id="dropdownyear_container">
		<span> Pilih tahun</span>
		<select id="dropdownyear">
		  <option id="yearselected_<?php echo $cur_year?>" value="<?php echo $this->webroot.'admin/users#!/url=/eldp/admin/books/chart/'.$cur_year?>" ><?php echo $cur_year;?></option>
		  <option id="yearselected_<?php echo ($cur_year-1)?>" value="<?php echo $this->webroot.'admin/users#!/url=/eldp/admin/books/chart/'.($cur_year-1);?>" ><?php echo $cur_year-1;?></option>
		  <option id="yearselected_<?php echo ($cur_year-2)?>" value="<?php echo $this->webroot.'admin/users#!/url=/eldp/admin/books/chart/'.($cur_year-2);?>" ><?php echo $cur_year-2;?></option>
		</select>
	</div>
	<div class="transp actions">
		<div id="left">
			<div class="chart">
				
				<div id="chartdiv" style="width: 100%; height: 400px;"></div>
				<div class="dont-print">
				<?php //echo $fusionCharts->render('Column3D Chart'); 
				
				?>
				<br/>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
  // bind change event to select
  $('#dropdownyear').find('#yearselected_<?php echo $year;?>').attr('selected','selected');
  $('#dropdownyear').bind('change', function () {
      var url = $(this).val(); // get selected value
      if (url) { // require a URL
          window.location = url; // redirect
      }
      $(this).attr('selected','selected');
      return false;
  });
});
</script>

<?php echo $this->renderElement('menu_tabs_footer'); ?>
