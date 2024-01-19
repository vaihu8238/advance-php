<?php

// Perform server-side validation and booking logic here
// Example:
error_reporting(0);
// if(isset($_POST['submit']))
// {
// $bookingType = $_POST['bookingType'];
// $checkIn = $_POST['checkIn'];
// $checkOut = $_POST['checkOut'];
// $slot = $_POST['slot'];


// }
// Perform necessary validation and database operations

// Return a response
// echo "Booking Successful!";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking System</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
$bookingType = $_POST['bookingType'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$slot = $_POST['slot'];

echo "this is .".$bookingType;
echo "this is .".$checkIn;
echo "this is .".$checkOut;
echo "this is .".$slot;


}?>

    <h2>Hotel Room Booking System</h2>
<form method="POST">
    <label>Select Booking Type:</label>
    <select id="bookingType" onchange="showOptions()">
        <option value="fullDay">Full Day</option>
        <option value="halfDay">Half Day</option>
        <option value="custom">Custom</option>
    </select>

    <div id="dateSection" style="display:none;">
        <label for="checkIn">Check-in Date:</label>
        <input type="date" id="checkIn">

        <label for="checkOut" id="checkOutLabel">Check-out Date:</label>
        <input type="date" id="checkOut">
    </div>

    <div id="slotSection" style="display:none;">
        <label for="slot">Select Slot:</label>
        <select id="slot">
            <option value="morning">Morning (8AM to 6PM)</option>
            <option value="evening">Evening (7PM to 7AM)</option>
        </select>
    </div>

    <input type="submit" onclick="submitBooking()">
</form>
<script>
        function showOptions() {
    var bookingType = $("#bookingType").val();
    if (bookingType === "fullDay") {
        $("#dateSection").show();
        $("#checkOutLabel").show();
        $("#slotSection").hide();
    } else if (bookingType === "halfDay") {
        $("#dateSection").show();
        $("#checkOutLabel").hide();
        $("#slotSection").show();
    } else {
        $("#dateSection").show();
        $("#checkOutLabel").show();
        $("#slotSection").hide();
    }
}

function submitBooking() {
    var bookingType = $("#bookingType").val();
    var checkIn = $("#checkIn").val();
    var checkOut = $("#checkOut").val();
    var slot = $("#slot").val();
}

    </script>

</body>
</html>

