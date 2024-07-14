<?php if (!defined( 'IN_SITE')) { die( 'The Request Not Found'); } 
require_once(__DIR__ . "../../../../core/is_user.php"); 
require_once(realpath($_SERVER[ "DOCUMENT_ROOT"]) . '/config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="dark">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Đơn Vị Thiết Kế & Phát Triển Trợ Lý Nông Nghiệp ">
    <meta name="keywords" content="Đơn Vị Thiết Kế & Phát Triển Trợ Lý Nông Nghiệp">
    <meta name="author" content="Trợ Lý Nông Nghiệp">

    <title>ADMIN CPANEL</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="shortcut icon" href="https://icons-for-free.com/iconfiles/png/512/favicon+google+identity+new+icon-1320161424340391018.png" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap.min.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL('resources/views/');?>/admin/dist/css/app.css" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="<?=BASE_URL('public/admin/template/');?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link class="main-stylesheet" href="<?=BASE_URL('public/');?>cute/cute-alert.css" rel="stylesheet" type="text/css">
    <script src="<?=BASE_URL('public/');?>cute/cute-alert.js"></script>
    <script src="<?=BASE_URL('public/admin/js/jquery-3.6.0.js');?>"></script>
    <script src="<?=BASE_URL('public/admin/template/');?>ckeditor/ckeditor.js"></script>
    <script src="<?=BASE_URL('public/admin/template/');?>vanillatoasts.js"></script>
    <link href="<?=BASE_URL('public/admin/template/');?>vanillatoasts.css" rel="stylesheet">
     <link rel="stylesheet"
        href="<?=BASE_URL('public/admin/template/');?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?=BASE_URL('public/admin/template/');?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?=BASE_URL('public/admin/template/');?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Cute Alert -->
    <link class="main-stylesheet" href="<?=BASE_URL('public/');?>cute/cute-alert.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>

</head>
<?php CheckLogin();?>
<?php CheckAdmin();?>
<style>
.dark .content{
    --tw-bg-opacity: 1;
    background-color: rgba(41,49,69,var(--tw-bg-opacity));
}
.dark .box{
    border-color: transparent;
    --tw-bg-opacity: 1;
    background-color: rgba(41,49,69,var(--tw-bg-opacity));
}
    .bold-title {
        font-weight: bold;
    }
    .custom-container {
        display: flex;
        justify-content: space-between;
    }
    .edit-link .lucide-check-square {
        color: red;
        /* Đổi màu của biểu tượng Edit thành đỏ */
    }
    .delete-link .lucide-trash-2 {
        color: blue;
        /* Đổi màu của biểu tượng Delete thành xanh */
    }
    .status {
        display: inline-block;
        padding: .25em .4em;
        font-size: 9%;
        display: inline-block;
        padding: .25em .4em;
        font-size: 100%;
        font-weight: 800;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 90%;
        font-weight: 750;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .badge-success {
        color: #fff;
        background-color: #28a745;
    }
    .badge-dark {
        color: #fff;
        background-color: #000000;
    }
    .badge-info {
        color: #fff;
        background-color: #17a2b8;
    }
    .status-unpaid {
        color: #fff;
        background-color: #800000;
    }
    .status-active {
        color: #fff;
        background-color: #28a745;
    }
    .status-active {
        color: #fff;
        background-color: #28a745;
    }
    .badge-danger {
        color: #fff;
        background-color: #dc3545;
    }
    .badge-warning {
        color: #fff;
        background-color: #ffc107;
    }
    .dark .side-nav > ul > li > .side-menu.side-menu--active {
    --tw-border-opacity: 1;
    --tw-bg-opacity: 1;
    --tw-text-opacity: 1;
    background-color: cornflowerbluergba(41,49,69,var(--tw-bg-opacity));
    border-color: rgba(41,49,69,var(--tw-bg-opacity));
    color: rgba(41,49,69,var(--tw-bg-opacity));
}
</style>

  <body class="py-5">
            <!-- BEGIN: Mobile Menu -->



    <div class="flex mt-[4.7rem] md:mt-0">

        <nav class="side-nav">
            <a href="<?= BASE_URL('admin'); ?>" class="intro-x flex items-center pl-5 pt-4">
                <span class="hidden xl:block text-white text-lg ml-3">
                Trợ Lý Nông Nghiệp
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="<?= BASE_URL('admin'); ?>" class="side-menu ">
                        <div class="side-menu__icon">
                            <i data-lucide="home"></i>
                        </div>
                        <div class="side-menu__title">
                            Trang Chủ
                            <div class="side-menu__sub-icon transform rotate-180">
                            </div>
                        </div>
                    </a>
                </li>

     <li>
        <a href="/admin/" class="side-menu">
            <div class="side-menu__icon">
                <i data-lucide="trello"></i>
            </div>
            <div class="side-menu__title">
               Tin tức
                <div class="side-menu__sub-icon "></div>
            </div>
        </a>
        <a href="/admin/muaban" class="side-menu">
            <div class="side-menu__icon">
                <i data-lucide="activity"></i>
            </div>
            <div class="side-menu__title">
               Liên hệ mua bán
                <div class="side-menu__sub-icon "></div>
            </div>
        </a>
        <a href="/admin/changepass" class="side-menu">
            <div class="side-menu__icon">
                <i data-lucide="key"></i>
            </div>
            <div class="side-menu__title">
               Đổi mật khẩu
                <div class="side-menu__sub-icon "></div>
            </div>
        </a>
        <a href="/admin/tool" class="side-menu">
            <div class="side-menu__icon">
                <i data-lucide="box"></i>
            </div>
            <div class="side-menu__title">
               Công cụ up file lấy link
                <div class="side-menu__sub-icon "></div>
            </div>
        </a>
    </li>
    </ul>
    </nav>





    <div class="content">
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> Admin </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Trợ Lý Nông Nghiệp </li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" id="search-input" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" id="search-icon" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification sm:hidden" href="#">
                    <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                </a>
            </div>


            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
<div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                </div>
                
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium"> Trợ Lý Nông Nghiệp </div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">  </div>
                        </li>

                        <li>
                            <a href="/" target="_blank" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Về Trang Chủ
                            </a>
                            <a href="/client/logout" class="dropdown-item hover:bg-white/5">
                                <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Đăng Xuất Phiên Hoạt Động
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>