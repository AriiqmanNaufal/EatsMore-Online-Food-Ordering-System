<?php
session_start();
unset($_SESSION['adminusername']);
session_destroy();
header("Location: home.html");
exit;
