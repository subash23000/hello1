<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <style>
        .reservation-form { text-align: center; padding: 20px; }
        .form-group { margin: 10px 0; }
        input, textarea { width: 100%; padding: 10px; }
        .reserve-button { padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>

<section id="reservation" class="reservation-form">
    <h2>Reserve Your Table</h2>
    <p>Fill out the form below to reserve your spot at Himalayan Cafe.</p>
    <form action="submit_reservation.php" method="post">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
            <label for="date">Reservation Date:</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="time">Reservation Time:</label>
            <input type="time" id="time" name="time" required>
        </div>

        <div class="form-group">
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" max="10" required>
        </div>

        <div class="form-group">
            <label for="message">Special Requests:</label>
            <textarea name="message" id="message" placeholder="Any special requests?" rows="4"></textarea>
        </div>

        <button type="submit" class="reserve-button">Make Reservation</button>
    </form>
</section>

</body>
</html>
