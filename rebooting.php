<html>
	<head>
		<link rel="stylesheet" type="text/css" href="design.css">
		<link rel="stylesheet" type="text/css" href="about.css">
		<script type="text/JavaScript">
			var count = 1;
			var counter = setInterval(refreshTimer, 1000 * count);
			function refreshTimer(){
				if (count == 180) {
					window.location.href = 'services.php';
				}
				else {
					document.getElementById("progress_dots").innerHTML += ".";
				}
			}
		</script>
		<title>linux-webui - Linux Server Control Panel</title>
	</head>
    <body>
        <div class="wrapper">
        	<?php include("header.php"); ?>
        	<div class="body">
        		<div>&nbsp;</div>
        		<div class="body_content">
        			<p>The server is rebooting, please wait<span id="progress_dots">.</span></p>
        			<p>The page will auto redirect once the rebooting is complete.</p>
        		</div>
        	</div>
            <div class="push"></div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>