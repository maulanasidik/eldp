<?php 
App::import('Vendor','tcpdf/tcpdf'); 

class MC_TCPDF extends TCPDF {

    public function PrintChapter() {
        
        // print chapter body
        //$this->printbarcode($mode);
    }
} // end of extended class

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(104.13, 18), true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 027');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetMargins(-2, 3, 0);
$pdf->SetAutoPageBreak(FALSE, 0);


// set auto page breaks


// set image scale factor


// ---------------------------------------------------------

// set a barcode on the page footer
//$pdf->setBarcode(date('Y-m-d H:i:s'));

// set font
$pdf->SetFont('helvetica', '', 3);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


$style = array(
'position' => '',

'stretch' => false,
'fitwidth' => true,
'cellfitalign' => '',
'border' => false,
'hpadding' => 'auto',
'vpadding' => 'auto',
'fgcolor' => array(0,0,0),
'bgcolor' => array(255,255,255),
'text' => true,
'font' => 'helvetica',
'fontsize' => 9,
'stretchtext' => 4 
);


// add a new page




$i  = 0;
// Left position

foreach ($books as $item) {
    $i++;
    if ($i % 3  == 1) { //modulo
        $pdf->AddPage();
        // disable existing columns
        $pdf->resetColumns();
        // set columns
        $pdf->setEqualColumns(3, 0);

        
    }
    $style['label'] = $item['Book']['id_buku'].'-'.$item['Book']['title'];
    $idbuku =  $item['Book']['id_buku'];
    $pdf->write1DBarcode($idbuku, 'C128A', '', '', '', 15, 0.3, $style, 'N');

    $pdf->Ln(3);

}




$pdf->Output('example_027.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

?>