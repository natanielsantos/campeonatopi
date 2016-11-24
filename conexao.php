<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mydb', '3306');
if (!$conn) {
    die('Erro ao conectar com o banco: ' . mysqli_connect_error());
}else{
    echo 'Tudo ok!';
}

//mysqli_close($conn);