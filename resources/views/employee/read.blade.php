<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </thead>
        @foreach ($employee as $employ )
        <tr>
            <td>{{$employ->id}}</td>
            <td>{{$employ->name}}</td>
            <td>
                <a href="{{route('employee.edit',$employ->id)}}">Edit</a>
                <a href="{{route('employee.delete',$employ->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>