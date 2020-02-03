<?php
if(isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Creat</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label >Book Title</label>
                    <input type="text" class="form-control" name="name" placeholder="Input Title">
                </div>
                <div class="form-group">
                    <label >Describes</label>
                    <input type="text" class="form-control" name="describes" placeholder="Input Describes">
                </div>
                <div class="form-group">
                    <label >Status</label>
                    <input type="number" class="form-control" name="status" placeholder="Input Status">
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>


