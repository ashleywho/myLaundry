<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>myLaundry - Staff Dashboard</title>
</head>
<body>
	<br>
	<center><h3>Admin Dashboard</h3></center>

	<center><a class="nav-link"><?=$this->session->userdata('adminId');?></a></center>
	<center><a class="nav-link"><?=$this->session->userdata('adminEmail');?></a></center>
	<?php 
		print_r($members);
		/*foreach($members as $ud): {
			echo $ud['adminId'];
			echo $ud['adminEmail'];
		}*/
	?>

</body>
</html>