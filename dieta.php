<?php

if(!isset($_SESSION)) {
    session_start();
}
?>

<?php 
include ('assets/login/protect1.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['user_name'];?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
<header>
        <nav id="navbar">
            <i class="fa-solid fa-sun" id="nav_logo">Kelvia Rocha</i>
                    <ul id="nav_list">
                </ul>
            <button class="btn-default" ><a href="index.php">Voltar</a></button>
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
        <ul id="mobile_nav_list">
                
        <li class="nav-item active">
                    <a href="index.php">Início</a>
                </li>
                    
        </div>
    </header>

    <div class="teste" style="height: 600px; width: 100%;">
        <embed src="pdf/<?php echo $_SESSION['user_name'];?>.pdf" type="application/pdf" width="100%" height="138%">


            </div>

     <main class="m"></main>
     <script src="scriptx.js"></script>
</body>
</html>