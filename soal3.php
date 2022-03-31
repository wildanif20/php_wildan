<?php
$con = new mysqli("localhost","root","","testdb",3306,null);
if($con->connect_error){
    die("Connection failed: ". $con->connect_error);
}

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if($_POST == null){
    $re1 = $con->query('select nama, alamat, hobi.hobi
    from hobi
    inner join person p on hobi.person_id = p.id');
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>Alamat</th>";
    echo "<th>Hobi</th>";
    echo "</tr>";
    while ($row = $re1->fetch_array()){
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['alamat']}</td>";
        echo "<td>{$row['hobi']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
//    $sql = "select person.nama, hobi, person.alamat from person inner join hobi h on person.id = h.person_id where nama like '{$nama}' and hobi like '$alamat'";
    $rel2 = $con->query("select person.nama, hobi, person.alamat from person inner join hobi h on person.id = h.person_id where nama like '{$nama}' and alamat like '$alamat'");
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>Alamat</th>";
    echo "<th>Hobi</th>";
    echo "</tr>";
    while ($row2 = $rel2->fetch_array()){
        echo "<td>{$row2['nama']}</td>";
        echo "<td>{$row2['alamat']}</td>";
        echo "<td>{$row2['hobi']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}


echo "</br>";
echo "<form action='soal3.php' method='post'>";
echo "Nama : <input type='text' name='nama'>";
echo "</br>";
echo "Alamat :<input type='text' name='alamat'>";
echo "</br>";
echo "<button type='submit'> Cari</button>";
echo "</form>";



