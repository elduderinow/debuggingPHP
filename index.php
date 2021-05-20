<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) { //pass in the argument
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; //select the right index

echo $monday;


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun"; //use the right quotation marks
echo substr($str, 0, 10);


new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) { //use & before value to update the array immediately
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);



new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) { //change the comparison operator to != (is not) and the 'Z' to 'aa' as this is the next in line after "z"

    array_push($arr, $letter);
}

var_dump($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) { //add the & to update the array.
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ",$params); //return the value instead of echo and switch the parameters.
}

/*
function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 2; $i--) {
        array_push($arr, randomHeroName());
    }
    return $amount;
}*/

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)]; //count the arrays - 1 because the index goes from 0-1 and the count will give a "2".
    return $randname; //return the value instead of echo
}

//randomHeroName();
echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(int $year) {
    print_r("&copy; $year BeCode");
}
//print the copyright
copyright(idate('Y')); //convert to a integer as the parameters of copyright requires.


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') { //comparison operator needs to be &&
        return 'Welcome John Smith'; // or echo both of them or put smith on one line with return.
    }
        return 'No access';

}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas')."<br>";
//no access
echo login('john@example.be', 'dfgidfgdfg')."<br>";
//no access
echo login('wrong@example.be', 'wrong')."<br>";
//you can change things again
//
//!

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        //var_dump(strpos($link, $unacceptable));
        if (is_int(strpos($link, $unacceptable))) { //check if this value is an integer, if it is, then it's true. or you can use != false. the strpos will give false if the string is nog there and will give an integer of the char position, which result in a false with strict types turned on.
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');



new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code

$count = count($areTheseFruits); // for loop needs to run 7 times (the amount of the elements inside the array. But after the unset the count decreases so best to count the arr outside the for loop. and -1 because if indexes.
for($i=0; $i <= $count-1; $i++) {
    if(!in_array($areTheseFruits[$i],$validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this

