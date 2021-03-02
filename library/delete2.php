<html>
<body bgcolor="yellow">
<form action="mainlib.html"method="post">
<center>
<?php
include_once'conne5.php';
$rid=$_POST['id'];
$sql="delete from book where bkid='$rid'";
if(mysqli_query($conn,$sql))
{
echo"record deleted succesfully";
}
else
{
echo"error deleting record".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br><br>
<input type="submit" value="back to home page" name="submit">
</center>
</body>
</html>