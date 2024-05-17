<?php
  global $connect;
  require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Memory Game</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="moves-count"></div>

  <div class="memory-game">
    <div class="memory-card" name="1">
      <img class="face" src="img/1.png" alt="здравствуй" />
      <img class="back" src="img/question.png" alt="?" />
    </div>
    <div class="memory-card" name="1">
      <img class="face" src="img/1.png" alt="здравствуй" />
      <img class="back" src="img/question.png" alt="?" />
    </div>

    <div class="memory-card" name="2">
      <img class="face" src="img/2.png" alt="прощай" />
      <img class="back" src="img/question.png" alt="?" />
    </div>
    <div class="memory-card" name="2">
      <img class="face" src="img/2.png" alt="прощай" />
      <img class="back" src="img/question.png" alt="?" />
    </div>

    <div class="memory-card" name="3">
      <img class="face" src="img/3.png" alt="привет" />
      <img class="back" src="img/question.png" alt="?"/>
    </div>
    <div class="memory-card" name="3">
      <img class="face" src="img/3.png" alt="привет" />
      <img class="back" src="img/question.png" alt="?" />
    </div>

    <div class="memory-card" name="4">
      <img class="face" src="img/4.png" alt="разговор" />
      <img class="back" src="img/question.png" alt="?" />
    </div>
    <div class="memory-card" name="4">
      <img class="face" src="img/4.png" alt="разговор"/>
      <img class="back" src="img/question.png" alt="?"/>
    </div>

    <div class="memory-card" name="5">
      <img class="face" src="img/5.png" alt="спасибо"/>
      <img class="back" src="img/question.png" alt="?"/>
    </div>
    <div class="memory-card" name="5">
      <img class="face" src="img/5.png" alt="спасибо" />
      <img class="back" src="img/question.png" alt="?" />
    </div>

    <div class="memory-card" name="6">
      <img class="face" src="img/6.png" alt="сообщение"/>
      <img class="back" src="img/question.png" alt="?"/>
    </div>
    <div class="memory-card" name="6">
      <img class="face" src="img/6.png" alt="сообщение"/>
      <img class="back" src="img/question.png" alt="?" />
    </div>
</div>

  <h3 id="table_lable">Ваши результаты:</h3>
    <table id="game_table">
      <tr>
          <th>Ходов:</th>
      </tr>
      <?php
          $games = mysqli_query($connect, "SELECT * FROM `game` WHERE user_id=$_GET[id] ORDER BY moves ASC");
          $games = mysqli_fetch_all($games);
          if ($games){
              foreach ($games as $game){
                  ?>
                  <tr>
                      <td><?=$game[1] ?></td>
                  </tr>
                  <?php
              }
            }
      ?>
      </table>

      <form action="config/insert_game.php?id=<?=$_GET['id'] ?>" id="insert_game" method="post">
      <input type="hidden" id="moves" name="moves" value="0">
    </form>
    <script src="scripts.js"></script>
</body>
</html>