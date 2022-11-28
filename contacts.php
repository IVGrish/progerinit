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
                    <h2 class="heading">Обратная связь</h2>
                    <div style="clear: both;"><br></div>
                    <div class="block">
                        Чтобы отправить нам ваше сообщение, просто заполните форму и отправьте нам
                        <form>
                            <div>
                                <input type="text" id="name" placeholder="Your name" 
                                onclick="$(this).css('border-color', '#ccc')">
                                <br>
                                <input type="email" id="email" placeholder="Your email" 
                                onclick="$(this).css('border-color', '#ccc')">
                            </div>
                            <div>
                                <textarea id="message" placeholder="Enter message itself" 
                                onclick="$(this).css('border-color', '#ccc')"></textarea>
                            </div>
                            <input type="button" id="send" value="Отправить" class="btn">
                        </form>
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
    <script>
            $('#send').click(function () {
            var email = $('#email').val();
            var name = $('#name').val();
            var message = $('#message').val();
            $.ajax({
                url: 'ajax/contacts.php',
                type: 'POST',
                cache: false,
                data: {'name':name, 'email':email, 'message':message},
                dataType: 'html',
                beforeSend: function () {
                    $('#send').attr("disabled", "disabled");
                },
                success: function (data) {
                    if (data == true) {
                        $('#name').val("");
                        $('#email').val("");
                        $('#message').val("");
                        $('#send').text("Сообщение отправлено");
                        $('#name').css("border-color", "#60fc8c");
                        $('#email').css("border-color", "#60fc8c");
                        $('#message').css("border-color", "#60fc8c");
                    } else {
                        if (data == false)
                            alert("Что-то пошло не так! Сообщение не отправлено");
                        else {
                            switch (data) {
                                case "Имя не указано":
                                    $('#name').css("border-color", "#f7b4b4");
                                    break;
                                case "Сообщение не указано":
                                    $('#message').css("border-color", "#f7b4b4");
                                    break;
                                case "Неправильный e-mail":
                                    $('#email').css("border-color", "#f7b4b4");
                                    break;
                                default:
                                    $('#email').css("border-color", "#f7b4b4");
                                    $('#message').css("border-color", "#f7b4b4");
                                    $('#name').css("border-color", "#f7b4b4");
                            }
                        }
                    }
                    $('#send').removeAttr("disabled");
                }
                
            });
            
        });
    </script>
</body>
</html>