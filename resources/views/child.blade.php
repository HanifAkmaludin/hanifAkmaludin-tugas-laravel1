@php
    $users = [
        [
            'nama' => 'Ucup',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang ucup',
            'active' => true,
            'alamat' => 'jl.dago',
            'role' => 'Admin'
        ],
        [
            'nama' => 'Jono',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang jono',
            'active' => true,
            'alamat' => 'jl.biru',
            'role' => 'Admin'
        ],
        [
            'nama' => 'fulan',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang fulan',
            'active' => false,
            'alamat' => 'jl.koneng',
            'role' => 'Admin'
        ],
        [
            'nama' => 'fulanah',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'neng fulanah',
            'active' => true,
            'alamat' => 'jl.babakan',
            'role' => 'User'
        ],
        [
            'nama' => 'ciman',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang ciman',
            'active' => false,
            'alamat' => 'jl.dago',
            'role' => 'User'
        ],
        [
            'nama' => 'ari',
            'foto' =>'https://picsum.photos/200',
            'bio' => 'mang ari',
            'active' => true,
            'alamat' => 'jl.kondang',
            'role' => 'User'
        ],
        [
            'nama' => 'maman',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang maman',
            'active' => true,
            'alamat' => 'jl.kopo',
            'role' => 'User'
        ],
        [
            'nama' => 'atang',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang atang',
            'active' => false,
            'alamat' => 'jl.cipaku',
            'role' => 'User'
        ],
        [
            'nama' => 'Agus',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang Agus',
            'active' => false,
            'alamat' => 'jl.cipaku',
            'role' => 'User'
        ],
        [
            'nama' => 'rifal',
            'foto' => 'https://picsum.photos/200',
            'bio' => 'mang rifal',
            'active' => true,
            'alamat' => 'jl.bojong',
            'role' => 'User'
        ]
    ];

    $filter = [
        'active' => false,
        'role' => 'Admin',
    ];

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="@include('icon')">
    <title>@include('title')</title>
</head>
<body>
    <h1 style="text-align: center">Daftar</h1>
    <div style="display: flex; flex-wrap: wrap;">
        @foreach ($users as $user)
            @includeWhen( $user['active'] === $filter['active'] && $user['role'] === $filter['role'] , 'cards', [
                'user' => $user
            ])
        @endforeach
    </div>
</body>
</html>