<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffe4e1;
            color: #4a4a4a;
            text-align: center;
            padding: 50px;
            background-image: url('https://www.transparenttextures.com/patterns/white-diamond.png');
            background-size: cover;
            opacity: 1;
            transition: opacity 1s ease-out;
            position: relative; /* Needed for heart animation */
        }
        h1 {
            color: #e91e63;
            font-size: 3em;
            font-family: 'Georgia', serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }
        p {
            font-size: 1.4em;
            line-height: 1.6;
            color: #2c3e50;
            margin-top: 20px;
            font-style: italic;
        }
        .heart-icon {
            color: #e91e63;
            font-size: 3em;
            margin: 20px 0;
        }
        .footer {
            margin-top: 50px;
            color: #7f8c8d;
        }
        button {
            background-color: #e91e63;
            color: white;
            padding: 15px 30px;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: #d81b60;
        }

        /* Animasi untuk fade-out */
        .fade-out {
            opacity: 0;
        }

        /* Efek animasi tombol saat ditekan */
        .button-pressed {
            transform: scale(1.1); /* Membesar sedikit */
        }

        /* Animasi love */
        .love-animation {
            position: absolute;
            font-size: 5em;
            color: #e91e63;
            animation: heart-animation 1s ease-in-out forwards;
        }

        @keyframes heart-animation {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.5);
                opacity: 0.7;
            }
            100% {
                transform: scale(3);
                opacity: 0;
                top: -100px;
            }
        }

        /* Mobile-friendly adjustments */
        @media (max-width: 600px) {
            body {
                padding: 20px;
            }
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1.2em;
            }
            button {
                padding: 12px 25px;
                font-size: 1em;
            }
            .heart-icon {
                font-size: 2.5em;
            }
        }

        /* Larger screens (Laptop/Tablet) */
        @media (min-width: 601px) {
            body {
                padding: 50px;
            }
            h1 {
                font-size: 3.5em;
            }
            p {
                font-size: 1.4em;
            }
            button {
                padding: 15px 30px;
                font-size: 1.2em;
            }
            .heart-icon {
                font-size: 3em;
            }
        }

    </style>
</head>
<body>
    <h1>Selamat Datang Vemyla Sayang ♡!</h1>
    <p>Menekan tombol di bawah untuk melanjutkan.</p>

    <!-- Tombol untuk arahkan ke halaman ucapan -->
    <form id="musicForm" action="ucapan.php" method="POST">
        <button type="button" id="continueButton" onclick="startAnimation()">Lanjutkan ke Ucapan</button>
    </form>

    <div class="footer">
        <p>Selamat datang di halaman spesial ini ❤️</p>
    </div>

    <script>
        function startAnimation() {
            // Menambahkan animasi fade-out ke body
            document.body.classList.add('fade-out');

            // Menambahkan efek animasi pada tombol (membesar saat ditekan)
            var button = document.getElementById('continueButton');
            button.classList.add('button-pressed');

            // Menambahkan beberapa animasi love
            for (let i = 0; i < 5; i++) {  // Create 5 heart icons
                var heart = document.createElement('div');
                heart.classList.add('love-animation');
                heart.innerHTML = '❤️'; // Icon love
                // Add random position and delay for each heart
                heart.style.left = Math.random() * 100 + 'vw'; // Random horizontal position
                heart.style.animationDelay = Math.random() * 1 + 's'; // Random delay for each heart
                document.body.appendChild(heart);
            }

            // Tunggu sampai animasi selesai, lalu kirim form
            setTimeout(function() {
                // Mengembalikan tombol ke ukuran semula
                button.classList.remove('button-pressed');

                // Kirim form
                var form = document.getElementById('musicForm');
                form.submit();
            }, 3000); // Tunggu selama 3 detik (durasi animasi love)
        }
    </script>

</body>
</html>
