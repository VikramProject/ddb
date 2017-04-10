<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPIT Railway Concession Form System</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets1/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets1/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets1/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/assets1/css/style.css">
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">SPIT Railway Concession Form System</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <?php
                $request="$_SERVER[REQUEST_URI]";
                if(strpos($request,'register'))
                {
                    echo "<li><a href=\"index.php\">Login</a></li>";

                }
                elseif(strpos($request,"index"))
                {
                    echo"<li><a href=\"register.php\">Register</a></li>";
                }
                else if(strpos($request,"UnSuccessful"))
                {
                    echo"<li><a href=\"register.php\">Register</a></li>";
                    echo "<li><a href=\"index.php\">Login</a></li>";
                }
                //student
                else //(strpos($request,"student_home")||strpos($request,"await_results")||strpos($request,"changepass"))
                {
                    if(isset($_SESSION['rollno']))
                    {
                        $rollno = $_SESSION['rollno'];
                        $query = "select name from student where UID='$rollno'";
                        $res = mysqli_query($db_var, $query);
                        $row = $res->fetch_object();
                        //admin
                        if($rollno==$admin)
                        {
                            echo "<li class=\"dropdown\">
                             <a <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" >Welcome $row->name<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">";
                            if(!strpos($request,"admin_page"))
                                echo"<li><a href=\"admin_page.php\"><strong>Requests</strong></a></li>";
                            if(!strpos($request,"report_gen"))
                                echo"<li><a href=\"report_gen.php\"><strong>Generate A Report</strong></a></li>";
                            if(!strpos($request,"info"))
                                echo"<li><a href=\"change_info.php\"><strong>Change Student Info</strong></a></li>";
                            if(!strpos($request,"changepass"))
                                echo"<li><a href=\"changepass.php\"><strong>Change Your Password</strong></a></li>";
                            if(!strpos($request,"set_pass"))
                                echo"<li><a href=\"set_pass.php\"><strong>Set Student Password</strong></a></li>";
                            if(!strpos($request,"late"))
                                echo"<li><a href=\"late.php\"><strong>Change Issue Date</strong></a></li>";
                            if(!strpos($request,"spoiled"))
                                echo"<li><a href=\"spoiled.php\"><strong>Reissue Spoiled Form</strong></a></li>";
                            if(!strpos($request,"spoiled"))
                                echo"<li><a href=\"request_serial.php\"><strong>Add a New Book</strong></a></li>";
                            echo"</ul>
                        </li>";

                        }
                        else
                        {

                            if(!strpos($request,"changepass"))
                                echo "<li><a href=\"changepass.php\">Change Password</a></li>";
                            if(!strpos($request,"student_home")&&!strpos($request,"await_results"))
                                echo"<li><a href=\"student_home.php\">Home Page</a></li>";


                        }
                        echo "<li><a href=\"logout.php\">Logout</a></li>";
                    }
                }
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><strong>Call: </strong>+09-456-567-890</a></li>
                        <li><a href="#"><strong>Mail: </strong>www.spit.ac.in</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><strong>Address: </strong>
                                <div>
                                    Main Office,<br />
                                    Sardar Patel Institute of Technology,Andheri
                                </div>
                            </a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
<!--    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
            </ul>
        </nav>
        <h3 class="text-muted">SPIT Railway Concession Form System</h3>
    </div>-->
