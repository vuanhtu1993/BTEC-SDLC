<?php

$action = $_GET['action'] ?? "/";


// match ($action) {
//     "/" => require_once "../views/admin/dashboard.php",
// };

switch ($action) {
    case "/":
        echo "tesstttttttt";
        include '../views/admin/dashboard.php';
        break;
    default:
        echo "Action not found";
}
