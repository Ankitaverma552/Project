<!DOCTYPE html>
<html>
<head>
	<title>TRANING PROGRAM</title>
	<link rel="stylesheet" type="text/css" href="formcss.css">
	<script src="formjs.js"></script>
</head>
<body>

	<form action="login_chk.php" method="post">
		<center>
			<h1 style="color:#1d1f8c;text-shadow:2px 2px #175be3;background-color: #09e6d0;">COLLEGE TOUR FORM</h1>
			<hr><hr>
			<br>
			<div style="background-color:#e6c5c8 ;">
				<table style="font-size:20px ;font-style:oblique ; ">
					<tr>
						<td><b>Username</b></td>
						<td>:</td>
						<td><input type="text" name="uname" placeholder="Enter username" class="txt" id="name" ></td>
					
						<td id="nameErr"></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td>:</td>
						<td><input type="password" name="pass" placeholder="Enter password" class="txt" id="passw"></td>
						<td id="passErr"></td>
					</tr>
				</table>
				<br>
				<input type="submit" value="login" class="bt" name="sub" onclick="validate()" style="font-weight:bold;">
			</div>
			
		</center>
	</form>
</body>
</html>
