<?php
include('header.php');
?>

<style>
    /* Cố định header */
    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000; /* Đảm bảo header luôn ở trên các phần tử khác */
        background-color: white; /* Đảm bảo header có nền để phân biệt với nội dung */
    }
    
    /* Ngăn cuộn trang */
    body {
        overflow: hidden;
    }

    .pc-container {
        margin-top: 60px; /* Điều chỉnh phù hợp với chiều cao của header để tránh nội dung bị che khuất */
        height: 100%; /* Đảm bảo phần chính chiếm toàn bộ chiều cao còn lại */
        overflow: hidden;
    }

    .pc-content {
        height: 100%; /* Chiếm toàn bộ chiều cao của pc-container */
    }

    #coze-chatapp-container {
        height: 100% !important; /* Adjust height to avoid overlap with bottom div */
        width: 100vw !important;
        position: fixed; /* Fixed position to cover entire viewport */
        top: 0 !important; /* Vẫn bắt đầu từ top */
        left: 0 !important;
        z-index: 999; /* Đảm bảo chat app luôn ở dưới header */
    }
    #coze-chatapp-iframe {
        height: 100%;
        width: 100%;
        border: 0;
    }
    #fixed-bottom-div {
        height: 40px ; 
        width: 100vw;
        background-color: white;
        position: absolute;
        bottom: 0;
        z-index: 1000000;
    }
</style>

<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
    <script src="https://chatvn.org/assets/javascript/coze.js?v=240530"></script>
<div class="pc-container">
  <div class="pc-content">

    <!-- bắt đầu code từ đây -->

           <div id="fixed-bottom-div"></div>
    <div id="coze-chatapp-container">
        <iframe id="coze-chatapp-iframe" src="">
        </iframe>
    </div>
    <script>
        var chatClientId = 'pGOI1FFyYbcFJI8D4YYzu';
        var botId = '7389253256293597202';
        var title = 'Trợ lý nông ';
        var layout = 'mobile';
        var lang = 'vi';
        var icon = 'https://cdn.glitch.global/1eee455c-65a0-428f-a71b-89f07640b91b/logoai.svg';
        var frameHeight = '';
        initCozeChatApp(chatClientId, botId, title, layout, lang, icon);
        setTimeout(function() {
            openCozeChatPopup();
        }, 100);
    </script>

    <!-- [ Main Content ] end -->
  </div>
</div>
<!-- [ Main Content ] end -->

<?php
include("footer.php");
?>

</body>
<!-- [Body] end -->
</html>