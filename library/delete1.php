<html>
<head>
<title>retrieve data</title>
</head>
<body bgcolor="lightpink">
<center>
<?php
include_once'conne5.php';
$sql ="SELECT * FROM book";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>bkid</th>
<th>bktitle</th>
<th>bkauthor</th>
<th>bkpublisher</th>
<th>bkprice</th>
<th>bkquantity</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td> <?php echo $row["bkid"];?> </td>
<td> <?php echo $row["bktitle"];?> </td>
<td> <?php echo $row["bkauthor"];?> </td>
<td> <?php echo $row["bkpublisher"]; ?></td>
<td> <?php echo $row["bkprice"]; ?></td>
<td> <?php echo $row["bkquantity"]; ?></td>
</tr> 
<?php
$i++;
}
?>
</table>
</tr>
<br><br>
<form method="post" action="delete2.php">
Enter the id to delete:
&nbsp&nbsp
<input type="text"name="id">
<br><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
}
else{
echo"no result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html> 