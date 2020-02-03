<h2>List Book</h2>
<a href="./index.php?page=add">Add</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên Sách</th>
        <th>Mô tả</th>
        <th>Trạng thái</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
        <th></th>
    <tbody>
    <?php foreach ($books as $key => $book) : ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $book->name; ?></td>
            <td><?php echo $book->describes; ?></td>
            <td><?php echo $book->status; ?></td>
            <td><a href="./index.php?page=delete&id=<?php echo $book->id; ?>" class="btn btn-warnning btn-sm">Delete</a></td>
            <td><a href="./index.php?page=edit&id=<?php echo $book->id; ?>" class="btn btn-sm">Update</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>