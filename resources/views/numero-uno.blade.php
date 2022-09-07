@extends('config')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Code</th>
			<th>QR Code</th>
        </tr>
        @foreach ($product as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->unique_code }}</td>
			<td><div class="visible-print text-center">	
            <!-- {!! QrCode::size(250)->generate($item->unique_code); !!} -->
            {{ $qrcode }}
			</div></td>
        </tr>
        @endforeach
    </table>
</body>
</html>