<?php

require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


$pdfnew= new Html2Pdf('P','A4','es','true','UTF-8');
$pdfnew = new Html2Pdf();
ob_start();
require_once 'conta.php';


$doc=ob_get_clean();


$pdfnew->writeHtml($doc);





$pdfnew->output('Reporte Jose.pdf');
