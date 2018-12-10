<?php

	include "simple_html_dom.php";
	include "config.php";

	
	$x='4sf15cs005';
	
	$user_check_query = "SELECT * FROM student WHERE USN = '$x' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (!$user) {
	
	$url = "https://cbcs.fastvturesults.com/student/$x";
	echo $url,$x. '<br>'	;
	
	$html2 = new simple_html_dom();
	
	$html2->load_file($url);			
	$k=0;
	$item = array();
	foreach($html2->find("div[class=col-6]") as $link){
		foreach($link->find("p[class=mb-0]") as $node){	
			
			if($k==0){
				$k=1;
			}
			else{
				$trimmed = str_replace('SGPA', '', (string)$node->plaintext);
				array_push($item, $trimmed);	
				$k=0;
			}
		}
	}
	
	foreach($item as $val){
		echo $val;
	}
	
	echo '<br>';

	
	foreach($item as $val){
		echo $val;
	}
	echo '<br>';
	$sql="insert into student(USN, 6thSemester, 5thSemester, 4thSemester) values ('".$x."','".$item[0]."','".$item[1]."','".$item[2]."')";	
	if (mysqli_query($db, $sql)) {
		  echo "New record created successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
			
	}
	else{
		echo "USN already exist";
	}
	
?>
