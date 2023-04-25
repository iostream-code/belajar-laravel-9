<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
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
                <td>
                    <a href="{{ route('show', $student->id) }}">
                        {{ $student->name }}
                    </a>
                </td>
                <td>{{ $student->score }}</td>
                <td>
                    <form action="{{ route('edit', $student) }}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                    <form action="{{ route('delete', $student) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <br>

    Current page: {{ $students->currentPage() }} <br>
    Total page: {{ $students->total() }} <br>
    Data per page: {{ $students->perPage() }} <br>

    {{ $students->links('pagination::bootstrap-4') }}
</body>

</html>
