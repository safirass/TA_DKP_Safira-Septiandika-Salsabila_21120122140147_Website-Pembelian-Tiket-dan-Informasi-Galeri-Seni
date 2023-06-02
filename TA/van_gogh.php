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
    <a href="exhibition.php" class="btn">Back</a>
        <div class="exhibition">
            <img src="image/TSN.jpg" alt="The Starry Night">
            <div class="exhibition-info">
                <h2>The Starry Night</h2>
                <p>This iconic painting depicts a mesmerizing nocturnal scene with swirling stars and a vibrant crescent moon against a dark blue sky. Van Gogh's bold brushwork and expressive use of color create a sense of movement and emotion in the artwork. "The Starry Night" is considered one of the most recognized and celebrated artworks in the world, capturing the artist's unique vision and his profound connection with the natural world.</p>
            </div>
            <div>
            </div>
        </div>

        <div class="exhibition">
            <img src="image/Van-Gogh.png" alt="Self Portrait">
            <div class="exhibition-info">
                <h2>Self Portrait</h2>
                <p>Van Gogh's self-portraits provide a glimpse into his inner world and emotions. With vibrant colors and expressive brushwork, he captures different facets of his personality and state of mind. These artworks showcase his deep connection to art as a means of self-expression and exploration.</p>
                <div>

                </div>            
            </div>
        </div>

        <div class="exhibition">
            <img src="image/PE.jpg" alt="Potatoes Eaters">
            <div class="exhibition-info">
                <h2>The Potatoes Eaters</h2>
                <p>This painting depicts a group of peasants gathered around a table, earnestly enjoying a simple meal of potatoes. Van Gogh's use of dark, earthy tones and the careful rendering of each figure highlights the harsh realities of rural life and the humble nature of the subjects. The Potato Eaters is a poignant representation of the artist's deep empathy for the working class and his desire to capture the essence of their everyday existence on canvas.</p>
                <div>

                </div>
            </div>
        </div>

    </div>
</body>
</html>
