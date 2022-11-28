<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Распознавание голоса и чтение текста</title>
  <style>
      #map {
          height: 400px;
          width: 100%;
      }
  </style>
</head>
<body>

  <button onclick="speech ()">Слушать</button>
  <button onclick="talk ()">Проговорить</button>
  <button onclick="stop ()">Остановить</button>

  <div id="map"></div>

  <script>
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

  var synth = window.speechSynthesis;
  var utterance = new SpeechSynthesisUtterance('How about we say this now? This is quite a long sentence to say.');

  function talk () {
    synth.speak (utterance);
  }

  function stop () {
    synth.pause();
  }
  </script>
  <script>
      function initMap() {
        var pos = {lat: 51.513416, lng: -0.129761};
        var opt = {
            center: pos,
            zoom: 15
        };

        var myMap = new google.maps.Map(document.getElementById("map"), opt);

        var marker = new google.maps.Marker({
            position: pos,
            map, myMap,
            title: "Ты навел на меня",
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        });

        var info = new google.maps.InfoWindow({
            content: '<h3>Это мое место</h3><p>Простое описание места</p>'
        });

        marker.addListener("click", function () {
            info.open(myMap, marker);
        });
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVLNv3MzyQlZJmdFmEaDle6DGMO9oraD8&callback=initMap" 
    async defer></script>

</body>
</html>