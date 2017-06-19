
<?php
include ('config.php');
if(isset($_POST["Import"])){


    echo $filename=$_FILES["file"]["tmp_name"];

    $password=password_hash("spit123",PASSWORD_BCRYPT,['cost' => 12]);
    ;
    if($_FILES["file"]["size"] > 0)
    {

        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
        {

            //It wiil insert a row to our subject table from our csv file`
            if($emapData[0]!=null)
            {
                $sql = "insert into student(UID,Password,Name,Email,Sex,DOB,Address,Category) 
	            	values('$emapData[0]','$password','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]')";
                //we are using mysql_query function. it returns a resource on true else False on error
                $result = mysqli_query( $db_var,$sql );
                if(! $result )
                {
                    echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";

                }
            }
            else{
                break;
            }


        }
        fclose($file);
        //throws a message if data successfully imported to mysql database from excel file
        echo "<script type=\"text/javascript\">
						window.location = \"index.php\"
						alert(\"CSV File has been successfully Imported.\");
					</script>";






    }
}
?>