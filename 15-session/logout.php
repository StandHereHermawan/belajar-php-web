<?php

session_start(); # Function untuk memulai session.
session_destroy(); # Function untuk menghapus session.

header('Location: /15-session/login.php');
exit();
