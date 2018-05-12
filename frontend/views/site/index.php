<?php

/* @var $this yii\web\View */

$this->title = 'Главная - Продажа недвижимости в Испании по выгодным ценам';
?>

<!--PROPERTY TYPES START-->
<div class="container">
    <div class="row">
        <div class="property_types">
            <h6>Типы недвижимости</h6>
            <div class="property_types_container">
                <div class="property_types_block">
                    <img src="style/img/property_ic1.png" alt="Alternate Text" />
                    <span>8 640</span>
                    <p>квартиры</p>
                </div>
                <div class="property_types_block">
                    <img src="style/img/property_ic2.png" alt="Alternate Text" />
                    <span>7 653</span>
                    <p>дома</p>
                </div>
                <div class="property_types_block">
                    <img src="style/img/property_ic3.png" alt="Alternate Text" />
                    <span>5 640</span>
                    <p>Таунхаусы</p>
                </div>
                <div class="property_types_block">
                    <img src="style/img/property_ic4.png" alt="Alternate Text" />
                    <span>953</span>
                    <p>
                        Бизнес и коммерческая <br />
                        недвижимость
                    </p>
                </div>
                <div class="property_types_block">
                    <img src="style/img/property_ic5.png" alt="Alternate Text" />
                    <span>260</span>
                    <p>
                        Земельные <br />
                        участки
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PROPERTY TYPES  END-->
<!--PROPETY SELECTIONS START-->
<div class="property_selection">
    <div class="container">
        <div class="row">
            <h6>Подборки недвижимости</h6>
            <div class="selection_container">
                <!-- Swiper -->
                <div class="swiper-container swiper-container_selection anim_top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h5>Подборки по цене</h5>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Коммерческая недвижимость <br />в кредит и ипотеку <span>(61)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span>s</a>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span></a>
                        </div>
                        <div class="swiper-slide">
                            <h5>ОБЪЕКТЫ ПО СОСТОЯНИЮ</h5>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span>s</a>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span></a>
                        </div>
                        <div class="swiper-slide">
                            <h5>ОСОБЕННОЕ ЖИЛЬЕ</h5>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Коммерческая недвижимость <br />в кредит и ипотеку <span>(61)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span>s</a>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span></a>
                        </div>
                        <div class="swiper-slide">
                            <h5>ИНВЕСТИЦИИ В ИСПАНИИ</h5>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span>s</a>
                            <a href="#">Недорогая недвижимость <span>(3655)</span></a>
                            <a href="#">Элитная недвижимость <span>(2796)</span></a>
                        </div>
                    </div>
                    <div class="swiper-button-next right_pag_selection visible-xs"></div>
                    <div class="swiper-button-prev left_pag_selection visible-xs"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PROPETY SELECTIONS END-->
