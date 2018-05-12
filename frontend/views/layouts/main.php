<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>



<body>
<?php $this->beginBody() ?>



<!--HEADER START-->
<header class="miracle">
    <div class="header_top hidden-xs"> 
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-9">
                    <div class="header_menu">
                        <a class="menu_active" href="/">Главная</a>
                        <a href="/">Услуги</a>
                        <a href="/about">О компании</a>
                        <a href="/article">Строительство и ремонт</a>
                        <a href="/site/login">Мебель</a>
                        <a href="/">От банков</a>
                        <a href="/">Контакты</a>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3">
                    <div class="want_to_sell">
                        <div class="to_sell_btn">
                            Хочу продать
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_top_mob visible-xs">
        <a class="tell_numb" href="tel:74951087479">+7 495 108 74 79</a>
        <a class="tell_numb" href="tel:34667697007">+34 667 697 007</a>
        <div class="call_back">Перезвонить</div>
    </div>
    <div class="header_white_block hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div class="header_logo">
                        <a href="index.html"><img src="/style/img/logo_header.png" alt="Alternate Text" /></a>

                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="slogam_company">Продажа недвижимости в Испании по выгодным цена</div>
                </div>
                <div class="col-xs-8">
                    <div class="call_back_container">
                        <a class="tell_numb" href="tel:74951087479"><img src="/style/img/blue_phone.png" alt="Alternate Text" />+7 495 108 74 79</a>
                        <a class="tell_numb" href="tel:34667697007"><img src="/style/img/blue_phone.png" alt="Alternate Text" />+34 667 697 007</a>
                        <div class="call_back">Перезвонить</div>
                        <div class="like"><span>12</span></div>
                        <div class="search">
                            <img src="/style/img/search.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_white_block_mob visible-xs">
        <div><a href="index.html"><img src="/style/img/logo_header.png" /></a></div>
        <div class="menu_mob">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="mob_drop_men">
            <a class="menu_active" href="#">Главная</a>
            <a href="#">Услуги</a>
            <a href="#">О компании</a>
            <a href="#">Строительство и ремонт</a>
            <a href="#">Мебель</a>
            <a href="#">От банков</a>
            <a href="#">Контакты</a>
        </div>
    </div>
    <div class="container relative z-index">
        <div class="row">
            <div class="header_search_text">
                <h1>Продажа недвижимости в Испании по выгодным ценам”</h1>
                <p>В нашей базе 4811 объектов.<span class="open_header_tab">Показать всё </span></p>
            </div>
            <div class="header_tab">
                <div class="head_tab_btn_container">
                    <div class="header_btn_block active_head_btn">
                        <p>Квартиры <sup>1523</sup></p>
                    </div>
                    <div class="header_btn_block">
                        <p>Дома <sup>1523</sup></p>
                    </div>
                    <div class="header_btn_block">
                        <p>Участки <sup>1523</sup></p>
                    </div>
                    <div class="header_btn_block">
                        <p>Бизнес <sup>1523</sup></p>
                    </div>
                    <div class="header_btn_block">
                        <p>Коммерция <sup>1523</sup></p>
                    </div>
                </div>
                <div class="header_tab_container">
                    <div class="header_tab_block">
                        <h6>По класу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Кол-во комнат</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По районам</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По статусу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Дополнительно</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                </div>
                <div class="header_tab_container">
                    <div class="header_tab_block">
                        <h6>По класу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Кол-во комнат</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По районам</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По статусу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Дополнительно</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                </div>
                <div class="header_tab_container">
                    <div class="header_tab_block">
                        <h6>По класу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Кол-во комнат</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По районам</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По статусу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Дополнительно</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                </div>
                <div class="header_tab_container">
                    <div class="header_tab_block">
                        <h6>По класу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Кол-во комнат</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По районам</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По статусу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Дополнительно</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                </div>
                <div class="header_tab_container">
                    <div class="header_tab_block">
                        <h6>По класу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Кол-во комнат</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По районам</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>По статусу</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                    <div class="header_tab_block">
                        <h6>Дополнительно</h6>
                        <p><a href="#">Элитные <sup>23</sup></a></p>
                        <p><a href="#">Бизнес-класс <sup>23</sup></a></p>
                        <p><a href="#">Эконом-класс <sup>23</sup></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_search">
        <div class="container">
            <div class="row">
                <div class="header_search_container">
                    <div class="search_top">
                        <div class="header_block_search">
                            <p>Сделка</p>
                            <select>
                                <option value="value">Купить</option>
                                <option value="value">Снять</option>
                                <option value="value">Купить / Снять</option>
                            </select>
                        </div>
                        <div class="header_block_search">
                            <p>Объект</p>
                            <select>
                                <option value="value">Квартиры</option>
                                <option value="value">Дома</option>
                                <option value="value">Виллы</option>
                                <option value="value">Земальные участки</option>
                                <option value="value">Коммер. недвижимость</option>
                            </select>
                        </div>
                        <div class="header_block_search location">
                            <p>Местоположение</p>
                            <input class="focus_input_block" type="text" name="name" value="" />
                            <div class="block_location">
                                <div class="location_cbx_block">
                                    <p>Регионы</p>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_1' name='value'>
                                        <label for='region_1'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_2' name='value'>
                                        <label for='region_2'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_3' name='value'>
                                        <label for='region_3'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_4' name='value'>
                                        <label for='region_4'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_5' name='value'>
                                        <label for='region_5'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_6' name='value'>
                                        <label for='region_6'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_7' name='value'>
                                        <label for='region_7'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_8' name='value'>
                                        <label for='region_8'>Регион</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='region_9' name='value'>
                                        <label for='region_9'>Регион</label>
                                    </div>
                                </div>
                                <div class="location_cbx_block location_cbx_block_40">
                                    <p>Побережья</p>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast1' name='value'>
                                        <label for='coast1'>Побережье</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast2' name='value'>
                                        <label for='coast2'>Побережье</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast3' name='value'>
                                        <label for='coast3'>Побережье</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast4' name='value'>
                                        <label for='coast4'>Побережье</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast5' name='value'>
                                        <label for='coast5'>Побережье</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='coast6' name='value'>
                                        <label for='coast6'>Побережье</label>
                                    </div>
                                </div>
                                <div class="location_cbx_block">
                                    <p>Города</p>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city1' name='value'>
                                        <label for='city1'>Город</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city2' name='value'>
                                        <label for='city2'>Город</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city3' name='value'>
                                        <label for='city3'>Город</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city4' name='value'>
                                        <label for='city4'>Город</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city5' name='value'>
                                        <label for='city5'>Город</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type='checkbox' id='city6' name='value'>
                                        <label for='city6'>Город</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header_block_search area">
                            <p>Площадь</p>
                            <div class="block_range_input">
                                <input class="price_input" type="text" name="name" value="" id="price_min" placeholder="От" />
                                <input class="price_input" type="text" name="name" value="" id="price_max" placeholder="До" />
                            </div>
                            <div id="slider"></div>
                        </div>
                        <div class="header_block_search area">
                            <p>Цена</p>
                            <div class="block_range_input">
                                <input class="price_input_cost" type="text" name="name" value="" id="price_min_cost" placeholder="От" />
                                <input class="price_input_cost" type="text" name="name" value="" id="price_max_cost" placeholder="До" />
                            </div>
                            <div id="slider_cost"></div>
                        </div>
                        <div class="header_block_search btn_yellow">
                            <button class="open_detail">Детали</button>
                        </div>
                        <div class="search_find">
                            <span>123</span>
                            <button>Найти</button>
                        </div>
                    </div>
                    <div class="detail_container">
                        <div class="detail_block">
                            <h6>Купить</h6>
                            <div class="header_block_search">
                                <p>Класс</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Люкс</option>
                                    <option value="value">Полу люкс</option>
                                    <option value="value">Стандарт</option>
                                </select>
                            </div>
                            <div class="header_block_search">
                                <p>Кол-во комнат</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">1</option>
                                    <option value="value">2</option>
                                    <option value="value">3</option>
                                    <option value="value">4</option>
                                </select>
                            </div>
                            <div class="header_block_search">
                                <p>Cтатус</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Аренда</option>
                                    <option value="value">Покупка</option>
                                </select>
                            </div>
                        </div>
                        <div class="detail_block">
                            <h6>Здание</h6>
                            <div class="header_block_search">
                                <p>Тип дома</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Квартира</option>
                                    <option value="value">Частный дома</option>
                                    <option value="value">Комуналка</option>
                                </select>
                            </div>
                            <div class="header_block_search">
                                <p>&nbsp;</p>
                                <div class="double_input">
                                    <input type="text" name="name" value="" placeholder="Этажность от" />
                                    <input type="text" name="name" value="" placeholder="Этажность до" />
                                </div>
                            </div>
                            <div class="header_block_search">
                                <p>&nbsp;</p>
                                <div class="double_input">
                                    <input type="text" name="name" value="" placeholder="Этаж от" />
                                    <input type="text" name="name" value="" placeholder="Этаж до" />
                                </div>
                            </div>
                        </div>
                        <div class="detail_block">
                            <h6>Пареметры</h6>
                            <div class="header_block_search">
                                <p>&nbsp;</p>
                                <div class="double_input">
                                    <input type="text" name="name" value="" placeholder="До моря от" />
                                    <input type="text" name="name" value="" placeholder="Этажность до" />
                                </div>
                            </div>
                            <div class="header_block_search">
                                <p>Вид из окна</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Море</option>
                                    <option value="value">Город</option>
                                    <option value="value">Парк</option>
                                </select>
                            </div>
                            <div class="header_block_search">
                                <p>Ремон</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Без ремонта</option>
                                    <option value="value">Евро ремонт</option>
                                    <option value="value">Економ ремонт</option>
                                </select>
                            </div>
                        </div>
                        <div class="detail_block">
                            <h6>Дополнительно</h6>
                            <div class="header_block_search">
                                <p>Санузел</p>
                                <select>
                                    <option value="value" class="hidden"></option>
                                    <option value="value">Пластиковые панели</option>
                                    <option value="value">Влагостойкий гипсокартон</option>
                                    <option value="value">Декоративную штукатурка</option>
                                </select>
                            </div>
                            <div class="header_block_search">
                                <p>&nbsp;</p>
                                <div class="block_chbox">
                                    <label>
                                        <input type="checkbox" name="name" value="" /><span>Тег квартир 1</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="name" value="" /><span>Тег квартир 2</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--HEADER END-->

