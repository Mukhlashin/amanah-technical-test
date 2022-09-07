@extends('config')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quatro</title>
</head>
<body>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Body</th>
            <!-- <th width="280px">Action</th> -->
        </tr>
        @foreach ($body_array as $objects)
        <tr>
            <td>{{ $objects->id }}</td>
            <td>{{ $objects->title }}</td>
            <td>{{ $objects->body }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>