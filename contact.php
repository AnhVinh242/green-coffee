<?php 
    include 'components/connection.php'; 
?>
<style type="text/css">
    <?php 
    include 'style.css'; 
    ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Green Coffee - home page</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main"> 
        <div class="banner">
            <h1>contact us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a>
            <a href="about.php">about</a>

        </div>
        
        
        <?php include 'components/footer.php'; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.10/sweetalert2.min.js"></script>

    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>