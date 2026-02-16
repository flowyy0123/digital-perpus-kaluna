<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif; }

        body {
            background-color: #f5f5f5;
        }

        header {
            background-color: #aabdde;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        nav {
            background-color: #e8b0da;
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

        .books-section {
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .books-section h2 {
            margin-bottom: 20px;
            color: #a1d2e2;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .book-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
        }

        .book-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .book-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .book-card h3 {
            padding: 10px 0 5px 0;
            color: #333;
            font-size: 16px;
        }

        .book-card p {
            padding-bottom: 10px;
            font-size: 14px;
            color: #666;
        }

        .book-card a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background-color: #f3a3da;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .book-card a:hover {
            background-color: #1e3c72;
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
        <p>Daftar Buku Lengkap</p>
    </header>

    <nav>
        <a href="/home">Home</a>
        <a href="/news">News</a>
        <a href="/buku">Buku</a>
        <a href="/loginuser">Login</a>
    </nav>

    <section class="books-section">
        <h2>All Books</h2>
        <div class="books-grid">
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/d3/f5/f2/d3f5f20079c8d572d04eb3fb3b9da768.jpg" alt="Buku 1">
                <h3>Arah Kembali</h3>
                <p>Oleh: John Doe</p>
                <a href="#">Detail / Pinjam</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/33/b7/cf/33b7cf4e3e72a541abb9ea64d6583bc8.jpg" alt="Buku 2">
                <h3>Dia Lelaki Pujaanku</h3>
                <p>Oleh: Jane Smith</p>
                <a href="#">Detail / Pinjam</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/5d/d1/6e/5dd16eead74f1e7a700fd09a5128f910.jpg" alt="Buku 3">
                <h3>About You</h3>
                <p>eelmera el</p>
                <a href="#">Detail / Pinjam</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/65/6c/e2/656ce24e802016754d8a147660f5c6e4.jpg" alt="Buku 4">
                <h3>Melangkah Bersamamu</h3>
                <p>Oleh: Alice Wong</p>
                <a href="#">Detail / Pinjam</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/fd/6f/c6/fd6fc61cea4bb412128409c2249f38fe.jpg" alt="Buku 5">
                <h3>Stand By Me</h3>
                <p>Shabiena Luna</p>
                <a href="#">Detail / Pinjam</a>
            </div>
        </div>
    </section>

    <footer>
        © 2026 Perpustakaan Digital Milik Kaluna
    </footer>

</body>
</html>