<?php 
 
$koneksi = mysqli_connect("localhost","root","","db_sireg");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


$id_regulasi=$this->uri->segment(3);
$result = mysqli_query($koneksi, "SELECT * FROM regulasi where ID ='$id_regulasi'");
$row=mysqli_fetch_array($result);

$pengesahan = $row['PENGESAHAN'];


$rpl_1_png=str_replace("@", "'", $pengesahan);
$rpl_2_png=str_replace('#', '"', $rpl_1_png);

echo "<div style='width:100%'>".$rpl_2_png."</div>";

?>
