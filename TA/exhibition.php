<!DOCTYPE html>
<html>
<head>
    <title>OurArtGallery - Exhibitions</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            color: white;
        }
        .ex {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            padding: 20px; /* Ruang padding di sekitar konten */
            border-radius: 5px; /* Membuat sudut kotak lebih melengkung */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Efek bayangan pada kotak */
            margin: 0 auto; /* Memposisikan kotak secara horizontal di tengah */
            max-width: 50%; /* Lebar maksimum kotak */
            /* background-color: black; */
        }

        .exhibition {

            display: flex;
            flex-direction: row;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .exhibition img {
            max-width: 300px;
            margin-right: 20px;
            margin: 20px;
        }
        .exhibition-info {
            flex: 1;
        }
        .exhibition-info h2, .exhibition-info p  {
            margin: 10px;
            text-align: left;
        }
        
        .exhibition-info .btn-container {
            display: flex;
            justify-content: flex-end;
        }
        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    
    <div class="ex">
    <a href="detail.php" class="btn">Back</a>
    
        <div class="exhibition">
            <img src="image/Van-Gogh.png" alt="Van Gogh">
            <div class="exhibition-info">
                <h2>Vincent Van Gogh</h2>
                <p>Vincent van Gogh, a renowned Dutch painter, is known for his expressive and colorful artworks. His unique style captures emotions and depicts landscapes, portraits, and still life subjects. Van Gogh's art continues to inspire with its powerful impact and profound exploration of the human spirit.</p>
                <div class="btn-container">
                    
                    <a href="van_gogh.php" class="btn">Open</a>
                </div>
            </div>
        </div>

        <div class="exhibition">
            <img src="image/raden2.jpg" alt="Raden Saleh">
            <div class="exhibition-info">
                <h2>Raden Saleh</h2>
                <p>Raden Saleh, an Indonesian painter, is recognized as a pioneer of modern Indonesian art. His works showcase a harmonious blend of Western and Indonesian influences, reflecting his unique artistic vision. Saleh's paintings often depict wildlife, majestic landscapes, and historical scenes, capturing the beauty and diversity of Indonesia. Through his art, Saleh has made significant contributions to the cultural heritage of Indonesia and continues to inspire generations of artists with his talent and creativity.</p>
                <div class="btn-container">
                    <!-- <a href="detail.php" class="btn">Back</a> -->
                    <a href="raden_saleh.php" class="btn">Open</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
