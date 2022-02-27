<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","Health Revive");
if(count($_POST)>0) {
$roll_no=$_POST['req'];
$data = mysqli_query($conn,"SELECT * FROM blood where City='$roll_no' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body> 
	<table  style="width:600px; line-height:40px; text-align:center; border:1px;"> 
	<tr> 
		<th colspan="6"><h2>Student Record</h2></th> 
		</tr> 
			  <th> id </th> 
			  <th> first name </th> 
			  <th> last name </th> 
			  <th> email </th> 
              <th> password </th>
              <th> number </th>
        
			  
		</tr> 
		
		<?php while($rows= mysqli_fetch_assoc($data)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Number']; ?></td> 
		<td><?php echo $rows['Blood']; ?></td>
        <td><?php echo $rows['City']; ?></td> 
        <td><?php echo $rows['Locality']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
</html>
