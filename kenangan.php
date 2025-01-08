<?php
// Tentukan path lagu (Anda bisa menggantinya dengan URL lagu atau path lokal)
$lagu = "path_to_your_song.mp3"; // Ganti dengan path yang benar

// Mulai sesi
session_start();

// Pastikan musik tetap diputar dari halaman sebelumnya
if (!isset($_SESSION['music_played']) || !$_SESSION['music_played']) {
    $_SESSION['music_played'] = false; // Pastikan musik diputar jika halaman ini dibuka pertama kali
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Kenangan</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            color: #4a4a4a;
            text-align: center;
            padding: 20px;
            background-image: url('gambar-kita.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        h1 {
            color: #e91e63;
            font-size: 2.5em;
            font-family: 'Georgia', serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            margin-bottom: 20px;
            position: relative;
        }

        h1::after {
            content: "\2764"; /* Unicode untuk simbol hati */
            font-size: 1.5em;
            color: #e91e63;
            position: absolute;
            top: 0;
            right: -30px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #2c3e50;
            margin-top: 20px;
            font-style: italic;
        }

        /* Gallery Styles */
        .gallery {
            display: flex;
            flex-direction: column; /* Membuat gambar ditampilkan vertikal satu per satu */
            align-items: center; /* Menyelaraskan gambar di tengah */
            margin-top: 20px;
            max-height: 70vh; /* Membatasi tinggi galeri */
            overflow-y: scroll; /* Menambahkan scroll jika konten lebih banyak dari tinggi yang ditentukan */
            padding-right: 20px; /* Memberikan ruang agar scroll tidak menutupi gambar */
        }

        .gallery img {
            width: 80%;
            max-width: 600px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            border: 4px solid #ffd1dc;
            background: #ffe4e9;
            margin-bottom: 20px; /* Memberikan jarak antar gambar */
        }

        .music-player {
            margin-top: 30px;
        }

        audio {
            margin-top: 20px;
            width: 80%;
            border-radius: 8px;
        }

        .footer {
            margin-top: 50px;
            color: #7f8c8d;
            font-size: 1em;
        }

        .footer span {
            font-size: 1.5em;
            color: #e91e63;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.5em;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 8px;
            margin-top: 30px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #d81b60;
            transform: scale(1.1);
        }

        /* MEDIA QUERIES */

        /* Mode Laptop/Desktop (Lebar layar lebih besar dari 768px) */
        @media (min-width: 768px) {
            body {
                padding: 40px;
            }

            h1 {
                font-size: 3em;
            }

            p {
                font-size: 1.5em;
            }

            .gallery img {
                width: 70%; /* Lebar gambar lebih kecil di desktop */
                max-width: 500px; /* Ukuran maksimal gambar */
            }

            .music-player {
                margin-top: 50px;
            }

            audio {
                width: 70%; /* Lebar pemutar audio di desktop */
            }
        }

        /* Mode HP (Lebar layar lebih kecil dari 768px) */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            h1 {
                font-size: 2.2em;
            }

            p {
                font-size: 1.2em;
            }

            .gallery img {
                width: 90%; /* Lebar gambar lebih besar di perangkat mobile */
                max-width: 100%; /* Ukuran maksimal gambar */
            }

            .music-player {
                margin-top: 30px;
            }

            audio {
                width: 90%; /* Lebar pemutar audio di mobile */
            }

            .footer {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <h1>Kenangan Indah Kita Berdua</h1>
    <p>Berikut beberapa foto kenangan indah kita bagikan bersama. Semoga kenangan ini selalu membuat kamu selalu sayang sampai kita halal.</p>
    <p>Silahkan scroll foto kita berdua ><</p>

    <div class="gallery">
        <img src="kenangan.jpg" alt="Kenangan 1"> <!-- Ganti dengan path gambar Anda -->
        <img src="kenangan2.jpg" alt="Kenangan 2">
        <img src="kenangan3.jpg" alt="Kenangan 3">
        <img src="kenangan4.jpg" alt="Kenangan 4">
        <img src="kenangan5.jpg" alt="Kenangan 5">
        <img src="kenangan6.jpg" alt="Kenangan 6">
        <img src="kenangan7.jpg" alt="Kenangan 7">
        <img src="kenangan8.jpg" alt="Kenangan 8">
        <img src="kenangan9.jpg" alt="Kenangan 9">
        <img src="kenangan10.jpg" alt="Kenangan 10">
        <img src="kenangan11.jpg" alt="Kenangan 11">
        <img src="kenangan12.jpg" alt="Kenangan 12">
        <img src="kenangan13.jpg" alt="Kenangan 13">
        <img src="kenangan14.jpg" alt="Kenangan 14">
        <img src="kenangan15.jpg" alt="Kenangan 15">
        <img src="kenangan16.jpg" alt="Kenangan 16">
    </div>

    <div class="music-player">
        <h2>♥ Musik yang Mengiringi Kenangan Kita ♥</h2>
        <audio controls autoplay loop>
            <source src="<?php echo $lagu; ?>" type="audio/mp3">
            Browser Anda tidak mendukung pemutar audio.
        </audio>
    </div>

    <!-- Button to navigate to animasi.php -->
    <a href="flower.html" class="btn">Lihat Animasi</a>

    <div class="footer">
        <p>Dengan cinta, Dari Fariz untukmu <span>❤</span></p>
    </div>
</body>
</html>
