<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran</title>
    <script src="validasi.js"></script>
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form action="cek.php" method="post" name="frmdaftar" onsubmit="cekform();">
    Nama Lengkap : <input type="text" name="txtnama" id="txtnama"> <br>
    Olahraga Favorite : <select name="olahraga" id="olahraga">
        <option value="" selected="selected">== Pilih Olahraga ==</option>
                <option value="sepakbola">Sepakbola</option>
                <option value="bulutangkis">Bulu Tangkis</option>
                <option value="tenis">Tenis</option>
                <option value="Tenismeja">Tenis Meja</option>
    </select>
    <br>
    <input type="submit" name="tblSimpan" value="Simpan">
    <input type="reset" name="tblReset" value="Reset">
    </form>
</body>
</html>