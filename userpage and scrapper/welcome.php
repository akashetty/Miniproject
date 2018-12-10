<?php 
	include('config.php');
	session_start();
	
	if(isset($_POST["search"]){
		$user = mysqli_real_escape_string($db,$_POST['name']);
		$sql = "select * from student where usn = '$user'";
		$result = mysqli_query($db,$sql);
		/*$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      	$active = $row['active'];*/
	      
	      	$count = mysqli_num_rows($result);
	      
	      // If result matched $user table row must be 1 row
			
	      	if($count == 1) {
		 	session_register("user");
		 	$_SESSION['login_user'] = $user;
		 
		 	header("location: table.php");
	      	}else {
		 	$error = "invalid usn";
	      	}
   
	}
	else{
		echo "This field can't be kept empty";
	}
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>result</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="form-container">
                <h1>
                    Result login
                </h1>
                <form  action="" method="post">
                    <label for="name">Enter USN:</label>
                    <input id="name" type="text" name="name" required maxlength="10">
                    
                    <button class="button-primary" type="submit" name="search" >Search</button>
                </form>
                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            </div>
        </div>
    </body>
</html>
