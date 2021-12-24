<?php
    $url = "http://localhost/pwd/lp10/getdatamhs.php";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);
    foreach ($result as $r) {
        echo "<p>";
        echo "NIM :".$r->nim."<br/>";
        echo "Nama :".$r->nama."<br/>";
        echo "Gender :".$r->jkel."<br/>";
        echo "Alamat :".$r->alamat."<br/>";
        echo "Tgl Lahir :".$r->tgllhr."<br/>";
        echo "</p>";
    }
?>
<form action="cari_mhs.php" method="get">
<input type="submit" value="Cari Mahasiswa">
</form>