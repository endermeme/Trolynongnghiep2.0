<?php
include('header.php');
//include('../core/helpers.php');
// include('../../admin_class.php');
?>

<div class="pc-container">
    <div class="pc-content">

        <!-- bắt đầu code từ đây -->
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f8ff;
                color: #333;
                text-align: center;
                padding: 20px;
                position: relative;
            }

            h2 {
                font-size: 2em;
                background: linear-gradient(90deg, red, yellow, green, cyan, blue, violet);
                background-size: 600% 100%;
                -webkit-background-clip: text;
                color: transparent;
                animation: gradient 10s linear infinite;
                margin-top: 60px; /* Add top margin to separate from the upload button */
            }

            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                100% {
                    background-position: 100% 50%;
                }
            }

            button, #upload-button {
                background-color: #1e90ff;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                margin-bottom: 20px; /* Add bottom margin to separate from other elements */
            }

            button:hover, #upload-button:hover {
                background-color: #1c86ee;
            }

            #webcam-container {
                margin-top: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .prediction-container {
                margin: 10px 0;
                text-align: left;
            }

            .prediction-label {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .prediction-bar {
                width: 100%;
                background-color: #ddd;
                border-radius: 5px;
            }

            .prediction-fill {
                height: 24px;
                background-color: #1e90ff;
                text-align: right;
                padding-right: 5px;
                line-height: 24px;
                color: white;
                border-radius: 5px;
            }

            #upload-button {
                position: absolute;
                top: 20px;
                right: 20px;
                padding: 5px 10px;
                font-size: 14px;
                border-radius: 12px;
                text-decoration: none;
            }

            @media (max-width: 600px) {
                button, #upload-button {
                    padding: 10px;
                    font-size: 14px;
                }

                h2 {
                    font-size: 1.5em;
                }

                #webcam-container {
                    margin-top: 10px;
                }
            }
        </style>
    </head>
    <body>
        <a id="upload-button" href="/resources/views/client/chandoananh.html">Tải ảnh lên 🖼️</a>
        <h2>Chẩn đoán sâu bệnh bằng Camera</h2>
        <button id="start-button" type="button" onclick="init()">Bắt đầu</button>
        <div id="webcam-container"></div>
        <div id="label-container"></div>
        <script type="text/javascript">
            const URL = "https://teachablemachine.withgoogle.com/models/Iw6h_tAGq/";

            let model, webcam, labelContainer, maxPredictions;

            async function init() {
                document.getElementById("start-button").style.display = "none";

                const modelURL = URL + "model.json";
                const metadataURL = URL + "metadata.json";

                model = await tmImage.load(modelURL, metadataURL);
                maxPredictions = model.getTotalClasses();

                const flip = false; // whether to flip the webcam
                webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
                await webcam.setup({ facingMode: 'environment' }); // request access to the back camera
                await webcam.play();
                window.requestAnimationFrame(loop);

                document.getElementById("webcam-container").appendChild(webcam.canvas);
                labelContainer = document.getElementById("label-container");
                for (let i = 0; i < maxPredictions; i++) {
                    const predictionContainer = document.createElement("div");
                    predictionContainer.className = "prediction-container";
                    const label = document.createElement("div");
                    label.className = "prediction-label";
                    const bar = document.createElement("div");
                    bar.className = "prediction-bar";
                    const fill = document.createElement("div");
                    fill.className = "prediction-fill";
                    bar.appendChild(fill);
                    predictionContainer.appendChild(label);
                    predictionContainer.appendChild(bar);
                    labelContainer.appendChild(predictionContainer);
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
                    const classPrediction = prediction[i].className + ": " + (prediction[i].probability * 100).toFixed(2) + "%";
                    const predictionContainer = labelContainer.childNodes[i];
                    predictionContainer.childNodes[0].innerHTML = classPrediction;
                    const fill = predictionContainer.childNodes[1].childNodes[0];
                    fill.style.width = (prediction[i].probability * 100) + "%";
                    fill.innerHTML = (prediction[i].probability * 100).toFixed(2) + "%";
                }
            }
        </script>
    </body>
</div>

<?php
include("footer.php");
?>
