<html>

<head>
    @vite('resources/css/app.css')

    <title>Maakanan</title>
</head>

<body>
    <h1>Daftar Makanan</h1>
    <div class="bg-red-200">vfdhgdgfdgfgf</div>
    <ul>
        @foreach ($makanans as $makanan)
            <img src={{ $makanan->gambar }} widht="100" />

            <li>{{ $makanan->nama }}- Rp. {{ number_format($makanan->harga) }} </li>
        @endforeach
    </ul>
</body>

</html>
