<?php
	function displayHeader($page){
?>
		<!DOCTYPE html>
		<html>
		<head>
		  	<title>Evanston Snow Removal Service</title>
		  	<link rel="stylesheet" type="text/css" href="main.css">
		  	<link href='http://fonts.googleapis.com/css?family=Open+Sans|Raleway|Alice' rel='stylesheet' type='text/css'>
		  	<link rel="shortcut icon" href="images/e.ico" >
		</head>

		<body>
			<div id="header">
				<div id="siteTitle">Evanston Snow Removal</div>
			</div>
			<div id="menu">
				<div class="hLine"></div>
				<ul id="navMenuList">
					<a href="index.php">
						<li class="navMenuItem <?php if ($page == 0) echo "selected";?>">Home</li>
					</a>
					<a href="about.php">
						<li class="navMenuItem <?php if ($page == 1) echo "selected";?>">About</li>
					</a>
					<a href="prices.php">
						<li class="navMenuItem <?php if ($page == 2) echo "selected";?>">Prices</li>
					</a>
					<a href="contact.php">
						<li class="navMenuItem <?php if ($page == 3) echo "selected";?>">Contact</li>
					</a>
					<a href="schedule.php">
						<li class="navMenuItem <?php if ($page == 4) echo "selected";?>">Schedule Snow Removal</li>
					</a>
				</ul>
				<div class="hLine"></div>
			</div>
<?php
	}
?>

<?php
	function displayFooter(){
?>
		<div id="footer">
			<div id="footerTop"></div>
			<div id="footerBottom">Copyright &copy; Matt Carmichael <?php echo date("Y"); ?> &bull; (847) 970-1573</div>
		</div>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-58084325-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>

	</html>
<?php
	}
?>