<?php
// <!-- You will obviously need to import the function -->
// <!-- by downloading the file from the link above. -->
// require_once '/phpExcelReader/Excel/reader.php';

include_once 'Classes/PHPExcel/IOFactory.php';


$inputFileType = 'Excel2007';
$inputFileName = 'bt.xlsx';


$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcelReader = $objReader->load($inputFileName);
$loadedSheetNames = $objPHPExcelReader->getSheetNames();
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'CSV');

foreach($loadedSheetNames as $sheetIndex => $loadedSheetName) {
    $objWriter->setSheetIndex($sheetIndex);
    $objWriter->save('uploads/csv/'.$loadedSheetName.'.csv');
}
header('location:http://localhost/bot/index.php/seller_ctrl/convert');
?>