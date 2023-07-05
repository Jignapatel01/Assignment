$(document).ready(function() {
    // Show the selected booking option
    $('#bookingType').change(function() {
      var selectedOption = $(this).val();
      $('.bookingOption').hide();
      $('#' + selectedOption + 'Booking').show();
    });
  
    // Handle book button click
    $('#bookButton').click(function() {
      var bookingType = $('#bookingType').val();
  
      // Perform validation and submit the booking data via AJAX
      if (bookingType === 'fullDay') {
        var checkInDate = $('#checkInDate').val();
        var checkOutDate = $('#checkOutDate').val();
  
        if (!checkInDate || !checkOutDate) {
          alert('Please select both check-in and check-out dates.');
          return;
        }
  
        bookRoom({
          bookingType: bookingType,
          checkInDate: checkInDate,
          checkOutDate: checkOutDate
        });
      } else if (bookingType === 'halfDay') {
        var bookingDate = $('#bookingDate').val();
        var bookingSlot = $('#bookingSlot').val();
  
        if (!bookingDate || !bookingSlot) {
          alert('Please select both booking date and slot.');
          return;
        }
  
        bookRoom({
          bookingType: bookingType,
          bookingDate: bookingDate,
          bookingSlot: bookingSlot
        });
      } else if (bookingType === 'custom') {
        var customCheckIn = $('#customCheckIn').val();
        var customCheckOut = $('#customCheckOut').val();
  
        if (!customCheckIn || !customCheckOut) {
          alert('Please select both custom check-in and check-out dates.');
          return;
        }
  
        bookRoom({
          bookingType: bookingType,
          customCheckIn: customCheckIn,
          customCheckOut: customCheckOut
        });
      }
    });
  
    // AJAX function to submit the booking data
    function bookRoom(bookingData) {
      $.ajax({
        url: 'book.php',
        type: 'POST',
        dataType: 'json',
        data: bookingData,
        success: function(response) {
          alert(response.message);
          // Handle success
        },
        error: function(xhr, status, error) {
          alert('Error: ' + error);
          // Handle error
        }
      });
    }
  });
  