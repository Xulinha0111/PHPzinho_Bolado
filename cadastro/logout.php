<?php
session_start();
session_destroy();
echo "<header('location: login.php'>";
echo "<meta http-equiv='refresh' content='0'; url=login.php'>";
?>