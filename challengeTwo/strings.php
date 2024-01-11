<?php

function getUserInput(){
    #get user-input via console
    echo "Please enter a short sentence below, a greeting would be nice!\n";
    // echo "\n";
    echo "Use a mix of uppercase and lowercase, for example, I lOVe CodINg:\n";
    // echo "\n";
    $user_input = readline(">>>  ");
    echo "\n";
    # echo $user_input;
    #remove whitespace
    $user_input = trim($user_input);
    #validate user-input
    if(strlen($user_input) > 6) {
        echo "***************************\n";
        echo "Thank you :)\n";
        echo "***************************\n";
        return $user_input;
    }else{
        echo "Make your sentence a little bit longer please!!\n";
        getUserInput();
    }
}
$user_input = getUserInput();

//part A: transform the string to all uppercase letters
$user_input = strtoupper($user_input);
#output the answer
echo "\nThe uppercase version of your input is:\n* " . $user_input . ".";
echo "\n"; echo "\n";

//part B: transform the string to all lowerercase letters
$user_input = strtolower($user_input);
#output the answer
echo "The lowercase version of your input is:\n* " . $user_input . ".";
echo "\n"; echo "\n";

//part C: make the sentence's first character uppercase
$user_input = ucfirst($user_input);
#output the answer
echo "The capitalized version of your input is:\n* " . $user_input . ".";
echo "\n"; echo "\n";

//part D: make the first character of every word in the sentence uppercase
$user_input = ucwords($user_input);
#output the answer
echo "The version of your input, with every word capitalized, is:\n* " . $user_input . ".";
echo "\n"; echo "\n";