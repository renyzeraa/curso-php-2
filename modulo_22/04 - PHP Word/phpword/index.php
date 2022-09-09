<?php
require 'vendor/autoload.php';

include('DocxConversion.php');



$docObj = new DocxConversion("arquivo.docx");
echo $docObj->convertToText();


/*
$phpWord = new \PhpOffice\PhpWord\PhpWord();

$section = $phpWord->addSection();

$fonte1 = 'fonte1';
$phpWord->addFontStyle(
    $fonte1,
    array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);

$section->addText('Olá mundo com o PHP Word!',$fonte1);
// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('arquivo.docx');
*/

?>