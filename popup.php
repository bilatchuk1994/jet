<?php include("header.php"); ?>

<main class="main">

<section class="catalog-top about-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrums">
          <ul>
            <li><a href="">Главная</a></li>
            <li><span>></span></li>
            <li>Про restocker </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="title-page">
          <h1>Про restocker</h1>
        </div>
        <div class="title-divider"></div>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a class="popup-btn" data-effect="mfp-zoom-in" href="#popup-login">Попап 1</a><br><br>
        <a class="popup-btn" data-effect="mfp-zoom-in" href="#popup-contact">Попап 2</a><br><br>
        <a class="popup-btn" data-effect="mfp-zoom-in" href="#popup-step-3">Попап ШАГ 3</a><br><br>
        <a class="popup-btn" data-effect="mfp-zoom-in" href="#popup-step-4">Попап ШАГ 4</a>
      </div>
    </div>
  </div>
</section>


<div id="popup-login" class="white-popup mfp-hide mfp-with-anim">
    <div class="popup-block">
      <div class="popup-title">
        <h2>Войдите или зарегистрируйтесь</h2>
        <div class="step-flex">
          <div><span class="step-one flex-center">1</span></div>
          <div><span class="step-two flex-center">2</span></div>
        </div> 
        <p>Чтобы сделать ставку и получить доступ к всем выгодным аукционам ликвидаций - зарегистрируйте пожалуйста свой аккаунт 💸 это полностью бесплатно!</p>
      </div> 
      <div>
        <form class="form" method="post" action="https://restocker.ru/login">
          <input type="email" placeholder="Введите ваш email" name="email">
          <button type="submit">Далее</button>
        </form>
        <h6>обещаем, никакого спама или рекламы ✌️</h6>
        <h5>Уже зарегистрированы? <a href="">Войти</a> </h5>
      </div>
      <div class="close-btn">
         <img src="img/close-popup.svg" alt="">
      </div>  
    </div>
  </div>


<!-- Новий Попап спасибо за регистрацию -->

<div id="popup-contact" class="white-popup mfp-hide mfp-with-anim">
    <div class="popup-block popup-thanks">
      <h3>СПАСИБО ЗА РЕГИСТРАЦИЮ!</h3>
      <div class="close-btn">
         <img src="img/close-popup.svg" alt="">
      </div>  
    </div>
  </div>

<!-- Новий Попап спасибо за регистрацию -->




<!-- ШАГ 3 -->

<div id="popup-step-3" class="white-popup mfp-hide mfp-with-anim step-form">
    <div class="popup-block">
      <div class="popup-title">
        <h2>Укажите реквизиты своей организации</h2>
        <div class="step-flex">
                   <div><span class="step-one complete flex-center">1</span></div>
            <div><span class="step-two complete flex-center">2</span></div>
            <div><span class="step-three complete flex-center">3</span></div>
            <div><span class="step-four flex-center">4</span></div>
        </div> 
        <p>Мы экономим ваше время - все счета и документы для вас будут формироваться нашей системой автоматически ⏰</p>
      </div> 
      <div>
            <div class="tabs-container">
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
                                <button type="submit" class="btn btn-primary">Далее 👉</button>
                                 <div class="send-later"> <a href="#">Указать позже</a></div>
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
                                <button type="submit" class="btn btn-primary">Далее 👉</button>
                               <div class="send-later"> <a href="#">Указать позже</a></div>
                            </form>
                        </div>
                    </div>
                </div>
               
      </div>
      <div class="close-btn">
         <img src="img/close-popup.svg" alt="">
      </div>  
    </div>
  </div>


<!-- // ШАГ 3 -->


<!-- ШАГ 4 -->

