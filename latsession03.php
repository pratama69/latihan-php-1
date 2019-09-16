<?php
/********************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada.
*********************************************************/
session_start();
if (isset($_SESSION['login'])) {
 unset ($_SESSION);
 session_destroy();
 //
 echo "<h1>halaman 3</h1>";

    
 echo "<p>Klik <a href='latsession01.php'>di sini</a> untuk
LOGIN kembali</p>";
}
?> 