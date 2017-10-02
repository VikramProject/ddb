<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>SPIT Railway Concession</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="jumbotron-narrow.css" rel="stylesheet">
      <!-- Fontawesome core CSS -->
      <link href="assets1/css/font-awesome.min.css" rel="stylesheet" />
      <link href="assets1/css/font-awesome.css" rel="stylesheet" />
      <link href="assets1/css/admin-dashboard.css" rel="stylesheet" />
      <!--GOOGLE FONT -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      <!-- W3.css library -->
      <link href="assets1/css/w3.css" rel="stylesheet" />
      <!-- AngularJS link minified library-->
      <script src="assets1/angularjs/angular.min.js"></script>
      <!-- AngularJS Controller-->
      <script src="assets1/angularjs/controller.js"></script>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script type="text/javascript">
         angular.module('Compulse.controllers', []);
         angular.module('Compulse.services', []);
         angular.module("Compulse.directives", [])
      </script>
   </head>
   <body ng-app="Compulse" ng-controller="MainController">
      <aside class="side-nav" id="show-side-navigation1">
         <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
         <div class="heading">
            <img src="assets1/img/adminlogo.png" alt="">
            <div class="info">
               <h3><a href="#">Admin</a></h3>
               <p>Railway Concession</p>
            </div>
         </div>
         <ul class="categories">
            <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="admin_page.php">HOME</a></li>
            <li><i class="fa fa-file-text-o fa-fw"></i><a href="report_gen.php">GENERATE REPORT</a></li>
            <li><i class="fa fa-info-circle fa-fw"></i><a href="change_info.php">CHANGE STUDENT INFO</a></li>
            <li><i class="fa fa-key fa-fw"></i><a href="set_pass.php">SET STUDENT PASSWORD</a></li>
            <li><i class="fa fa-calendar-o fa-fw"></i><a href="late.php">CHANGE ISSUE DATE</a>
            <li><i class="fa fa-repeat fa-fw"></i><a href="spoiled.php">REISSUE SPOILED FORM</a>
            <li><i class="fa fa-database fa-fw"></i><a href="import_db.php">IMPORT DATABASE</a>
            <li><i class="fa fa-book fa-fw"></i><a href="request_serial.php">ADD NEW BOOK</a>
            <li><i class="fa fa-registered fa-fw"></i><a href="registerNew.php">REGISTER STUDENT</a>
            <li><i class="fa fa-key fa-fw"></i><a href="changepass.php">CHANGE YOUR PASSWORD</a>
            <li><i class="fa fa-sign-out fa-fw"></i><a href="logout.php">LOGOUT</a>
         </ul>
      </aside>
      <section id="contents">
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="pull-left navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
               <i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i>
               </button>
               <div class="collapse navbar-collapse navbar-left">
                  <ul class="nav navbar-nav">
                     <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
                  </ul>
               </div>
               <a class="navbar-brand" href="#">SPIT<span class="main-color">Railway Concession</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
               <ul class="nav navbar-nav" style="padding-right:65px">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="changepass.php"><i class="fa fa-key fw"></i> Change Password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></li>
                     </ul>
                  </li>
                  <li class="hideBars"><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn show-side-button"></i></a></li>
               </ul>
            </div>
         </div>
      </nav>