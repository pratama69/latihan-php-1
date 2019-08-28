<?php
if(isset($_POST['hitung'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $namabrng = $_POST['nmabrng'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];
            $deskripsi = $_POST['deskripsi'];
            $Tanggal = $_POST['tglpmbli'];
			$qty = $_POST['qty'];
            $total = $harga*$qty;
              echo"
				<table border='1'>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
    ?>