<?php
	$Name = $_POST['Name'];
    $Email=$_POST['Email'];
	$Number = $_POST['Number'];
	$Blood = $_POST['Blood'];
	$City = $_POST['City'];
	$Locality = $_POST['Locality'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','health revive');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into blood(Name, Email, Number, Blood, City, Locality) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisss", $Name, $Email, $Number, $Blood, $City, $Locality);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>