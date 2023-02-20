<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
    function sortByLength($strings) {
        usort($strings, function($a, $b) {
            return strlen($a) - strlen($b);
        });
        return $strings;
    }
    $arr = array("apple", "banana", "cherry", "date");
    $arr = sortByLength($arr);
    print_r($arr);



    //2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
    function concat(string $first, $second): string{
        return $first .= $second;
    }
    echo concat("Hello","World");



    //3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
    function remove_first_last($arr) {
        array_shift($arr); 
        array_pop($arr); 
        return $arr; 
      }
    $my_array = array(1, 2, 3, 4, 5);
    $new_array = remove_first_last($my_array);
    print_r($new_array);
    


    //4.Write a PHP function to check if a string contains only letters and whitespace.
    function letters_and_whitespace($str) {
        return preg_match('/^[a-zA-Z\s]+$/', $str);
      }
    $string1 = "Hello World";
    $string2 = "Hello123World";

    if (letters_and_whitespace($string1)) {
    echo "only letters and whitespace";
    } else {
    echo "non-letter or non-whitespace characters";
    }

    if (letters_and_whitespace($string2)) {
    echo "letters and whitespace";
    } else {
    echo "non-letter or non-whitespace characters";
    }
    echo "\n";
    


    //5.Write a PHP function to find the second largest number in an array of numbers.
    function largestSecondNumber(array $number):int{
        rsort ($number);
        return $number[1];
    }
    $number = array(2,4,67,7,98,100);
    echo "The largest second number is " . largestSecondNumber( $number );
    

    
