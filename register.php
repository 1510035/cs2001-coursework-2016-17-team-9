 <?php  
 
$name = $_POST["name"];  //created variables will be used to get the information from the andorid application, using http post method
$email = $_POST["email"];  
$pass = $_POST["password"];  
require "init.php"; //established connection from the database 

$query = "select * from userinfo where email like '".$email."';"; 
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
	$response = array();
	$code = "reg_false";
	$message = "User Already Exist...";
	array_push($response,array("code"=>$code,"message"=>$message));
	echo json_encode(array("server_response"=>$response));
}

else
{

	$query = "insert into userinfo values('".$name."','".$email."','".$pass."');";  
 	$result = mysqli_query($con,$query);

	if(!$result)
	{
		$response = array();
		$code = "reg_false";
		$message = "Server error occured. Try again...";
		array_push($response,array("code"=>$code,"message"=>$message));
		echo json_encode(array("server_response"=>$response));
	}

	else
	{
		$response = array();
		$code = "reg_true";
		$message = "Registration successful...Thank you.";
		array_push($response,array("code"=>$code,"message"=>$message));
		echo json_encode(array("server_response"=>$response));
	}

	
}
	mysqli_close($con);
	
 

?>