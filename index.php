<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/custom-scrol.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
require './site/controller/sitecontroller.php';
$controller = new SiteController();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$content = '';
ob_start();
switch ($page) {
    case 'home': 
        $content = $controller->home();  
        break;
    default: 
        $content = "Trang bạn yêu cầu không tồn tại.";
        break;
}
ob_end_clean();  
include './site/views/layout.php'; 
?>
<script src="js/app.js"></script>
<script src="js/add-.js"></script> 
</body>
</html>
