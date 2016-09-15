<?php

if (!isset($_SESSION)) { session_start(); }
include('include/city.php');
$city = 'wellington';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>COTD</title>
	<link rel="stylesheet"  href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet" href="css/jqm-demos.css">
	<link rel="stylesheet" href="css/swipe-page.css">
	<link rel="shortcut icon" href="css/favicon.ico">
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<script src="js/swipe-page.js"></script>
</head>
<body>

<div data-role="page" id=<?php echo $city; ?> class="demo-page" data-dom-cache="true" data-theme="a" data-prev=<?php echo $_SESSION['prev_'.$city]; ?> data-next=<?php echo $_SESSION['next_'.$city]; ?> >

	<div id="help" class="trivia ui-content" data-role="popup" data-position-to="window" data-tolerance="50,30,30,30" data-theme="d">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
				To navigate, swipe left to cycle though the choices. Swipe right to pick your favourite.
			</div>

	<div data-role="header" data-position="fixed" data-fullscreen="true" data-id="hdr" data-tap-toggle="false">
		<?php echo "<h1> No. ".($_SESSION['rank_'.$city] + 1)." ".$_SESSION['title_'.$city]."</h1>"; ?>
		<a href="index.php" data-ajax="false" data-direction="reverse" data-icon="home" data-iconpos="notext" data-shadow="false" data-icon-shadow="false">Back</a>
	  <a href="#help" data-rel="popup"  data-role="button" data-iconpos="notext" data-icon="alert" data-iconpos="left" data-mini="true"></a>
    </div><!-- /header -->

	<div data-role="content">

		<div id="trivia" class="trivia ui-content" data-role="popup" data-position-to="window" data-tolerance="50,30,30,30" data-theme="d">
        	<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
					<?php echo $_SESSION['triviatxt_'.$city]; ?>
        </div>

	</div><!-- /content -->

    <div data-role="footer" data-position="fixed" data-fullscreen="true" data-id="ftr" data-tap-toggle="false">

		<div data-role="controlgroup" class="control ui-btn-left" data-type="horizontal" data-mini="true">
        	<a href="#" class="prev" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="d">Previous</a>
        	<a href="#" class="next" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-theme="d">Next</a>
        </div>

		<a href="#trivia" data-rel="popup" class="trivia-btn ui-btn-right" data-role="button" data-icon="info" data-iconpos="left" data-theme="d" data-mini="true">Trivia</a>
    </div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
