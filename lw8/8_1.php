<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset='utf-8'>
  <title>Don't do it</title>
  <link rel='stylesheet' type='text/css' href='css/style.css'>
  <link rel='stylesheet' type='text/css' href='css/form.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="header">
    <img class="header__logo" src="img/Don_t do it.svg" alt="Не делай это">
    <nav class="header__navigation">
      <a class="navigation-text" href="#">Что будет на курсе?</a>
      <a class="navigation-text" href="#">Вопросы</a>
      <a class="navigation-text" href="#">Автор</a>
    </nav>
    <a class="header__button-registration" href="#zapis">Записаться на курс</a>
  </div>

  <div class="main">
    <div class="front-page">
      <div class="front-page__info">
        <p class="front-page__headline">Не <span class="text_extra">делай</span> это</p>
        <p class="front-page__about">Онлайн-курс для творческих людей, о том, как управлять своим временем</p>
        <a class="front-page__button-registration" href="#zapis">Записаться на курс</a>
      </div>
      <img class="front-page__image" src="img/Busy.png" alt="Занятой">
    </div>

    <div class="short-description">
      <div class="short-description__panel">
        <div class="short-description__time">
          <img class="short-description__time_image" src="img/Time.svg" alt="Часы">
          <p class="short-description__time_text">Для тех, у кого слишком много идей и слишком мало времени</p>         
        </div>
        <div class="short-description__notebook">
          <img class="short-description__notebook_image" src="img/notebook.svg" alt="Заметки">
          <p class="short-description__notebook_text">Метод «списка не дел», который позволит успевать и реализовывать</p>          
        </div>
        <div class="short-description__target">
          <img class="short-description__target_image" src="img/target.svg" alt="Прицел">
          <p class="short-description__target_text">Курс научит творческих людей сосредоточиваться</p>          
        </div>
      </div>
    </div>

    <div class="deadline">
      <div class="deadline__fail">
        <img class="deadline__image" src="img/Finances.png" alt="Финансы">
        <div class="deadline__fail_paragrph">
          <p class="deadline__fail_headline deadline__headline">Ты не успеешь</p>
          <p class="deadline__fail_text deadline__text">Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
        </div>        
      </div>
      <div class="deadline__again">       
        <div class="deadline__again_paragrph">
          <p class="deadline__again_headline deadline__headline">Опять дедлайн</p>
          <p class="deadline__again_text deadline__text">В мире, где столько всего интересного, когда же успевать жить?</p>       
        </div>
        <img class="deadline__again_image" src="img/Mind Blowing.png" alt="Сногсшибательный">       
      </div>
    </div>

    <div class="opportunities">
      <p class="opportunities__headline">На курсе ты <span class="text_extra">сможешь</span></p>
      <div class="opportunities__content_flex">
        <div class="opportunities__first block-opportunities">
          <div class="opportunities__content_first">
            <img class="opportunities__first-image" src="img/One finger.svg" alt="Первое">
            <p class="opportunities__first-text opportunities-text">Понять, что нужно делать, а что делать не стоит.</p>
          </div>      
        </div>
        <div class="opportunities__second block-opportunities">
          <div class="opportunities__content_second">
            <img class="opportunities__second-image" src="img/Two fingers.svg" alt="Второе">
            <p class="opportunities__second-text opportunities-text">Перестать себя искусственно ограничивать.</p>
          </div>
        </div>
        <div class="opportunities__third block-opportunities">
          <div class="opportunities__content_third">
            <img class="opportunities__third-image" src="img/Three fingers.svg" alt="Третье">
            <p class="opportunities__third-text opportunities-text">Определить сильные стороны<br>и начать использовать слабые.</p>
          </div>
        </div>
        <div class="opportunities__fourth block-opportunities">
          <div class="opportunities__content_fourth">
            <img class="opportunities__fourth-image" src="img/Four fingers.svg" alt="Четвертое">
            <p class="opportunities__fourth-text opportunities-text">Научиться достигать любой цели<br>в 3 понятных шага.</p>
          </div>
        </div>
        <div class="opportunities__fifth block-opportunities">
          <div class="opportunities__content_fifth">
            <img class="opportunities__fifth-image" src="img/Five fingers.svg" alt="Пятое">
            <p class="opportunities__fifth-text opportunities-text">Сотрудничать эффективно<br>и с правильными людьми.</p>
          </div>
        </div>
        <div class="opportunities__sixth block-opportunities">
          <div class="opportunities__content_sixth">
            <img class="opportunities__sixth-image" src="img/Six fingers.svg" alt="Шестое">
            <p class="opportunities__sixth-text opportunities-text">Оптимизировать общение с клиентами и проведение совещаний.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    require './form.php';
  ?>

  <div class="footer">
    <img class="footer__logo" src="img/Don_t do it (neg).svg">
  </div>
</body>
</html>