<?php

$name=$_REQUEST["fname"];
$dob=$_REQUEST["date"];
$gender=$_REQUEST["genn"];
$contact=$_REQUEST["contact"];
$email=$_REQUEST["mail_id"];
$f_name=$_REQUEST["faname"];
$m_name=$_REQUEST["maname"];
$g_con=$_REQUEST["g_contact"];
$branch=$_REQUEST["branch"];
$address=$_REQUEST["address"];
$semester=$_REQUEST["semester"];
$des_place=$_REQUEST["destination"];

echo "<h2>Your Input:</h2>";
echo "Name : ".$name;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $contact;
echo "<br>";
echo $email;
echo "<br>";
echo $f_name;
echo "<br>";
echo $m_name;
echo "<br>";
echo $g_con;
echo "<br>";
echo $branch;
echo "<br>";
echo $address;
echo "<br>";
echo $semester;
echo "<br>";
echo $des_place;
echo "<br>";

?>