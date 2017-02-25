<?php 
	


$bobot = array(0.35, 0.25, 0.25, 0.15);
$jumBobot = array_sum($bobot);
echo "<h3>Bobot Awal</h3>";
echo "<table border=1 style='border-collapse:collapse; border:solid 1px #000' width=300><tr><td>Bobot (w)</td>";
for($i=0; $i<4; $i++)
    echo "<td>$bobot[$i]</td>";
echo "</tr></table>";  
//Perbaikan bobot
//Simpan di array newBobot
$newBobot = array();
echo "<h3>Bobot Baru</h3>";
echo "<table border=1 style='border-collapse:collapse; border:solid 1px #000' width=300><tr><td>Bobot (W new)</td>";
for($i=0; $i<4; $i++){
    $newBobot[$i] = $bobot[$i] / $jumBobot;
    echo "<td>$newBobot[$i]</td>";
}
echo "</tr></table>"; 


//Lakukan Normalisasi dengan rumus pada langkah 2
//Hitung Normalisasi tiap Elemen
$con = mysqli_connect('localhost', 'root', '', 'spkwp');
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQLi: "; mysqli_connect_error();
	}
	else{
		echo "berhasil";
	}

//Buat tabel untuk menampilkan hasil
echo "<H3>Matrik Normalisasi</H3>
<table width=300 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
    <tr>
        <td>No</td><td>Nama</td><td>Nilai S</td>
    </tr>
";
$no = 1;
$i = 0;
//Buat variabel S array
$normS = array();

$result = mysqli_query($con, "SELECT * FROM tbmatrik");
/*$row = mysqli_fetch_array($result, MYSQLI_ASSOC);*/

while ($dt2 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//Hitung S per baris
    $normS[$i] = pow($dt2['Kriteria1'], $newBobot[0]) * pow($dt2['Kriteria2'], $newBobot[1]) * pow($dt2['Kriteria3'], $newBobot[2]) * pow($dt2['Kriteria4'], $newBobot[3]);
    ?> 

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dt2['idCalon']; ?></td>
        <td><?php echo round($normS[$i],2); ?></td>
    </tr>

<?php
$no++;
$i++;
}
echo "</table>";

//Proses perangkingan dengan rumus langkah 3
//Jumlahkan Terlebih dahulu nilai S
$jums = round(array_sum($normS),2);
$sql3 = mysqli_query($con, "SELECT * FROM tbmatrik");
//Buat tabel untuk menampilkan hasil
echo "<H3>Perangkingan</H3>
Nilai Sum S = $jums <br>";

echo "
<table width=300 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
    <tr>
        <td>No</td><td>Nama</td><td>Rangking</td>
    </tr>
";
$no = 1;
$i=0;
//Kita gunakan rumus (s/ sum(s))
while ($dt3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC)) {

    
     ?> 

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dt3['idCalon']; ?></td>
        <td><?php echo round($normS[$i]/ $jums,2); ?></td>
    </tr>


<?php
$no++;
$i++;
}
echo "</table>";


?>