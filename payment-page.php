<?php include("header-new.php"); ?>



<section class="account-page payment-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    Оформление заказа
                </div>
            </div>
            <div class="col-12">
                <div class="form-title text-center">
                    Выигранные лоты на оплату
                </div>
                <div class="d-none d-md-block">
                    <table class="payment-desktop-table table ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-left" style="width:15%;">ТОВАР</th>
                                <th scope="col" style="width:45%;"></th>
                                <th scope="col" style="width:10%;">КОЛИЧЕСТВО</th>
                                <th scope="col" style="width:15%;">РОЗНИЧНАЯ ЦЕНА</th>
                                <th scope="col" style="width:15%;">РАССЧЕТНАЯ ЦЕНА</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="img/product_1.png" alt=""></td>
                                <td class="text-left">ТРИММЕР HAMMER FLEX ETR1300 220B 1200BT 75000Б/МИН ЛЕСКА 2ММШИРИНА РЕЗА 380ММ</td>
                                <td>25</td>
                                <td>1 000 000 ₽</td>
                                <td>1 000 000 ₽</td>
                            </tr>
                            <tr>
                                <td><img src="img/product_1.png" alt=""></td>
                                <td class="text-left">ТРИММЕР HAMMER FLEX ETR1300 220B 1200BT 75000Б
                                    ЛЕСКА</td>
                                <td>2</td>
                                <td>1 000 000 ₽</td>
                                <td>1 000 000 ₽</td>

                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">
                        Смотреть все товары лота</button>
                </div>

                <!-- !!!!!!!!!!!!!!!!!!!!!!  НОВЫЙ БЛОК !!!!!!!!!!!!!!!!!!!!-->
                <div class="payment-mobile-table d-md-none">
                    <div class="payment-mobile-table-title">
                        ТОВАР
                    </div>
                    <div class="payment-mobile-table-list">
                        <div class="product">
                            <div class="row">
                                <div class="col-5 product-image">
                                    <img src="img//product_1.png" alt="">
                                </div>
                                <div class="col-7 product-title">
                                    ТРИММЕР HAMMER FLEX ETR1300 220B 1200BT 75000Б/МИН ЛЕСКА 2ММШИРИНА РЕЗА 380ММ
                                </div>
                            </div>
                            <p>КОЛИЧЕСТВО<span>25</span></p>
                            <p>РОЗНИЧНАЯ ЦЕНА<span>1 000 000 ₽</span></p>
                            <p>РАССЧЕТНАЯ ЦЕНА<span>1 000 000 ₽</span></p>
                        </div>
                        <div class="product">
                            <div class="row">
                                <div class="col-5 product-image">
                                    <img src="img/product_1.png" alt="">
                                </div>
                                <div class="col-7 product-title">
                                    ТРИММЕР HAMMER FLEX ETR1300 220B 1200BT 75000Б
                                    ЛЕСКА
                                </div>
                            </div>
                            <p>КОЛИЧЕСТВО<span>2</span></p>
                            <p>РОЗНИЧНАЯ ЦЕНА<span>1 000 000 ₽</span></p>
                            <p>РАССЧЕТНАЯ ЦЕНА<span>1 020 000 ₽</span></p>
                        </div>
                    </div>
                </div>
                <!-- !!!!!!!!!!!!!!!!!!!!!! ОКОНЧАНИЕ НОВОГО БЛОКА !!!!!!!!!!!!!!!!!!!!-->




                <div class="payment-total">
                    <p>Комиссия платформы (10% от финальной ставки) <span>2 000 000 Р</span></p>
                    <p>Стоимость доставки: <span>20 000 Р </span></p>
                    <p>В том числе ндс <span>2354 Р</span></p>
                    <p>Сумма к оплате (с учетом НДС): <span>2 020 000 Р</span></p>
                </div>
            </div>

            <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="tabs-container">
                    <div class="form-title text-center">
                        Выбрать способ оплаты
                    </div>

                    <ul class="tabs">
                        <li class="active">
                            <a href="">Оплата картой</a>
                        </li>
                        <li>
                            <a href="">Выставление счета</a>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tabs-panel active" data-index="0">

                            <form action="#">

                                <div class="payment-card-blck">
                                    <button type="submit" class="btn btn-primary"><svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M26.4017 4.70514H1.91453C0.846154 4.70514 0 5.60257 0 6.6624V21.6966C0 21.7051 0 21.7137 0 21.7222C0.00854701 22.765 0.871795 23.6026 1.91453 23.594H2.90598V11.312C2.90598 9.30343 4.54701 7.69659 6.55555 7.69659H28.2991V6.6624C28.2991 5.60257 27.4701 4.70514 26.4017 4.70514Z" fill="white" />
                                                <path d="M29.0681 22.3974C28.4869 21.9102 27.6237 21.9872 27.1365 22.5684C27.0938 22.6196 27.051 22.6624 27.0083 22.6966C26.6408 22.9957 26.1023 22.9359 25.8032 22.5684C25.5468 22.2521 25.1536 22.0641 24.7433 22.0641C23.9741 22.0641 23.3587 22.6795 23.3673 23.4487C23.3673 24.2094 23.9912 24.8248 24.7519 24.8248C25.1621 24.8333 25.5553 24.6453 25.8117 24.329C25.9741 24.1325 26.2134 24.0214 26.4698 24.0214C26.7177 24.0128 26.9656 24.1239 27.128 24.3205C27.1878 24.3889 27.2391 24.4487 27.3074 24.5C27.8886 24.9872 28.7519 24.9102 29.2391 24.329C29.7263 23.7478 29.6493 22.8846 29.0681 22.3974Z" fill="white" />
                                                <path d="M31.0511 9.40601H6.56395H6.55541C5.48703 9.39746 4.62378 10.2522 4.61523 11.312V12.5684H32.9913H32.9999V11.312C32.9999 10.2436 32.1195 9.40601 31.0511 9.40601Z" fill="white" />
                                                <path d="M32.9913 14.2778H4.61523V16.5H32.9913V14.2778Z" fill="white" />
                                                <path d="M4.61523 18.2094V26.3376C4.61523 27.4145 5.47848 28.2863 6.5554 28.2949H31.0426C32.1195 28.2863 32.9828 27.4145 32.9913 26.3376V18.2094H4.61523ZM30.7605 25.1667C29.8033 26.5769 27.8802 26.953 26.4699 25.9957C25.9571 26.3462 25.3588 26.5257 24.7434 26.5257C23.034 26.5257 21.658 25.1325 21.658 23.4316C21.658 21.7308 23.034 20.3462 24.7434 20.3462C25.3588 20.3462 25.9571 20.5257 26.4699 20.8761C27.5212 20.1667 28.8887 20.1667 29.9315 20.8761C31.3417 21.8333 31.7178 23.7564 30.7605 25.1667Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="33" height="33" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> ОПЛАТИТЬ КАРТОЙ</button>
                                </div>

                            </form>



                        </div>
                        <div class="tabs-panel" data-index="1">
                            <div class="form-title text-center">
                                Выбрать способ оплаты
                            </div>
                            <div class="payment-steps">
                                <div class="row text-center">
                                    <div class="col-12 col-md-4">
                                        <img src="img/icon_coin.png" class="payment-step-img" alt="">
                                        <div class="payment-step-title">
                                            Шаг 1
                                        </div>
                                        <div class="payment-step-text">
                                            Скачайте счет на оплату
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <img src="img/icon_file.png" class="payment-step-img" alt="">
                                        <div class="payment-step-title">
                                            Шаг 2
                                        </div>
                                        <div class="payment-step-text">
                                            Загрузите в свой клиент банк
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <img src="img/icon_paper.png" class="payment-step-img" alt="">
                                        <div class="payment-step-title">
                                            Шаг 3
                                        </div>
                                        <div class="payment-step-text">
                                            Проведите оплату по счету
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="#">

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
                                <div class="information-text">
                                    Что бы закончить процесс приобритения лота, оплатите счет
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.1895 12.1958C19.1181 12.0245 18.9513 11.9127 18.7662 11.9127H13.7454V0.458195C13.7454 0.205279 13.5402 0 13.2873 0H5.95635C5.70344 0 5.49816 0.205279 5.49816 0.458195V11.9127H0.45819C0.2731 11.9127 0.106308 12.0245 0.0348319 12.195C-0.0357421 12.3663 0.00274487 12.5633 0.133799 12.6944L9.2745 21.8653C9.36062 21.9515 9.47703 22 9.59889 22C9.72075 22 9.83716 21.9515 9.92328 21.8662L19.0906 12.6953C19.2216 12.5642 19.261 12.3672 19.1895 12.1958Z" fill="white" />
                                    </svg>
                                    Скачать счет</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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

</script>
<?php include("footer.php"); ?>
