<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice #1</title>
</head>
<body>

    <?php
        // Practice 1-------------------------------
	//Echo writes a header line reading 'Hello!'.
		echo "<h1>Hello!</h1>";
    
    // Practice 2-------------------------------
        // Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
            $number1 = 10;
            $number2 = 20;
        // Step 2: Add the two variables and display the sum with echo:
            echo "<p>" . $number1 + $number2 . "</p>";
        // Step 3: Make 2 Arrays with the same values, one regular and the other associative
		  $regArray = array("firstObject", "secondObject", "thirdObject");
		  $assocArray = array("PHP"=>"It's okay I guess", "PERL"=>"Scarier than Python", "Python"=>"Super Great!");
        // Step 4: Make a constant and set it to the value of PHP. and use an echo to print it out
		  define("constVar", "PHP");
		  echo "<p>" . constVar . "n";
    
    // Practice 3-------------------------------
        // Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
            if($number1 == 11){
                echo "<h2>It really shouldn't....</h2>";
            }
            elseif($number2 == 22){
                echo "<h2>No this is wrong as well</h2>";
            }
            else{
                echo "I love PHP!n";
            }
        // Step 2: Make a for loop that displays 10 numbers
            for ($i = 0; $i <= 10; $i++){
                echo $i;
            }
        // Step 3 : Make a switch Statement that test against one condition with 5 cases
            switch($number1){
                case 2:
                    echo "number1 == 2";
                    break;
                case 4:
                    echo "number1 == 4";
                    break;
                case 6:
                    echo "number1 == 6";
                    break;
                case 8:
                    echo "number1 == 8";
                    break;
                case 10:
                    echo "number1 == 10";
                    break;
                default:
                    echo "I didn't hit any of the cases!";
            }
	
    // Practice 4-------------------------------
        // Step1: Define a function and make it return a calculation of 2 numbers
            function multiply($value1, $value2){
                $retVal = $value1 * $value2;
                return $retVal;
            }
        // Step 2: Make a function that passes parameters and call it using parameter values
			//I'll have to figure this one out...
    // Practice 5-------------------------------
        // Step1: Use a pre-built math function here and echo it
            echo pow(2, 3);
        // Step 2:  Use a pre-built string function here and echo it
            $reverseMe = "aManaPlanaCanalPanama!";
            echo strrev($reverseMe) . "n";
        // Step 3:  Use a pre-built Array function here and echo it
            echo "My associative array has " . count($assocArray) . " values in it!";
    ?>

</body>
</html>