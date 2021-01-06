<?php
	session_start();
	$uname = $_REQUEST['uname'];
	$password = $_REQUEST['pass'];

	$con=mysqli_connect("localhost","root","","collegetour");
	$query="SELECT * FROM user WHERE uname='$uname' AND password='$password'";
	$rs=mysqli_query($con,$query);

	if($row=mysqli_fetch_row($rs)){
		$_SESSION['uname'] = $uname;
		echo"
		<script>
			alert('Login Successfull');
			window.location = 'dashboard.php';
		</script>
		";
	}else{
		echo"
		<script>
			alert('Login Un-Successfull');
			window.location = 'login.php';
		</script>
		";
	}
?>