<?php

function getUserInput(){
    #get user-input via console
    echo "Please enter 4 whole numbers, (integers) seperated by a comma, below:";
    echo "\n";
    #get user input as string
    $user_input = readline("e.g 1, 2, 4... >>>  ");
    echo "\n";
    #convert user-input strings to integers
    $user_input_string_array = explode(',', $user_input);
    #validate user-input
    if(count($user_input_string_array) !== 4){
        echo "You need to type FOUR integers in the console!\n";
        return getUserInput();
    }
    echo "***************************\n";
    echo "Thank you :)\n";
    echo "***************************\n";
    #finally
    $user_input_int_array = [
        $user_input_string_array[0], $user_input_string_array[1], $user_input_string_array[2], $user_input_string_array[3]
    ];
    return $user_input_int_array;
}
#verify that getUserInput() returns user input
$user_input = getUserInput();
#print_r($user_input);
#echo implode(', ', $user_input);
#echo "\n";

//part A: add the values together
$sum_of_user_input = $user_input[0] + $user_input[1] + $user_input[2] + $user_input[3];
#output the answer
echo "The sum of the integers you entered is " . $sum_of_user_input . ".";
echo "\n";

//part B: subtract the values together (negate the sum)
$diff_of_user_input = $user_input[0] - $user_input[1] - $user_input[2] - $user_input[3];
#output the answer
echo "The resulting difference of the integers you entered is " . $diff_of_user_input . ".";
echo "\n";

//part C: multiply the values together
$product_of_user_input = $user_input[0] * $user_input[1] * $user_input[2] * $user_input[3];
#output the answer
echo "The product of the integers you entered is " . $product_of_user_input . ".";
echo "\n";

//part D: divide the values together
$quotient_of_user_input = $user_input[0] / $user_input[1] / $user_input[2] / $user_input[3];
#output the answer
echo "The quotient of the integers you entered is " . $quotient_of_user_input . ".";
echo "\n";