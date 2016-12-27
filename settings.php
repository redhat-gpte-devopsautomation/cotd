<!--
Author: StefanoPicozzi@gmail.com
Blog: https://StefanoPicozzi.blog
GitHub: https://github.com/StefanoPicozzi/cotd.git
Date: 2016
-->

<?php

session_start();


// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$selector = $_SESSION['selector'];

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
        	<legend>Settings</legend>
                  
        	<div data-role="fieldcontain">
            	<label for="selector" style="text-align:right">SELECTOR:</label>
        		<input type="text" name="selector" id="selector" class="selector" value="<?php echo $selector; ?>" data-mini="true" >
        	</div>
		</fieldset>

		<center>
		<input type="submit" name="Save" id="save" value="Save" data-inline="true">
        </center>
    </form>

</body>
</html>
