<?php

session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) { //jika sudah login
 //menampilkan isi session
 echo "<h1>halaman 2". $_SESSION[''] ."</h1>";
 
} 
?> 