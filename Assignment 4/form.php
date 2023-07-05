<!DOCTYPE html>
<html>
<head>
  <title>Hotel Room Booking</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h2>Hotel Room Booking</h2>

  <label for="bookingType">Booking Type:</label>
  <select id="bookingType" name="bookingType">
    <option value="fullDay">Full Day</option>
    <option value="halfDay">Half Day</option>
    <option value="custom">Custom</option>
  </select>

  <div id="fullDayBooking" class="bookingOption">
    <label for="checkInDate">Check-in Date:</label>
    <input type="date" id="checkInDate" name="checkInDate">

    <label for="checkOutDate">Check-out Date:</label>
    <input type="date" id="checkOutDate" name="checkOutDate">
  </div>

  <div id="halfDayBooking" class="bookingOption">
    <label for="bookingDate">Booking Date:</label>
    <input type="date" id="bookingDate" name="bookingDate">

    <label for="bookingSlot">Booking Slot:</label>
    <select id="bookingSlot" name="bookingSlot">
      <option value="morning">Morning (8AM to 6PM)</option>
      <option value="evening">Evening (7PM to 7AM)</option>
    </select>
  </div>

  <div id="customBooking" class="bookingOption">
    <label for="customCheckIn">Check-in:</label>
    <input type="datetime-local" id="customCheckIn" name="customCheckIn">

    <label for="customCheckOut">Check-out:</label>
    <input type="datetime-local" id="customCheckOut" name="customCheckOut">
  </div>

  <button id="bookButton">Book Room</button>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
