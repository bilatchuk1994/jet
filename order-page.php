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














<section class="account-page order-page"><div class="container"><div class="row"><div class="col-12"><div class="page-title">
                            Оформление заказа
                        </div></div> <div class="col-12 col-md-10 offset-md-2 col-lg-8 offset-lg-2"><form action="https://test.restocker.ru/account/payments/1000010/delivery_settings" method="post"><input type="hidden" name="_token" value="e0Ldgb1G8ISFitnkhjyVUj2ufVBVHH4KsJ9Yzc8m"> <input type="hidden" name="delivery_method" value="cdek"> <div><div id="cdek_widget" yandex-maps-api-key="3c3408b8-bcdf-43e7-9445-4515b78fcfd8"></div> <input type="hidden" name="cdek[tariff_id]"> <input type="hidden" name="cdek[receiver_city_id]"> <input type="hidden" name="cdek[pvz_id]">  <!----></div> <div class="form-title text-center">
                                Шаг 1
                            </div> <div class="form-title text-center">
                                Доставка и получатель
                            </div> <div class="form-group"><label>Тип доставки</label> <div class="blue-brdr" style="height: auto;"><!----> <button type="button" class="btn btn-primary">
                                        Выбрать
                                    </button>


                                    <!-- Це потрібно додати в верстку -->

                                    <div class="delivery__adress">
                                        <h3>Доставка до пункта выдачи заказа.</h3>
                                        <p>Адрес ПВЗ: Хэсе цзяюань, 21</p>
                                    </div>

                                    <!-- Це потрібно додати в верстку -->

                                </div>

                                <!-- Це потрібно додати в верстку -->

                                <ul class="validation-errors">
                                    <li>Ошибка введіть адресс</li>
                                </ul>

                                <!-- Це потрібно додати в верстку -->

                            </div> <!----> <div class="form-title text-center">
                                Контакты получателя
                            </div> <div class="form-row"><div class="form-group col-md-6"><label for="delivery_address_recipient_name">Имя получателя</label> <input id="delivery_address_recipient_name" type="text" placeholder="Имя получателя" name="params[delivery_address][recipient_name]" required="required" class="form-control"> <!----></div> <div class="form-group col-md-6"><label for="delivery_address_recipient_phone">Телефон получателя</label> <div class="vue-tel-input" if="delivery_address_recipient_phone"><div tabindex="0" class="vti__dropdown"><span class="vti__selection"><div class="vti__flag ua"></div> <!----> <span class="vti__dropdown-arrow">▼</span></span> <ul class="vti__dropdown-list below" style="display: none;"><li class="vti__dropdown-item preferred"><div class="vti__flag ru"></div> <strong>Russia (Россия)</strong> <span>
          +7
        </span></li><li class="vti__dropdown-item last-preferred preferred"><div class="vti__flag ua"></div> <strong>Ukraine (Україна)</strong> <span>
          +380
        </span></li><li class="vti__dropdown-item"><div class="vti__flag af"></div> <strong>Afghanistan (&#8235;افغانستان&#8236;&lrm;)</strong> <span>
          +93
        </span></li><li class="vti__dropdown-item"><div class="vti__flag al"></div> <strong>Albania (Shqipëri)</strong> <span>
          +355
        </span></li><li class="vti__dropdown-item"><div class="vti__flag dz"></div> <strong>Algeria (&#8235;الجزائر&#8236;&lrm;)</strong> <span>
          +213
        </span></li><li class="vti__dropdown-item"><div class="vti__flag as"></div> <strong>American Samoa</strong> <span>
          +1684
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ad"></div> <strong>Andorra</strong> <span>
          +376
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ao"></div> <strong>Angola</strong> <span>
          +244
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ai"></div> <strong>Anguilla</strong> <span>
          +1264
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ag"></div> <strong>Antigua and Barbuda</strong> <span>
          +1268
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ar"></div> <strong>Argentina</strong> <span>
          +54
        </span></li><li class="vti__dropdown-item"><div class="vti__flag am"></div> <strong>Armenia (Հայաստան)</strong> <span>
          +374
        </span></li><li class="vti__dropdown-item"><div class="vti__flag aw"></div> <strong>Aruba</strong> <span>
          +297
        </span></li><li class="vti__dropdown-item"><div class="vti__flag au"></div> <strong>Australia</strong> <span>
          +61
        </span></li><li class="vti__dropdown-item"><div class="vti__flag at"></div> <strong>Austria (Österreich)</strong> <span>
          +43
        </span></li><li class="vti__dropdown-item"><div class="vti__flag az"></div> <strong>Azerbaijan (Azərbaycan)</strong> <span>
          +994
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bs"></div> <strong>Bahamas</strong> <span>
          +1242
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bh"></div> <strong>Bahrain (&#8235;البحرين&#8236;&lrm;)</strong> <span>
          +973
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bd"></div> <strong>Bangladesh (বাংলাদেশ)</strong> <span>
          +880
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bb"></div> <strong>Barbados</strong> <span>
          +1246
        </span></li><li class="vti__dropdown-item"><div class="vti__flag by"></div> <strong>Belarus (Беларусь)</strong> <span>
          +375
        </span></li><li class="vti__dropdown-item"><div class="vti__flag be"></div> <strong>Belgium (België)</strong> <span>
          +32
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bz"></div> <strong>Belize</strong> <span>
          +501
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bj"></div> <strong>Benin (Bénin)</strong> <span>
          +229
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bm"></div> <strong>Bermuda</strong> <span>
          +1441
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bt"></div> <strong>Bhutan (འབྲུག)</strong> <span>
          +975
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bo"></div> <strong>Bolivia</strong> <span>
          +591
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ba"></div> <strong>Bosnia and Herzegovina (Босна и Херцеговина)</strong> <span>
          +387
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bw"></div> <strong>Botswana</strong> <span>
          +267
        </span></li><li class="vti__dropdown-item"><div class="vti__flag br"></div> <strong>Brazil (Brasil)</strong> <span>
          +55
        </span></li><li class="vti__dropdown-item"><div class="vti__flag io"></div> <strong>British Indian Ocean Territory</strong> <span>
          +246
        </span></li><li class="vti__dropdown-item"><div class="vti__flag vg"></div> <strong>British Virgin Islands</strong> <span>
          +1284
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bn"></div> <strong>Brunei</strong> <span>
          +673
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bg"></div> <strong>Bulgaria (България)</strong> <span>
          +359
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bf"></div> <strong>Burkina Faso</strong> <span>
          +226
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bi"></div> <strong>Burundi (Uburundi)</strong> <span>
          +257
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kh"></div> <strong>Cambodia (កម្ពុជា)</strong> <span>
          +855
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cm"></div> <strong>Cameroon (Cameroun)</strong> <span>
          +237
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ca"></div> <strong>Canada</strong> <span>
          +1
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cv"></div> <strong>Cape Verde (Kabu Verdi)</strong> <span>
          +238
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bq"></div> <strong>Caribbean Netherlands</strong> <span>
          +599
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ky"></div> <strong>Cayman Islands</strong> <span>
          +1345
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cf"></div> <strong>Central African Republic (République centrafricaine)</strong> <span>
          +236
        </span></li><li class="vti__dropdown-item"><div class="vti__flag td"></div> <strong>Chad (Tchad)</strong> <span>
          +235
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cl"></div> <strong>Chile</strong> <span>
          +56
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cn"></div> <strong>China (中国)</strong> <span>
          +86
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cx"></div> <strong>Christmas Island</strong> <span>
          +61
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cc"></div> <strong>Cocos (Keeling) Islands</strong> <span>
          +61
        </span></li><li class="vti__dropdown-item"><div class="vti__flag co"></div> <strong>Colombia</strong> <span>
          +57
        </span></li><li class="vti__dropdown-item"><div class="vti__flag km"></div> <strong>Comoros (&#8235;جزر القمر&#8236;&lrm;)</strong> <span>
          +269
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cd"></div> <strong>Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</strong> <span>
          +243
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cg"></div> <strong>Congo (Republic) (Congo-Brazzaville)</strong> <span>
          +242
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ck"></div> <strong>Cook Islands</strong> <span>
          +682
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cr"></div> <strong>Costa Rica</strong> <span>
          +506
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ci"></div> <strong>Côte d’Ivoire</strong> <span>
          +225
        </span></li><li class="vti__dropdown-item"><div class="vti__flag hr"></div> <strong>Croatia (Hrvatska)</strong> <span>
          +385
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cu"></div> <strong>Cuba</strong> <span>
          +53
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cw"></div> <strong>Curaçao</strong> <span>
          +599
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cy"></div> <strong>Cyprus (Κύπρος)</strong> <span>
          +357
        </span></li><li class="vti__dropdown-item"><div class="vti__flag cz"></div> <strong>Czech Republic (Česká republika)</strong> <span>
          +420
        </span></li><li class="vti__dropdown-item"><div class="vti__flag dk"></div> <strong>Denmark (Danmark)</strong> <span>
          +45
        </span></li><li class="vti__dropdown-item"><div class="vti__flag dj"></div> <strong>Djibouti</strong> <span>
          +253
        </span></li><li class="vti__dropdown-item"><div class="vti__flag dm"></div> <strong>Dominica</strong> <span>
          +1767
        </span></li><li class="vti__dropdown-item"><div class="vti__flag do"></div> <strong>Dominican Republic (República Dominicana)</strong> <span>
          +1
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ec"></div> <strong>Ecuador</strong> <span>
          +593
        </span></li><li class="vti__dropdown-item"><div class="vti__flag eg"></div> <strong>Egypt (&#8235;مصر&#8236;&lrm;)</strong> <span>
          +20
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sv"></div> <strong>El Salvador</strong> <span>
          +503
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gq"></div> <strong>Equatorial Guinea (Guinea Ecuatorial)</strong> <span>
          +240
        </span></li><li class="vti__dropdown-item"><div class="vti__flag er"></div> <strong>Eritrea</strong> <span>
          +291
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ee"></div> <strong>Estonia (Eesti)</strong> <span>
          +372
        </span></li><li class="vti__dropdown-item"><div class="vti__flag et"></div> <strong>Ethiopia</strong> <span>
          +251
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fk"></div> <strong>Falkland Islands (Islas Malvinas)</strong> <span>
          +500
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fo"></div> <strong>Faroe Islands (Føroyar)</strong> <span>
          +298
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fj"></div> <strong>Fiji</strong> <span>
          +679
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fi"></div> <strong>Finland (Suomi)</strong> <span>
          +358
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fr"></div> <strong>France</strong> <span>
          +33
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gf"></div> <strong>French Guiana (Guyane française)</strong> <span>
          +594
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pf"></div> <strong>French Polynesia (Polynésie française)</strong> <span>
          +689
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ga"></div> <strong>Gabon</strong> <span>
          +241
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gm"></div> <strong>Gambia</strong> <span>
          +220
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ge"></div> <strong>Georgia (საქართველო)</strong> <span>
          +995
        </span></li><li class="vti__dropdown-item"><div class="vti__flag de"></div> <strong>Germany (Deutschland)</strong> <span>
          +49
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gh"></div> <strong>Ghana (Gaana)</strong> <span>
          +233
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gi"></div> <strong>Gibraltar</strong> <span>
          +350
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gr"></div> <strong>Greece (Ελλάδα)</strong> <span>
          +30
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gl"></div> <strong>Greenland (Kalaallit Nunaat)</strong> <span>
          +299
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gd"></div> <strong>Grenada</strong> <span>
          +1473
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gp"></div> <strong>Guadeloupe</strong> <span>
          +590
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gu"></div> <strong>Guam</strong> <span>
          +1671
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gt"></div> <strong>Guatemala</strong> <span>
          +502
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gg"></div> <strong>Guernsey</strong> <span>
          +44
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gn"></div> <strong>Guinea (Guinée)</strong> <span>
          +224
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gw"></div> <strong>Guinea-Bissau (Guiné Bissau)</strong> <span>
          +245
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gy"></div> <strong>Guyana</strong> <span>
          +592
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ht"></div> <strong>Haiti</strong> <span>
          +509
        </span></li><li class="vti__dropdown-item"><div class="vti__flag hn"></div> <strong>Honduras</strong> <span>
          +504
        </span></li><li class="vti__dropdown-item"><div class="vti__flag hk"></div> <strong>Hong Kong (香港)</strong> <span>
          +852
        </span></li><li class="vti__dropdown-item"><div class="vti__flag hu"></div> <strong>Hungary (Magyarország)</strong> <span>
          +36
        </span></li><li class="vti__dropdown-item"><div class="vti__flag is"></div> <strong>Iceland (Ísland)</strong> <span>
          +354
        </span></li><li class="vti__dropdown-item"><div class="vti__flag in"></div> <strong>India (भारत)</strong> <span>
          +91
        </span></li><li class="vti__dropdown-item"><div class="vti__flag id"></div> <strong>Indonesia</strong> <span>
          +62
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ir"></div> <strong>Iran (&#8235;ایران&#8236;&lrm;)</strong> <span>
          +98
        </span></li><li class="vti__dropdown-item"><div class="vti__flag iq"></div> <strong>Iraq (&#8235;العراق&#8236;&lrm;)</strong> <span>
          +964
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ie"></div> <strong>Ireland</strong> <span>
          +353
        </span></li><li class="vti__dropdown-item"><div class="vti__flag im"></div> <strong>Isle of Man</strong> <span>
          +44
        </span></li><li class="vti__dropdown-item"><div class="vti__flag il"></div> <strong>Israel (&#8235;ישראל&#8236;&lrm;)</strong> <span>
          +972
        </span></li><li class="vti__dropdown-item"><div class="vti__flag it"></div> <strong>Italy (Italia)</strong> <span>
          +39
        </span></li><li class="vti__dropdown-item"><div class="vti__flag jm"></div> <strong>Jamaica</strong> <span>
          +1876
        </span></li><li class="vti__dropdown-item"><div class="vti__flag jp"></div> <strong>Japan (日本)</strong> <span>
          +81
        </span></li><li class="vti__dropdown-item"><div class="vti__flag je"></div> <strong>Jersey</strong> <span>
          +44
        </span></li><li class="vti__dropdown-item"><div class="vti__flag jo"></div> <strong>Jordan (&#8235;الأردن&#8236;&lrm;)</strong> <span>
          +962
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kz"></div> <strong>Kazakhstan (Казахстан)</strong> <span>
          +7
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ke"></div> <strong>Kenya</strong> <span>
          +254
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ki"></div> <strong>Kiribati</strong> <span>
          +686
        </span></li><li class="vti__dropdown-item"><div class="vti__flag xk"></div> <strong>Kosovo</strong> <span>
          +383
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kw"></div> <strong>Kuwait (&#8235;الكويت&#8236;&lrm;)</strong> <span>
          +965
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kg"></div> <strong>Kyrgyzstan (Кыргызстан)</strong> <span>
          +996
        </span></li><li class="vti__dropdown-item"><div class="vti__flag la"></div> <strong>Laos (ລາວ)</strong> <span>
          +856
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lv"></div> <strong>Latvia (Latvija)</strong> <span>
          +371
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lb"></div> <strong>Lebanon (&#8235;لبنان&#8236;&lrm;)</strong> <span>
          +961
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ls"></div> <strong>Lesotho</strong> <span>
          +266
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lr"></div> <strong>Liberia</strong> <span>
          +231
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ly"></div> <strong>Libya (&#8235;ليبيا&#8236;&lrm;)</strong> <span>
          +218
        </span></li><li class="vti__dropdown-item"><div class="vti__flag li"></div> <strong>Liechtenstein</strong> <span>
          +423
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lt"></div> <strong>Lithuania (Lietuva)</strong> <span>
          +370
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lu"></div> <strong>Luxembourg</strong> <span>
          +352
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mo"></div> <strong>Macau (澳門)</strong> <span>
          +853
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mk"></div> <strong>Macedonia (FYROM) (Македонија)</strong> <span>
          +389
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mg"></div> <strong>Madagascar (Madagasikara)</strong> <span>
          +261
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mw"></div> <strong>Malawi</strong> <span>
          +265
        </span></li><li class="vti__dropdown-item"><div class="vti__flag my"></div> <strong>Malaysia</strong> <span>
          +60
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mv"></div> <strong>Maldives</strong> <span>
          +960
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ml"></div> <strong>Mali</strong> <span>
          +223
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mt"></div> <strong>Malta</strong> <span>
          +356
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mh"></div> <strong>Marshall Islands</strong> <span>
          +692
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mq"></div> <strong>Martinique</strong> <span>
          +596
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mr"></div> <strong>Mauritania (&#8235;موريتانيا&#8236;&lrm;)</strong> <span>
          +222
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mu"></div> <strong>Mauritius (Moris)</strong> <span>
          +230
        </span></li><li class="vti__dropdown-item"><div class="vti__flag yt"></div> <strong>Mayotte</strong> <span>
          +262
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mx"></div> <strong>Mexico (México)</strong> <span>
          +52
        </span></li><li class="vti__dropdown-item"><div class="vti__flag fm"></div> <strong>Micronesia</strong> <span>
          +691
        </span></li><li class="vti__dropdown-item"><div class="vti__flag md"></div> <strong>Moldova (Republica Moldova)</strong> <span>
          +373
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mc"></div> <strong>Monaco</strong> <span>
          +377
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mn"></div> <strong>Mongolia (Монгол)</strong> <span>
          +976
        </span></li><li class="vti__dropdown-item"><div class="vti__flag me"></div> <strong>Montenegro (Crna Gora)</strong> <span>
          +382
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ms"></div> <strong>Montserrat</strong> <span>
          +1664
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ma"></div> <strong>Morocco (&#8235;المغرب&#8236;&lrm;)</strong> <span>
          +212
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mz"></div> <strong>Mozambique (Moçambique)</strong> <span>
          +258
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mm"></div> <strong>Myanmar (Burma) (မြန်မာ)</strong> <span>
          +95
        </span></li><li class="vti__dropdown-item"><div class="vti__flag na"></div> <strong>Namibia (Namibië)</strong> <span>
          +264
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nr"></div> <strong>Nauru</strong> <span>
          +674
        </span></li><li class="vti__dropdown-item"><div class="vti__flag np"></div> <strong>Nepal (नेपाल)</strong> <span>
          +977
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nl"></div> <strong>Netherlands (Nederland)</strong> <span>
          +31
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nc"></div> <strong>New Caledonia (Nouvelle-Calédonie)</strong> <span>
          +687
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nz"></div> <strong>New Zealand</strong> <span>
          +64
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ni"></div> <strong>Nicaragua</strong> <span>
          +505
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ne"></div> <strong>Niger (Nijar)</strong> <span>
          +227
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ng"></div> <strong>Nigeria</strong> <span>
          +234
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nu"></div> <strong>Niue</strong> <span>
          +683
        </span></li><li class="vti__dropdown-item"><div class="vti__flag nf"></div> <strong>Norfolk Island</strong> <span>
          +672
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kp"></div> <strong>North Korea (조선 민주주의 인민 공화국)</strong> <span>
          +850
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mp"></div> <strong>Northern Mariana Islands</strong> <span>
          +1670
        </span></li><li class="vti__dropdown-item"><div class="vti__flag no"></div> <strong>Norway (Norge)</strong> <span>
          +47
        </span></li><li class="vti__dropdown-item"><div class="vti__flag om"></div> <strong>Oman (&#8235;عُمان&#8236;&lrm;)</strong> <span>
          +968
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pk"></div> <strong>Pakistan (&#8235;پاکستان&#8236;&lrm;)</strong> <span>
          +92
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pw"></div> <strong>Palau</strong> <span>
          +680
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ps"></div> <strong>Palestine (&#8235;فلسطين&#8236;&lrm;)</strong> <span>
          +970
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pa"></div> <strong>Panama (Panamá)</strong> <span>
          +507
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pg"></div> <strong>Papua New Guinea</strong> <span>
          +675
        </span></li><li class="vti__dropdown-item"><div class="vti__flag py"></div> <strong>Paraguay</strong> <span>
          +595
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pe"></div> <strong>Peru (Perú)</strong> <span>
          +51
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ph"></div> <strong>Philippines</strong> <span>
          +63
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pl"></div> <strong>Poland (Polska)</strong> <span>
          +48
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pt"></div> <strong>Portugal</strong> <span>
          +351
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pr"></div> <strong>Puerto Rico</strong> <span>
          +1
        </span></li><li class="vti__dropdown-item"><div class="vti__flag qa"></div> <strong>Qatar (&#8235;قطر&#8236;&lrm;)</strong> <span>
          +974
        </span></li><li class="vti__dropdown-item"><div class="vti__flag re"></div> <strong>Réunion (La Réunion)</strong> <span>
          +262
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ro"></div> <strong>Romania (România)</strong> <span>
          +40
        </span></li><li class="vti__dropdown-item preferred"><div class="vti__flag ru"></div> <strong>Russia (Россия)</strong> <span>
          +7
        </span></li><li class="vti__dropdown-item"><div class="vti__flag rw"></div> <strong>Rwanda</strong> <span>
          +250
        </span></li><li class="vti__dropdown-item"><div class="vti__flag bl"></div> <strong>Saint Barthélemy</strong> <span>
          +590
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sh"></div> <strong>Saint Helena</strong> <span>
          +290
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kn"></div> <strong>Saint Kitts and Nevis</strong> <span>
          +1869
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lc"></div> <strong>Saint Lucia</strong> <span>
          +1758
        </span></li><li class="vti__dropdown-item"><div class="vti__flag mf"></div> <strong>Saint Martin (Saint-Martin (partie française))</strong> <span>
          +590
        </span></li><li class="vti__dropdown-item"><div class="vti__flag pm"></div> <strong>Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</strong> <span>
          +508
        </span></li><li class="vti__dropdown-item"><div class="vti__flag vc"></div> <strong>Saint Vincent and the Grenadines</strong> <span>
          +1784
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ws"></div> <strong>Samoa</strong> <span>
          +685
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sm"></div> <strong>San Marino</strong> <span>
          +378
        </span></li><li class="vti__dropdown-item"><div class="vti__flag st"></div> <strong>São Tomé and Príncipe (São Tomé e Príncipe)</strong> <span>
          +239
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sa"></div> <strong>Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)</strong> <span>
          +966
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sn"></div> <strong>Senegal (Sénégal)</strong> <span>
          +221
        </span></li><li class="vti__dropdown-item"><div class="vti__flag rs"></div> <strong>Serbia (Србија)</strong> <span>
          +381
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sc"></div> <strong>Seychelles</strong> <span>
          +248
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sl"></div> <strong>Sierra Leone</strong> <span>
          +232
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sg"></div> <strong>Singapore</strong> <span>
          +65
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sx"></div> <strong>Sint Maarten</strong> <span>
          +1721
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sk"></div> <strong>Slovakia (Slovensko)</strong> <span>
          +421
        </span></li><li class="vti__dropdown-item"><div class="vti__flag si"></div> <strong>Slovenia (Slovenija)</strong> <span>
          +386
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sb"></div> <strong>Solomon Islands</strong> <span>
          +677
        </span></li><li class="vti__dropdown-item"><div class="vti__flag so"></div> <strong>Somalia (Soomaaliya)</strong> <span>
          +252
        </span></li><li class="vti__dropdown-item"><div class="vti__flag za"></div> <strong>South Africa</strong> <span>
          +27
        </span></li><li class="vti__dropdown-item"><div class="vti__flag kr"></div> <strong>South Korea (대한민국)</strong> <span>
          +82
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ss"></div> <strong>South Sudan (&#8235;جنوب السودان&#8236;&lrm;)</strong> <span>
          +211
        </span></li><li class="vti__dropdown-item"><div class="vti__flag es"></div> <strong>Spain (España)</strong> <span>
          +34
        </span></li><li class="vti__dropdown-item"><div class="vti__flag lk"></div> <strong>Sri Lanka (ශ්&zwj;රී ලංකාව)</strong> <span>
          +94
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sd"></div> <strong>Sudan (&#8235;السودان&#8236;&lrm;)</strong> <span>
          +249
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sr"></div> <strong>Suriname</strong> <span>
          +597
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sj"></div> <strong>Svalbard and Jan Mayen</strong> <span>
          +47
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sz"></div> <strong>Swaziland</strong> <span>
          +268
        </span></li><li class="vti__dropdown-item"><div class="vti__flag se"></div> <strong>Sweden (Sverige)</strong> <span>
          +46
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ch"></div> <strong>Switzerland (Schweiz)</strong> <span>
          +41
        </span></li><li class="vti__dropdown-item"><div class="vti__flag sy"></div> <strong>Syria (&#8235;سوريا&#8236;&lrm;)</strong> <span>
          +963
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tw"></div> <strong>Taiwan (台灣)</strong> <span>
          +886
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tj"></div> <strong>Tajikistan</strong> <span>
          +992
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tz"></div> <strong>Tanzania</strong> <span>
          +255
        </span></li><li class="vti__dropdown-item"><div class="vti__flag th"></div> <strong>Thailand (ไทย)</strong> <span>
          +66
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tl"></div> <strong>Timor-Leste</strong> <span>
          +670
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tg"></div> <strong>Togo</strong> <span>
          +228
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tk"></div> <strong>Tokelau</strong> <span>
          +690
        </span></li><li class="vti__dropdown-item"><div class="vti__flag to"></div> <strong>Tonga</strong> <span>
          +676
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tt"></div> <strong>Trinidad and Tobago</strong> <span>
          +1868
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tn"></div> <strong>Tunisia (&#8235;تونس&#8236;&lrm;)</strong> <span>
          +216
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tr"></div> <strong>Turkey (Türkiye)</strong> <span>
          +90
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tm"></div> <strong>Turkmenistan</strong> <span>
          +993
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tc"></div> <strong>Turks and Caicos Islands</strong> <span>
          +1649
        </span></li><li class="vti__dropdown-item"><div class="vti__flag tv"></div> <strong>Tuvalu</strong> <span>
          +688
        </span></li><li class="vti__dropdown-item"><div class="vti__flag vi"></div> <strong>U.S. Virgin Islands</strong> <span>
          +1340
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ug"></div> <strong>Uganda</strong> <span>
          +256
        </span></li><li class="vti__dropdown-item preferred"><div class="vti__flag ua"></div> <strong>Ukraine (Україна)</strong> <span>
          +380
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ae"></div> <strong>United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</strong> <span>
          +971
        </span></li><li class="vti__dropdown-item"><div class="vti__flag gb"></div> <strong>United Kingdom</strong> <span>
          +44
        </span></li><li class="vti__dropdown-item"><div class="vti__flag us"></div> <strong>United States</strong> <span>
          +1
        </span></li><li class="vti__dropdown-item"><div class="vti__flag uy"></div> <strong>Uruguay</strong> <span>
          +598
        </span></li><li class="vti__dropdown-item"><div class="vti__flag uz"></div> <strong>Uzbekistan (Oʻzbekiston)</strong> <span>
          +998
        </span></li><li class="vti__dropdown-item"><div class="vti__flag vu"></div> <strong>Vanuatu</strong> <span>
          +678
        </span></li><li class="vti__dropdown-item"><div class="vti__flag va"></div> <strong>Vatican City (Città del Vaticano)</strong> <span>
          +39
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ve"></div> <strong>Venezuela</strong> <span>
          +58
        </span></li><li class="vti__dropdown-item"><div class="vti__flag vn"></div> <strong>Vietnam (Việt Nam)</strong> <span>
          +84
        </span></li><li class="vti__dropdown-item"><div class="vti__flag wf"></div> <strong>Wallis and Futuna (Wallis-et-Futuna)</strong> <span>
          +681
        </span></li><li class="vti__dropdown-item"><div class="vti__flag eh"></div> <strong>Western Sahara (&#8235;الصحراء الغربية&#8236;&lrm;)</strong> <span>
          +212
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ye"></div> <strong>Yemen (&#8235;اليمن&#8236;&lrm;)</strong> <span>
          +967
        </span></li><li class="vti__dropdown-item"><div class="vti__flag zm"></div> <strong>Zambia</strong> <span>
          +260
        </span></li><li class="vti__dropdown-item"><div class="vti__flag zw"></div> <strong>Zimbabwe</strong> <span>
          +263
        </span></li><li class="vti__dropdown-item"><div class="vti__flag ax"></div> <strong>Åland Islands</strong> <span>
          +358
        </span></li></ul></div> <input type="tel" placeholder="Телефон получателя" required="required" autocomplete="on" name="params[delivery_address][recipient_phone]" id="" maxlength="25" tabindex="0" class="vti__input"></div> <!----></div></div> <div class="information-text">
                                Если получаете не вы - введите контакты получателя
                            </div> <!----> <button type="submit" class="btn btn-primary">Следующий шаг</button></form></div></div></div></section>










<?php include("footer.php"); ?>
