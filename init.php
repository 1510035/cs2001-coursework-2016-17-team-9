 <?php  
 $dbname = "userdb";  
 $user = "shaylan";  
 $password = "password123";  
 $host = "localhost";  
 
 $con = mysqli_connect($host,$user,$password,$dbname);  
 
 if(!$con)
 {
	 //die("Error in db connection". mysqli_connect_error());
 }
 else
 {
	 //echo "<h3>DB connection success";
 }
 
 ?>  