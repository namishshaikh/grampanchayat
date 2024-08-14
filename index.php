<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'gram_panchayat');
if (isset($_POST['submit'])) {
    $file = $_FILES['doc']['tmp_name'];

    $ext = pathinfo($_FILES['doc']['name'], PATHINFO_EXTENSION);
    if ($ext == 'xlsx') {
        require('demo/css/demonew/import/PHPExcel/PHPExcel.php');
        require('demo/css/demonew/import/PHPExcel/PHPExcel/IOFactory.php');

        $obj = PHPExcel_IOFactory::load($file);
        foreach ($obj->getWorksheetIterator() as $sheet) {
            $getHighestRow = $sheet->getHighestRow();
            for ($i = 0; $i <= $getHighestRow; $i++) {
                $int_gram = $sheet->getCellByColumnAndRow(0, $i)->getValue();
                $tot_pop = $sheet->getCellByColumnAndRow(1, $i)->getValue();
                $male_pop = $sheet->getCellByColumnAndRow(2, $i)->getValue();
                $female_pop = $sheet->getCellByColumnAndRow(3, $i)->getValue();
                $children_pop = $sheet->getCellByColumnAndRow(4, $i)->getValue();
                $category_pop = $sheet->getCellByColumnAndRow(5, $i)->getValue();
                $religion_pop = $sheet->getCellByColumnAndRow(6, $i)->getValue();
                $religious_place = $sheet->getCellByColumnAndRow(7, $i)->getValue();
                $total_vote = $sheet->getCellByColumnAndRow(8, $i)->getValue();

                if ($int_gram != '') {
                    mysqli_query($con, "INSERT INTO general_info(sammilit_gram, population, male_popu, female_popu, child_popu, category_popu, religion_popu, religious_place, total_voters) VALUES ('$int_gram', '$tot_pop', '$male_pop', '$female_pop', '$children_pop', '$category_pop', '$religion_pop', '$religious_place', '$total_vote')");
                }
            }
        }
    } else {
        echo "Invalid file format";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="doc" />
    <input type="submit" name="submit" />
</form>
