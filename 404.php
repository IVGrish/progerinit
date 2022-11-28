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
                    <h2 class="heading">Ошибка 404</h2>
                    <div style="clear: both;"><br></div>
                    <div class="block">
                        Упс... Что-то пошло не так и вы попали на ошибку 404! 
                        Возможно страница, на которую вы пытались перейти была удалена или же никогда и не существовало! 
                        Вы можете воспользоваться поиском на сайте или перейти на главную страницу - <a href="../">Proger in IT</a> 
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
</body>
</html>