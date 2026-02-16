<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: 'Comic Sans MS', cursive, sans-serif; }

        body {
            margin: 0;
            height: 100vh;
            background-image: url('https://i.pinimg.com/1200x/70/45/a5/7045a5d2381cc470ced04eb6a6db075d.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        header {
            text-align: center;
            background: linear-gradient(to right, rgba(255, 105, 180, 0.7), rgba(138, 43, 226, 0.7));
            padding: 40px 10px;
            border-radius: 30px;
            color: white;
            backdrop-filter: blur(1px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 40px;
            margin-bottom: 15px;
            text-shadow: 2px 2px #ffb6c1;
        }

        header p {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 25px;
        }

        .btn-home {
            text-decoration: none;
            background-color: #ff85a2;
            color: white;
            padding: 15px 30px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-home:hover {
            background-color: #ff4d6d;
            transform: rotate(-3deg) scale(1.1);
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Perpustakaan Digital</h1>
        <p>Klik tombol di bawah untuk masuk ke Home dan mulai petualangan bukumu! 😄📚</p>
        <a href="/home" class="btn-home">Masuk ke Home</a>
    </header>

</body>
</html>