<!--TOP OFFERS START-->
<div class="top_offers">
    <div class="container">
        <div class="row">
            <div class="top_offers_tab">
                <h6>Топ предложений</h6>
                <div class="top_btn_container">
                    <div class="top_btn_block top_btn_block_active">Квартиры</div>
                    <div class="top_btn_block">Дома</div>
                    <div class="top_btn_block">Земельные участки</div>
                    <div class="top_btn_block">Бизнес и коммерческая недвижимость</div>
                    <div class="top_btn_block">Таунхаусы</div>
                </div>
                <div class="offers_slider offers_slider_active">
                    <div class="arr_offers_slider arr_offers_slider_left arr_offers_slider_left-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="arr_offers_slider arr_offers_slider_right arr_offers_slider_right-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="swiper-container swiper-container_offer-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offers_slider">
                    <div class="arr_offers_slider arr_offers_slider_left arr_offers_slider_left-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="arr_offers_slider arr_offers_slider_right arr_offers_slider_right-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="swiper-container swiper-container_offer-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offers_slider">
                    <div class="arr_offers_slider arr_offers_slider_left arr_offers_slider_left-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="arr_offers_slider arr_offers_slider_right arr_offers_slider_right-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="swiper-container swiper-container_offer-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offers_slider">
                    <div class="arr_offers_slider arr_offers_slider_left arr_offers_slider_left-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="arr_offers_slider arr_offers_slider_right arr_offers_slider_right-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="swiper-container swiper-container_offer-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offers_slider">
                    <div class="arr_offers_slider arr_offers_slider_left arr_offers_slider_left-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="arr_offers_slider arr_offers_slider_right arr_offers_slider_right-1"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                    <div class="swiper-container swiper-container_offer-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flat_tab_block">
                                    <div class="left_flat_block">
                                        <img class="slider_like" src="style/img/slider_like.png" alt="Alternate Text" />
                                        <div class="flat_id">ID 1166</div>
                                        <div class="flat_ip">Ипотека</div>
                                        <input type="hidden" class="current-slide" value="1" />
                                        <div class="clider_photo_count"><img src="style/img/photo.png" alt="Alternate Text" /> <span>1</span></div>
                                        <div class="arr_slider arr_slider_left" onclick="plusSlides(-1, this)"></div>
                                        <div class="arr_slider arr_slider_right" onclick="plusSlides(1, this)"></div>
                                        <div class="container_img_slider">
                                            <!-- сюда заливать изображение для слайдера-->
                                            <img class="block_slider" src="style/img/slider_img_1.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_2.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_3.png" alt="Alternate Text" />
                                            <img class="block_slider" src="style/img/slider_img_4.png" alt="Alternate Text" />
                                        </div>
                                    </div>
                                    <div class="right_tab_block">
                                        <div class="rg_bl_caption"><a href="#">Апартаменты  в элитном районе Барселоны</a></div>
                                        <h1><span>€</span> 1,200,000 </h1>
                                        <div class="city-city"><img src="style/img/ic_point.png" alt="Alternate Text" /><span>Барселона </span> - <span>Раваль</span></div>
                                        <div class="options_container">
                                            <div class="option_block">
                                                <img src="style/img/smat_img_1.png" alt="Alternate Text" />
                                                <span>250м<sup>2</sup></span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_2.png" alt="Alternate Text" />
                                                <span>6</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_3.png" alt="Alternate Text" />
                                                <span>5</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                            <div class="option_block">
                                                <img src="style/img/smat_img_4.png" alt="Alternate Text" />
                                                <span>3</span>
                                                <div class="option_tittle"><p>Площадь объекта</p></div>
                                            </div>
                                        </div>
                                        <div class="look_for_btn"><a href="#">Смотреть ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--TOP OFFERS END-->
<!--SCHEME OF WORK START-->
<div class="scheme_of_work">
    <div class="container">
        <div class="row">
            <h6>Схема работы</h6>
            <div class="scheme_container">
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_1.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Обращение в агентство Catalunyamia.ru</p>
                </div>
                <div class="block_img_arrow"><img src="style/img/arrow_block.png" alt="Alternate Text" /></div>
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_2.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Подбор недвижимости</p>
                </div>
                <div class="block_img_arrow"><img src="style/img/arrow_block.png" alt="Alternate Text" /></div>
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_3.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Поездка по Испании: открытие счета,выбор объектов</p>
                </div>
                <div class="block_img_arrow"><img src="style/img/arrow_block.png" alt="Alternate Text" /></div>
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_4.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Внесение аванса и подготовка документов</p>
                </div>
                <div class="block_img_arrow"><img src="style/img/arrow_block.png" alt="Alternate Text" /></div>
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_5.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Сделка</p>
                </div>
                <div class="block_img_arrow"><img src="style/img/arrow_block.png" alt="Alternate Text" /></div>
                <div class="scheme_block">
                    <div class="scheme_circle">
                        <img src="style/img/work_ic_6.png" alt="Alternate Text" />
                        <div class="hover_block">
                            <p>На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.</p>
                        </div>
                    </div>
                    <p>Передача ключей от объекта</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--SCHEME OF WORK END-->
