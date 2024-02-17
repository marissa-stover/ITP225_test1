<?php

$today = date('Y-m-d');
echo "Today's date: " . $today . "\n";

$grade = readline("Test results are in! What grade did you get? ");

if ($grade >= 0 && $grade <= 100) {
    if ($grade >= 90) {
        echo "Good job! You got an A.";
    } else if ($grade >= 80 && $grade <= 89) {
        echo "Cool, you got a B.";
    } else if ($grade >= 70 && $grade <= 79) {
        echo "You got a C.";
    } else if ($grade >= 60 && $grade <= 69) {
        echo "Ouch, you got a D. You passed, but keep studying!";
    } else if ($grade < 60) {
        echo "Uh oh. You got an F...";
    }
} else if (is_numeric($grade) && ($grade < 0 || $grade > 100)) {
    echo "That's not a valid grade!";
} else {
    echo "You didn't input a number.";
}

?>