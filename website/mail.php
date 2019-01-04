<?php

	if(isset($_POST['submit']))
	{
			$name= $_POST['name'];
			$MailFrom= $_POST['email'];
			$cake= $_POST['cake'];
			$address= $_POST['address'];
			
			$mailTO= "order@mobilehouse.ml";
			
			$header=	"From: ".$MailFrom;
			
			$txt = "You have received an order from: ".$name. ".\n\n".$address;
			
			mail($mailTO,$order,$txt,$header);
			header("Location: order.php?ordersend");
			 
			
		
		
		
		
		
		
	}
?>