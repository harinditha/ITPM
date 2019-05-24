<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>ACS E-Learning</title>
  <link rel="stylesheet" type="text/css" href="../scss/style.css?ver=<?php echo rand(111,999)?>">
   <link rel="icon" type="image/png"  href="../images/favicon.png">
  
</head>
<body>
  <section class="container">

    <div class="login">
      <h1>Administrator</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="adm_user" value="" placeholder="admin"></p>
        <p><input type="password" name="adm_pwd" value="" placeholder="*****"></p>
        
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Back to main page <a href="../index.php">Back</a>.</p>
    </div>
   
  </section>

</body>
</html>
