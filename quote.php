<?php
	
	$name=$_REQUEST['name'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$location=$_REQUEST['location'];
	$message=$_REQUEST['message'];
	
	//Checking input fields
	if(empty($name) || empty($phone) || empty($email) || empty($location) || (empty($_REQUEST['check_list'])) || empty($message))
	{
		echo "<script type='text/javascript'>alert('Please fill all the fields');
			
			window.history.back();
			
		</script>";
	}
	else
	{
		$msg=$message;
		$message="Details Filled by {$name}\nPhone Number : {$phone}\nEmail Id : {$email}\nLocation : {$location}\nRequested Service(s) :\n";
		foreach($_REQUEST['check_list'] as $service){
			$message.="{$service}\n";
		}
		$message.="Comment : {$msg}";
		mail("ushasrimavuri1999@gmail.com","Requesting Services from you",$message,"From: $name <$email>");
		echo "<script type='text/javascript'>alert('Thank you for reaching us. We will be contacting you soon!!');
			document.getElementById("myForm").reset();
			window.history.back();
		</script>";
	}
	
?>
