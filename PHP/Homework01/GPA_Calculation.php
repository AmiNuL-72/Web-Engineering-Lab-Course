<?php

// Function to convert marks to grade points
function marksToGradePoint($marks) {
    if ($marks >= 80) {
        return 4.0;
    } else if ($marks >= 75) {
        return 3.75;
    } else if ($marks >= 70) {
        return 3.5;
    } else if ($marks >= 65) {
        return 3.25;
    } else if ($marks >= 60) {
        return 3.0;
    } else if ($marks >= 55) {
        return 2.75;
    } else if ($marks >= 50) {
        return 2.5;
    } else if ($marks >= 45) {
        return 2.25;
    } else if ($marks >= 40) {
        return 2.0;
    } else {
        return 0.0; 
    }
}

// Function to calculate GPA
function calculateGPA($marks) {
    $totalGradePoints = 0.0;
    foreach ($marks as $mark) {
        $totalGradePoints += marksToGradePoint($mark);
    }
    return $totalGradePoints / count($marks);
}

echo "Enter the number of subjects: ";
$numSubjects = intval(trim(fgets(STDIN)));

$marks = array();

for ($i = 0; $i < $numSubjects; ++$i) {
    echo "Enter marks for subject " . ($i + 1) . ": ";
    $marks[] = intval(trim(fgets(STDIN)));
}

$gpa = calculateGPA($marks);
echo "GPA: " . $gpa . PHP_EOL;

?>
