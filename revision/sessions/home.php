<?php
session_start();
echo $_SESSION['cor'].'<br>'.$_SESSION['carro'].'<br>'.session_id();

echo "<br><a href=logout.php>logout.php</a>";
