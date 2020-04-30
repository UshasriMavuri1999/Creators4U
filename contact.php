<?php
	
	$name=$_REQUEST['name'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	
	//Checking input fields
	if(empty($name) || empty($phone) || empty($email) || empty($message))
	{
		echo "<script type='text/javascript'>alert('Please fill all the fields');
			
			window.history.back();
			
		</script>";
	}
	else
	{
		mail("we@creators4u.com","Requesting to Contact",$message,"From: $name <$email>");
		echo "<script type='text/javascript'>alert('Thank you for reaching us.We will be contacting you shortly!!');
			document.getElementById("myForm2").reset();
			window.history.back();
		</script>";
	}
	
?>