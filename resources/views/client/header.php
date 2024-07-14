<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

<?php
function greeting() {

    $now = new DateTime();
    $hour = $now->format('H');


    if ($hour >= 5 && $hour < 12) {
        return 'sáng';
    } elseif ($hour >= 13 && $hour < 18) {
        return 'chiều';
    } else {
        return 'tối';
    }
}

?>
<style>
.pc-header {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  height: 60px; /* Điều chỉnh chiều cao header nếu cần */
}

.header-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  position: relative;
}

.header-logo {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.header-logo img {
  max-height: 60px; /* Điều chỉnh chiều cao tối đa của logo */
  width: auto;
}

.pc-sidebar {
  background-color: white !important;
  z-index: 10001; /* Ensure the sidebar stays above the header and other elements */
}
</style>
<?php
include('head.php');
?>
  <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="/" class="b-brand text-primary">
                <!-- thay ảnh ở đây -->
        <img src="/public/mainlogo.svg" class="img-fluid" alt="logo">
      </a>
    </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
              <h6 class="mb-0">Trợ Lý Nông Nghiệp</h6>
              <small>Chào buổi <?php echo greeting(); ?>!</small>
            </div>
            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="##pc_sidebar_userlink">
              <svg class="pc-icon">
                <use xlink:href="#custom-sort-outline"></use>
              </svg>
            </a>
          </div>
          <div class="collapse pc-user-links" id="pc_sidebar_userlink">
            <div class="pt-3">
            </div>
          </div>
        </div>
      </div>

        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Các danh mục</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-element-plus"></use>
            </svg>
          </li>
          <li class="pc-item">
  <a href="/" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-home"></use>
      </svg>
    </span>
    <span class="pc-mtext">Trang chủ</span>
  </a>
</li>
 <li class="pc-item">
  <a href="/client/troly" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-box-1"></use>
      </svg>
    </span>
    <span class="pc-mtext">Trợ lý nông nghiệp</span>
  </a>
</li>

 <li class="pc-item pc-hasmenu">
            <a href="##!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-cpu-charge"></use>
                </svg>
              </span>
              <span class="pc-mtext">Chẩn đoán sâu bệnh</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
                      <!-- [thay lik ở đây] -->
              <li class="pc-item"><a class="pc-link" href="/client/chuandoan">Chẩn đoán trực tiếp qua camera</a></li>
              <li class="pc-item"><a class="pc-link" href="/resources/views/client/chandoananh.html">Chẩn đoán gián tiếp qua ảnh</a></li>
            </ul>
          </li>
 <li class="pc-item pc-hasmenu">
            <a href="##!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shopping-bag"></use>
                </svg>
              </span>
              <span class="pc-mtext">Mua bán nông sản</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="/client/muaban">Tìm mua nông sản</a></li>
              <li class="pc-item"><a class="pc-link" href="/client/addsp">Đăng bán nông sản</a></li>
            </ul>
          </li>
 <li class="pc-item">
  <a href="/news" class="pc-link">
    <span class="pc-micon">
      <svg class="pc-icon">
        <use xlink:href="#custom-notification-status"></use>
      </svg>
    </span>
    <span class="pc-mtext">Tin tức nông nghiệp</span>
  </a>
</li>
        
        </ul>
      </div>
    </div>
  </nav>
  <!-- [ Sidebar Menu ] end -->

  <!-- [ Header Topbar ] start -->
  <header class="pc-header">
    <div class="header-wrapper">
      <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="javascript:void(0)" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="javascript:void(0)" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="dropdown pc-h-item">
            <!-- Các thành phần dropdown khác -->
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->

      <div class="header-logo">
        <a href="#">
                  <!-- thay ảnh ở đây -->
          <img src="/public/mainlogo.svg" class="img-fluid logo-lg" alt="logo">
        </a>
      </div>

      <div class="ms-auto">
        <ul class="list-unstyled">
          <li class="dropdown pc-h-item">
            </div>
          </li>

        </ul>
      </div>
    </div>
  </header>
  <!-- [ Header Topbar ] end -->

  <script>
    document.getElementById('sidebar-hide').addEventListener('click', function(event) {
      event.preventDefault();
      // Add your code to toggle sidebar visibility here
    });

    document.getElementById('mobile-collapse').addEventListener('click', function(event) {
      event.preventDefault();
      // Add your code to toggle mobile sidebar visibility here
    });
  </script>
</body>
</html>
