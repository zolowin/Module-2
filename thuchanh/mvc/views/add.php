<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h3>Thêm mới sản phẩm</h3>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên Sản phẩm</label>
                    <input type="text" class="form-control" name="name"  placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Giá tiền</label>
                    <input type="number" class="form-control" name="price" placeholder="Nhập giá tiền" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" class="form-control" name="describes" placeholder="Nhập mô tả" required>
                </div>
                <div class="form-group">
                    <label>Nhà Sản Xuất</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Nhập nhà sản xuất" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>

