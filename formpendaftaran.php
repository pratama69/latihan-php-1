<html>
<head><title>Form Register</title></head>
<body>
    <FORM ACTION="register2.php" METHOD="POST" NAME="input">
       <h2>Form Pendaftaran</h2>
        No Pendaftaran : <input type="text" name="nopen"><br>
        NISN : <input type="text" name="nisn"><br>
        Nama : <input type="text" name="nama"><br>
        Alamat : <input type="alamat" name="alamat"><br>
        Tempat Lahir : <input type="tela" name="tela"><br>
        Tanggal Lahir : <input type="tgl" name="tgl"><br>
        Asal Sekolah : <input type="sklh" name="sklh"><br>
        Jenis Kelamin :<input type="checkbox" name="jk" value="Laki-laki" cheked>Laki-Laki<br>
                            <input type="checkbox" name="jk" value="Perempuan" cheked>Perempuan<br>
        <select value="Jurusan :">
         <option value="rpl">RPL</option>
                  <option value="tkr">TKR</option>
                  <option value="tsm">TSM</option>
        </select>
        Nama Ayah : <input type="text" name="namaayh"><br>
        Pekerjaan Ayah : <input type="text" name="krjayh"><br>
        Nama Ibu :<input type="text" name="namaibu"><br>
        Pekerjaan Ibu : <input type="text" name="krjibu"><br>
        Hobi : <input type="checkbox" name="msk" value="Masak">Masak<br>
               <input type="checkbox" name="mkn" value="Makan">Makan<br>
               <input type="checkbox" name="brng" value="Berenang">Berenang<br>
               <input type="checkbox" name="tdr" value="Tidur">Tidur<br>
               <input type="checkbox" name="ngding" value="Ngoding">Ngoding<br>
        Agama : <br><input type="agama" name="agama"><br>

        
       <input type="submit" name="Input" value="Input">
       <input type="reset" name="reset" value="Reset">
    </FORM>
</body>

</html>