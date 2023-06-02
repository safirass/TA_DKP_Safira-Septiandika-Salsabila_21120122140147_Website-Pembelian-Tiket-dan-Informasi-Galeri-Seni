<?php
session_start();

class Ticket {
    public $ticket_number;
    public $name;
    public $phone;
    public $visitor_count;
    public $arrival_date;
    public $total_price;

    public function __construct($ticket_number, $name, $phone, $visitor_count, $arrival_date, $total_price) {
        $this->ticket_number = $ticket_number;
        $this->name = $name;
        $this->phone = $phone;
        $this->visitor_count = $visitor_count;
        $this->arrival_date = $arrival_date;
        $this->total_price = $total_price;
    }
}

//bab5
function generateTicketNumber() {
    $prefix = "TICKET";
    $suffix = rand(1000, 9999);
    return $prefix . $suffix;
}

//pengkondisian
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_count = $_POST['visitor_count'];
    $arrival_date = $_POST['arrival_date'];

    $ticket_number = generateTicketNumber();
    $total_price = $visitor_count * 20000; // Harga tiket per orang adalah 20000 rupiah
    $ticket = new Ticket($ticket_number, $name, $phone, $visitor_count, $arrival_date, $total_price);

    $_SESSION['ticket'] = $ticket;
    $_SESSION['payment_done'] = true;

    // Set payment notification
    $_SESSION['payment_notification'] = "Pembayaran Berhasil";
    header("Location: payment.php");
    exit();
}

// Check if payment is done
$payment_done = isset($_SESSION['payment_done']) && $_SESSION['payment_done'];
$ticket = $_SESSION['ticket'] ?? null;


//Handle payment notification
// if (isset($_SESSION['payment_notification'])) {
//     echo "<script>alert('" . $_SESSION['payment_notification'] . "')</script>";
//     unset($_SESSION['payment_notification']);
// }
?>


<!DOCTYPE html>
<html>
<head>
    <title>OurArtGallery - Payment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Payment</h1>
        <p>Ticket Number: <?php echo $ticket->ticket_number; ?></p>
        <p>Name: <?php echo $ticket->name; ?></p>
        <p>Phone: <?php echo $ticket->phone; ?></p>
        <p>Visitor Count: <?php echo $ticket->visitor_count; ?></p>
        <p>Arrival Date: <?php echo $ticket->arrival_date; ?></p>
        <p>Total Price: <?php echo number_format($ticket->total_price); ?> rupiah</p>
        <button type="submit" class="btn" onclick="showPaymentNotification()">Pay</button>
        <h6>tickets can only be used once</h6>

        <script>
            // Show payment notification
            function showPaymentNotification() {
                alert("Pembayaran Berhasil");
                window.location.href = 'detail.php';
            }
        </script>
    </div>
</body>
</html>



