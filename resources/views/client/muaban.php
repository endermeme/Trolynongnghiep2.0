<?php
include('header.php');
//include('../core/helpers.php');
// include('../../admin_class.php');
?>

<div class="pc-container">
    <div class="pc-content">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trợ Lý Nông Nghiệp</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Tiện ích</a></li>
                <li class="breadcrumb-item" aria-current="page">Chợ nông nghiệp</li>
            </ul>

            <div class="modal fade backdrop-brightness-10 fixed inset-0 left-0 top-0 hidden h-full w-full overflow-y-auto overflow-x-hidden bg-slate-900/40 outline-none backdrop-blur-sm backdrop-filter" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog pointer-events-none relative top-1/4 w-auto">
                    <div class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-slate-900">
                        <form>
                            <div class="relative">
                                <button class="absolute left-0 top-1/2 flex h-full w-9 -translate-y-1/2 items-center justify-center text-xl dark:text-slate-300">
                                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                                </button>
                                <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Search" autofocus>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-wrapper transition-all duration-150 ltr:ml-0 rtl:mr-0 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="container-fluid transition-all duration-150" id="page_layout">
                        <main id="content_layout">

                            <div class="mb-3">
                                <section class="space-y-6" id="muaban">
                                    <div class="text-center">
                                        <h1 class="text-[30px] mb-3">Các sản phẩm đang được bày bán</h1>
                                        <hr>
                                    </div>

                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <strong>Chú ý:</strong> Các sản phẩm được hiển thị đầu tiên là những sản phẩm mới được đăng gần đây.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>

                                    <div class="text-center mb-4">
                                        <a href="/client/addsp" class="btn btn-primary btn-lg rounded-pill py-3 px-5 shadow-lg">Bán sản phẩm 🛒</a>
                                    </div>
                                </section>
                            </div>

                            <div class="grid xl:grid-cols-3 grid-cols-1 gap-5">
                                <?php foreach ($NNL->get_list("SELECT * FROM `muaban` WHERE `status` = 1 ORDER BY `create_date` DESC") as $row) { ?>
                                    <div class="card mb-3">
                                        <img class="img-fluid card-img-top" src="<?= $row['image']; ?>" alt="<?= $row['image'] ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['name']; ?></h5>
                                            <p class="card-text"><small class="text-muted"><?= $row['content']; ?></small></p>
                                            <p class="card-text"><small class="text-muted">Số lượng muốn bán: <?= $row['soluong']; ?></small></p>
                                            <a href="tel:<?= BASE_URL('tel:'), $row['number'] ?>" class="btn btn-primary">Liên hệ ngay</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </main>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- [ Main Content ] end -->
<?php
include("footer.php");
?>
