 <?php  
 require "init.php";  
 $email = $_POST["email"];  
 $pass =  $_POST["password"];  
 
$query = "select * from userinfo where email like '".$email."' and password like '".$pass."';";  

$result = mysqli_query($con,$query);  
 


if(mysqli_num_rows($result)>0)  
 {  
	$response = array();
	$code = "login_true"; 
	$row = mysqli_fetch_array($result);  
	$name =$row[0];
	$message = "Login Success..Welcome ".$name;  
	array_push($response,array("code"=>$code,"message"=>$message));
	echo json_encode(array("server_response"=>$response));
 }  
 else  
 {   
		
	$response = array();
	$code = "login_false"; 
	$message = "Login Failed..Try again";  
	array_push($response,array("code"=>$code,"message"=>$message));
	echo json_encode(array("server_response"=>$response));

}

mysqli_close($con);





 ?>  