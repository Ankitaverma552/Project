<?php
	session_start();
	if(!isset($_SESSION['uname']))
	{
		echo"<script>
			window.location='login.php';
			</script>
		";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TRANING PROGRAM</title>
	<link rel="stylesheet" type="text/css" href="formcss.css">
	<script src="formjs.js"></script>
</head>
<body>

	<form action="update_response.php" method="post">
     <center>
     	<h1 style="color:#1d1f8c;text-shadow:2px 2px #175be3;background-color: #09e6d0;">COLLEGE TOUR FORM</h1>
			<hr><hr>
			<br>
	<div style="background-color:#e6c5c8 ;">

		<?php
			$id=$_REQUEST['id'];
			$con=mysqli_connect('localhost','root','','collegetour');
			$q="SELECT * FROM response WHERE id='$id'";
			$rs=mysqli_query($con,$q);
			if($row=mysqli_fetch_row($rs)) 
			{
				echo "
				       
				       <table style='font-size:20px ;font-style:oblique ; '>
				       <tr>
						<td><input type='hidden' name='id' value='$row[0]'></td>
				       </tr>
					<tr>
						<td><b>Candidate name</b></td>
						<td>:</td>
						<td><input type='text' name='fname' placeholder='Full name' class='txt' id='name' value='$row[1]'></td>
						<td id='nameErr'></td>
					</tr>
					<tr>
						<td><b>DOB</b></td>
						<td>:</td>
						<td><input type='date' name='date' class='dt' id='dob' value='$row[2]'></td>
						<td id='dobErr' ></td>
					</tr>
					<tr>
						<td><b>Gender</b></td>
						<td>:</td>
						<td><input type='radio' name='genn' id='gen'value='male'>Male'&nbsp;&nbsp;&nbsp;
						<input type='radio' name='genn' id='gen' value='female'> Female&nbsp;&nbsp;&nbsp;
						<input type='radio' name='genn' id='gen' value'='others'> Others</td>
                        <td id='genderErr'></td>
					</tr>
					<tr>
						<td><b>Personal Contact No.</b></td>
						<td>:</td>
						<td><input type='phone' name='contact' class='num' id='mbno'  value='$row[4]'></td>
						<td id='mnoErr'></td>
					</tr>
					<tr>
						<td><b>Email Address</b></td>
						<td>:</td>
						<td><input type='email' name='mail_id' class='mail' id='email' value='$row[5]'></td>
						<td id='emailErr' ></td>
					</tr>
					<tr>
						<td><b>Father name</b></td>
						<td>:</td>
						<td><input type='text' name='faname' placeholder='Enter father name' class='txt' value='$row[6]'></td>

					</tr>
					<tr>
						<td><b>Mother name</b></td>
						<td>:</td>
						<td><input type='text' name='maname' placeholder='Enter mother name' class='txt' value='$row[7]'></td>

					</tr>
					<tr>
						<td><b>Guardian Contact No.</b></td>
						<td>:</td>
						<td><input type='phone' name='g_contact' class='num' id='gmbno' value='$row[8]'></td>
						<td id='gmnoErr' ></td>
					</tr>
					<tr>
						<td><b>Branch</b></td>
						<td>:</td>
						<td>
							<select name='branch' class='br' id='branch1' value='$row[9]'>
								<option value = '-1' selected>[choose yours]</option>
								<option>CSE</option>
								<option>EEE</option>
								<option>Civil</option>
								<option>Mechanical</option>
								<option>IT</option>
								<option>Agriculture</option>
							</select>
						</td>
						<td id='branchErr'></td>
					</tr>


					<tr>
						<td><b>Address</b></td>
						<td>:</td>
						<td><textarea name='address' class='add' value='$row[10]'></textarea></td>
					</tr>
					<tr>
						<td><b>Semester</b></td>
						<td>:</td>
						<td>
							<select name='semester' class='sem' id='sem1' value='$row[11]'>
								<option value = '-1' selected>[choose yours]</option>
								<option value='1'>1</option>
								<option  value='2'>2</option>
								<option  value='3'>3</option>
								<option  value='4'>4</option>
								<option  value='5'>5</option>
								<option  value='6'>6</option>
								<option  value='7'>7</option>
								<option  value='8'>8</option>
							</select>
						</td>
						<td id='semErr'></td>
					</tr>
					<tr>
						<td><b>Destination place</b></td>
						<td>:</td>
						<td>
							<select name='destination' class='des' value='$row[12]'>
								<option value='Delhi-Manali'>Delhi-Manali</option>
								<option value='Goa-Delhi'>Goa-Delhi</option>
								<option value='Gangtok-Chandigarh'>Gangtok-Chandigarh</option>
								<option value='Delhi-Chandigarh'>Delhi-Chandigarh</option>
								<option value='Shimla-Delhi'>Shimla-Delhi</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Image</b></td>
						<td>:</td>
						<td><input type='file' name='img'></td>
					</tr>
				</table>
				";
				?>
			</div>
			<br>
			
			<hr><hr>
			<br>
		

			<input type="checkbox" name="chbx" class="ch" id="chckbox">
			<label style="font-size: 20px;font-weight: bold;background-color: #09e6d0;">I hereby declare that all the information provided by me is correct.</label>
			<br>
			<br>
			<?php

			echo
			"<input type='submit' value='update' class='bt' name='sub' onclick='validate()' style='background-color :#24c72f;font-weight:bold;'>
			";
			}
		?>
				
    </center>
	</form>

</body>
</html>



