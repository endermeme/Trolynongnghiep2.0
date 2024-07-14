<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Trợ lý nông nghiệp';
require_once(__DIR__ . "../../../../core/is_user.php");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <script src="/service/AI/ai.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .webcam-container {
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 20px;
            position: relative;
        }
        .placeholder {
            position: absolute;
            color: #999;
            font-size: 18px;
        }
        .bar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 20px;
        }
        .bar {
            width: 100%;
            background-color: lightgray;
            margin: 5px 0;
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        .bar-inner {
            height: 100%;
            background-color: blue;
            width: 0%;
            transition: width 0.3s ease;
            border-radius: 10px;
        }
        .label {
            font-size: 14px;
            margin-top: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #007BFF;
            padding: 10px 20px;
            color: white;
            width: 100%;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        #header .logo {
            height: 40px;
            width: auto;
            margin-left: 10px;
        }
        #header .title {
            flex-grow: 1;
            text-align: center;
            font-size: 24px;
            margin: 0;
            padding: 0 20px;
        }
        #header .menu-button {
            background-color: white;
            color: #007BFF;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, color 0.3s;
        }
        #header .menu-button:hover {
            background-color: #0056b3;
            color: white;
        }
        #header .left-section {
            display: flex;
            align-items: center;
        }
        #coze-chatapp-container {
            height: 100vh !important;
            width: 100vw !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
        }
        #coze-chatapp-iframe {
            height: 100vh;
            border: 0;
        }
        #fixed-bottom-div {
            height: 30px;
            width: 100%;
            background-color: white;
            position: fixed;
            bottom: 0;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="left-section">
            <button class="menu-button" onclick="window.location.href='/'">
                Trở về
            </button>
            <img src="/public/mainlogo.svg" alt="Logo" class="logo" />
        </div>
    </header>
    <div class="container">
        <h1>Plant Disease Detection</h1>
        <p>Click the button below to start the webcam and begin detecting plant diseases in real-time.</p>
        <button type="button" onclick="init()">Start</button>
        <div id="webcam-container" class="webcam-container">
            <div class="placeholder">Webcam will appear here</div>
        </div>
        <div id="label-container" class="bar-container"></div>
    </div>
    <script type="text/javascript">
        const URL = "https://teachablemachine.withgoogle.com/models/Iw6h_tAGq/";

        let model, webcam, labelContainer, maxPredictions;

        async function init() {
            const modelURL = URL + "model.json";
            const metadataURL = URL + "metadata.json";

            model = await tmImage.load(modelURL, metadataURL);
            maxPredictions = model.getTotalClasses();

            const flip = true; // whether to flip the webcam
            webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
            await webcam.setup({ facingMode: 'environment' }); // request access to the back camera
            await webcam.play();
            window.requestAnimationFrame(loop);

            document.getElementById("webcam-container").innerHTML = '';
            document.getElementById("webcam-container").appendChild(webcam.canvas);
            labelContainer = document.getElementById("label-container");
            for (let i = 0; i < maxPredictions; i++) {
                const bar = document.createElement("div");
                bar.classList.add("bar");
                const barInner = document.createElement("div");
                barInner.classList.add("bar-inner");
                bar.appendChild(barInner);

                const label = document.createElement("div");
                label.classList.add("label");   
                label.textContent = "Class " + i;

                labelContainer.appendChild(label);
                labelContainer.appendChild(bar);
            }
        }

        async function loop() {
            webcam.update();
            await predict();
            window.requestAnimationFrame(loop);
        }

        async function predict() {
            const prediction = await model.predict(webcam.canvas);
            for (let i = 0; i < maxPredictions; i++) {
                const barInner = labelContainer.childNodes[i * 2 + 1].querySelector(".bar-inner");
                const label = labelContainer.childNodes[i * 2];

                const classPrediction = prediction[i].className + ": " + Math.round(prediction[i].probability * 100) + "%";
                label.textContent = classPrediction;

                // Update the width of the barInner element based on confidence level
                const targetWidth = Math.round(prediction[i].probability * 100);
                barInner.style.width = `${targetWidth}%`;
            }
        }
    </script>
    <div id="fixed-bottom-div"></div>
    <script>
        var chatClientId = 'pGOI1FFyYbcFJI8D4YYzu';
        var botId = '7366994128057630737';
        var title = 'Trợ lý nông nghiệp';
        var layout = 'mobile';
        var lang = 'vi';
        var icon = 'https://cdn.glitch.global/1eee455c-65a0-428f-a71b-89f07640b91b/logoai.svg';
        var frameHeight = '';
        initCozeChatApp(chatClientId, botId, title, layout, lang, icon);
        setTimeout(function() {
            openCozeChatPopup();
        }, 100);
    </script>
</body>
</html>
<?php require_once(__DIR__."/Footer.php"); ?>
