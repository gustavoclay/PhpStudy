<?php

session_start();

$_SESSION['cor'] = 'verde';
$_SESSION['carro'] = 'veloster';

echo $_SESSION['cor'].'<br>'.$_SESSION['carro'].'<br>'.session_id();

echo "<br><a href=home.php>home.php</a>";
