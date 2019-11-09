<?php

function kembalian($kembalian,$uang){
    for ($x=0; $x < count($uang) ; $x++) { 
        $y = 0;
        while($kembalian >= $uang[$x]){
            $kembalian = $kembalian-$uang[$x];
            $y++;
        }
        if($y>0){
            echo "<li>".ConfAngka($y)." pecahan ".number_format($uang[$x],0,",",".")."</li>";
        }
    }
}
$uang = [50000,20000,10000,5000,2000,1000,500]; // list kembalian
$tunai = 200000; // uang tunai
$belanja = 110500; // total belanja
$kembalian = $tunai-$belanja; // menghitung kembalian
?>

<table>
	<tr>
		<td>Total Belanja</td>
		<td>:</td>
		<td>Rp.<?=number_format($belanja,0,",",".")?>,-</td>
	</tr>
	<tr>
		<td>Tunai</td>
		<td>:</td>
		<td>Rp.<?=number_format($tunai,0,",",".")?>,-</td>
	</tr>
	<tr>
		<td>Kembalian</td>
		<td>:</td>
		<td>Rp.<?=number_format($kembalian,0,",",".")?>,-</td>
	</tr>
</table>

<h3>Daftar Kembalian</h3>
<ul style="list-style-type:disc">
	<?=kembalian($kembalian,$uang) ?>
</ul>