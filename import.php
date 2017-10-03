<?php
include('config.php');
include("admin_dashboard.php");

if (isset($_POST["Import"])) {
    require 'Classes/PHPExcel/IOFactory.php';

    $password = password_hash("spit123", PASSWORD_BCRYPT, ['cost' => 12]);
    $inputfilename = $_FILES["file"]["tmp_name"];
    $exceldata = array();
    $errorexceldata = array();
    $inputFile = $_FILES["file"]["name"];

//  Read your Excel workbook
    $extension = strtoupper(pathinfo($inputFile, PATHINFO_EXTENSION));
    if ($extension == 'XLSX' || $extension == 'ODS' || $extension == 'XLS') {

        try {
            $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
            $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
            $objPHPExcel = $objReader->load($inputfilename);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputfilename, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

//  Get worksheet dimensions
        for($i=0;$i<$objPHPExcel->getSheetCount();$i++) {


            try {
                $sheet = $objPHPExcel->getSheet($i);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputfilename, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }
//  Loop through each row of the worksheet in turn
            $remove[] = "'";
            $remove[] = '"';
            for ($row = 1; $row <= $highestRow; $row++) {
                //  Read a row of data into an array
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                //echo date("Y-m-d",strtotime(str_replace("/","-",$rowData[0][10])))."\n";
                //  Insert row data array into your database of choice here
                $sql = "INSERT INTO student (UID,Password,Name,Email,Sex,DOB,Address,Category)
			VALUES ('" . $rowData[0][2] . "', '" . $password . "', '" . str_replace($remove, "", $rowData[0][5] . " " . $rowData[0][4]) . "', '" . $rowData[0][14] . "', '" . $rowData[0][9] . "', '" . date("Y-m-d", strtotime(str_replace("/", "-", $rowData[0][10]))) . "', '" . str_replace($remove, "", $rowData[0][12]) . "', '" . $rowData[0][11] . "')";

                if (mysqli_query($db_var, $sql)) {
                    $exceldata[] = $rowData[0];
                } else {
                    $errorexceldata[] = $rowData[0];
                    $whatError[] = substr(mysqli_error($db_var), 0, 9);
                }
            }
//Cleanup
            $sql = "DELETE FROM student WHERE UID = 0";
            mysqli_query($db_var, $sql);
// Print excel data
            echo "Successful Data Entry:- \n<table>";
            foreach ($exceldata as $index => $excelraw) {
                echo "<tr>";
                echo "<td>" . $excelraw[1] . "</td>";
                echo "<td>" . $excelraw[2] . "</td>";
                echo "<td>" . $excelraw[5] . $excelraw[4] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $i = 0;
            echo "ERRORS in Data Entry:- \n<table>";
            foreach ($errorexceldata as $index => $excelraw) {
                echo "<tr>";
                echo "<td>" . $excelraw[1] . "</td>";
                echo "<td>" . $excelraw[2] . "</td>";
                echo "<td>" . $whatError[$i++] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        mysqli_close($db_var);
    }
    else
    {
        echo "Please upload an XLSX or ODS file";
    }
}
