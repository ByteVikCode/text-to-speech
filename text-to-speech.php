<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text to Voice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://img.lovepik.com/background/20211022/large/lovepik-speech-recognition-background-image_500768508.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 60%;
            max-width: 500px;
            background: rgba(77, 160, 228, 0.96);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .container .text {
            width: 100%;
            height: 400px;
            text-align: left;
            margin-bottom: 20px;
            font-weight: 600;
            line-height: 28px;
            letter-spacing: 1px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            resize: none;
            font-size: 16px;
        }

        .btn-group {
            display: flex;
            justify-content: space-around;
        }

        .btn {
            width: 30%;
            height: 45px;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }

        .play {
            background-color: #4caf50;
        }

        .play:hover {
            background-color: #45a049;
        }

        .pause {
            background-color: #f39c12;
        }

        .pause:hover {
            background-color: #e67e22;
        }

        .stop {
            background-color: #e74c3c;
        }

        .stop:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Text to Voice</h1>
        <textarea class="text" rows="6" placeholder="Enter your text here...."></textarea>
        <div class="btn-group">
            <button class="btn play" onclick="playAudio()">Play</button>
            <button class="btn pause" onclick="pauseAudio()">Pause</button>
            <button class="btn stop" onclick="stopAudio()">Stop</button>
        </div>
    </div>

    <script>
        let speech = new SpeechSynthesisUtterance();
        let isSpeaking = false;

        function playAudio() {
            let msg = document.querySelector('.text').value;
            if (!isSpeaking || speech.text !== msg) {
                speech.text = msg;
                speech.lang = "en-US";
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                speechSynthesis.speak(speech);
                isSpeaking = true;
            } else {
                speechSynthesis.resume();
            }
        }

        function pauseAudio() {
            speechSynthesis.pause();
        }

        function stopAudio() {
            speechSynthesis.cancel();
            isSpeaking = false;
        }
    </script>
</body>
</html>