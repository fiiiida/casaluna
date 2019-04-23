<?php
session_start();
$conn= mysqli_connect("localhost","root","","projet");
if (isset($_POST["login"]))
{
	$sql= "Select * from client where nom ='".$_POST["member_name"]." 'and mdp= ' ".$_POST["member_password"] . " ' ";
	  $result = mysqli_query($conn,$sql);  
      $user = mysqli_fetch_array($result);  

      if ($user)
      {
      	if (!empty($_POST["remember"])) 
      	{
      		 setcookie ("member_login",$name,time()+ (10 * 365 * 24 * 60 * 60));  
    		setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
    
      	}
      	else 
      	{
      	if(isset($_COOKIE["member_login"]))   
   			 {  
   				  setcookie ("member_login","");  
    		}  
    	if(isset($_COOKIE["member_password"]))   
    		{  
     				setcookie ("member_password","");  
    		}  
    	}
    	header("location:afficher.php");

      }


      else
      {
      	$message="Invalid Login";

      }
}

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container box">
		<form action="" method="post" id="frmLogin">
			<div class="text-danger"><?php if (isset($message)) {echo $message ;} ?></div>
			<div class="form-group">
				<label for="login">Username</label>
				<input type="text" name="member_name" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="member_password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"  class="form-control">
			</div>
			<div class="form-group">
				<label for="remember-me"  <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>Remember me</label>
				<input type="checkbox" name="remember" >
			</div>

			<div class="form-group">
				<div><input type="submit" name="login" value="login" class="btn btn-sucess"></div>
				
			</div>

			
		</form>
		
	</div>

</body>
</html>