<!-- HERE I CREATED THE DATABASE NAME AS zoho AND TABLE NAME AS tablezoho1
PLEASE IF YOU WANT TO RUN PLEASE CREATE ZOHO DATABASE IN LOCAL DATABASE AND CREATE TABLE AND 
COLUMN NAME AS Name,ph,Email AND RUN THE FILE -->
<form method="GET" action="phpcode.php">
<center><h1> Add Contacts </h1>
Name   <input type="text" name="t1" ><br><br><br>
Ph.no  <input type="number" name="t2" ><br><br><br>
Email  <input type="email" name="t3" ><br><br>
<input type=submit value="Save">
</center>
<?php
$conn = mysqli_connect("localhost", "root","", "zoho");
if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$i=$_GET['t1'];
$u=$_GET['t2'];
$v=$_GET['t3'];
$sql="insert into tablezoho1 values ('$i',$u,'$v')";
$result=mysqli_query($conn,$sql);
?>
<html>
<body>
<center><h1> My Contacts</h1></center>
<center><table border=1 cellspacing=0 cellpadding=10>
<tr bgcolor="gray">
<th>Name</th>
<th>Ph.no</th>
<th>Email</th>
</tr>
<?php
$sql="select Name,ph,email from tablezoho1";
$result=$conn->query($sql);
while($rows=$result->fetch_assoc())
 {
   ?>
   <tr>
     <td><?php echo $rows["Name"];?></td>
     <td><?php echo $rows["ph"];?></td>
     <td><?php echo $rows["email"];?></td>
</tr>
<?php
}
?>
</table></center>
</body>
</html>
