<?php
//echo md5("Mikenson");

$senha = "12345";

//$senha1 = password_hash($senha, PASSWORD_DEFAULT);
//echo $senha1;

echo password_verify($senha, '$2y$10$SJAisdd7AZLIv7h7dLDvgefNqktChkzUXNaWqzxbmqXaHLXaj4mKS');
//$sql = "SELECT * FROM usauarios WHERE senha = 'croptografiada'";