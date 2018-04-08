<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$em = $_POST['email'];
		echo "<h1>Hello $fname $lname thanks for registering with us</h1><br/>"."We Shall get in touch with you at $em";
	}
	else
	{
		echo "unable to respond.Try after sometime";
	}
  ?>