<!--ARTICLES START-->
<div class="articles">
    <div class="container">
        <div class="row">
            <h6>Полезные статьи</h6>
            <div class="swiper-container articles_slider">
                <div class="swiper-wrapper anim_top">
                    <div class="swiper-slide">
                        <h5>ЦЕНЫ НА КВАРТИРЫ И ДОМА <br /> В ИСПАНИИ</h5>
                        <a href="#">Основные типы недвижимости</a>
                        <a href="#">До 100000 €</a>
                        <a href="#">До 200000 €</a>
                        <a href="#">Цены на недорогую недвижимость <br /> в Испании</a>
                        <a href="#">Недорогие квартиры и дома от <br />банков Испании</a>
                        <a href="#">Аренда дома или квартиры в <br />Испании на лето</a>
                        <a href="#">Архив проданных предложений</a>
                    </div>
                    <div class="swiper-slide">
                        <h5>ВОПРОСЫ О ПОКУПКЕ НЕДВИЖИМОСТИ <br />В ИСПАНИИ</h5>
                        <a href="#">Что такое NIE и как его получить?</a>
                        <a href="#">Можно ли купить квартиру в Испании за 70 тысяч евро?</a>
                        <a href="#">Купить мебель в Барселоне</a>
                        <a href="#">Выбор недвижимости в Матаро</a>
                        <a href="#">Дома и квартиры в Барселоне</a>
                        <a href="#">Элитная недвижимость в Испании</a>
                        <a href="#">Коммерческая недвижимость в Барселоне и <br />на Коста Брава</a>
                        <a href="#">Инвестиции и бизнес в Испании</a>
                    </div>
                    <div class="swiper-slide">
                        <h5>ИНФОрмация об испании</h5>
                        <a href="#">Статьи об Испании</a>
                        <a href="#">Общая информация о Каталонии</a>
                        <a href="#">Вид на жительство в Испании</a>
                        <a href="#">Условия пребывания на территории Испании</a>
                        <a href="#">Погода и климат Испании</a>
                        <a href="#">Образование. Частные школы.</a>
                        <a href="#">Резиденция в Андорре</a>
                        <a href="#">Получение Шенгенской визы</a>
                        <a href="#">Новости Испании 2014</a>
                        <a href="#">Недвижимость от застройщика</a>
                    </div>
                </div>
                <div class="swiper-button-next art_left visible-xs"></div>
                <div class="swiper-button-prev art_right visible-xs"></div>
            </div>
        </div>
    </div>
</div>
<!--ARTICLES END-->
<!--NEWS START-->
<div class="news">
    <div class="container">
        <div class="row">
            <h6>Новости</h6>
            <!-- Swiper -->
            <div class="new_slider_container">
                <div class="new_arr new_arr_left"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                <div class="new_arr new_arr_right"><img src="style/img/arrow_slider.png" alt="Alternate Text" /></div>
                <div class="swiper-container news_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide anim_left">
                            <div class="left_slide_img">
                                <img src="style/img/news_img1.png" alt="Alternate Text" />
                            </div>
                            <div class="right_slide_text">
                                <span>Декбрь 25, 2017</span>
                                <h5>
                                    Цены на недвижимость в <br />
                                    Барселоне восстановились <br />
                                    на 24% с момента кризиса <br />
                                </h5>
                                <p>
                                    Стоимость вторичного жилья в Испании отмечает небольшой рост на 0,1% в
                                    третьем квартале 2016 года. В соответствии с последн.. цена за квадратный метр
                                </p>
                                <a href="#">Подробнее ></a>
                            </div>
                        </div>
                        <div class="swiper-slide anim_right">
                            <div class="left_slide_img">
                                <img src="style/img/news_img2.png" alt="Alternate Text" />
                            </div>
                            <div class="right_slide_text">
                                <span>Декбрь 25, 2017</span>
                                <h5>
                                    Спрос на новое жилье в <br />
                                    Барселоне достигает <br />
                                    8000 единиц в год <br />
                                </h5>
                                <p>
                                    Стоимость вторичного жилья в Испании отмечает небольшой рост на 0,1% в
                                    третьем квартале 2016 года. В соответствии с последн.. цена за квадратный метр
                                </p>
                                <a href="#">Подробнее ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--NEWS END-->
