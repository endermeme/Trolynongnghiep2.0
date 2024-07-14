<footer id="footer" class="mb-[60px] md:mb-0 static">
    <div class="py-3" style="background: #1b1a1a">
        <div
            class="relative mx-auto mt-2 grid w-full max-w-6xl grid-cols-2 gap-4 px-4 font-semibold text-white md:mb-0 md:px-0">

            <div class="col-span-2 py-2 md:col-span-1">
                <div class="flex flex-col items-center">
                    <a href="/">
                        <img src="<?= $NNL->site('logo') ?>" alt=" Chuyên thiết kế website Bán Acc Game, chuẩn SEO, chuyên nghiệp" class="mb-2 max-w-[170px]">
                    </a>
                    <span class="text-center">Dịch vụ thiết kế website theo yêu cầu, mua bán mã nguồn, dịch vụ uy tín, hỗ trợ nhiệt tình. Đội ngũ chăm sóc khách hàng 24/24</span>
                </div>
            </div>

            <div class="col-span-2 py-2 md:col-span-1">
                <span class="flex flex-col items-center">
                    <h5 class="mb-6 text-white">LIÊN HỆ HỖ TRỢ</h5>
                    <span class="text-center">Liên hệ ngay bộ phận CSKH nếu cần sự hỗ trợ. Chúng tôi sẽ hỗ trợ và giải đáp yêu cầu của bạn sớm nhất có thể!</span>
                </span>
            </div>

            <div class="col-span-2 mb-4 py-2">
                <div class="grid grid-cols-1 gap-6 text-center md:flex md:flex-nowrap md:justify-around">
                    <a href="<?= $NNL->site('link_facebook') ?>" target="_blank" class="btn btn-sm btn-outline-secondary !text-white"><i
                            class="fa-brands fa-telegram"></i> TELEGRAM</a>
                    <a href="<?= $NNL->site('link_facebook') ?>" class="btn btn-sm btn-outline-secondary !text-white"><i
                            class="fa-solid fa-phone"></i> <?= $NNL->site('link_facebook') ?></a>
                </div>
            </div>


        </div>
    </div>
    
        </div>
</footer>
<!-- END: Footer For Desktop and tab -->

<div
    class="custom-dropshadow footer-bg bothrefm-0 fixed bottom-0 left-0 z-[9999] flex w-full items-center justify-around bg-white bg-no-repeat px-4 py-[12px] backdrop-blur-[40px] backdrop-filter dark:bg-slate-700 md:hidden sm:mt-5">
    <a href="/deposit">
        <div>
            <span
                class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
                <iconify-icon icon="icon-park:dollar"></iconify-icon>
            </span>
            <span class="block text-[11px] font-bold text-slate-600 dark:text-slate-300">
                Số Dư: <span class="text-red-600"><?= format_cash($getUser['money']) ?> ₫</span>
            </span>
        </div>
    </a>
    <a href="/user"
        class="footer-bg relative z-[-1] -mt-[40px] flex h-[65px] w-[65px] items-center justify-center rounded-full bg-white bg-no-repeat backdrop-blur-[40px] backdrop-filter dark:bg-slate-700">
        <div class="hrefp-[0px] custom-dropshadow relative left-[0px] h-[50px] w-[50px] rounded-full">
            <img src="<?= $NNL->site('logo') ?>" alt="" class="h-full w-full rounded-full border-2 border-slate-100">
        </div>
    </a>
           <?php if (empty($getUser)) { ?>
        <a href="/login">
        <div>
            <span
                class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
                <iconify-icon icon="icon-park:user"></iconify-icon>
            </span>
            <span class="block text-[11px] font-bold text-slate-600 dark:text-slate-300">
                Đăng Nhập
            </span>
        </div>
    </a>
      <?php } else { ?>
    <a href="/client/logout">
<span class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
<iconify-icon icon="heroicons-outline:logout"></iconify-icon>
</span>
<span class="block text-[11px] text-slate-600 dark:text-slate-300">
Đăng Xuất
</span>
</a>
  <?php } ?>
</div>
    </div>
<!-- BEGIN: footer -->
<!-- BEGIN: footer -->

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
</script>
    <script src="<?= BASE_URL('') ?>assets/theme/glightbox.js"></script>
<script src="<?= BASE_URL('') ?>public/client/js/vendor.js"></script>
<script src="<?= BASE_URL('') ?>public/client/js/lagom-app.js"></script>
<script src="<?= BASE_URL('') ?>public/client/js/whmcs-custom.min.js"></script>
<script src="<?= BASE_URL('') ?>public/client/js/block-modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<link rel="preload" as="style" href="/assets/theme/chunk-1dd66bf7.css" />
<link rel="modulepreload" href="/assets/theme/app-5ec11d30.js" />
<link rel="modulepreload" href="/assets/theme/chunk-e47d8634.js" />
<link rel="modulepreload" href="/assets/theme/chunk-12ee37c2.js" />
<link rel="modulepreload" href="/assets/theme/main-5c6b3af9.js" />
<link rel="modulepreload" href="/assets/theme/functions-21ea85ed.js" />
<link rel="stylesheet" href="/assets/theme/chunk-1dd66bf7.css" />
<script type="module" src="/assets/theme/app-5ec11d30.js"></script>
<script type="module" src="/assets/theme/main-5c6b3af9.js"></script>
<script type="module" src="/assets/theme/functions-21ea85ed.js"></script>


<script>
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.classList.remove('hidden');
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.classList.add('hidden');
}
window.gtranslateSettings = {
    "default_language": "vi",
    "native_language_names": true,
    "globe_color": "#66aaff",
    "wrapper_selector": ".gtranslate_wrapper",
    "flag_size": 28,
    "alt_flags": {
        "en": "usa"
    },
    "globe_size": 24
}
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script>
</body>

</html>