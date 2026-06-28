<?php

// Function to perform basic arithmetic operations on two numbers
function calculateNumbers($num1, $num2) {
    // Addition
    $addition = $num1 + $num2;
    
    // Multiplication
    $multiplication = $num1 * $num2;
    
    // Return results as an array
    return [
        'num1' => $num1,
        'num2' => $num2,
        'addition' => $addition,
        'multiplication' => $multiplication
    ];
}

// Example usage
$number1 = 10;
$number2 = 5;

// Call the function
$result = calculateNumbers($number1, $number2);

// Display results
echo "====== Calculator ======\n";
echo "Number 1: " . $result['num1'] . "\n";
echo "Number 2: " . $result['num2'] . "\n";
echo "Addition: " . $result['num1'] . " + " . $result['num2'] . " = " . $result['addition'] . "\n";
echo "Multiplication: " . $result['num1'] . " × " . $result['num2'] . " = " . $result['multiplication'] . "\n";
echo "========================\n";

?>
