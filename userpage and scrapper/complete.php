<?php


include "simple_html_dom.php";
include "config.php";
session_start();
	
 
$url = "https://cbcs.fastvturesults.com/result/".$_SESSION['login_user']."/6";

$html2 = new simple_html_dom();
$html2->load_file($url);

#$item1=array();
$item2=array();
/*foreach($html2->find("div[row mb-1 text-center]") as $k){
	$item1[$j++] = $k->plaintext;
	#$name1 = html_entity_decode(trim($item1['name']));
	#echo $name1."<br>";


foreach($item1 as $val){
	echo $val."<br>";*/

foreach($html2->find("div[class=col-6]") as $link){
	$item2[$i++] = $link->find("strong",0)->plaintext;
	#echo $item2['name']."<br>";
	#$name2 = html_entity_decode(trim($item2['name']));
	#echo $name2."<br>";
}
 
foreach($item2 as $val){
	echo $val."<br>";
}

?>
