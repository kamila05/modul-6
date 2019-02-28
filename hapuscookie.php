<html>
<head>
 <title>Hapus Cookie</title>
</head>
<body>
<?php
setcookie('nama_cookie', 'nilai_cookie');
if (isset($_COOKIE['nama_cookie'])) {
 echo 'cookie di-set <br />';
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie',
'', time() - 1 * 3600);
echo 'cookie dihapus';
} else {
 echo 'unset';
} ?>
<p>
Tekan Refresh (F5);
</body>
</html>