
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
  <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css"  />
  <title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>

  <!-- NAV -->

  <?php include ('header.php'); ?>

  <div class="clearfix"></div>

  <div class="container-fluid" style="margin-top:80px;">

    <div class="container">

    	<label class="h5">Bienvenue : <?php print($userRow['user_name']); ?></label>
      <hr />

      <h1>
        <a href="#"><span class="glyphicon glyphicon-home"></span> - - - - </a> &nbsp; 
        <a href="#"><span class="glyphicon glyphicon-home"></span> - - - - </a> &nbsp; 
        <a href="#"><span class="glyphicon glyphicon-home"></span> - - - - </a> &nbsp; 

        <hr />
        
        

      </div>

    </div>




    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>