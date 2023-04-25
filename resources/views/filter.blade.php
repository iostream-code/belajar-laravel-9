<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter Page</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->score }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
