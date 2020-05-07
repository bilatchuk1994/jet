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
        <a class="popup-btn" href="#popup-login">Попап 1</a><br><br>
        <a class="popup-btn" href="#popup-contact">Попап 2</a>
      </div>
    </div>
  </div>
</section>


<div id="popup-login" class="white-popup mfp-hide mfp-with-anim">
    <div class="popup-block">
      <div class="popup-title">
        <h2>Войдите или зарегистрируйтесь</h2>
        <p>Чтобы сделать ставку и получить доступ к всем выгодным аукционам ликвидаций - зарегистрируйте пожалуйста свой аккаунт 💸 это полностью бесплатно!</p>
      </div> 
      <div>
        <form method="post" action="https://restocker.ru/login">
          <input type="email" placeholder="Ваш email" name="email">
          <button type="submit">Далее</button>
        </form>
        <h6>обещаем, никакого спама или рекламы ✌️</h6>
        <h5>Уже зарегистрированы? <a href="">Войти</a> </h5>
      </div>
    </div>
  </div>


<div id="popup-contact" class="white-popup mfp-hide mfp-with-anim">
    <div class="popup-block">
      <div class="popup-title">
        <h2>Введите вашу контактную информацию</h2>
      </div>
      <div>
        <form action="" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" placeholder="Ваше имя">
            </div>
            <div class="col-lg-6">
              <input type="text" placeholder="Ваша фамилия">
            </div>
          </div>
          <input type="password" placeholder="Ваш пароль">
          <div class="input-phone"></div>
          <button>Продолжить</button>
        </form>
      </div>
      <div class="close-btn">
          <img src="img/close.svg" alt="">
        </div>
    </div>
  </div>


</main>



<?php include("footer.php"); ?>




