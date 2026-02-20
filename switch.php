<?php

//Academic Grading System with Pass/Fail Logic

// Task: Create comprehensive grading system
// Calculate and display letter grade based on score:

// A: 90-100 - "Excellent work, [name]!"
// B: 80-89 - "Good job, [name]! Keep it up"
// C: 70-79 - "Satisfactory, [name]! Room for improvement"
// D: 60-69 - "Passing, but need to work harder, [name]"
// F: Below 60 - "Failed. Please meet with instructor"

// Additional rules using nested logic within each case:
// For A students:
// - If extraCredit: "Outstanding performance with extra credit!"
// - If attendance < 90: "Excellent grades despite attendance issues"

// For B and C students:
// - If assignmentsSubmitted === false: "Grade affected by missing assignments"
// - If attendance < 80: "Poor attendance impacted performance"

// For D students:
// - If assignmentsSubmitted: "Passing with minimal effort"
// - If !assignmentsSubmitted: "Failed to submit assignments - on probation"

// For F students:
// - Show: "Remedial classes recommended"
// - If attendance < 60: "Excessive absences - possible course repeat required"

// Also handle edge cases:
// - Score > 100: "Invalid score - please verify"
// - Score < 0: "Invalid score - cannot be negative"
// - Non-numeric: "Invalid input - score must be a number"

$studentName = "Alex";
$subject = "Mathematics";
$score = 62;
$attendance = 89;
$assignmentsSubmitted = true;
$extraCredit = true;

$finalScore = $score;

switch ($finalScore) {

    case ($score >= 90 && $score <= 100):
        echo "Excellent work," . $studentName . "!" . "<br>";
        break;

    case ($score >= 80 && $score <= 89):
        echo "Good job," . $studentName . "! Keep it up" . "<br>";
        break;

    case ($score >= 70 && $score <= 79):
        echo "Satisfactory," . $studentName . "Room for improvement" . "<br>";
        break;

    case ($score >= 60 && $score <= 69):
        echo "Passing , but need to work harder " . $studentName . "<br>" . "Passing with minimal effort" . "<br>";
        break;

    case ($score >= 60):
        echo "Failed. Please meet with instructor" . $studentName . "<br>" . "Remedial classes recommended" . "<br>";
        break;

    case ($Score > 100):
        echo "Invalid score - please verify" . "<br>";
        break;

    case ($score < 0):
        echo "Invalid score - cannot be negative" . "<br>";
        break;

    case (empty($score) && $score !== 0):
        echo "Invalid input - score must be a number" . "<br>";
        break;
}


switch ($extraCredit) {

    case "true":
        echo "Outstanding performance with extra credit!" . "<br>";
        break;

    default:
        echo "Keep Improving your scores " . $studentName . "<br>";
        break;
}


switch ($attendance) {

    case ($attendance < 90):
        echo "Excellent grades despite attendance issues" . "<br>";
        break;

    case ($attendance < 80):
        echo "Poor attendance impacted performance" . "<br>";
        break;

    case ($attendance < 60):
        echo "Excessive absences - possible course repeat required" . "<br>";
        break;
}

switch ($assignmentsSubmitted) {

    case ($assignmentsSubmitted == false):
        echo "Grade affected by missing assignments";
        break;

    case ($assignmentsSubmitted == true):
        echo "Great Work! You have Submitted all assignments";
        break;
}




//<?php
$lightColor = "red"; 
$timeOfDay = "night"; 
$pedestrianButtonPressed = true;
$emergencyVehicleDetected = true;
$carsWaiting = 12;

switch(true){

case( $lightColor == "red"):
echo "STOP - Wait for green"."<br>";
switch(true){
case ( $pedestrianButtonPressed == true ):
echo "Pedestrian crossing - extended red"."<br>";
break;
} switch(true){
case ($carsWaiting > 10):
echo "High traffic detected at red light";
break;
}
break;

case( $lightColor == "yellow"):
echo "CAUTION - Prepare to stop"."<br>";
switch(true) {
case ( $timeOfDay == "peak" ):
echo "Peak hours - short yellow duration"."<br>";
break;
}
switch (true) {
case (  $timeOfDay == "night" ):
echo "Night hours - extended yellow for safety";
break;
}
break;


case( $lightColor == "green"):
echo "GO - Proceed with caution"."<br>";
switch(true){
case ( $carsWaiting > 15 ):
echo "Heavy traffic flow - extended green"."<br>";
break;
}
switch(true){
case ( $pedestrianButtonPressed == true):
echo " Pedestrian waiting - green will end soon"."<br>";
break;
}
switch(true){
case ( $timeOfDay == "night" ):
echo  "Night mode - shorter green cycles"."<br>";
break;
}


case( $lightColor == "flashing_yellow"):
echo "PROCEED WITH CAUTION - Yield to traffic"."<br>";
switch(true){
case ( $timeOfDay == "night" ):
echo "Night mode - proceed carefully"."<br>";
break;
}
switch(true){
case ( $emergencyVehicleDetected == false ):
echo "Emergency vehicle approaching - be prepared to yield";
break;
}

default:
echo "Traffic light malfunction - proceed with extreme caution";


case( $lightColor == "flashing_red"):
echo "FULL STOP - Treat as stop sign"."<br>";
switch(true){
case ( $carsWaiting > 5 ):
echo "Congestion at intersection - proceed one at a time"."<br>";
break;
}
switch(true){
case ( $timeOfDay == "peak" ):
echo "Manual traffic control recommended"."<br>";
break;
}




}
//?> 

?>
