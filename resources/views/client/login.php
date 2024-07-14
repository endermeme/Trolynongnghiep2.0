<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
$title = "Đăng Nhập";
require_once(__DIR__ . "/layout/header.php");
?>
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"> <!-- [Font] Family -->
<link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="../assets/css/style-preset.css" >
<!-- Google tag (gtag.js) -->
  <script src="../assets/js/plugins/popper.min.js"></script>
  <script src="../assets/js/plugins/simplebar.min.js"></script>
  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/fonts/custom-font.js"></script>
  <script src="../assets/js/pcoded.js"></script>
  <script src="../assets/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>layout_theme_contrast_change('false');</script>
  
  
  
  <script>change_box_container('false');</script>
  
  
  <script>layout_caption_change('true');</script>
  
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>

</script>


</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v2">
      <div class="auth-sidecontent">
        <img src="../assets/images/authentication/img-auth-sideimg.jpg" alt="images"
          class="img-fluid img-auth-side">
      </div>
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <div class="text-center">
              <a href="#"><img src="/public/mainlogo.svg" alt="img"></a>

            <div class="saprator my-3">
              <span>Trợ Lý Nông Nghiệp</span>
            </div>
            <h4 class="text-center f-w-500 mb-3">Đăng nhập để truy cập vào trang quản trị</h4>
                        <div class="login-body">
                            
                            <form class="login-form" method="post" id="login_sieuthicode" role="form">
                                <input type="hidden" name="action" value="login" readonly>
                                <div class="form-group">
                                    <div class="d-flex space-between">
                                        <label for="inputPassword">Tên đăng nhập</label>
                                    </div>
                                    <input type="text" class="form-control input-lg" name="username"
                                        placeholder="Nhập tài khoản" autofocus>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="d-flex space-between">
                                        <label for="inputPassword">Mật khẩu</label>
                                    </div>
                                    <input type="password" class="form-control input-lg" name="password"
                                        placeholder="Nhập mật khẩu" autocomplete="off">
                                </div>
<div class="d-grid mt-4">
                                <button class="btn btn-lg btn-primary btn-block" id="btnLogin" type="submit">Đăng
                                    nhập</button>
</div>
                            </form>
                        </div>
            <div class="d-flex mt-1 justify-content-between align-items-center">


            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Hãy liên hệ với quản trị viên để được nhận sự giúp đỡ nếu như bạn quên mật khẩu.</h6>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <script type="text/javascript">
    $(document).ready(function() {
        $('#login_sieuthicode').on("submit", function(e) {
            $('#btnLogin').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop(
                'disabled',
                true);
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "/ajaxs/client/login.php",
                type: "POST",
                dataType: "JSON",
                data: formData,
                contentType: false,
                processData: false,
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 5000
                        });
                        setTimeout("location.href = '<?= BASE_URL('admin'); ?>';", 100);
                    } else {
                        cuteToast({
                            type: "error",
                            message: respone.msg,
                            timer: 5000
                        });
                    }
                    $('#btnLogin').html('Đăng Nhập').prop('disabled', false);
                }
            });
        });
    });
</script>


</body>
<!-- [Body] end -->

</html>