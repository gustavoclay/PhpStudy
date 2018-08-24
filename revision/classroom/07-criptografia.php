<?php
//senha para teste
$senha = 123456;
echo $senha."<br>";
// BASE64
$senha_base64 = base64_encode($senha);
echo "BASE64: ".$senha_base64.'<br>';
echo "BASE64: ".base64_decode($senha_base64).'<br>';
//MD5
echo "MD5: ".md5($senha).'<br>';
//MD5
echo "sha1: ".sha1($senha).'<br>';

