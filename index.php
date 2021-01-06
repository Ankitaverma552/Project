<!DOCTYPE html>
<html>
<head>
	<title>TRANING PROGRAM</title>
	<link rel="stylesheet" type="text/css" href="formcss.css">
	<script src="formjs.js"></script>
</head>
<body>

	<form action="insert_response.php" method="post">
		<center>
			<h1 style="color:#1d1f8c;text-shadow:2px 2px #175be3;background-color: #09e6d0;">COLLEGE TOUR FORM</h1>
			<hr><hr>
			<br>
			<div style="background-color:#e6c5c8 ;">
				<table style="font-size:20px ;font-style:oblique ; ">
					<tr>
						<td><b>Candidate name</b></td>
						<td>:</td>
						<td><input type="text" name="fname" placeholder="Full name" class="txt" id="name" ></td>
					<!-- <td><input type="text" name="mname" placeholder="Middle name" class="txt"></td>
						<td><input type="text" name="lname" placeholder="Last name" class="txt"></td> -->
						<td id="nameErr"></td>
					</tr>
					<tr>
						<td><b>DOB</b></td>
						<td>:</td>
						<td><input type="date" name="date" class="dt" id="dob"></td>
						<td id="dobErr"></td>
					</tr>
					<tr>
						<td><b>Gender</b></td>
						<td>:</td>
						<td><input type="radio" name="genn" id="gen" value="male" > Male &nbsp;&nbsp;&nbsp;<input type="radio" name="genn" id="gen" value="female"> Female&nbsp;&nbsp;&nbsp;<input type="radio" name="genn" id="gen" value="others"> Others</td>
                        <td id="genderErr"></td>
					</tr>
					<tr>
						<td><b>Personal Contact No.</b></td>
						<td>:</td>
						<td><input type="phone" name="contact" class="num" id="mbno"></td>
						<td id="mnoErr"></td>
					</tr>
					<tr>
						<td><b>Email Address</b></td>
						<td>:</td>
						<td><input type="email" name="mail_id" class="mail" id="email"></td>
						<td id="emailErr"></td>
					</tr>
					<tr>
						<td><b>Father's name</b></td>
						<td>:</td>
						<td><input type="text" name="faname" placeholder="Enter father's name" class="txt"></td>

					</tr>
					<tr>
						<td><b>Mother's name</b></td>
						<td>:</td>
						<td><input type="text" name="maname" placeholder="Enter mother's name" class="txt"></td>

					</tr>
					<tr>
						<td><b>Guardian Contact No.</b></td>
						<td>:</td>
						<td><input type="phone" name="g_contact" class="num" id="gmbno"></td>
						<td id="gmnoErr"></td>
					</tr>
					<tr>
						<td><b>Branch</b></td>
						<td>:</td>
						<td>
							<select name="branch" class="br" id="branch1">
								<option value = "-1" selected>[choose yours]</option>
								<option>CSE</option>
								<option>EEE</option>
								<option>Civil</option>
								<option>Mechanical</option>
								<option>IT</option>
								<option>Agriculture</option>
							</select>
						</td>
						<td id="branchErr"></td>
					</tr>


					<tr>
						<td><b>Address</b></td>
						<td>:</td>
						<td><textarea name="address" class="add"></textarea></td>
					</tr>
					<tr>
						<td><b>Semester</b></td>
						<td>:</td>
						<td>
							<select name="semester" class="sem" id="sem1">
								<option value = "-1" selected>[choose yours]</option>
								<option value="1">1</option>
								<option  value="2">2</option>
								<option  value="3">3</option>
								<option  value="4">4</option>
								<option  value="5">5</option>
								<option  value="6">6</option>
								<option  value="7">7</option>
								<option  value="8">8</option>
							</select>
						</td>
						<td id="semErr"></td>
					</tr>
					<tr>
						<td><b>Destination place</b></td>
						<td>:</td>
						<td>
							<select name="destination" class="des">
								<option  value="Delhi-Manali">Delhi-Manali</option>
								<option  value="Goa-Delhi">Goa-Delhi</option>
								<option  value="Gangtok-Chandigarh">Gangtok-Chandigarh</option>
								<option  value="Delhi-Chandigarh">Delhi-Chandigarh</option>
								<option  value=">Shimla-Delhi">Shimla-Delhi</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Image</b></td>
						<td>:</td>
						<td><input type="file" name="img"></td>
					</tr>
				</table>
			</div>
			<br>
			<hr><hr>
			<br>
			<input type="checkbox" name="chbx" class="ch" id="chckbox">
			<label style="font-size: 20px;font-weight: bold;background-color: #09e6d0;">I hereby declare that all the information provided by me is correct.</label>
			<br>
			<br>
			<input type="submit" value="submit" class="bt" name="sub" onclick="validate()" style="background-color :#24c72f;font-weight:bold;">

		</center>
	</form>

</body>
</html>