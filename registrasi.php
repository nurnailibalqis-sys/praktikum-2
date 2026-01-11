<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffe6f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 420px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px 28px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.2);
            border: 2px solid #ffb6d9;
        }
        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #b4005a;
        }
        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;                 
            padding: 10px;
            border: 2px solid #ff99cc;
            border-radius: 8px;
            margin-top: 5px;
            font-size: 14px;
            background: #fff0f7;
            transition: 0.3s;
            box-sizing: border-box;       
        }
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #ff4da6;
            background: #ffe6f2;
            outline: none;
        }
        button {
            width: 100%;                
            padding: 12px;
            background-color: #ff66b3;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
            box-sizing: border-box;
        }
        button:hover {
            background-color: #ff1a8c;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Registrasi Mahasiswa Baru</h2>
    <form action="proses_registrasi.php" method="post">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>
        <label>NIM</label>
        <input type="text" name="nim" required>
        <label>Program Studi</label>
        <select name="prodi" required>
            <option value="">-- Pilih Prodi --</option>
            <option>Teknik Informatika</option>
            <option>Sistem Informasi</option>
            <option>Manajemen Informatika</option>
            <option>Teknik Komputer</option>
            <option>Desain Komunikasi Visual</option>
        </select>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Alamat</label>
        <textarea name="alamat" rows="4" required></textarea>
        <button type="submit">Daftar</button>
    </form>
</div>
</body>
</html>