<?= $content ?>

<!--FOOTER START-->
<footer>
    <div class="container">
        <div class="footer_container">
            <div class="col-sm-3">
                <div class="footer_logo"><a href="#"><img src="/style/img/footer_logo.png" alt="Alternate Text" /></a></div>
            </div>
            <div class="col-sm-3 hidden-xs">
                <div class="footer_href">
                    <a href="#">Таунхаусы</a>
                    <a href="#">Квартиры</a>
                    <a href="#">Дома</a>
                    <a href="#">Земельные участки</a>
                    <a href="#">
                        Бизнес и <br  />
                        коммерческая <br />
                        недвижимость <br />
                    </a>
                </div>
            </div>
            <div class="col-sm-3 hidden-xs">
                <div class="footer_href">
                    <a href="#">Услуги</a>
                    <a href="#">Каталог недвижимости</a>
                    <a href="#">Строительство и ремонт</a>
                    <a href="#">Земельные участки</a>
                    <a href="#">От банков</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer_contact">
                    <p>Контакты</p>
                    <a href="tel:74951087479">+7 495 108 74 79</a>
                    <a href="tel:34667697007">+34 667 697 007</a>
                    <a href="mailto:PicoloEuropaSL@gmail.com">PicoloEuropaSL@gmail.com</a>
                    <button class="footer_callBack">Обратный звонок</button>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_blue_line">Picolo Europa SL © 2002—2018</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
