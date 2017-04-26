<?php 
session_start();

if(!$_SESSION['login']==true){
  header('location:login.php');
}

?>
<!doctype html>
<html class="no-js" lang="">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Newsportal </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Maitree" rel="stylesheet">
</head>

<body>

<div id="wrapper">
<div id="container">

<!-- ********* header starts ******** -->
<div id="header">

<div class="topnav_bg">
  <div class="container-fluid">

      <div class="row">
      
        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">

              <div class="socialmedia pull-left">
                <span style="color:white;"> Join us at  </span>
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                <a href=""> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a>
                <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i> </a>
                <a href=""><i class="fa fa-envelope" aria-hidden="true"></i> </a>
              </div>
        </div>
       
        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">

           <div class="container-fluid">
               <div class="topnav pull-right">
                <a href="logout.php" <?php if($page == 'logout'){ echo 'class="activenav"';} ?> >Logout</a>
               </div>
        </div>

      </div>
  </div>
</div>
</div>

  <div class="headerlogo_bg">
    <div class="container-fluid">

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xm-12" >
               <a class="navbar-brand" href="index.php"  id="logo"> <img src="img/logo.png" class="img-respnsive" > </a>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xm-12 ">
              
          </div>
          <div class="clearfix"></div>
          
         
        </div>
    </div>
  </div>

 <div id="navigation">
    <nav class="navbar navbar-inverse bgcolor">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
          <ul class="nav navbar-nav" >
            <li <?php if($page == 'thoughtoftheday'){ echo 'class="active"';} ?> ><a href="index.php"> Home </a></li>
            <li <?php if($page == 'dailynews'){ echo 'class="active"';} ?> ><a href="dailynews.php"> Daily news</a></li>
            <li <?php if($page == 'national'){ echo 'class="active"';} ?> ><a href="national.php">National </a></li> 
            <li <?php if($page == 'international'){ echo 'class="active"';} ?> ><a href="international.php">International </a></li> 
            <li <?php if($page == 'technology'){ echo 'class="active"';} ?> ><a href="technology.php">Technology </a></li> 
            <li <?php if($page == 'entertainment'){ echo 'class="active"';} ?> ><a href="entertainment.php"> Entertainment</a></li> 
            <li <?php if($page == 'sports'){ echo 'class="active"';} ?> ><a href="sports.php">Sports</a></li> 
            <li <?php if($page == 'business'){ echo 'class="active"';} ?> ><a href="business.php">Business</a></li> 
            <li <?php if($page == 'interview'){ echo 'class="active"';} ?> ><a href="interview.php">Interview</a></li> 
            <li <?php if($page == 'horoscope'){ echo 'class="active"';} ?> ><a href="horoscope.php">Horoscope</a></li> 
            <li <?php if($page == 'fashion'){ echo 'class="active"';} ?> ><a href="fashion.php">Fashion </a></li> 
          </ul>
          
        </div>
      </div>
    </nav>
</div>
          <div class="clearfix"></div>

</div>
<!-- ********* header ends ******** --> 



