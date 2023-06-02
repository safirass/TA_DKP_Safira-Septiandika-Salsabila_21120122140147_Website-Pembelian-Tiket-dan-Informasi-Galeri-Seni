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
            /* background-color: black;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.8);
            padding: 10px; */

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
            margin-left: 0;
        }
        .exhibition-info {
            flex: 1;
            margin-right: 20;
            
        }
        .exhibition-info h2, .exhibition-info p  {
            margin: 10px;
            text-align: left;
            font-family: 'Lucida Sans', sans-serif;
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
            <img src="image/PPD.jpg" alt="Penangkapan Pangeran Diponegoro">
            <div class="exhibition-info">
                <h2>Penangkapan Pangeran Diponegoro</h2>
                <p>It depicts the capture of Prince Diponegoro, an Indonesian national hero, during the Java War. The painting showcases the intensity of the moment, with soldiers and Diponegoro engaged in a struggle. Through detailed brushwork and dramatic composition, the artwork captures the bravery and defiance of the prince. It serves as a powerful representation of the fight for independence and the spirit of resistance in Indonesian history.</p>
            </div>
            <div>
            </div>
        </div>

        <div class="exhibition">
            <img src="image/BDJ.jpg" alt="Banjir di Jawa">
            <div class="exhibition-info">
                <h2>Banjir di Jawa</h2>
                <p>The painting captures the chaos and devastation caused by the natural disaster, with swirling waters and distressed figures. Through his skilled brushwork and use of light and shadow, Saleh conveys the urgency and impact of the flood. The artwork serves as a poignant reminder of the destructive forces of nature and the resilience of the people affected by such calamities.</p>
                <div>

                </div>            
            </div>
        </div>

        <div class="exhibition">
            <img src="image/PB.jpg" alt="Perburuan Banteng">
            <div class="exhibition-info">
                <h2>Perburuan Banteng</h2>
                <p>The painting captures the intense pursuit of a banteng, a type of wild cattle, by hunters on horseback. With dynamic brushstrokes and a vivid color palette, Saleh conveys the energy and excitement of the chase. The artwork showcases Saleh's mastery of capturing the motion and spirit of the wildlife and reflects his deep appreciation for the natural beauty of Indonesia. It stands as a testament to the artist's skill in depicting action and the harmony between humans and nature.</p>
                <div>

                </div>
            </div>
        </div>

    </div>
</body>
</html>