<!--CHOOSE TODAY START-->
<div class="choose_today">
    <div class="container">
        <div class="row">
            <h6>Выбирайте жилье своей мечты уже сегодня! с Picolo Europa SL!</h6>
            <div class="choose_block anim_top">
                <p>
                    <span>Picolo Europa SL</span> – это агентство недвижимости в Испании, открытое в 2002 году. Наша специализация - недорогая недвижимость в Испании и Каталонии. <br />
                    Мы специализируемся на подборе, продаже и последующем послепродажном обслуживании объектов недвижимости в Испании. Наши надежные партнеры: <br />
                    адвокатское бюро, строительная компания, профессиональные переводчики и риэлторы сделают покупку дома или квартиры в Испании легкой.
                </p>
                <p>
                    На нашем сайте - только новые и актуальные предложения вилл и апартаментов на Коста Брава и другие объекты недвижимости в Барселоне.
                </p>
                <h5>
                    Наши сотрудники всегда готовы:
                </h5>
                <ul>
                    <li>оказать консультацию онлайн,</li>
                    <li>прислать выгодные варианты по запросу подбора,</li>
                    <li>прислать выгодные варианты по запросу подбора,</li>
                    <li>разработать и провести индивидуальную ознакомительную поездку по побережью Испании</li>
                    <li>оказать полный комплекс услуг по юридическому сопровождению сделки</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--CHOOSE TODAY END-->
<!--SEARCH BY REGION START-->
<div class="search_by_region hidden-xs">
    <div class="container">
        <div class="row">
            <div class="region_container anim_top">
                <img src="style/img/region_bg.png" alt="карта">
                <div class="region_block clearfix">
                    <div class="top_region_container">
                        <div class="top_region_left">
                            <h5>Регион</h5>
                        </div>
                        <div class="top_region_right">
                            <select>
                                <option value="value">Барселона</option>
                                <option value="value">Мадрид</option>
                                <option value="value">Валенсия</option>
                                <option value="value">Малага</option>
                            </select>
                        </div>
                    </div>
                    <div class="top_region_container">
                        <div class="top_region_left">
                            <h5>Цена, €</h5>
                        </div>
                        <div class="top_region_right"><span>от 800 - до 110К</span></div>
                    </div>
                    <div class="top_region_container">
                        <div class="top_region_left">
                            <h5>Города</h5>
                        </div>
                        <div class="top_region_right"><p>Выбрать все</p></div>
                    </div>
                    <div class="choose_city">
                        <span>Алькосебре</span>
                        <span>Аргентона</span>
                        <span>Аренис де Мар</span>
                        <span class="yellow_color_city">Аренис де Мунт</span>
                        <span>Бадалона</span>
                        <span>Барселона</span>
                        <span>Бланес</span>
                        <span class="yellow_color_city">Вальвидрера</span>
                        <span>Видререс</span>
                        <span>Аргентона</span>
                        <span>Вальвидрера</span>
                        <span>Аренис де Мар</span>
                        <span class="yellow_color_city">Аренис де Мунт</span>
                        <span class="yellow_color_city">Вальвидрера </span>
                        <span>Видререс</span>
                    </div>
                    <div class="found_objects">Найдено 68 объектов</div>
                    <button class="show_objects">Показать результаты</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--SEARCH BY REGION END-->
<!--FORM START-->
<div class="container-fluid">
    <div class="row">
        <div class="form_container anim_top">
            <div class="left_form_block"></div>
            <div class="right_form_block">
                <p>
                    Оставьте ваш емейл и бесплатно <br />
                    Получите справочник покупателя
                </p>
                <form action="/" method="post">
                    <input type="text" name="name" value="" placeholder="Ваш E-mail" />
                    <button><img src="style/img/arrow_button.png" alt="Alternate Text" /></button>
                </form>
                <p>
                    Следите за новыми предложениями <br />
                    в социальных сетях
                </p>
                <div class="block_social">
                    <a href="#" target="_blank"><img src="style/img/social_ic1.png" alt="Alternate Text" /></a>
                    <a href="#" target="_blank"><img src="style/img/social_ic2.png" alt="Alternate Text" /></a>
                    <a href="#" target="_blank"><img src="style/img/social_ic3.png" alt="Alternate Text" /></a>
                    <a href="#" target="_blank"><img src="style/img/social_ic4.png" alt="Alternate Text" /></a>
                    <a href="#" target="_blank"><img src="style/img/social_ic5.png" alt="Alternate Text" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FORM END-->
