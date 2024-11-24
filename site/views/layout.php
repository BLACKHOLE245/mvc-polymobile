<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class="header">
            <?php include 'header.php'; ?> 
        </header>
    <div class="container-main"> 
        <main>
        <?php include 'banner.php'; ?>
        <?php echo isset($content) ? $content : 'Nội dung không khả dụng.'; ?> 
        </main>
    </div>
        <footer>
            <?php include 'footer.php'; ?> 
        </footer>
    </div>
</body>
</html>
