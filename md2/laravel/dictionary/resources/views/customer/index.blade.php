<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($customer as $key => $item )
    <table>
        <tr>
            <td>STT</td>
            <td>Tên</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
        </tr>
    </table>

@endforeach


</body>
</html>
