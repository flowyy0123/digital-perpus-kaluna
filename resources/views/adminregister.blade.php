<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Admin | Perpustakaan Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family: Arial, sans-serif; }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #daa2c4, #b6cdff);
        }
        
        .btn-kembali {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #e281eb;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-kembali:hover {
            background-color: #f444e5;
        }

        .register-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #d5a6ca;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container input {
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .register-container button {
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background-color: #cf90be;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-container button:hover {
            background-color: #d4a2cf;
        }

        .register-container .links {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-container .links a {
            text-decoration: none;
            color: #8e3869;
            margin: 0 5px;
        }

        .register-container .links a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
<a href="/home" class="btn-kembali">← Kembali ke Home</a>

    <div class="register-container">
        <h2>Register Admin</h2>
        <form action="login-admin.html" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="admin_id" placeholder="Admin ID" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="links">
            sudah punya akun?? <a href="/adminlogin">Login Admin</a> | <a href="/loginuser">Login Anggota</a>
        </div>
    </div>

</body>
</html>