<?php
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$password2 = $_REQUEST['passwordRpt'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "algambino";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

if (mysqli_connect_error()){
	die('Connect Error(". mysqli_connect_errno(). ")' . mysqli_connect_error());
}else{
	$insert = mysqli_query($conn,"INSERT Into register(username,email,password,passwordRpt,gender,phone) VALUES('$username','$email','$password','$password2','$gender','$phone')") or die(mysqli_error($conn)) ;
	// $SELECT = "SELECT email From register Where email = ? Limit 1";
	// $INSERT = "INSERT Into register(username,email,password,passwordRpt,gender,phone) Values (?,?,?,?,?,?)";

	// $stmt = $conn->prepare($SELECT);
	// $stmt = bind_param("s",$email);
	// $stmt = execute();
	// $stmt = bind_result($email);
	// $stmt = store_result();
	// $rnum = $stmt->num_rows;

	// if ($rnum == 0){
	// 	$stmt->close();
	// 	$stmt = $conn->prepare($INSERT);
	// 	$stmt->bind_param("sssssi",$username,$email,$password,$passwordRpt,$gender,$phone);
	

		// $stmt->execute();
		// echo"New record inserted successfuly!";
	// }
	// else{
		// echo "someone already registered using this email";
	// }
	//$stmt->close();
	$conn->close();
}
?>