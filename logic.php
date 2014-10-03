<?php
#include 'Words.php'
$wordList = array("adapter",
"age",
"analyze",
"apologizes",
"appall",
"authorize",
"ax",
"bus",
"cancele",
"catalog",
"center",
"civilize",
"color",
"computerize",
"counsel",
"cozy",
"criticize",
"dream",
"emphasize",
"endeavor",
"favour",
"fiber",
"finalize",
"fulfill",
"generalize",
"honor",
"humour",
"initialize",
"inquire",
"judgment",
"marvellous",
"maximize",
"minimize",
"model",
"neighbour",
"offense",
"optimize",
"practice",
"publicize",
"rumor",
"signal",
"specialize",
"spoil",
"subsidize",
"summarize",
"sympathize",
"theatre",
"travel",
"whiskey",
);
$numberList =array("1","2","3","4","5","6","7","8","9");
$symbolList = array("!","@","#","$","%","^","&","*");
$password = "";
$numbers = $_POST["numbers"];
$symbols = $_POST["symbols"];
$wordsCount = $_POST["wordsCount"];
$separator = $_POST["separator"];
$capital = $_POST["capital"];

$selectedWords = array();
$selectedSymbols = array();
$selectedNumbers = array();


for( $i=1;$i<=$wordsCount; $i++){
	$word = "";
	$rand_nos = array_rand($wordList);
	$selectedWords[$i-1]= $wordList[$rand_nos];
	
	if ($capital == "Lower"){		
		$word = $wordList[$rand_nos];
	} 
	if ($capital == "First"){
		$word = ucfirst($wordList[$rand_nos]);
	}
	if ($capital == "Upper"){
		$word = strtoupper($wordList[$rand_nos]);
	}
	if ($separator == "space"){
		$word = $word . " ";		
	}
	
	if ($separator == "hyphen"){
		$word = $word . "-";
	}
	$password = $password . $word;
}
if (($separator == "space") or ($separator == "hyphen") ){
	$password= substr($password,0,strlen($password)-1);
	}


for( $i=1;$i<=$numbers; $i++){
		$rand_nos = array_rand($numberList);		
		$selectedNumbers[$i-1]= $numberList[$rand_nos];		
		$password = $password . $numberList[$rand_nos];	
	
	}
	
for( $i=1;$i<=$symbols; $i++){
		$rand_symbol = array_rand($symbolList);		
		$selectedSymbols[$i-1]= $symbolList[$rand_symbol];		
		$password = $password . $symbolList[$rand_symbol];	
	
	}
 
 
?>
