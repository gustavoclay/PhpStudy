<?php
session_start();
session_unset();
session_destroy();

echo 'Deslogado, sessão destruida!';
echo "<br><a href=home.php>home.php</a>";