<html>
<head><title>Tugas Form</title></head>
<body>
    <FORM ACTION="form1.php"  METHOD="POST" NAME="input">
        <fieldset>
        <legend>Silahkan Isi Data dengan benar</legend>
        <table>
        <tr>
        <td valign="top">Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td><br>
        </tr>
       
        <tr>
        <td valign="top">Alamat</td>
        <td>:</td>
        <td><textarea cols="22" rows="3" ></textarea></td><br>
        </tr>

      <tr>
        <td valign="top">Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nmabrng"></td><br>
        </tr>

      <tr>
        <td valign="top">Harga</td>
        <td>:</td>
        <td><input type="text" name="hrgabrng"></td><br>
        </tr>
 
       <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td><input type="text" name="jmlh"></td>
        </tr>

        <tr>
        <td valign="top">Deskripsi</td>
        <td>:</td>
        <td><textarea cols="22" rows="3" ></textarea></td><br>
        </tr>

        <tr>
        <td>Tanggal Pembelian</td>
        <td>:</td>
        <td><input type="Date"></td>
        </tr>
        

        <tr>
        <td valign="top">Total Harga</td>
        <td>:</td>
        </tr>

        <tr>
        <td valign="top">Diskon</td>
        <td>:</td>
        </tr>

        <tr>
        <td valign="top">Total Bayar</td>
        <td>:</td>
        </tr>

        </table>
        <input type="submit" name="Daftar" value="Daftar">
        <input type="reset" name="kembali" value="Kembali">
        </fieldset>
    </FORM>
</body>
</html>