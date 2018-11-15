<?php 
 
$koneksi = mysqli_connect("localhost","root","","db_sireg");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


$id_regulasi=$this->uri->segment(3);
$result = mysqli_query($koneksi, "SELECT * FROM regulasi where ID ='$id_regulasi'");
$row=mysqli_fetch_array($result);

$judul = $row['JUDUL'];
$menimbang = $row['MENIMBANG'];
$mengingat = $row['MENGINGAT'];
$norma = $row['NORMA'];
$pasal = $row['PASAL'];
$pengesahan = $row['PENGESAHAN'];

$rpl_1=str_replace("@", "'", $judul);
$rpl_2=str_replace('#', '"', $rpl_1);

$rpl_1_m=str_replace("@", "'", $menimbang);
$rpl_2_m=str_replace('#', '"', $rpl_1_m);

$rpl_1_mg=str_replace("@", "'", $mengingat);
$rpl_2_mg=str_replace('#', '"', $rpl_1_mg);

$rpl_1_n=str_replace("@", "'", $norma);
$rpl_2_n=str_replace('#', '"', $rpl_1_n);

$rpl_1_p=str_replace("@", "'", $pasal);
$rpl_2_p=str_replace('#', '"', $rpl_1_p);
$pasalResult = strip_tags($rpl_2_p, "<p><span><div>");

$rpl_1_png=str_replace("@", "'", $pengesahan);
$rpl_2_png=str_replace('#', '"', $rpl_1_png);

echo "<div style='width:100%;' align='center'><img src='".base_url()."assets/images/garuda.png'><br><br>BUPATI MALANG
<br>PROVINSI JAWA TIMUR<br><br></div>";

echo $rpl_2."<br> <div style='width:100%'><div style='width:20%;float:left;padding-top:17px;'><span>MENIMBANG</span>  <span>:</span> </div><div style='width:80%;float:right'>".$rpl_2_m."</div></div>";

echo "<div style='width:100%'><div style='width:20%;float:left;padding-top:17px;'><span>MENGINGAT</span>  <span>:</span> </div><div style='width:80%;float:right'>".$rpl_2_mg."</div></div>";

echo "<div style='width:100%'>".$rpl_2_n."</div>";

echo "<div style='width:100%'><div style='width:20%;float:left;padding-top:17px;'></div><div style='width:80%;float:right'>".$pasalResult."</div></div>";

?>
