
<?php
session_start();
//bab6
class Ticket {
    public $ticket_number;
    public $name;
    public $phone;
    public $visitor_count;
    public $arrival_date;

    public function __construct($ticket_number, $name, $phone, $visitor_count, $arrival_date) {
        $this->ticket_number = $ticket_number;
        $this->name = $name;
        $this->phone = $phone;
        $this->visitor_count = $visitor_count;
        $this->arrival_date = $arrival_date;
    }
}
//bab5
function generateTicketNumber() {
    $prefix = "TICKET";
    $suffix = rand(1000, 9999);
    return $prefix . $suffix;
}

//pengkondisian
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_count = $_POST['visitor_count'];
    $arrival_date = $_POST['arrival_date'];

    $ticket_number = generateTicketNumber();
    $ticket = new Ticket($ticket_number, $name, $phone, $visitor_count, $arrival_date);

    $_SESSION['ticket'] = $ticket;
    
} elseif (isset($_SESSION['ticket'])) {
    $ticket = $_SESSION['ticket'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>OurArtGallery - Payment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Ticket Details</h2>
        <?php if (isset($ticket)) : ?>
            <p>Ticket Number: <?php echo $ticket->ticket_number; ?></p>
            <p>Name: <?php echo $ticket->name; ?></p>
            <p>Phone: <?php echo $ticket->phone; ?></p>
            <p>Visitor Count: <?php echo $ticket->visitor_count; ?></p>
            <p>Arrival Date: <?php echo $ticket->arrival_date; ?></p>
        <?php endif; ?>
        
        <a href="exhibition.php" class="btn">Explore Exhibitions</a>
        <a href="index.php" class="btn">Menu</a>
        <h6>tickets can only be used once</h6>
    </div>
</body>
</html>
