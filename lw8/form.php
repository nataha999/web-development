<section class="enroll">
    <a name="zapis">
    <img class="enroll__img" src="img/welcome.svg" alt="привет" />
    <h3 class="enroll__header">Записаться на курс</h3>
    <form class="enroll__form" action="8_2.php" method="post">
        <input class="enter data" type="text" placeholder="Ваше имя" name="name" />
        <input class="enter data" type="email" placeholder="Email" name="email" />
        <select class="enter_list data" name="activity">
            <option class="enter" disabled selected hidden> Деятельность</option>
            <option class="data" value="Программист">Программист</option>
            <option class="data" value="Дизайнер">Дизайнер</option>
            <option class="data" value="Маркетолог">Маркетолог</option>
        </select>
        <div class="agree">
            <input class="check_box" type="checkbox" name="agreement"/>
            <label class="check" for="agree">Согласен получать информационные материалы о старте курса</label>
        </div>
        <button class="click" type="submit">Записаться на курс</button>
    </form>
</section>