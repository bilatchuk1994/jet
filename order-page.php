<?php include("header-new.php"); ?>


<section class="account-page order-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    Оформление заказа
                </div>
            </div>
            <div class="col-12 col-md-10 offset-md-2 col-lg-8 offset-lg-2">
                <form action="#" class="delivery">
                    <div class="form-title text-center">
                        Шаг 1
                    </div>
                    <div class="form-title text-center">
                        Доставка и получатель
                    </div>
                    <div class="form-group">
                        <label>Страна</label>
                        <!--  Сказали что тут будет виджет -->
                        <div class="blue-brdr">Курьером / Самовывоз</div>
                    </div>
                    <div class="form-group">
                        <label>Страна</label>
                        <input type="text" class="form-control" placeholder="Страна">
                    </div>
                    <div class="form-group">
                        <label>Город</label>
                        <input type="tel" class="form-control" placeholder="Город">
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
                    <div class="information-text">
                        Данные доставки взяты из вашего профиля- при необходимости введите новый адрес доставки
                    </div>
                    <div class="form-title text-center">
                        Доставка и получатель
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Имя</label>
                            <input type="text" class="form-control error" placeholder="Имя">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Телефон</label>
                            <input type="text" class="form-control" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="information-text">
                        Если получаете не вы - введите контакты получателя
                    </div>
                    <button type="submit" class="btn btn-primary">Следующий шаг</button>
                </form>

            </div>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>
