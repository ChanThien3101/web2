
<?php
// $con = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_DATABASE'), 3306);
// if ($con->connect_error) {
    // die("Connection failed: " . $con->connect_error);
// }

$host = 'localhost'; // Vì đang chạy trên localhost
$user = 'ankan'; // Tên người dùng của database
$password = '310102'; // Mật khẩu của database
$database = 'web2'; // Tên database

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connection successful!";
?>
