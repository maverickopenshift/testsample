<?php

$mysqli = mysqli_connect(
    getenv('MARIADBCONSYS_SERVICE_HOST'), 
    'consys', 
    'consys2017!', 
    'consys',
    getenv('MARIADBCONSYS_SERVICE_PORT')
);

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($mysqli) . PHP_EOL;

$res = $mysqli->query("SELECT * FROM pegawai ORDER BY id ASC LIMIT 10");

echo "Reverse order...\n";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['id'] . "<br>";
    echo " nama = " . $row['v_nama_karyawan'] . "<br>";
}

mysqli_close($mysqli);
