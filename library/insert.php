<html>
<body bgcolor="Yellowgreen">
<form action="mainlib.html"method="post">
<center>
<br>
<br>
<?php
include_once'conne5.php';
if(isset($_POST['submit']))
{
$id=$_POST['bkid'];
$title=$_POST['bktitle'];
$author=$_POST['bkauthor'];
$publisher=$_POST['bkpublisher'];
$price=$_POST['bkprice'];
$quantity=$_POST['bkquantity'];

$sql="INSERT INTO book(bkid,bktitle,bkauthor,bkpublisher,bkprice,bkquantity)VALUES('$id','$title','$author','$publisher','$price','$quantity')";
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
<input type="submit"value="Back to Home Page"name="submit">
</center>
</body>
</html>