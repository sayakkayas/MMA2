<html>
<body>

Preferred Email: <?php 
session_start();
$var_email= $_GET["preferred_email"]; 
echo $var_email;
$_SESSION['email']=$var_email;
?><br>
Preferred password: <?php echo $_GET["password_1"]; ?>
<?php

//if preferred_email and password matches any previous entries then we prompt so and redirect to login page(MMA.html) 
    if(false)
    {
    	echo("<script type='text/javascript'> alert('Email or password already in use');</script>");
        echo("<script type='text/javascript'>window.location.replace('MMA.html');</script>");
    }
    else
    {
    	echo("<script type='text/javascript'> alert('Steady your hands, things are going to be calm');</script>");
        echo("<script type='text/javascript'> window.location.replace('RegistrationDummy.html');</script>");
         
    

    }

?>
</body>
</html> 
