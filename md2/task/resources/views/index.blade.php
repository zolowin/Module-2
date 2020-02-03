<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Tasks List
        </div>
        @if(!isset($task))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
        @endif
        @if(!isset($task))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>


                </tr>
                </thead>
                <tbody>
                @if(count($task) == 0)
                    <tr>
                        <td colspan="5"><h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5></td>
                    </tr>
                @else
                    @foreach($task as $key => $value)
                        <tr>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->content }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->due_date }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $value->image) }}" alt="" style="width: 150px">
                            </td>
                            <td><a href="{{ route('tasks.edit', $value->id) }}" >Sửa</a><br>
                            <a href="{{ route('tasks.delete',  $value->id) }}" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
        <hr>
        <a href="{{ route('home') }}">< Back</a>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
