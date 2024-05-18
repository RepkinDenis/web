<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>записить на занятие</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/singup.css" rel="stylesheet" />
  </head>
  <body>
    <div id="base">

      <form class="card">
        <label for="name">
            Имя
            <br><br>
            <input
                type="text"
                id="name"
                class="inp"
                name="name"
                placeholder="Иванов Иван"
            >
        </label>
    
        <br><br>
        <label for="email">
            E-mail
            <br><br>
            <input
                type="text"
                id="email"
                class="inp"
                name="email"
                placeholder="example@gmail.com"
            >
        </label>
    
        <br><br>
        <label for="phone">
            Номер телефона
            <br><br>
            <input
                type="text"
                id="phone"
                class="inp"
                name="phone"
                placeholder="+7 888 888 88 88"
            >
        </label>

    
        <br><br>
          <select id='adds' name='adds'>
            <option value='add'>Тип занятий</option>
            <option value='indiv'>Индивидуальное</option>
            <option value='group'>Групповое</option>
            <option value='pair'>Парное</option>
          </select>
        
        <br><br>
        <button
            type="submit"
            id="submit"
            class="btn"
        >Записаться</button>
      </form>

      <br><br>

      <img id="gall1" src="../images/singup/call.png"/>

      <div id="main_text" >
        <p style="font-size:72px;"><span id="title">Запись на занятие</span></p>
        <p style="font-size:36px;"><span id="text">Оставьте заявку для записи</span></p>
      </div>
      <button id="bars" class="btn" onclick="togglePopup()"></button>

      <div id="bars_panel" >
            <button id="cross" onclick="togglePopup()"></button>

            <button id="tariff_bars" class="btn" onclick="window.location.href = 'tariff.php'">Тарифы</button>

            <button id="registration_bars" class="btn" onclick="window.location.href = 'registration.php'">Регистрация</button>

            <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

            <button id="qa_bars" class="btn" onclick="window.location.href = 'QA.php'">Вопросы</button>

            <button id="home_page_bars" class="btn" onclick="window.location.href = 'home_page.php'">Главная</button>
          </div>
        </div>
      </div>
      <script>
        function togglePopup() {
          var popup = document.getElementById("bars_panel");
          if (popup.style.left === "-400px") {
                popup.style.left = "0";
            } else {
                popup.style.left = "-400px";
            }
        }
      </script>
  </body>
</html>