<?php
include("config.php");

if(isset($_POST["rollno"])&&isset($_POST["Password"]))
{

	$rollno=$_POST["rollno"];
	$pass=$_POST["Password"];
    //echo "$rollno";
	$query="select * from student where UID=$rollno";
	
	$result=mysqli_query($db_var,$query) or die(mysql_error());
    $no_rows=mysqli_num_rows($result);

    //echo "$no_rows";
	if($no_rows==1)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$passd=$row["Password"];
		if(password_verify($pass, $passd))
		{
			$_SESSION["rollno"]=$row["UID"];

			if ($row['UID']==$admin)
			{
                header("Location:admin_page.php");
                exit();
			}

			else
			{
                $query="select * from conc_dtb where UID=$rollno";
                $result=mysqli_query($db_var,$query) or die(mysql_error());
                $no_rows=mysqli_num_rows($result);
                if($no_rows==1)
                {
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $exp_date=strtotime($row["Expiry_date"]);
                    $exp_date=date("Y-m-d",$exp_date);
                    if(strtotime($exp_date)<=strtotime(date("Y-m-d")))
					{
                        $query="update conc_dtb set status = 'unlocked' where UID=$rollno";
                        $result=mysqli_query($db_var,$query) or die(mysql_error());
					}
                }
				header("Location:student_home.php");
                exit();
			}

		}
		else
		{
			$_SESSION["Error"]="Incorrect Details";
			$_SESSION["Revert"]="index.php";
			header("Location:UnSuccessful.php");
			exit();
		}
	}
	else
	{
		$_SESSION["Error"]="Incorrect Details Or Not Registered";
          	$_SESSION["Revert"]="index.php";
		header("Location:UnSuccessful.php");
		exit();
	}
}

?>
