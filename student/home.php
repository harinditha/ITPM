<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>ACS E-Learning</title>
     <link rel="icon" type="image/png"  href="../images/favicon.png">
    <link rel="stylesheet" media="screen" href="../http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
          font-family: "Lato", sans-serif;
        }

        .sidenav {
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 350px;
          left: 10px;
          background: #eee;
          overflow-x: hidden;
          padding: 8px 0;
        }

        .sidenav a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 25px;
          color: #2196F3;
          display: block;
        }

        .sidenav a:hover {
          color: #064579;
        }

        .main {
          margin-left: 300px; /* Same width as the sidebar + left position in px */
          font-size: 20px; /* Increased text to enable scrolling */
          padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
</style>

</head>
<body>
    <!-- Fixed navbar -->
    <<div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="home.php">
                    <img src="../images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="active"><a href="home.php">Home</a></li>
        
                    <li class="dropdown">
                        <a href="../#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="user-details.php">Profile</a></li>
                            <li><a href="../functions/user_logout.php">Logout</a></li>
                        </ul>
                    </li>
                    

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->
    <!-- /.navbar -->

    <header id="head" class="secondary">
            <div class="container">
                    <h1>Categories</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>


<div class="container">


</div>
    <div class="sidenav">
  <a href="#about">Notifications</a>
  <a href="home1.php">Special Notices</a>
  <a href="#clients">Courses</a>
  <a href="#contact">Forum</a>
</div>

<div class="main">
  <h2>Auto Sidebar</h2>
  <p>This sidebar is as tall as its content (the links), and is always shown.</p>
  <p>Scroll down the page to see the result.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div>  

</body>
  
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="../js/modernizr-latest.js"></script> 
    <script type='text/javascript' src='../js/jquery.min.js'></script>
    <script type='text/javascript' src='../js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='../js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../js/camera.min.js'></script> 
    <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/custom.js"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: 'images/'
            });

        });
      
    </script>
    
</body>
</html>
