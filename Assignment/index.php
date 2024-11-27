<?php

// Model
require_once './models/connectDB.php';
require_once './configs/env.php';

// Điều hướng
$mode = $_GET['mode'] ?? 'client';

if ($mode == 'client') {
    require_once('./controllers/client.php');
} else if ($mode == 'admin') {
    require_once('./controllers/admin.php');
}
