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
$numbers = $_POST["Numbers"];
$symbols = $_POST["symbols"];
$wordsCount = $_POST["wordsCount"];
$separator = $_POST["separator"];
$capital = $_POST["capital"];

$selectedWords = array();
$selectedSymbols = array();
$selectedNumbers = array();


for( $i=1;$i<=$wordsCount; $i++){
	$rand_nos = array_rand($wordList);
	$selectedWords[$i-1]= $wordList[$rand_nos];
	##Need to write code for checking repeatition
	$password = $password . $wordList[$rand_nos];
}

if ($numbers <0) {
echo $numbers;
	for( $i=1;$i<=$numbers; $i++){
		$rand_nos = array_rand($numberList);
		$selectedNumbers[$i-1]= $numberList[$rand_nos];
		$password = $password . $numberList[$rand_nos];
		echo $numberList[$rand_nos];
	}
}

?>
