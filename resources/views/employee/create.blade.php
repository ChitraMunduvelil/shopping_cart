<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('employee.store')}} " method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name= "name" id="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>