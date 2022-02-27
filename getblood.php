<?php 
include_once('connection.php'); 
$query="select * from blood"; 
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table  style="width:600px; line-height:40px; text-align:center; border:1px;"> 
	<tr> 
		<th colspan="4"><h2>Donor Record</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Number </th> 
			  <th> Blood Group</th> 
              <th> City </th>
              <th> Locality </th>
        
			  
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
