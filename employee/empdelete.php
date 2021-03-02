<html>
<body bgcolor="yellow">
<form action="mainemp.html" method="POST">
<center>
<?php
include_once'connec.php';
$rid=$_POST['id'];
$sql="delete from job where id='$rid'";
if(mysqli_query($conn,$sql))
{
echo"record delete succesfully";
}
else
{
echo"error deleted record".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><br>
<input type="submit" value="back to home page" name="submit">
</center>
</body>
</html>