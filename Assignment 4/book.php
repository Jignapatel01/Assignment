<?php

// Handle the booking data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $bookingData = $_POST;

  // Perform necessary validation and booking logic
  // ...

  // Return a JSON response
  $response = ['message' => 'Room booked successfully'];
  header('Content-Type: application/json');
  echo json_encode($response);
}

?>
