<div data-url="" id="options" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 left-0 box border w-40 h-12 flex items-center justify-center z-50 mb-10 ml-20" style="margin-left:30px">
<div class="mr-4 text-slate-600 dark:text-slate-200">Giao Diện</div>
<div class="dark-mode-switcher__toggle  border"></div>
</div>
<div id="thongbao"></div>
<script>
$.ajax({
    url: "<?=BASE_URL('update.php');?>",
    type: "GET",
    dateType: "text",
    data: {},
    success: function(result) {

    }
});

$.ajax({
    url: "<?=BASE_URL('install.php');?>",
    type: "GET",
    dateType: "text",
    data: {},
    success: function(result) {

    }
});
$(function() {
    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
    $('ul li a').each(function() {
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            var href = $(this).parents().eq(0).attr('id');
            $(this).addClass('nav-link active');
            $('#' + href).addClass('nav-link active');
            Checkhref(href);
        }
    });

    function Checkhref(href) {
        $('ul li a').each(function() {
            if ($(this).attr('href') == "#" + href) {
                $(this).addClass('nav-link active');
            }
        });
    }
});
   
     function setTheme() {
      var html = document.documentElement;
      if (document.cookie.indexOf("theme=light") >= 0) {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
        document.querySelector(".dark-mode-switcher__toggle").classList.remove("dark-mode-switcher__toggle--active");
     
      } else if (document.cookie.indexOf("theme=dark") >= 0) {
        document.documentElement.classList.remove("light");
        document.documentElement.classList.add("dark");
        document.querySelector(".dark-mode-switcher__toggle").classList.add("dark-mode-switcher__toggle--active");
      } else {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
    document.querySelector(".dark-mode-switcher__toggle").classList.remove("dark-mode-switcher__toggle--active");
      }
    }

    function setThemeCookie() {
      var theme = document.documentElement.classList.contains("light") ? "dark" : "light";
      if (theme === "light") {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
      } else {
        document.documentElement.classList.remove("light");
        document.documentElement.classList.add("dark");
      }
      document.cookie = "theme=" + theme + ";path=/;max-age=" + 365 * 24 * 60 * 60;
    }

    var optionButton = document.getElementById("options");
    
    optionButton.addEventListener("click", function() {
      setThemeCookie();
    });
    
    setTheme();
</script>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places"></script>
        <script src="/resources/views/admin/dist/js/app.js"></script>
         <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
           <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
      <script src="<?=BASE_URL('public/admin/template/');?>plugins/select2/js/select2.full.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
$(function () {
    $(".select2").select2()
    $(".select2bs4").select2({
        theme: "bootstrap4"
    });
});
</script>