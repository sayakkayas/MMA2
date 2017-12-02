<html>
  <body>
	<p>
	  Model1: <?php echo $_GET["model1"]; ?>
	  <?php
		 echo("<script type='text/javascript'> alert('Could you do it for us once more? The thing is, we like your typing!!');</script>");

		 echo("<script type='text/javascript'> window.location.replace('Registration2.html');</script>");

		 $command = "nohup python myo_access.py record 7 ".$email;
		 exec( $command, $status );

		 ?><br>
	<p>
  </body>
</html> 
