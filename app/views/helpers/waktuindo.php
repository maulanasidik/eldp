<?php 
/* 
        Flow Player Helper (free video player) 
        Requed helpers HTML, Javascript 
*/ 
Class WaktuindoHelper extends AppHelper { 

var $helpers = array('Html', 'Javascript'); 
     
    function waktuindo($datawaktu){

    $waktu=explode('-',$datawaktu);
    if ($waktu[1] == '01')  //jika 01 maka januari
        {
            $bulan='Januari';
        }
    elseif ($waktu[1] == '02')  
        {
            $bulan='Februari';
        }
    elseif ($waktu[1] == '03')  
        {
            $bulan='Maret';
        }
    elseif ($waktu[1] == '04')  
        {
            $bulan='April';
        }
    elseif ($waktu[1] == '05')  
        {
            $bulan='Mei';
        }
    elseif ($waktu[1] == '06')  
        {
            $bulan='Juni';
        }
    elseif ($waktu[1] == '07')  
        {
            $bulan='Juli';
        }
    elseif ($waktu[1] == '08')  
        {
            $bulan='Agustus';
        }
    elseif ($waktu[1] == '09')  
        {
            $bulan='September';
        }
    elseif ($waktu[1] == '10')  
        {
            $bulan='Oktober';
        }
    elseif ($waktu[1] == '11')  
        {
            $bulan='November';
        }
    elseif ($waktu[1] == '12')  
        {
            $bulan='Desember';
        }
    else  
        {
            $bulan='00';
        }
    return $this->output("$waktu[2] $bulan $waktu[0]"); 
    }
    
} 

?>