<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #ee1919;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Tambahkan gaya untuk alert */
        .alert {
            display: none;
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
        }
        h2 {text-align: center}
    </style>

    <!-- Tambahkan script JavaScript di sini -->
    <script>
        // Fungsi untuk menampilkan alert "tersimpan"
        function showSavedAlert() {
            var alert = document.getElementById("saved-alert");
            alert.style.display = "block";
            setTimeout(function() {
                alert.style.display = "none";
            }, 3000); // Menyembunyikan alert setelah 3 detik
        }
    </script>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <div id="saved-alert" class="alert">Data berhasil disimpan!</div>
    <form action="{{ route('mahasiswa.store') }}" method="post" onsubmit="showSavedAlert()">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required>

        <label>Fakultas</label>
        <input type="text" name="fakultas" required>

        <label>Total SKS</label>
        <input type="text" name="total_sks" required>

        <label>IPK</label>
        <input type="text" name="ipk" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
