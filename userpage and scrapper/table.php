<?php
	include "simple_html_dom.php";
	include('config.php');
   	session_start();
	
   	$query = mysqli_query($db,"select * from student where USN = '".$_SESSION['login_user']."'");
   	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
   	$num = mysqli_num_rows($query);
   
?>

<html>
<head>
<title>result</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>

<div>   
     <!-- start header here-->
	<header>
<div id="fdw-pricing-table">
    <div class="plan plan3">
    
        <div class="header">Sem 6</div>
        <div class="price">SGPA</div>  
        <div class="monthly"><?php echo $row['6thSemester'];?></div>      
               
    </div>
 
 
    <div class="plan plan4">
        <div class="header">Sem 5</div>
        <div class="price">SGPA</div>  
        <div class="monthly"><?php echo $row['5thSemester'];?></div>      
               
    </div>
    <div class="plan plan3">
        <div class="header">Sem 4</div>
        <div class="price">SGPA</div>  
        <div class="monthly"><?php echo $row['4thSemester'];?></div>      
       <!-- <?php $link = "https://cbcs.fastvturesults.com/result/".$_SESSION['login_user']."/4"; ?> 
        <a class="signup" href="<?= $link ?>" target="_blank">See result</a>  -->       
    </div>
    <div class="plan plan4">
        <div class="header">Sem 3</div>
        <div class="price">SGPA</div>  
        <div class="monthly">8.5</div>      
        
              
    </div> 	
</div>
	</header><!-- end header -->
    
</div>
</body>
</html>
