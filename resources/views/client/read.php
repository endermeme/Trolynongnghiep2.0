<?php
if (isset($_GET['slug'])) {
    $row = $NNL->get_row("SELECT * FROM `notifications` WHERE `slug` = '" . xss($_GET['slug']) . "'");
    if (!$row) {
        nnl_error_time("Không tìm thấy tin tức bạn muốn xem!", BASE_URL(''), 500);
    }
} else {
    nnl_error_time("Không tìm thấy tin tức bạn muốn xem!", BASE_URL(''), 500);
}
?>



<?php
include('header.php');
?>

<div class="pc-container">
    <div class="pc-content">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trợ Lý Nông Nghiệp</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Tiện ích</a></li>
                <li class="breadcrumb-item"><a href="/news">Tin tức</a></li>
            </ul>
        </div>

<div class="text-center">
<h1 class="text-[30px] mb-3"><?=$row['title']?></h1>
<img  class="img-fluid card-img-top" src="<?= $row['anh']; ?>" alt="<?= $row['slug'] ?>">
<hr>
</div>
<?php
if (strpos($row['voice'], 'https://') !== false) {
    // URL contains "https://"
    echo '<audio controls src="' . $row['voice'] . '">';
    echo '</audio>';
} else {
    // URL doesn't contain "https://"
    echo '<p></p>';
}
?>
<div class="card-body">
    <div class="card-text p-6">
        <div class="image-container">
            <?=$row['content']?>
        </div>
    </div>
</div>

<div class="text-center">
  <h1 class="text-[30px] mb-3">Một số tin tức khác</h1>
  <hr>
</div>

<?php
$max_items = 10; 

$random_news = $NNL->get_list("SELECT * FROM `notifications` WHERE `status` = 1 ORDER BY RAND() LIMIT $max_items");

if (count($random_news) > 0) {
  foreach ($random_news as $more) {
?>

<div class="card overflow-hidden" onclick="location.href='<?= BASE_URL('read/'), $more['slug'] ?>'">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?=$more['anh']?>" class="img-fluid rounded-md-start" alt="<?=$more['slug']?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$more['title']?></h5>
        <p class="card-text"><small class="text-muted">Đăng tải ngày <?= $more['create_date']; ?></small></p>
        <a href="<?= BASE_URL('read/'), $more['slug'] ?>" class="btn btn-primary">Đọc tin</a>
      </div>
    </div>
  </div>
</div>

<?php
  }
} else {
  echo '<p>Không tìm thấy tin tức nào.</p>';
}
?>

    </div>
</div>

<?php
include("footer.php");
?>
