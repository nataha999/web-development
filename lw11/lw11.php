<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Don&#8242;t do it.</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/position.css" rel="stylesheet">
  <link href="css/popup.css" rel="stylesheet" >
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body class="body">
  <script src="js/popup.js" defer></script>
  <header class="header">
    <img class="logo" src="images/logo_header.svg" alt="логотип" />
    <nav class="header header__pos">
      <a class="reference">Что будет на курсе?</a>
      <a class="reference">Вопросы</a>
      <a class="reference">Автор</a>
    </nav>
    <div class="button button__top buttom-pos">Записаться на курс</div>
  </header>


  <main>
    <section class="head">
      <div class="head-pos">
        <h1 class="title">
            Не <span class="bloom">делай</span> это
        </h1> 
        <p class="explanation">
            Онлайн-курс для творческих людей, о том, как управлять своим временем 
        </p> 
        <div class="button button__collateral buttom-pos">
            Записаться на курс
        </div>
      </div>
      <img class="head__done" src="images/main_img.png" alt="отдых" /> 
    </section>
    


    <section class="info">
      <div class="clarifying">
        <div class="info-item info-item__one">
          <img src="images/time.png" alt="время" />
          <p class="space">
            Для тех, у кого слишком много идей и слишком мало времени
          </p>
        </div>

        <div class="info-item info-item__two">
          <img src="images/notebook.png" alt="блокнот" />
          <p class="space"> 
            Метод «списка не дел», который позволит успевать и реализовывать
          </p>
        </div>

        <div class="info-item info-item__three">
          <img src="images/target.png" alt="прицел" />
          <p class="space">
            Курс научит творческих людей сосредоточиваться
          </p>
        </div>
      </div>
    </section>



    <section class="cant-do">
      <div class="cant-do__flex">
        <img class="cant-do-img cant-do-item" src="images/finances.png" alt="финансы" />
        <div class="cant-do-text-one">
          <h2 class="point pont_pos">
            Ты не успеешь
          </h2>
          <p class="text">
            Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. 
            Как прибавить суткам часы, рассмотрим в нашем курсе.
          </p> 
        </div>
      </div>

      <div class="cant-do__flex">
        <div class="cant-do-text-two">
          <h2  class="point">
            Опять дедлайн
          </h2> 
          <p class="text">
            В мире, где столько всего интересного, когда же успевать жить?
          </p>
        </div>
          <img class="cant-do-item-two" src="images/mind_blowing.png" alt="крик" />
      </div>
    </section>



    <section class="block">
      <h3 class="header-card heading-card">На курсе ты <span class="bloom">сможешь</span></h3>
      <div class="grid">
        <div class="card card-pos">
          <img src="images/one_fing.png" alt="шаг первый" />
          <p>
            Понять, что нужно делать, а что делать не стоит.
          </p>
        </div>

        <div class="card card-pos">
          <img src="images/two_fings.png" alt="шаг второй" />
          <p>
            Перестать себя искусственно ограничивать.
          </p>          
        </div>
 
        <div class="card card-pos">
          <img src="images/three_fings_first.png" alt="шаг третий" />
          <p>
            Определить сильные стороны и начать использовать слабые.
          </p>
        </div>

        <div class="card card-pos">
          <img src="images/four_fings.png" alt="шаг четвертый" />
          <p>
            Научиться достигать любой цели в 3 понятных шага.
          </p>
        </div>

        <div class="card card-pos">
          <img src="images/five_fings.png" alt="шаг пятый" />
          <p>
            Сотрудничать эффективно и с правильными людьми.
          </p>
        </div>

        <div class="card card-pos">
          <img src="images/three_fings_second.png" alt="шаг шестой" />
          <p>
            Оптимизировать общение с клиентами и проведение совещаний.
          </p>
        </div>
      </div>
    </section>
  
    <?php
      include "form.php";
    ?>

  </main>
  <footer class="info info__expansion buttom-pos">
    <img class="last-logo" src="images/logo_footer.svg" alt="логотип" />
  </footer>
</body>
</html>