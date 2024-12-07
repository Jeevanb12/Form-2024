<?php 

$conn=mysqli_connect("localhost","root","","form") or die ("connection failed");

$fname=$_GET['fname'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$school=$_GET['school'];
$degree=$_GET['degree'];
$year=$_GET['year'];
$company=$_GET['company'];
$pos=$_GET['pos'];
$date=$_GET['date'];
$skills=$_GET['skills'];
$rname=$_GET['rname'];
$relation=$_GET['relation'];
$phonee=$_GET['phonee'];

$sql="insert into data(full_name,address,phone,email,school,degree,year,company_name,position,emp_date,skills,ref_name,relation,phonee)values('$fname','$address','$phone','$email','$school','$degree','$year','$company','$pos','$date','$skills','$rname','$relation','$phonee')";

$result=mysqli_query($conn,$sql);

include'last.html';
mysqli_close($conn);

?>