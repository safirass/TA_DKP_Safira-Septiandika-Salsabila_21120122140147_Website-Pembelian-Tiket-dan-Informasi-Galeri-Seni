<!DOCTYPE html>
<html>
<head>
    <title>OurArtGallery - Ticket</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .container {
            grid-template-columns: 200px auto;
            grid-gap: 10px;
            align-items: center;
        }

        .container label {
            text-align: right;
        }

        .container input {
            width: 80%;
            padding: 5px;
        }

        .container .btn {
            grid-column: 2;
            justify-self: start;
        }
        
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ticket Purchase</h1><br>
        <form method="post" action="payment.php">
            <div>
                <label for="name">Name:</label> <br>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label for="visitor_count">Visitor Count:</label><br>
                <input type="number" id="visitor_count" name="visitor_count" required>
            </div>
            <div>
                <label for="arrival_date">Arrival Date:</label><br>
                <input type="date" id="arrival_date" name="arrival_date" required>
            </div>
            <a href="index.php" class="btn">Back</a>
            <button type="submit" class="btn">Buy Ticket</button>
            <h6>ticket price = IDR 20000/person</h6>
        </form>
    </div>
</body>
</html>
