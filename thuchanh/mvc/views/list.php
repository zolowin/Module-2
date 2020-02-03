<h2>Danh sách khách hàng</h2>
<a href="./add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Describes</th>
        <th>Publisher</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->describes ?></td>
        <td><?php echo $product->publisher ?>
            <?php endforeach; ?>
    </tbody>
</table>