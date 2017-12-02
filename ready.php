<?php
session_start();

$email = $_SESSION["email"];
$password = $_SESSION["password"];
?>
<html>
	<body>

		<?php
		function console_log( $data ) {
			echo '<script>';
			echo 'console.log('.json_encode($data).')';
			echo '</script>';
		}

		$alert = "Email: ".$email.", Password: ".$password;

		$command = "python myo_access.py record 7 '".$email."' 2>&1";
		$out = shell_exec( $command );
		print_r( $out );

		echo("<script type='text/javascript'> alert('".$out."');</script>");
		
		echo("<script type='text/javascript'> alert('Steady your hands, things are going to be calm');</script>");

		#echo("<script type='text/javascript'> window.location.replace('Registration.html');</script>");

		?>
	</body>
</html> 
