<?php

// Set the interval between requests in seconds
$interval = 300; // For example, 5 minutes

// Set the API key and cryptocurrency symbol
$apiKey = 'YOUR_API_KEY';
$currencySymbol = 'BTC';

// Set the email address for notifications
$notificationEmail = 'your_email@example.com';

// Start an infinite tracking loop
while (true) {
     // Get the current cryptocurrency rate
     $currentRate = getCryptoCurrencyRate($apiKey, $currencySymbol);

     // Check if the exchange rate has changed
     if (isRateChanged($currentRate)) {
         // Send a notification
         sendNotification($notificationEmail, $currencySymbol, $currentRate);
     }

     // Wait for the specified interval before the next request
     sleep($interval);
}

// Function for getting the current cryptocurrency rate
function getCryptoCurrencyRate($apiKey, $currencySymbol) {
     // Simulate an API request (replace this block of code with a real API request)
     // In a real project, it is recommended to use a library for working with HTTP requests, such as Guzzle.

     // Return a random value for example
     return rand(10000, 20000) / 100; // Replace this line with the actual code for getting the course
}

// Function for checking exchange rate changes
function isRateChanged($currentRate) {
     // In this example, we consider that the rate has changed if it has decreased by 1%
     // In a real project, the verification logic may be more complex.

     $previousRate = /* Get the previous rate from a database or file */ 0;

     return ($currentRate < 0.99 * $previousRate) || ($currentRate > 1.01 * $previousRate);
}

// Function to send a notification
function sendNotification($email, $currencySymbol, $rate) {
     // Send a notification email (replace this block of code with actual notification code)
     // In a real project, it is recommended to use an email sending library such as PHPMailer.

     $subject = 'Cryptocurrency rate change';
     $message = "The $currencySymbol cryptocurrency rate has changed. New rate: $rate";

     mail($email, $subject, $message);
}
?>
