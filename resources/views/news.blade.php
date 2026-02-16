<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>News | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif; }

        body {
            background-color: #f5f5f5;
        }

        header {
            background-color: #eaaedc;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        nav {
            background-color: #b6d1eb;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .news-section {
            padding: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .news-section h2 {
            margin-bottom: 20px;
            color: #ddb7d6;
        }

        .news-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            overflow: hidden;
            display: flex;
            transition: 0.3s;
        }

        .news-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .news-card img {
            width: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 15px 20px;
            flex: 1;
        }

        .news-content h3 {
            margin-bottom: 5px;
            color: #333;
        }

        .news-content .date {
            font-size: 12px;
            color: #888;
            margin-bottom: 10px;
        }

        .news-content p {
            font-size: 14px;
            color: #555;
        }

        .news-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #b2ccf8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .news-content a:hover {
            background-color: #bdcce7;
        }

        footer {
            text-align: center;
            padding: 15px 0;
            font-size: 12px;
            color: #888;
            margin-top: 30px;
        }

    </style>
</head>
<body>

    <header>
        <h1>Perpustakaan Digital</h1>
        <p>Berita & Update Terbaru</p>
    </header>

    <nav>
        <a href="/home">Home</a>
        <a href="/news">News</a>
        <a href="/buku">Buku</a>
        <a href="/loginuser">Login</a>
    </nav>

    <section class="news-section">
        <h2>Berita Terbaru</h2>

        <div class="news-card">
            <img src="https://i.pinimg.com/736x/2b/dc/71/2bdc7102a6bcd1b83c097f9a1f41738b.jpg" alt="Berita 1">
            <div class="news-content">
                <h3>Perpustakaan Digital Tambah Koleksi Buku</h3>
                <div class="date">12 Februari 2026</div>
                <p>Koleksi buku terbaru telah tersedia di perpustakaan digital, termasuk buku IT, programming, dan literatur umum.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="news-card">
            <img src="https://i.pinimg.com/736x/b8/c0/a8/b8c0a83cc40a3187f91037b27cb1ea9b.jpg" alt="Berita 2">
            <div class="news-content">
                <h3>Workshop Online: Tips Membaca Cepat</h3>
                <div class="date">10 Februari 2026</div>
                <p>Perpustakaan digital mengadakan workshop online untuk meningkatkan kemampuan membaca cepat bagi anggota.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="news-card">
            <img src="https://i.pinimg.com/736x/93/e0/a7/93e0a7145fed0c27bb018e719017b344.jpg" alt="Berita 3">
            <div class="news-content">
                <h3>Peminjaman Buku Semester Genap Dibuka</h3>
                <div class="date">5 Februari 2026</div>
                <p>Anggota dapat mulai meminjam buku semester genap dengan catatan jadwal peminjaman mengikuti protokol perpustakaan.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>

    </section>

    <footer>
        © 2026 Perpustakaan Digital Milik kaluna
    </footer>

</body>
</html>