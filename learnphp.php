/*
PHP review
done on April 1, 2019
based on YouTube video by Derek Banas
https://www.youtube.com/watch?v=7TF00hJI78Y
as well as PHP manual (https://www.php.net/manual/)
*/

<html>
<body>

<?php
echo "<p>\"Data processed\"</><br>";

//lets print out date information onto the screen

date_default_timezone_set('UTC');

echo date('h:i:s:u a, l F jS Y e');
echo "<br>";

//grab info from the user's form
// variable starts with $ followed by letter, then underscores or numbers or letters
// variable names are case sensitive
// to concatenate, use .


$userName = $_POST['username'];
$streetAddress = $_POST['streetaddress'];
$cityAddress = $_POST['cityaddress'];

echo $userName . "</br>";
echo $streetAddress . "</br>";
echo $cityAddress . "</br>";

// use HEREDOC string method (<<<EOD) used for writing multiple lines without using quotes

$str = <<<EOD
The customer's name is
$userName and they
live at $streetAddress
in $cityAddress</br>
EOD;

echo $str . "</br>";

//define constants

define('PI', 3.1415926);
echo "The value of PI is " . PI;

// do some simple math operations

echo "</br>5 + 2 = " . (5 + 2);
echo "</br>5 - 2 = " . (5 - 2);
echo "</br>5 * 2 = " . (5 * 2);
echo "</br>5 / 2 = " . (integer)(5 / 2);
echo "</br>5 % 2 = " . (5 % 2) . "</br>";

// shortcuts for incrementing variables
// use += -= *= /= %=


$randomNumber = 7;

echo $randomNumber += 10;

// pre-increment and post-increment

// set $randomNumber to 5
$randomNumber = 5;

// increment by one, then display
echo "</br>" . "++randomNumber = " . ++$randomNumber . "</br>";

// display it, then increment
echo "randomNumber++ = " . $randomNumber++ . "</br>";
echo $randomNumber;
echo "</br>";

// References in PHP (from PHP manual)
// Assign by reference
// $a and $b point to the same content

$a = & $b;

$a = 3;
$c = $b;
echo "the value of variable c is : " . $c;

// comparison operators

echo "</br>";

$numOfOranges = 4;
$numOfBananas = 36;

if (($numOfOranges > 25) && ($numOfBananas > 30)){
	echo "25% discount";

}
elseif (($numOfOranges > 30) || ($numOfBananas > 30)){
	echo "15% discount";
}
elseif (!(($numOfOranges < 5)) || (!($numOfBananas < 5))){
	echo "5% discount";
}
else {
	echo "Sorry, no discount";
}

// ternary operator
// used to assign a value to a variable based on if condition 
// is true or false

// condition ? value_if_true : value_if_false

$biggestNum = (15 > 10) ? 15 : 10;

echo '<br>' . $biggestNum;

// use switch statement

switch($userName){

case "Peter" :

	echo "</br>" . "Hi Peter</br>";
	break;

case "Sally" :
	echo "</br>Hi Sally</br>";

	default :
	  echo "</br>Hi there anonymous</br>";
 	  break;
}

// loops
// a while loop


while ($num < 20){

	echo ++$num . ', ';
}


// do the same with a for loop

for ($num = 1; $num <= 20; $num++)
{
echo $num;

if ($num != 20)
{
 echo ', ';
}

}
echo '</br>';

// arrays 

$bestFriends = array('Joe', 'Willow', 'Adam');

$bestFriends[3] = 'Sandy';

foreach($bestFriends as $tempFriend)
{
	echo $tempFriend . ', ';
	
}

// create key-value pairs for arrays

$customer = array('Name'=>$userName, 'Street'=>$streetAddress,'City'=>$cityAddress);

echo '</br>';
foreach($customer as $key => $value)
{
	echo  $key . ' : ' . $value . '</br>';
}


// combine arrays

$bestFriends = $bestFriends + $customer;

foreach($bestFriends as $tempVariable)
{
	echo '</br>' . $tempVariable;
}

// to compare arrays, use == != 
// you can also use === to check if the arrays contain the same values, same order and same type

// multi-dimensional arrays

$customers = array(array('Derek', '123Main', '15212'),
	 	  array('Sally', '357Main', '15212'),
		  array('Bob', '125Main', '15212'));
echo '</br>';
	for($row = 0; $row < 3; $row++){
		for($col = 0; $col < 3; $col++){
		   echo  $customers[$row][$col] . ', ';
		}
		echo '</br>';
	}

// sorting arrays

// common array functions
// sort($yourArray) : Sorts in ascending alphabetical order  or
// if you add, SORT_NUMERIC or , SORT_STRING
// asort($yourArray) : sorts arrays with keys
// ksort($yourArray) : sorts by the key
// Put a r infront of the above to sort in reverse order


// trim off white spaces in a string

$randString = "             Random String      ";

echo strlen("$randString") . "</br>";
echo strlen(ltrim("$randString")) . "</br>";
echo strlen(rtrim("$randString")) . "</br>";
echo strlen(trim("$randString")) . "</br>";

// use printf to print and be able to format strings

echo "The randomString is $randString </br>";

printf ("The randomString is %s </br>", $randString);

// use conversion codes
// print only 2 decimal places
$decimalNum = 2.46753;
printf("decimal num = %.2f </br>", $decimalNum);


// Other conversion codes
// b : integer to binary
// c : integer to character
// d : integer to decimal
// f : double to float
// o : integer to octal
// s : string to string
// x : integer to hexadecimal


// change string case

// convert all letters in a string to upper case
echo  strtoupper($randString) . "</br>";

// convert all letters to lower case
echo  strtolower($randString) . "</br>";

// convert the first letter of each word to upper case
echo  ucfirst($randString) . "</br>";

// convert strings to arrays and vice versa

$myNewString = "Hi this will be thrown into an array";

$arrayFromString = explode(' ', $myNewString, 8);

// print the newly created array to the screen

foreach($arrayFromString as $tempVar){
	printf("%s </br>", $tempVar); 
}


// now convert the array back to string variable

$stringFromArray = implode(' ', $arrayFromString);

//print the string
printf("%s <br>", $stringFromArray);

// find part of a string using substr()

$partOfString = substr("Random String", 0, 4);
echo $partOfString;

// compare strings using strcmp()

$string1 = "Bob";
$string2 = "Bob2";

$compareResult = 0;

$compareResult = strcmp($string1, $string2);

echo "</br>" .  $compareResult;


if($compareResult == 0)
{
	echo "</br>the strings are the same!";
}
else
{
	echo "</br>the strings do not match";
}


?>

</body>
</html>
