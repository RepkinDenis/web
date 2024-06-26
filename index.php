<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Handschool</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/home_page.css" rel="stylesheet" />
    <link href="./Gallery/index.css" rel="stylesheet" />
    <link href="./Gallery/gallery-lib/gallery.css" rel="stylesheet" />
    <script src="./Gallery/gallery-lib/gallery.js"></script>
  </head>
  <body>
    <div class="base">
      <div id="gallery">
                <div class="slide active" id="animation1">
                    <img src="./Gallery/images/slide1.png" alt="первый"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/a.jpg" alt="А"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/b.jpg" alt="Б"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/v.jpg" alt="В"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/g.jpg" alt="Г"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/d.jpg" alt="Д"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/e.png" alt="е"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/z.png" alt="З"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/i.png" alt="И"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/ii.png" alt="Й"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/k.png" alt="К"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/l.png" alt="Л"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/m.png" alt="М"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/n.png" alt="Н"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/o.png" alt="О"/>
                </div>
        </div>


        <div id="gallery2">
                <div class="slide active" id="animation2">
                    <img src="./Gallery/images/continue.png" alt="первый2"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/p.png" alt="П"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/r.png" alt="Р"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/c.png" alt="С"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/t.png" alt="Т"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/y.png" alt="У"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/f.png" alt="Ф"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/x.png" alt="Х"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/ca.png" alt="Ц"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/che.png" alt="Ч"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/sh.png" alt="Ш"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/sha.png" alt="Щ"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/yi.png" alt="Ы"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/mag.png" alt="Ь"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/uh.png" alt="Э"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/u.png" alt="Ю"/>
                </div>
                <div class="slide">
                    <img src="./Gallery/images/ia.png" alt="Я"/>
                </div>
        </div>
            <script src="./Gallery/index.js"></script>

            <form class="card" id="form">
            <h2 style="text-align: center;">Вход</h2>
        
            <label for="email">
                Почта
                <br><br>
                <input
                    type="text"
                    id="email"
                    class="inp"
                    name="email"
                    placeholder="example@email.com"
                ><br><br>
            </label>
        
            <label for="password">
                Пароль
                <br><br>
                <input
                    type="password"
                    id="password"
                    class="inp"
                    name="password"
                    placeholder="******"
                ><br><br>
            </label>
        
            <button
                type="submit"
                id="submit"
            >Продолжить</button><br>
        
            <p style="text-align: center;"> Нет профиля? </p>
            <button 
            id="reg" 
            formaction = 'php/registration.php'>Зарегистрироваться</button>
            <button id="cross" formaction = 'index.php'  onclick="togglePopup_login()"></button>
        </form> 

        <script>
            var form = document.getElementById("form");
            const errorNotice = document.querySelector('.notice.error');
            if (errorNotice) {
                form.style.display = "block";
                setTimeout(function() {
                form.style.opacity = "1";
                }, 10);
            } else {
                form.style.opacity = "0";
                setTimeout(function() {
                form.style.display = "none";
                }, 300);
                
            }
        </script>

      <div id="header">
            <img id="img_header" src="../../images/home_page/logo.png" alt="logo"/>
            <button id="tariff_header" class="btn" onclick="window.location.href = 'php/tariff.php'">Тарифы</button>

            <button id="registration_header" class="btn" onclick="window.location.href = 'php/registration.php'">Регистрация</button>

            <button id="comment_header" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

            <button id="qa_header" class="btn" onclick="window.location.href = 'php/QA.php'">Вопросы</button>

            <button id="singup_header" class="btn" onclick="window.location.href = 'php/singup.php'">Записаться</button>
   
            <button id="authorization_header" class="btn" onclick="togglePopup_login()">Войти</button>
        </div>

      <div id="main_text1" >
        <p><span>
        слухом имеются у <strong>13 миллионов</strong> жителей России.
        Согласно прогнозам, к <strong>2050 г.</strong> почти <strong>2,5 миллиарда</strong> человек будут страдать 
        от проблем со слухом в той или иной степени и по меньшей мере <strong>700 
        миллионов</strong> человек будут нуждаться в реабилитационных услугах в связи 
        с потерей слуха.
        </span></p>
      </div>
      <div id="main_text2" >
        <p><span>
            с нарушениями работы слухового аппарата и вы хотите изучить язык жестов, 
            вы  можете воспользоваться услугами нашей онлайн школы, у нас есть разные 
            варианты прохождения обучения: лично с преподавателем, в паре с другим человеком или в группе.
        </span></p>
      </div>

      <button id="bars" class="btn" onclick="togglePopup_bars()"></button>
      <div id="bars_panel" >
            <button id="cross_bars" onclick="togglePopup_bars()"></button>

            <button id="tariff_bars" class="btn" onclick="window.location.href = 'php/tariff.php'">Тарифы</button>

            <button id="singup_bars" class="btn" onclick="window.location.href = 'php/singup.php'">Записаться</button>

            <button id="comment_bars" class="btn" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

            <button id="qa_bars" class="btn" onclick="window.location.href = 'php/QA.php'">Вопросы</button>

            <button id="registration_page_bars" class="btn" onclick="window.location.href = 'php/registration.php'">Регистрация</button>
          </div>
        </div>
      
      <div id="footer">
            <img id="img_footer" src="../../images/home_page/logo.png" alt="logo"/>
            <button id="tariff_footer" class="btn_footer" onclick="window.location.href = 'tariff.php'">Тарифы</button>

            
            <button id="registration_footer" class="btn_footer" onclick="window.location.href = 'registration.php'">Регистрация</button>

          
            <button id="comment_footer" class="btn_footer" onclick="window.location.href = '/../comment/comment.php'">Отзывы</button>

          
            <button id="qa_footer" class="btn_footer" onclick="window.location.href = 'QA.php'">Вопросы</button>

         
            <button id="singup_footer" class="btn_footer" onclick="window.location.href = 'singup.php'">Записаться</button>
        
            <button id="authorization_footer" class="btn_footer" onclick="togglePopup_login()">Войти</button>
            <button id="telegram"></button>
            <button id="whatsup"></button>
            <button id="vk"></button>
            <div id="footer_text">
              <p style="font-size:20px;"><span>Контакты:</span></p>
              <p style="font-size:18px;"><span>info_handschool.gmail.com</span></p>
              <p style="font-size:18px;"><span>+7 999 123 45 67 </span></p>
            </div>
      </div>
    </div>
     <script>
        function togglePopup_login() {
          var popup = document.getElementById("form");
          if (popup.style.opacity === "0") {
            popup.style.display = "block";
            setTimeout(function() {
            popup.style.opacity = "1";
            }, 10); 
        } else {
            popup.style.opacity = "0";
            setTimeout(function() {
            popup.style.display = "none";
            }, 300); 
        }
        }
        function togglePopup_bars() {
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