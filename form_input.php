<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Diri</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan:</label><br>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Pilot">Pilot</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Petani">Petani</option>
            <option value="Editor">Editor</option>
        </select><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 50000000;
                break;
            case "Pilot":
                $gaji = 150000000;
                break;
            case "Guru":
                $gaji = 6000000;
                break;
            case "Dokter":
                $gaji = 15000000;
                break;
            case "Petani":
                $gaji = 3000000;
                break;
            case "Editor":
                $gaji = 5000000;
                break;
            default:
                $gaji = 0;
        }

        echo "<h3>Hasil Data:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Tanggal Lahir: <b>$tgl_lahir</b><br>";
        echo "Umur: <b>$umur tahun</b><br>";
        echo "Pekerjaan: <b>$pekerjaan</b><br>";
        echo "Gaji: <b>Rp " . number_format($gaji, 0, ',', '.') . "</b><br>";
    }
    ?>
</body>
</html>
