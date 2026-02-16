<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Anggota | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif; }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #edb1db, #76acd0);
        }
        
        .btn-kembali {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #951c73;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            background-color: #862571;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #f49fe3;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .login-container button {
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background-color: #eeb8f3;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-container button:hover {
            background-color: #ffa9f3;
        }

        .login-container .links {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-container .links a {
            text-decoration: none;
            color: #9d258f;
            margin: 0 5px;
        }

        .login-container .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<a href="/home" class="btn-kembali">← Kembali ke Home</a>

    <div class="login-container">
        <h2>Login Anggota</h2>
        <form action="dashboard.html" method="POST">
            <input type="text" name="username" placeholder="Username atau Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="links">
            Belum punya akun? <a href="/userregister">Register</a> | <a href="/adminlogin">Login Admin</a>
        </div>
    </div>

</body>
</html>