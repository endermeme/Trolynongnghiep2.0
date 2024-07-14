<?php
include('header.php');

?>

<!-- Thêm script SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if (isset($_POST['muaban'])) {
    // Kiểm tra nếu dữ liệu được gửi đi
    if (
        isset($_POST['name']) && isset($_POST['number']) &&
        isset($_POST['soluong']) && isset($_POST['image']) &&
        isset($_POST['content'])
    ) {
        // Thực hiện insert vào CSDL
        $isInsert = $NNL->insert("muaban", [
            'name' => $_POST['name'],
            'number' => $_POST['number'],
            'soluong' => $_POST['soluong'],
            'image' => $_POST['image'],
            'content' => $_POST['content'],
            'status' => '1', // Lưu ý: '1' là một chuỗi, không phải mảng
            'create_date' => gettime()
        ]);

        if ($isInsert) {
            // Nếu insert thành công, hiển thị thông báo thành công
            echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Lưu thành công",
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function() {
                        window.location.href = ""; // Điều hướng hoặc làm gì đó
                    });
                 </script>';
        } else {
            // Nếu không thành công, hiển thị thông báo lỗi
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Lỗi khi lưu dữ liệu",
                        text: "Xin vui lòng thử lại sau",
                    });
                 </script>';
        }
    } else {
        // Nếu thiếu dữ liệu
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Thiếu thông tin",
                    text: "Vui lòng điền đầy đủ thông tin",
                });
             </script>';
    }
}
?>
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Mua bán</a></li>
                            <li class="breadcrumb-item" aria-current="page">Đăng sản phẩm mua bán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <h2>Đăng bán sản phẩm</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="login-form" method="post" id="sendsp" role="form">
                            <input type="hidden" name="action" value="login" readonly>
                            <div class="custom-form">
                                <div class="form-group">
                                    <label for="horizontal-form-1" class="bold-title">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name" placeholder="Táo xanh" required>
                                </div>
                                <div class="form-group">
                                    <label for="horizontal-form-1" class="bold-title">Số lượng</label>
                                    <input type="text" class="form-control" name="soluong" placeholder="50 quả/15kg/100 cân/69 tấn..." required>
                                </div>
                                <div class="form-group">
                                    <label for="horizontal-form-1" class="bold-title">Số điện thoại liên hệ</label>
                                    <input type="tel" class="form-control" id="number" name="number" placeholder="0987654321" pattern="[0-9]{10}" required>
                                </div>

                                <div class="form-group">
                                    <label for="horizontal-form-1" class="bold-title">Ảnh mô tả</label>
                                    <input type="file" id="uploadInput" class="form-control" accept="image/*">
                                    <input type="text" class="form-control" name="image" id="image" class="form-control" placeholder="Link Ảnh" required>
                                    <div id="message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="horizontal-form-1" class="bold-title">Mô tả sản phẩm</label>
                                    <input type="text" class="form-control" name="content" placeholder="Táo tươi không thuốc trừ sâu" required>
                                </div>
                                <div>
                                    <br>
                                    <button type="submit" name="muaban" class="btn btn-primary">Đăng Ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
    </div>
</div>

<script>
    $(function () {
        $("#example").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });

</script>
<script>
    $(function () {
        $('#summernote').summernote({
            placeholder: 'Điền nội dung',
            tabsize: 2,
            height: 400,
        });
    })
</script>
<script type="text/javascript">
    const uploadInput = document.getElementById('uploadInput');
    const shortenedUrlInput = document.getElementById('image');

    uploadInput.addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (file) {
            const formData = new FormData();
            formData.append('image', file);

            const clientId = 'd32a28252795ab8';

            fetch('https://api.imgur.com/3/image', {
                method: 'POST',
                headers: {
                    'Authorization': `Client-ID ${clientId}`,
                },
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.data.link) {
                        document.getElementById('message').innerHTML = '<br><p class="text-success"> Ảnh đã được xử lí thành công! </p>';
                        shortenedUrlInput.value = data.data.link;
                    }
                })

            document.getElementById('message').innerHTML = '<br><b style="color: red;"> Ảnh đang được xử lí, vui lòng chờ trong giây lát </b>';
        }
    });
</script>
<?php
include("footer.php");
?>