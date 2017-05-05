<?php
&con=mysqli_connect('localhost','root');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
<title>View Book Record </title>
</head>
<body>
<h1>Book Record Management </h1>
<table>
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
   $row=mysqli_ fetch_array($result);
}
<?
<tr>
<td><?php echo $row['bookid']; ?> </td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['author']; ?></td>
</tr>
}
?>
</table>
</body>
</html>