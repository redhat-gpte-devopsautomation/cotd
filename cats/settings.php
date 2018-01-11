<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

session_start();

$selector = $_SESSION['SELECTOR'];
$dbhost = $_SESSION['DBHOST'];
$dbport = $_SESSION['DBPORT'];
$dbuser = $_SESSION['DBUSER'];
$dbpassword = $_SESSION['DBPASSWORD'];
$dbname = $_SESSION['DBNAME'];
$service = $_SESSION['SERVICE'];
$clientip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COTD</title>
	<!-- <link rel="stylesheet"  href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css"> -->
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/jqm-demos.css">
	<link rel="stylesheet" href="css/swipe-page.css">
	<link rel="shortcut icon" href="css/favicon.ico">
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<!-- <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> -->
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/swipe-page.js"></script>
	<script src="js/rateThis.js"></script>

<script>
  $.ajaxSetup ({
  // Disable caching of AJAX responses
    cache: false
  });
</script>
	
</head>
<body>

	<form id="login" action="settings_submit.php" method="get" rel="external" data-ajax="false">
    	
		<fieldset data-role="controlgroup">
        	<legend>Settings for <?php echo $clientip ?> </legend>
                  
        	<div data-role="fieldcontain">
            	<label for="selector" style="text-align:right">SELECTOR:</label>
        		<input type="text" name="selector" id="selector" class="selector" value="<?php echo $selector; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="dbhost" style="text-align:right">DBHOST:</label>
        		<input type="text" name="dbhost" id="dbhost" class="dbhost" value="<?php echo $dbhost; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="dbport" style="text-align:right">DBPORT:</label>
        		<input type="text" name="dbport" id="dbport" class="dbport" value="<?php echo $dbport; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="dbuser" style="text-align:right">DBUSER:</label>
        		<input type="text" name="dbuser" id="dbuser" class="dbuser" value="<?php echo $dbuser; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="dbpassword" style="text-align:right">DBPASSWORD:</label>
        		<input type="text" name="dbpassword" id="dbpassword" class="dbpassword" value="<?php echo $dbpassword; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="dbname" style="text-align:right">DBNAME:</label>
        		<input type="text" name="dbname" id="dbhost" class="dbname" value="<?php echo $dbname; ?>" data-mini="true" >
        	</div>

        	<div data-role="fieldcontain">
            	<label for="service" style="text-align:right">SERVICE:</label>
        		<input type="text" name="service" id="service" class="service" value="<?php echo $service; ?>" data-mini="true" >
        	</div>

		</fieldset>

		<center>
		<input type="submit" name="Save" id="save" value="Save" data-inline="true">
        </center>
    </form>

</body>
</html>
