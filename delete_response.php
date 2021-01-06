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

<?php
  $id=$_REQUEST['id'];
  $con=mysqli_connect('localhost','root','','collegetour');
  $q="DELETE FROM response WHERE id='$id'";
  $rs=mysqli_query($con,$q);
  if($rs)
  {
    echo "<script>alert('Deleted successfully');
    window.location='dashboard.php';
    </script>";
  }
  else
  {
    echo "<script>alert('Error while deletion')</script>";
  }
?>