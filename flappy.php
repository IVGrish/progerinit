<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Змейка на JavaScript</title>
    <link rel="stylesheet" href="snake/snake-style.css" type="text/css" charset="utf-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main_page.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
    <link href="img/lightning.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<div id="wrapper">
    <div id="content">
        <?php
            require_once "blocks/header.php";
        ?>
        <div id="main">
            <div id="news">
                <canvas id="flappy" width="288" height="512"></canvas>
            </div>
        </div>

        <div style="clear: both;"><br></div>
            
    </div>
    <?php
        require_once "blocks/footer.php";
    ?>
</div>
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="front.js"></script>
    <script src="flappy/game.js"></script>
</body>
</html>