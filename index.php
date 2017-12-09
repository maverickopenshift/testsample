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

mysqli_close($mysqli);
