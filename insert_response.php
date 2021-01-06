<?php

   $con=mysqli_connect("localhost","root","","collegetour");
  
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

      $query="INSERT INTO `response`(`name`, `dob`, `gender`, `contact`, `email`, `fname`, `mname`, `gcontact`, `branch`, `address`, `semester`, `des_place`) VALUES ('$name','$dob','$gender','$contact','$email','$f_name','$m_name','$g_con','$branch','$address','$semester','$des_place')";
      $rs=mysqli_query($con,$query);
      if($rs)
      {
             echo"
                <script>
                  alert('Inserted Successfully');
                  window.location = 'dashboard.php';
               </script>
            ";
      }
      else{
            echo"
            <script>
            alert('Error while deletion');
            </script>";
      }
?>  