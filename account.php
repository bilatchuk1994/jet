<?php include("header-new.php"); ?>

<section class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <form action="#" class="personal-settings">
                    <div class="form-title">
                        Личные настройки:
                    </div>
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="tel" class="form-control" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </form>


                <div class="tabs-container">
                    <div class="form-title">
                        Реквизиты
                    </div>
                    <ul class="tabs">
                        <li class="active">
                            <a href="">ИП</a>
                        </li>
                        <li>
                            <a href="">ООО</a>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tabs-panel active" data-index="0">

                            <form action="#" class="ip-settings">

                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" class="form-control" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label>ФИО Руководителя</label>
                                    <input type="text" class="form-control" placeholder="ФИО Руководителя">
                                </div>
                                <div class="form-group">
                                    <label>ИНН</label>
                                    <input type="text" class="form-control" placeholder="ИНН">
                                </div>
                                <div class="form-group">
                                    <label>БИК банка</label>
                                    <input type="text" class="form-control" placeholder="БИК банка">
                                </div>
                                <div class="form-group">
                                    <label>Номер расчетного счета</label>
                                    <input type="text" class="form-control" placeholder="Номер расчетного счета">
                                </div>
                                <div class="form-group">
                                    <label>Юридический адрес</label>
                                    <input type="text" class="form-control" placeholder="Юридический адрес">
                                </div>
                                <div class="more-fields">
                                    <div class="more-fields-wrap">
                                        Почтовый адрес совпадает с юридическим?
                                        <div class="more-fields-btns">
                                            <span onclick="setVisibility('ip-post-address', 'none');">Да</span><span onclick="setVisibility('ip-post-address', 'block');">Нет</span>
                                        </div>
                                    </div>
                                    <div class="form-group" id="ip-post-address" style="display:none;">
                                        <label>Почтовый адрес</label>
                                        <input type="text" class="form-control" placeholder="Почтовый адрес">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                            </form>



                        </div>
                        <div class="tabs-panel" data-index="1">
                            <form action="#" class="ooo-settings">

                                <div class="form-group">
                                    <label>Название (ООО)</label>
                                    <input type="text" class="form-control" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label>ФИО Руководителя</label>
                                    <input type="text" class="form-control" placeholder="ФИО Руководителя">
                                </div>
                                <div class="form-group">
                                    <label>ИНН</label>
                                    <input type="text" class="form-control" placeholder="ИНН">
                                </div>
                                <div class="form-group">
                                    <label>БИК банка</label>
                                    <input type="text" class="form-control" placeholder="БИК банка">
                                </div>
                                <div class="form-group">
                                    <label>Номер расчетного счета</label>
                                    <input type="text" class="form-control" placeholder="Номер расчетного счета">
                                </div>
                                <div class="form-group">
                                    <label>Юридический адрес</label>
                                    <input type="text" class="form-control" placeholder="Юридический адрес">
                                </div>
                                <div class="more-fields">
                                    <div class="more-fields-wrap">
                                        Почтовый адрес совпадает с юридическим?
                                        <div class="more-fields-btns">
                                            <span onclick="setVisibility('ooo-post-address', 'none');">Да</span><span onclick="setVisibility('ooo-post-address', 'block');">Нет</span>
                                        </div>
                                    </div>
                                    <div class="form-group" id="ooo-post-address" style="display:none;">
                                        <label>Почтовый адрес</label>
                                        <input type="text" class="form-control" placeholder="Почтовый адрес">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                            </form>
                        </div>
                    </div>
                </div>


                <form action="#" class="address">
                    <div class="form-title">
                        Адрес доставки
                    </div>
                    <div class="form-group">
                        <label>Страна</label>
                        <input type="text" class="form-control" placeholder="Страна">
                    </div>
                    <div class="form-group">
                        <label>Город</label>
                        <input type="text" class="form-control" placeholder="Город">
                    </div>
                    <div class="form-group">
                        <label>Улица</label>
                        <input type="text" class="form-control" placeholder="Улица">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Дом</label>
                            <input type="text" class="form-control" placeholder="Дом">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Корпус</label>
                            <input type="text" class="form-control" placeholder="Корпус">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Помещение</label>
                        <input type="text" class="form-control" placeholder="Помещение">
                    </div>
                    <div class="form-group">
                        <label>Телефон получателя</label>
                        <input type="text" class="form-control" placeholder="Телефон получателя">
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </form>



                <form action="#" class="password">
                    <div class="form-title">
                        Смена пароля
                    </div>
                    <div class="form-group">
                        <label>Текущий пароль</label>
                        <input type="password" class="form-control" placeholder="Текущий пароль">
                        <span class="small"><a href="#">Забыли пароль?</a></span>
                    </div>
                    <div class="form-group">
                        <label>Новый пароль</label>
                        <input type="password" class="form-control" placeholder="Новый пароль">
                    </div>
                    <div class="form-group">
                        <label>Новый пароль еще раз</label>
                        <input type="password" class="form-control" placeholder="Новый пароль еще раз">
                    </div>


                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>
</section>









<?php include("footer.php"); ?>

<script>
    const tabLinks = document.querySelectorAll(".tabs a");
    const tabPanels = document.querySelectorAll(".tabs-panel");

    for (let el of tabLinks) {
        el.addEventListener("click", e => {
            e.preventDefault();

            document.querySelector(".tabs li.active").classList.remove("active");
            document.querySelector(".tabs-panel.active").classList.remove("active");

            const parentListItem = el.parentElement;
            parentListItem.classList.add("active");
            const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

            const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
            panel[0].classList.add("active");
        });
    }


    // Показываем доп.поле для почтового адресса
    function setVisibility(id, visibility) {
        document.getElementById(id).style.display = visibility;
    }


    jQuery(document).ready(function() {
        jQuery('.cabinet-icon').on("click", function() {
            jQuery('.header-cabinet-links').toggleClass('active');

        });
    });

</script>
