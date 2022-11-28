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
            <div id="up"><a class="btn" href="javascript://0" onclick="slowScroll('#down')">Вниз</a></div>
            <div id="main">
                <div id="news">
                    <h2 class="heading">IT новости</h2>
                    <div style="clear: both;"><br></div>
                    <!-- Статья -->
                    <?php
                        for ($i = 0; $i < 6; $i++)
                            echo '
                        <div class="article">
                            <img src="https://jetruby.com/ru/blog/wp-content/uploads/2017/08/vue.js-e1503668330344.png" 
                            alt="Test" title="Test">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro obcaecati, dolore</span>
                        </div>
                            ';
                    ?>
                    <a href="" title="Посмотреть больше статей">
                        <div class="btn">
                            Посмотреть больше
                        </div>
                    </a>
                </div>
            </div>
            <?php
                require_once "blocks/aside.php";
            ?>

            <div style="clear: both;"><br></div>
            <div id="subscribe">
                <span>Подпишитесь чтобы быть в курсе всех новостей</span>
                <div style="clear: both;"><br></div>

                <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

                <!-- VK Widget -->
                <div id="vk_subscribe"></div>
                <script type="text/javascript">
                VK.Widgets.Subscribe("vk_subscribe", {}, 154647408);
                </script>

            </div>

            <div id="sub_to_project">
                <span class="heading">Подписаться на проект</span>
                <div style="clear: both;"><br></div>
                <p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект!</p>
                <a href="" title="Посмотреть информацию о подписке">
                        <div class="btn">
                            Узнать детальнее о подписке
                        </div>
                </a>
                <div style="clear: both;"><br></div>
                <h2 class="heading">Создание онлайн магазина</h2>
                <div style="clear: both;"><br></div>
                <img src="https://miro.medium.com/max/1200/1*8XsXIPxX7twobsKwzmwkKA.png" alt="Test" title="Test">
            </div>
            <div style="clear: both;"><br></div>
            <div id="web_sites">
                <span>Хотите создать сайт?</span>
                <a href="" title="Заказать сайт">
                        <div class="btn">
                            Заказать сайт
                        </div>
                </a>
            </div>
        </div>
        <div id="down"><a class="btn" href="javascript://0" onclick="slowScroll('#up')">Вверх</a></div>
        <?php
            require_once "blocks/footer.php";
        ?>
    </div>

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="front.js"></script>
    <script>  
        function slowScroll (id) {
            var offset = 200;
            $('html, body').animate({
                scrollTop: $(id).offset().top - offset
            }, 500);
            return false;
        }
    </script>
    <script> 
        // new code: recognizing speech

        // Создаем распознаватель
        var recognizer = new webkitSpeechRecognition();

        // Ставим опцию, чтобы распознавание началось ещё до того, как пользователь закончит говорить
        recognizer.interimResults = true;

        // Какой язык будем распознавать?
        recognizer.lang = 'ru-Ru';

        // Используем колбек для обработки результатов
        recognizer.onresult = function (event) {
        var result = event.results[event.resultIndex];
        if (result.isFinal) {
            alert('Вы сказали: ' + result[0].transcript);
        } else {
            console.log('Промежуточный результат: ', result[0].transcript);
        }
        };

        function speech () {
        // Начинаем слушать микрофон и распознавать голос
        recognizer.start();
        }
    </script>
</body>
</html>