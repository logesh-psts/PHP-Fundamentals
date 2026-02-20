<?php
/* #Basic Login Validation

Task: Write logic that:
1. Verifies that both username and password fields contain values
2. Confirms the username is "john_doe" AND password is "secret123"
3. When credentials are correct, set $isLoggedIn to true and display "Login successful"
4. When credentials are incorrect, display "Invalid username or password"
5. When either field is empty, display "Username and password are required" */

$username = "john_doe";
$password = "secret123";
$isLoggedIn = false;

if ($username =="" || $password == "") {
    $isLoggedIn = false;
    echo "Username and password are required";
}
elseif ($username == "john_doe" && $password == "secret123") {
    $isLoggedIn = true;
    echo "You are Successfully Logged in";
}
elseif ($username != "john_doe" && $password != "secret123" ){
    $isLoggedIn = false;
    echo "Invalid username or password";
}
else {
    $isLoggedIn = false;
    echo "Something went Wrong";
}

/*  #User Role Management

Task: Create age verification logic:
1. Users 18 or older: Display "Access granted"
2. Users between 13 and 17:
   - With parental consent: Display "Access granted with parental supervision"
   - Without parental consent: Display "Parental consent required"
3. Users under 13: Display "Access denied - too young" */


$userRole = "editor";

if ( $userRole == "admin" ){
echo "Full access granted";
}

elseif ( $userRole == "editor" ){
echo "Can edit content";
}

elseif ( $userRole == "viewer" ){
echo  "Read-only access" ;
} else {
echo " Invalid role";
}


/* #Age Verification 

Task: Determine premium content access:
1. Users without subscription: Display "Please subscribe to access content"
2. Subscribed users:
   - With sufficient balance: Display "Content unlocked! Your new balance: $" . ($accountBalance - $contentPrice)
   - With insufficient balance: Display "Insufficient balance. Please add funds" */


$userAge = 17;
$hasParentalConsent = true;



if($userAge >=18){
echo "Access granted";
}

elseif($userAge <=17 && $userAge >=13){
echo "Access granted with parental supervision";
} 

elseif ( $userAge == 13 ){
echo "Access denied - too young";
}



/* #Content Access Based on Multiple Conditions

Task: Determine premium content access:
1. Users without subscription: Display "Please subscribe to access content"
2. Subscribed users:
   - With sufficient balance: Display "Content unlocked! Your new balance: $" . ($accountBalance - $contentPrice)
   - With insufficient balance: Display "Insufficient balance. Please add funds" */



$isSubscribed = true;
$accountBalance = 25;
$contentPrice = 20;
$totalbalance = $accountBalance + $contentPrice;


if ( $isSubscribed != true ){
echo "Please subscribe to access content";
}

elseif ( $accountBalance <= 0  &&  $contentPrice <= 0 ){
echo " Insufficient balance. Please add funds ";
}

elseif ( $accountBalance >= 10 && $contentPrice >= 10 ){
echo "Content unlocked! Your new balance: $" . $totalbalance ."<br>". "Content Balance: $" . $contentPrice ."<br>". " Account Balance: $" . $accountBalance ;
}

/*#Time-Based Greeting

Get current hour (0-23)
Task: Display appropriate greeting based on time of day:
5 AM - 11:59 AM: "Good morning!"
12 PM - 4:59 PM: "Good afternoon!"
5 PM - 8:59 PM: "Good evening!"
9 PM - 4:59 AM: "Good night!" */


$currentHour = date("5");

$currentHour = (int)$currentHour;

if ($currentHour >= 5 && $currentHour < 12) {
    echo "Good morning!";
}
elseif ($currentHour >= 12 && $currentHour < 17) {
    echo "Good afternoon!";
}
elseif ($currentHour >= 17 && $currentHour < 21) {
    echo "Good evening!";
}
else {
    echo "Good night!";
}

?> 

