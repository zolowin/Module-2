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
        <td><a href="{{ route('tasks.edit', $value->id) }}">Sửa</a>
        <a href="{{ route('tasks.delete',  $value->id) }}" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
    </tr>
@endforeach
