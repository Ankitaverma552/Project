<?php
	session_start();
	if(!isset($_SESSION['uname']))
	{
		echo"<script>
			window.location='login.php';
			</script>
		";
	}

	  $id=$_REQUEST['id'];
      $name=$_REQUEST['fname'];
      $dob=$_REQUEST['date'];
      $gender=$_REQUEST['genn'];
      $contact=$_REQUEST['contact'];
      $email=$_REQUEST['mail_id'];
      $f_name=$_REQUEST['faname'];
      $m_name=$_REQUEST['maname'];
      $g_con=$_REQUEST['g_contact'];
      $branch=$_REQUEST['branch'];
      $address=$_REQUEST['address'];
      $semester=$_REQUEST['semester'];
      $des_place=$_REQUEST['destination'];

       $con=mysqli_connect("localhost","root","","collegetour");
        $query="UPDATE response SET name='$name', dob='$dob',gender='$gender', contact='$contact',email='$email',fname='$f_name',mname='$m_name',gcontact='$g_con',branch='$branch',address='$address',semester='$semester',des_place='$des_place' WHERE id=$id";
      $rs=mysqli_query($con,$query);
      if($rs)
      {
             echo"
                <script>
                  alert('Updated Successfully');
                  window.location = 'dashboard.php';
               </script>
            ";
      }
      else
      {
            echo"
            <script>
            alert('Error while updation');
            window.location = 'dashboard.php';
            </script>";
       }

            
   
?>