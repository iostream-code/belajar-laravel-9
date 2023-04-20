<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h2>Selamat datang {{ $name }}</h2>
    <h4>Tempat tinggal Anda di {{ $address }}</h4>
    <h4>Anda mengikuti ekstrakulikuler {{ $activity->name }}</h4>
    <h4>Pembimbing Anda adalah {{ $teacher }}</h4>

    <h3>Daftar yang mengikuti {{ $activity->name }}</h3>
    @foreach ($studentsAct as $act)
        <p>{{ $act->name }}</p>
    @endforeach

    <h3>Daftar Murid {{ $teacher }} :</h3>
    @foreach ($students as $student)
        <p>{{ $student->name }}</p>
    @endforeach

</body>

</html>
