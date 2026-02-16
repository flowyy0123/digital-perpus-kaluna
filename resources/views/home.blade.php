<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: 'Comic Sans MS', cursive, sans-serif; }

        body {
            background-color: #fff0f5;
            color: #000000;
        }

        header {
            margin: 0;
            height: 100vh;
            background-image: url('https://i.pinimg.com/1200x/1c/ec/07/1cec0733b80cd183926daf08b17ff5d6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 35vh;
        }

        header h1 {
            font-size: 38px;
            margin-bottom: 10px;
            text-shadow: 2px 2px #f5aab5;
        }

        header p {
            font-size: 18px;
            font-style: italic;
        }

        nav {
            text-align: center;
            margin-top: -20px;
        }

        nav a {
            color: black;
            text-decoration: none;
            margin: 30px 8px;
            padding: 12px 20px;
            border-radius: 12px;
            background-color: #ff85a2;
            transition: all 0.3s;
            display: inline-block;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #ff4d6d;
            transform: rotate(-3deg) scale(1.05);
        }

        section.feature {
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        section.feature h2 {
            color: #da77b1;
            margin-bottom: 15px;
            font-size: 28px;
        }

        section.feature p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        section.feature a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #845ec2;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            margin: 5px;
            transition: 0.3s;
            font-weight: bold;
        }

        section.feature a:hover {
            background-color: #6b4bb0;
            transform: scale(1.1) rotate(2deg);
        }

        section.books-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        section.books-section h2 {
            text-align: center;
            color: #ff6ec7;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 25px;
        }

        .book-card {
            background: #fffaf0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
            position: relative;
        }

        .book-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transform: translateY(-10px) rotate(-1deg);
        }

        .book-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: 0.3s;
        }

        .book-card:hover img {
            transform: scale(1.05) rotate(2deg);
        }

        .book-card h3 {
            padding: 10px 0 5px 0;
            font-size: 16px;
            color: #845ec2;
        }

        .book-card p {
            padding-bottom: 10px;
            font-size: 14px;
            color: #ff85a2;
        }

        .book-card a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 15px;
            background-color: #ff6ec7;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .book-card a:hover {
            background-color: #ff4d6d;
            transform: rotate(-5deg) scale(1.1);
        }

        footer {
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
            color: #888;
            margin-top: 40px;
            font-style: italic;
        }

    </style>
</head>
<body>

    <header>
        <h1>Libraria</h1>
        <p>Pinjam buku sambil senyum-senyum 😄📚</p>
        <nav>
            <a href="/">Welcome</a>
            <a href="/home">Home</a>
            <a href="/news">News</a>
            <a href="/buku">Buku</a>
            <a href="/loginuser">login</a>
        </nav>
    </header>

    <section class="feature">
        <h2>Fitur Seru</h2>
        <p>Lihat buku terbaru, baca berita, dan nikmati pengalaman pinjam buku yang lucu!</p>
        <a href="/buku">Lihat Semua Buku</a>
        <a href="/news">Berita Terbaru</a>
    </section>

    <section class="books-section">
        <h2>Buku Populer</h2>
        <div class="books-grid">
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/19/e7/b2/19e7b21490babaac9fa218d7594f6e90.jpg" alt="Buku 1">
                <h3>NIGNTBOOKS</h3>
                <p>John Doe</p>
                <a href="#">Yuk Pinjam!</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/1200x/a5/ef/8e/a5ef8ebbf2141d93760becb51e2e766e.jpg" alt="Buku 2">
                <h3>The Sister Of Luna Island</h3>
                <p>Jane Smith</p>
                <a href="#">Yuk Pinjam!</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/6b/9a/23/6b9a23ccb32e71f1e006ed8941cd4c91.jpg" alt="Buku 3">
                <h3>First Love</h3>
                <p>Mark Lee</p>
                <a href="#">Yuk Pinjam!</a>
            </div>
            <div class="book-card">
                <img src="https://i.pinimg.com/736x/48/f7/b3/48f7b33d86a02a56624bfc4e2b1d2ef9.jpg" alt="Buku 4">
                <h3>Kita </h3>
                <p>Alice Wong</p>
                <a href="#">Yuk Pinjam!</a>
            </div>
        </div>
    </section>

    <footer>
        © 2026 Perpustakaan Digital Milik Kaluna
    </footer>

</body>
</html>