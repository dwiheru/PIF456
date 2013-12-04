<?php
error_reporting(E_ALL);
require_once '/excel/Classes/PHPExcel.php';
$datetime=date('Ymd-His');
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
mysql_connect("localhost", "root", "priaidaman") or die(mysql_error());
mysql_select_db("gtfw") or die(mysql_error());
$query = "SELECT * FROM mahasiswa";
$hasil = mysql_query($query);
// Set properties
$objPHPExcel->getProperties()->setCreator("Daud Edison Tarigan")
->setLastModifiedBy("Daud Edison Tarigan")
->setTitle("Office 2007 XLSX Test Document")
->setSubject("Office 2007 XLSX Test Document")
->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
->setKeywords("office 2007 openxml php")
->setCategory("Test result file");

// Mulai Merge cells Judul
$objPHPExcel->getActiveSheet()->mergeCells('B2:D2');
$objPHPExcel->getActiveSheet()->setCellValue('B2', "DAFTAR DATA MAHASISWA");

$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
$objPHPExcel->getActiveSheet()->setCellValue('B3', "FAKULTAS TEKNIK");

$objPHPExcel->getActiveSheet()->mergeCells('B4:D4');
$objPHPExcel->getActiveSheet()->setCellValue('B4', "UNIVERSITAS NEGERI MALANG");

$objPHPExcel->getActiveSheet()->mergeCells('B5:D5');;
$objPHPExcel->getActiveSheet()->setCellValue('B5', "Tahun 2013");

$objPHPExcel->getActiveSheet()->getStyle('B2:D5')->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getStyle('B2:D5')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('B2:D5')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3:D5')->getFont()->setSize(13);


//untuk auto size colomn
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);

// Add some data
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A7', 'NIM')
->setCellValue('B7', 'NAMA')
->setCellValue('C7', 'ALAMAT'); 
$objPHPExcel->getActiveSheet()->getStyle('A7:C7')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A7:C7')->getFont()->setSize(13);
$rowNya = 8;
$no = 0;			
while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue("A$rowNya", $row['nim'])
->setCellValue("B$rowNya", $row['nama'])
->setCellValue("C$rowNya", $row['alamat']);
$rowNya = $rowNya + 1;
}

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save("$datetime.xlsx");

?>
Download Database : <a href="<?php echo $datetime;?>.xlsx">Here</a>