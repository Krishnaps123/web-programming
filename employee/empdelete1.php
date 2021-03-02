<html>
<head>
<title>retrieve data</title>
</head>
<body bgcolor="lightpink">
<center>
<?php
include_once'connec.php';
$sql ="SELECT * FROM job";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>id</th>
<th>name</th>
<th>designation</th>
<th>salary</th>

</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td> <?php echo $row["id"];?> </td>
<td> <?php echo $row["name"];?> </td>
<td> <?php echo $row["designation"];?> </td>
<td> <?php echo $row["salary"]; ?></td>
</tr> 


<?php
$i++;
}
?>
</table>
</tr>
<br><br>
<form method="post" action="empdelete.php">
Enter the id to delete:
&nbsp&nbsp
<input type="text" name="id">
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


