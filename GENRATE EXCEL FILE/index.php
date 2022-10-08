<?php
require "vendor/autoload.php";
include "connect.php";
$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();

$spreadsheet->getSheet(0)->setCellValue("A1", "Id");
$spreadsheet->getSheet(0)->setCellValue("B1", "Product_Id");
$spreadsheet->getSheet(0)->setCellValue("C1", "Product_Name");
$spreadsheet->getSheet(0)->setCellValue("D1", "Product_Price");

$spreadsheet->getSheet(0)
    ->getColumnDimension("A")
    ->setAutoSize(true);
 
$spreadsheet->getSheet(0)
    ->getColumnDimension("B")
    ->setAutoSize(true);
 
$spreadsheet->getSheet(0)
    ->getColumnDimension("C")
    ->setAutoSize(true);
 
$spreadsheet->getSheet(0)
    ->getColumnDimension("D")
    ->setAutoSize(true);

    $styles = [
        "fill" => [
            "fillType" => PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            "startColor" => [ "rgb" => "FF0000" ]
        ],
        "font" => [
            "color" => [ "rgb" => "FFFFFF" ]
        ]
    ];
    $spreadsheet->getSheet(0)
        ->getStyle("A1:D1")
        ->applyFromArray($styles);


$result = mysqli_query($connection, "SELECT * FROM `orders`");

$count = 2;
while ($row = mysqli_fetch_object($result))
{
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("A" . $count, $row->id);
 
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("B" . $count, $row->product_id);
     
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("C" . $count, $row->product_name);
     
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("D" . $count, $row->product_price);

    $count++;
}
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save("Task17_Generate_Excel_File.xlsx");

$reader = PhpOffice\PhpSpreadsheet\IOFactory::load("Task17_Generate_Excel_File.xlsx");
$rows = $reader->getSheet(0)->getRowIterator();
 
?>
 <a href="Task17_Generate_Excel_File.xlsx" download="Task17_Generate_Excel_File.xlsx">Download</a>
<table>
    <?php
        $count = 1; foreach ($rows as $row) {
    ?>
 
        <tr>
            <?php
                $columns = $row->getCellIterator();
            ?>
 
            <?php
                foreach ($columns as $column) {
            ?>
 
                <?php if ($count == 1) { ?>
 
                    <th>
                        <?php echo $column->getCalculatedValue(); ?>
                    </th>
 
                <?php } else { ?>
 
                    <td>
                        <?php echo $column->getCalculatedValue(); ?>
                    </td>
 
                <?php } ?>
 
            <?php } ?>
        </tr>
 
    <?php $count++; } ?>
</table>
 
