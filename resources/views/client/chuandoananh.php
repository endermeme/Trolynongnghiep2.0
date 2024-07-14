<?php
include('header.php');
//include('../core/helpers.php');
// include('../../admin_class.php');
?>


<!-- bắt đầu code từ đây -->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #f0f8ff; /* Màu nền xanh nước biển nhạt */
            text-align: center;
            position: relative;
        }
        h2 {
            font-size: 2em;
            background: linear-gradient(90deg, red, yellow, green, cyan, blue, violet);
            background-size: 600% 100%;
            -webkit-background-clip: text;
            color: transparent;
            animation: gradient 10s linear infinite;
            margin-top: 60px; /* Tạo khoảng trống cho header */
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }
        #upload-container {
            background: #ffffff; /* Màu nền trắng */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 90%;
            width: 400px;
        }
        #imagePreview {
            height: 250px;
            width: 250px;
            margin-top: 20px;
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: none; /* Ẩn ảnh xem trước ban đầu */
        }
        #label-container {
            margin-top: 20px;
            width: 100%;
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
        input[type="file"] {
            margin-top: 20px;
            padding: 10px;
            border: 2px dashed #1e90ff; /* Màu xanh nước biển đậm cho viền */
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s;
            background-color: #d1f0f9; /* Màu nền xanh nước biển nhạt */
        }
        input[type="file"]:hover {
            border-color: #005b8e; /* Màu xanh nước biển đậm hơn khi di chuột qua */
        }
        #upload-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 5px 10px;
            font-size: 14px;
            background-color: #1e90ff;
            color: white;
            border: none;
            border-radius: 12px;
            text-decoration: none;
            cursor: pointer;
        }
        #upload-button:hover {
            background-color: #1c86ee;
        }
    </style>
</head>
<body>
    <a id="upload-button" href="https://example.com">Tải ảnh lên 📷</a>
    <h2>Chẩn đoán sâu bệnh bằng hình ảnh</h2>
    <div id="upload-container">
        <input id="imageUpload" type="file" />
        <img id="imagePreview" src="#" alt="Ảnh xem trước" />
        <div id="label-container"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script>
        const URL = 'https://teachablemachine.withgoogle.com/models/Iw6h_tAGq/';

        let model, labelContainer, maxPredictions;

        async function init() {
            const modelURL = URL + 'model.json';
            const metadataURL = URL + 'metadata.json';

            model = await tmImage.load(modelURL, metadataURL);
            maxPredictions = model.getTotalClasses();
            labelContainer = document.getElementById('label-container');
            labelContainer.innerHTML = '';  // Clear existing labels
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

        async function predict() {
            const image = document.getElementById('imagePreview');
            const predictions = await model.predict(image, false);
            for (let i = 0; i < maxPredictions; i++) {
                const classPrediction = predictions[i].className + ": " + (predictions[i].probability * 100).toFixed(2) + "%";
                const predictionContainer = labelContainer.childNodes[i];
                predictionContainer.childNodes[0].innerHTML = classPrediction;
                const fill = predictionContainer.childNodes[1].childNodes[0];
                fill.style.width = (predictions[i].probability * 100) + "%";
                fill.innerHTML = (predictions[i].probability * 100).toFixed(2) + "%";
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                if (!input.files[0].type.match('image.*')) {
                    alert("Vui lòng tải lên một tệp hình ảnh hợp lệ.");
                    return;
                }
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('imagePreview').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                    init().then(() => {
                        predict();
                    });
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        document.getElementById('imageUpload').addEventListener('change', function () {
            readURL(this);
        });
    </script>