<div id="popup-step-4" class="white-popup mfp-hide mfp-with-anim step-form">
    <div class="popup-block">
      <div class="popup-title">
        <h2>Последний шаг</h2>
        <div class="step-flex">
          <div><span class="step-one complete flex-center">1</span></div>
            <div><span class="step-two complete flex-center">2</span></div>
            <div><span class="step-three complete flex-center">3</span></div>
            <div><span class="step-four complete flex-center">4</span></div>
        </div> 
        <p>Укажите адрес доставки для выигранных лотов 🚚</p>
      </div> 
      <div>
            <form action="#">
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

                    <button type="submit" class="btn btn-primary">Готово 👍</button>
                    <div class="send-later"> <a href="#">Указать позже</a></div>
                
            </form>
               
      </div>
      <div class="close-btn">
         <img src="img/close-popup.svg" alt="">
      </div>  
    </div>
  </div>


<!-- // ШАГ 4 -->

<style>
    
    .popup-block .tabs-container
    {
        margin: 0px auto;
    }
    
    
    
.step-form form .form-group {
    position: relative;
    padding: 20px 0 10px;
    margin-bottom: 0px;
}



.step-form form button[type="submit"]:hover,
.step-form form button[type="submit"]:active,
.step-form form button[type="submit"]:focus {
    box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
    border-color: #4643F2;
    background: #4643F2;
}

.step-form form .form-group label {
    position: absolute;
    left: 17px;
    top: 9px;
    background: #fff;
    padding: 1px 6px;
    font-weight: 500;
    font-size: 15px;
    line-height: 19px;
    color: #2F2F2F;
    z-index: 2;
}

.step-form form .form-group .small a {
    font-style: normal;
    font-weight: 500;
    font-size: 11px;
    line-height: 14px;
    color: #4D38AF;
}

.step-form form input {
    position: relative;
    background: #fff;
    border: 1px solid #c4c4c4;
    box-sizing: border-box;
    border-radius: 2px;
    height: 58px;
    transition: all .3s;
    color: #333;
    width: 100%;
    padding-left: 15px;
    margin-bottom: 0;
}
   .step-form  form .form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
    margin-bottom: 0px;
}

.step-form  form .form-row>.col,
.step-form  form .form-row>[class*=col-] {
    padding-right: 5px;
    padding-left: 5px;
}
    .account-page form .more-fields-wrap {
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    line-height: 19px;
    color: #000000;
    text-align: center;
}
.step-form form .more-fields-wrap
    {text-align: center;}
.step-form form .more-fields-wrap .more-fields-btns span {
    background: #FFFFFF;
    border: 1px solid #4643F2;
    box-sizing: border-box;
    border-radius: 2px;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 19px;
    transition: all 0.3s;
    color: #000000;
    padding: 13px;
    text-align: center;
    min-width: 125px;
    margin: 10px 26px;
    display: inline-block;
    cursor: pointer;
}

.step-form form .more-fields-wrap .more-fields-btns span:hover,
.step-form form .more-fields-wrap .more-fields-btns span:active,
.step-form form .more-fields-wrap .more-fields-btns span:hover {
    border: 1px solid #4643F2;
    box-sizing: border-box;
    border-radius: 2px;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 19px;
    transition: all 0.3s;
    background: #4643F2;
    border-radius: 2px;
    color: #fff;
}
    .step-form .send-later
    {
        text-align: center;
    }
    .step-form .send-later a
    {
        font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 20px;
text-decoration-line: underline;
color: #808080;
    }

    
    
    
    
   .step-flex div span
    {
        margin-right: 30px!important;
    }
    .step-flex div:last-child span
    {
        margin-right: 0px!important;
    }
    .step-flex span:before
    {
            content: "";
    height: 1px;
    width: 30px;
    background-color: #C4C4C4;
    left: 19px;
    position: absolute;
    top: 50%;
    z-index: -1;
    }
    .step-flex span.complete
    {
        color: #4643F2;
    border: 1px solid #4643F2;
    }
    .step-flex span.complete:before
    {
       background-color:  #4643F2
    }
    .step-flex div:last-child span:before
    {
        content: none;
    }
    
</style>


</main>



<?php include("footer.php"); ?>




