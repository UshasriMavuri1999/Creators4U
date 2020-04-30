<?php
	$email=$_REQUEST['email'];
	
	if(empty($email)){
		echo "<script>alert('Please enter your email id');
			window.history.back();
			
			</script>";
	}
	else{
		mail("we@creators4u.com","Requesting to Subcribe","I am interested to Subscribe to your website","From :<$email>");
			echo "<script>alert('Thank you for reaching us.Hope You will enjoy our Updates');
			window.history.back();
			</script>";
	}	
?>