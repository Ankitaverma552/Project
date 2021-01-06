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
	<!-- <link rel="stylesheet" type="text/css" href="formcss.css"> -->
	<!-- <script src="formjs.js"></script> -->
	<style>
		table, th, td {
     border: 1px solid black;
   }
   table{
     width: 100%;
     border-collapse: collapse;
   }
 </style>
</head>
<body>

	<form method="post">
		<center>
			<h1 style="color:#1d1f8c;text-shadow:2px 2px #175be3;background-color: #09e6d0;">
        COLLEGE TOUR FORM
        <span style="float: right;font-size: 15px;"><a href="logout.php">Logout</a></span>
      </h1>
      <hr><hr>
      <br>
      <h1>VIEW DETAILS OF THE COLLEGE TOUR REGISTRATION FORM</h1>
      <input type="submit" value="view" class="bt" name="view_button" style="height:80%,width:100%;"><br><br>

      
    </center>
  </form>
</body>
</html>

<?php
  if(isset($_REQUEST['view_button'])){
    $con=mysqli_connect("localhost","root","","collegetour");
    $query="SELECT * FROM response";
    $rs=mysqli_query($con,$query);

    echo "
      <table>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>Contact no.</th>
          <th>Email Address</th>
          <th>Father's Name</th>
          <th>Mother's Name</th>
          <th>Guardian contact no.</th>
          <th>Branch</th>
          <th>Address</th>
          <th>Semester</th>
          <th>Destination</th>
          <th>Edit</th>
          <th>Delete</th>
      

        </tr>

    ";
    $index = 0;
    while($row=mysqli_fetch_row($rs))
    {
      echo" 
        <tr>
          <td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td>$row[5]</td>
          <td>$row[6]</td>
          <td>$row[7]</td>
          <td>$row[8]</td>
          <td>$row[9]</td>
          <td>$row[10]</td>
          <td>$row[11]</td>
          <td>$row[12]</td>
          <td><a href='edit_response.php?id=$row[0]'>Edit</a></td>
          <td><a href='delete_response.php?id=$row[0]'>Delete</a></td>
        </tr>
      
      ";
          
    }

    echo"</table>";
  }

?>