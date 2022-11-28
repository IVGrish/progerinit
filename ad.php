<!DOCTYPE html>
<html>
<?php
    require_once "blocks/head.php";
?>
<body>
    <div id="wrapper">
        <div id="content">
            <?php
                require_once "blocks/header.php";
            ?>
            <div id="main">
                <div id="news">
                    <h2 class="heading">Реклама</h2>
                    <div style="clear: both;"><br></div>
                    <div class="block">
                        По вопорсам рекламы обращайтесь по email.<br><br>
                        Реклама может быть размещена<br><br>
                        <strong>Рекламные площадки:</strong>
                        <ul>
                            <li>Информационно-развлекательный портал - <a href="../" target="_blank">Proger in IT</a></li>
                            <li>Информационно-развлекательный портал - <a href="../" target="_blank">Страница VK</a></li>
                            <li>Информационно-развлекательный портал - <a href="../" target="_blank">Канал на YouTube</a></li>
                        </ul><br>
                        <strong>Виды рекламы:</strong>
                        <a href="../" target="_blank">Proger in IT</a>:
                        <ul>
                            <li>написание рекламной статьи и размещение ее на сайте;</li>
                            <li>подготовка и публикация рекламных банеров на сайте;</li>
                            <li>размещение вечных ссылок на ваш проект.</li>
                        </ul><br>
                    </div>
                </div>
            </div>
            <?php
                require_once "blocks/aside.php";
            ?>

            <div style="clear: both;"><br></div>
            
        </div>
        <?php
            require_once "blocks/footer.php";
        ?>
    </div>

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="front.js"></script>
</body>
</html>