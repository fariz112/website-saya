<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan anniversary</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffe4e1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Disable scrolling on larger screens */
            flex-direction: column;
        }

        h1 {
            font-size: 2.5em;
            color: #e91e63;
            text-align: center;
            margin-bottom: 20px;
        }

        .envelope {
            width: 80%;
            max-width: 600px;
            height: 500px;
            background-color: #ffb6c1;
            position: relative;
            transform: rotateX(20deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .envelope:hover {
            transform: rotateX(0deg) scale(1.05);
        }

        .flap {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: #f08080;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            transition: 0.5s;
        }

        .envelope:hover .flap {
            transform: translateY(-100%);
        }

        .letter {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            box-sizing: border-box;
            padding: 40px;
            transform: translateY(100%);
            transition: 0.5s;
            font-size: 18px;
            line-height: 1.8;
            overflow: auto;
        }

        .letter p {
            margin: 0;
            font-family: 'Georgia', serif;
            color: #333;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .signature {
            text-align: right;
            font-style: italic;
            margin-top: 30px;
            font-size: 18px;
        }

        .button-container {
            margin-top: 60px;
        }

        .button-container button {
            padding: 20px 40px;
            font-size: 1.8em;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .button-container button:hover {
            background-color: #d81b60;
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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

        /* Fade-out effect for page transition */
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease;
        }

        /* For mobile (screens less than or equal to 600px) */
        @media (max-width: 600px) {
            body {
                padding: 20px;
                overflow-y: auto; /* Allow scrolling on mobile */
            }

            h1 {
                font-size: 2em;
                margin-bottom: 10px;
            }

            .envelope {
                width: 90%;
                height: 400px;
            }

            .letter {
                padding: 20px;
                font-size: 16px;
            }

            .button-container button {
                padding: 15px 30px;
                font-size: 1.5em;
            }
        }

        /* For larger screens (tablets, laptops, etc.) */
        @media (min-width: 601px) {
            body {
                min-height: 100vh; /* Prevent scrolling on larger screens */
                overflow: hidden; /* Disable scrolling */
                padding: 20px;
            }

            h1 {
                font-size: 2.5em;
                margin-bottom: 20px;
            }

            .envelope {
                width: 80%;
                height: 500px;
            }

            .letter {
                padding: 40px;
                font-size: 18px;
            }

            .button-container button {
                padding: 20px 40px;
                font-size: 1.8em;
            }
        }
    </style>
</head>
<body>
<h1>Silahkan tekan Surat di bawah ya</h1>

    <div class="envelope" onclick="showLetter()">
        <div class="flap"></div>
        <div class="letter" id="letter">
            <p id="message">Dear Someone Special,<br><br>
            Happy anniversary, cintaku. Terima kasih karena selalu membuatku merasa begitu istimewa. Aku sangat mencintaimu.
            Mungkin kamu memang tidak sempurna, tetapi cintamu kepadaku sudah lebih dari sempurna. Terima kasih karena sudah mencintaiku dan membuatku menjadi orang yang paling beruntung di dunia ini. Selamat hari jadi, sayangku.
            Seumur hidupku aku telah bertemu banyak orang. Namun ternyata hanya kamu yang paling istimewa. Maka tetaplah jadi yang teristimewa di hatiku, hari ini, besok, lusa dan selamanya.
            Happy anniversary, my love. Terima kasih sudah menjadi bagian penting dari hidupku selama ini. Aku berjanji akan selalu membahagiakanmu!
            Aku tidak menginginkan apa pun darimu di hari jadi ini, selain janji untuk selalu mengerahkan segala upaya agar kita selalu bersama.
            </p>
            <p class="signature" id="signature">With love,<br>Fariz Aditya Pratama</p>
        </div>
    </div>

    <div class="button-container">
        <button onclick="startLoveAnimation()">Lihat Foto Kenangan</button>
    </div>

    <script>
        function showLetter() {
            const letter = document.getElementById('letter');
            const message = document.getElementById('message');
            const signature = document.getElementById('signature');

            // Slide the letter into view
            letter.style.transform = 'translateY(0)'; 

            // Fade in the content of the letter (message and signature)
            setTimeout(() => {
                message.style.opacity = '1'; // Make message visible with fade-in
                signature.style.opacity = '1'; // Make signature visible with fade-in
            }, 500); // Wait for the letter slide to complete before showing text
        }

        function startLoveAnimation() {
            // Create multiple hearts to animate
            for (let i = 0; i < 5; i++) {
                let heart = document.createElement('div');
                heart.classList.add('love-animation');
                heart.innerHTML = '❤️'; // Heart icon
                // Random position for each heart
                heart.style.left = Math.random() * 100 + 'vw'; 
                heart.style.animationDelay = Math.random() * 1 + 's'; // Random animation delay
                document.body.appendChild(heart);
            }

            // Add fade-out effect before navigating
            document.body.classList.add('fade-out');

            // Wait for the animation to finish before navigating
            setTimeout(() => {
                window.location.href = 'kenangan.php'; // Navigate to Foto Kenangan page
            }, 1000); // Wait for 1 second for the fade-out effect to complete
        }
    </script>

</body>
</html>
