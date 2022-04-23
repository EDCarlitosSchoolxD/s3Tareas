<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


require 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
use Sabberworm\CSS\CSSList\Document;

//$html =file_get_contents_curl("http://localhost/proyectoFinalS3/");


/* POST*/
$json = file_get_contents('php://input');

$doctype = '<!DOCTYPE  html>';

$html = $doctype . json_decode($json,false);


//echo $html;

$options = new Options();
$options->set('isRemoteEnabled',true);
$options->set('isJavascriptEnabled', true);

$dompdf = new Dompdf($options);




$options = $dompdf->getOptions();
//$options->setDefaultFont('Courier');
$options->setIsHtml5ParserEnabled(true);

$dompdf->setOptions($options);

//$dompdf->set_paper("A4",'portrait');
$dompdf->load_html(utf8_decode($html));


$dompdf->render($html);
$dompdf->stream('pc.pdf',array('Attachment'=>'0'));
$ouput = $dompdf->output();


 

function file_get_contents_curl($url){
    $curl = curl_init();
    $timeout = 5;
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,$timeout);

    $ret = curl_exec($curl);
    curl_close($curl);


    return $ret;
}

