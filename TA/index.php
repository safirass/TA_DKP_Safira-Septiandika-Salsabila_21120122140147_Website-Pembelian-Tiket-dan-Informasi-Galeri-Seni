<!DOCTYPE html>
<html>
<head>
    <title>Our Art Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .main header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        font-family: "Gill Sans Extrabold", sans-serif;
        background-color: #174950;
        color: white;
        
        padding: 10px;
    }
    .header-left h3 {
        margin: 10px;
        text-shadow: 3px 2px 1px black;
        font-size: 30px;
    }

    .satu {
        text-shadow: 3px 2px 1px grey;
        font-size: 60px;
    }

    .gallery-images img {
        height: 450px;
        border-radius: 10px;
        border-width: 10px;
        border-color: black;
    }

</style>
<body>
    <div class="main">
        <header>
            <!-- <h1>Our Art Gallery</h1> -->
                <div class="header-left">
                    <h3>Our Art Gallery</h3>
                </div>
                <div >
                </div>
        </header>

        <div class="galeri">
            <h1 class="satu" >Welcome to Our Art Gallery</h1>
        </div>

        <div class="body">

            <div class="gallery-images">
                <img src="image/raden2.jpg" alt="Raden Saleh">

                <img src="image/Van-Gogh.png" alt="Van Gogh">
            </div>
            
            <div class="gallery-info">
                <p >Welcome to Our Art Gallery! Immerse yourself in the captivating world of Van Gogh and Raden Saleh's art at our gallery. From Van Gogh's vibrant brushstrokes and expressive use of color to Raden Saleh's harmonious fusion of Western and Indonesian influences, our gallery offers a unique opportunity to witness the brilliance of these iconic painters.</p>
                <br>
                <!-- <p>Our Art Gallery invites you to indulge in the rich tapestry of these artistic journeys, where each stroke of the brush tells a story. Whether you're an art enthusiast, a cultural explorer, or simply seeking inspiration, this is an experience not to be missed. Book your tickets now and embark on a visual adventure through the timeless beauty of Van Gogh and Raden Saleh's masterpieces.</p>
                <br> -->
                <p>Address: Jalan Kasih No. 26</p>
                <p>Contact Person: 081222333456</p>
                <p>ig: @sa_firass26</p>
                <a href="ticket.php" class="btn">Buy Ticket</a>
            </div>
        </div>
    </div>
</body>
</html>
