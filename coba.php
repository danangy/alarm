<?php $sekarang = time();
require_once('koneksi.php');
$no = 0;
$ambil_item = mysqli_query($koneksi, "SELECT * FROM data_pelanggan");                                                                       
while($data_item_terambil = mysqli_fetch_array($ambil_item)){
$no++;
$waktujatuhtempo = strtotime($data_item_terambil['tanggal']);
$diff = $sekarang - $waktujatuhtempo;
?>

<div class="ngambil_item">
<?= $no;?>

<?= 'Sisa Waktu Sebelum Item Ini Jatuh Tempo ' . floor($diff / (60 * 60 * 24)) . ' Hari'; ?>
</div>

<?php }?>