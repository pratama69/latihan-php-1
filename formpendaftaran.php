<html>
<head><title>Form Pendaftaran</title></head>
<body>
    <FORM ACTION="formpendaftaran2.php" METHOD="POST" NAME="input">
       <h2>Form Pendaftaran</h2>
       <table>
        <tr>
        <td>No Pendaftaran</td>
        <td>:</td>
        <td><input type="text" name="nopen"></td>
        </tr>
       
       <tr>
        <td>NISN</td>
        <td>:</td>
        <td><input type="text" name="nisn"></td>
        </tr>
    
        <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text"></td>
        </tr>
        
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea cols="22" rows="3" ></textarea></td>
        </tr>
        
        <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text"></td>
       </tr>

        <tr>
        <td>Tanggal Lahir</td>
        <td><input type="Date"></td>
        <td>:</td>
        </tr>
        
        <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td><input type="text" name="sklh"></td>
        </tr>
        
        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio"/>Laki-Laki
        <input type="radio"/>Perempuan</td>
       </tr>

       <tr>
       <td valign="top">Jurusan</td>
        <td>:</td>
      <td>        
       <select name="jurusanid" class="required" title="harus diisi">
       <option value="">- Pilih Jurusan -</option>
       <option value="rpl">RPL</option>
       <option value="tkr">TKR</option>
       <option value="tsm">TSM</option>

      </select>        
      </td>
      </tr>

      <tr>
        <td>Nama Ayah</td>
        <td>:</td>
        <td><input type="text" name="namaayh"></td>
        </tr>
        
        <tr>
        <td>Pekerjaan Ayah</td>
        <td>:</td>
        <td><input type="text" name="krjayh"></td>
        </tr>
        
        <tr>
        <td>Nama Ibu</td>
        <td>:</td>
        <td><input type="text" name="namaibu"></td>
        </tr>
        
        <tr>
        <td>Pekerjaan Ibu</td>
        <td>:</td>
        <td><input type="text" name="krjibu"></td>
        </tr>
        
         <tr>
       <td valign="top">Agama</td>
        <td>:</td>
      <td>        
       <select name="agamaid" class="required" title="harus diisi">
       <option value="">- Pilih Agama -</option>
       <option value="rpl">ISLAM</option></option>
       <option value="tkr">KRISTEN</option>
       <option value="tsm">BUDHA</option>

      </select>        
      </td>
      </tr>

        <tr>
        <td valign="top">Hobi</td>
        <td>:</td>
        <td>
         <input type="checkbox" name="msk">Masak<br>
         <input type="checkbox" name="mkn">Makan<br>
         <input type="checkbox" name="brng">Berenang<br>
        </td>
        </tr>
        </table>
       <input type="submit" name="Input" value="Input">
       <input type="reset" name="reset" value="Reset">
    </FORM>
</body>

</html>