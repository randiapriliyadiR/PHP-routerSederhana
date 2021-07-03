<?php
switch ($link) {
    case '/' :
    case '' :
        require __DIR__ . '/tampilan/index.php';
        break;
    case '/about' :
        require __DIR__ . '/tampilan/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/tampilan/404.php';
        break;
}
?>