<html>
<head>
<!-- meta refresh yang merefresh halaman ini tiap 10 detik untuk periksa waktu -->
<meta http-equiv='refresh' content='10;URL=index.php' />
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
$time=date('H:i');

//silahkan set/ganti WAKTU ALARM berbunyi:
$alarm= "17:32";

//menunjukan WAKTU AKTUAL
echo"Saat ini pukul:<br/> $time <br/><br/>
Alarm akan berbunyi pada pukul: $alarm";

 

//jika WAKTU AKTUAL = WAKTU ALARM , maka halaman redirect ke alarm.php
if ($time == "$alarm") {
echo"<meta http-equiv='refresh' content='0;URL=notifikasi.php' />";
} else {
// jika belum waktunya, halaman tetap merefresh memeriksa waktu.
echo"<br/>Menunggu Alarm berbunyi";
}

?>
</body>
</html>