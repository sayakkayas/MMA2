<html>
	<body>
		<p>
			Email: <?php echo $_GET["email"]; ?>
			<br>
			password: <?php echo $_GET["password"]; ?>
			<?php
			$email = $_GET["email"];
			$password = $_GET["password"];
			$command = "C:\\Python27\\python.exe myo_access.py check_user ".$email." 2>&1";
			$mystring = shell_exec( $command );
			$user_exists = (int)$mystring;

			if ($user_exists == 1) {
				echo("<script type='text/javascript'> alert('Steady your hands, be sure that the Myo device is synchronized!!');</script>");
				echo("<script type='text/javascript'> window.location.replace('MMA2.html');</script>");
			} else {
				echo("<script type='text/javascript'> alert('Invalid User!');</script>");
				echo("<script type='text/javascript'> window.location.replace('MMA.html');</script>");
			}
			?><br>
			<p>
	</body>
</html> 
