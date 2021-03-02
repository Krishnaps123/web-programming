<html>
<body bgcolor="Yellowgreen">
<form action="mainemp.html" method="post">
<center>
<br><br>

<?php
include_once'connec.php';
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$nam=$_POST['name'];
$des=$_POST['designation'];
$sal=$_POST['salary'];


$sql="INSERT INTO job(id,name,designation,salary)VALUES('$id','$nam','$des','$sal')";
if(mysqli_query($conn,$sql)){
echo"New record created successfully!<br>";
}
else
{
 echo"error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br>
<input type="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>