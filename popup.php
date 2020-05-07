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
        <a class="popup-btn" data-effect="mfp-zoom-in" href="#popup-contact">Попап 2</a>
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


<div id="popup-contact" class="white-popup mfp-hide mfp-with-anim">
    <div class="popup-block two-step-popup">
      <div class="popup-title">
        <h2>Почти готово</h2>
        <div class="step-flex">
          <div><span class="step-one flex-center">1</span></div>
          <div><span class="step-two flex-center">2</span></div>
        </div>  
        <p>Пожалуйста, укажите свое имя и номер телефона</p>
      </div> 
      <div>
        <form class="form" method="post" action="https://restocker.ru/login">
          <input type="text" placeholder="Введите ваше имя" name="name">
          <input class="phone-input" type="tel" placeholder="+7(___) ___ __ __" name="phone">
          <button type="submit">ЗАРЕГЕСТИРОВАТЬСЯ 👌</button>
        </form>
      </div>
      <div class="close-btn">
         <img src="img/close-popup.svg" alt="">
      </div>  
    </div>
  </div>


</main>



<?php include("footer.php"); ?>




