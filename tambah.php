<html>
    <head>
        <title>
            CRUD PHP dan MYSQLI
        </title>
    </head>
    <body>
        <h2>CRUD DATA DOSEN</h2>
        <br>
        <a href="index.php">KEMBALI</a>
        <br>
        <br>
        <h3>TAMBAH DATA DOSEN</h3>
        <form action="tambah_aksi.php" method="post">
            <table>
                <tr>
                    <td>NIDN</td>
                    <td><input type="text" name="nidn"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td><input type="text" name="nama_dosen"></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>