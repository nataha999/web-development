<section class="popup__main">
  <div class="popup__content">
    <div class="popup__error hide">
      <button class="err btn_close-popup btn_close-popup-1"><img src="images/close.svg" alt=""></button>
      <h2 class="form__txt">Упс... Произошла ошибка!</h2>
    </div>
    <div class="forma">
      <div class="none_column">
        <img src="/images/welcome.png" class="popup__images" alt="">
        <button class="btn_close-popup btn_close-popup-2"><img src="images/close.svg" alt=""></button>
      </div>
      <h2 class="form__title">Записаться на курс</h2>
      <form id="myForm" action="form_ajax.php" method="POST" class="popup">
        <input type="text" id="name" name="user_name" placeholder="Ваше имя" class="popup__inp">
        <input type="email" id="mail" name="user_mail" placeholder="Email" class="popup__inp">
        <select id="job" name="user_position" placeholder="Деятельность" class="popup__inp popup__choose">
          <option selected value="" disabled hidden>Деятельность</option>
          <option class="popup__choose_elem popup__choose_elem1" value="Программист">Программист</option>
          <option class="popup__choose_elem" value="Дизайнер">Дизайнер</option>
          <option class="popup__choose_elem" value="Маркетолог">Маркетолог</option>
        </select>
        <div class="checkbox">
          <input class="agree__btn" type="checkbox" id="agree" name="agree">
          <label class="agree" id="agree" name="agree" for="agree">Согласен получать информационные материалы о старте курса</label>
        </div>
        <div class="form__button" type="submit">Записаться на курс</div>
    </div>
    </form>
  </div>
</section>
<script src="js/form.js" defer></script>