@extends('layouts/reparacion-layout')

@section('title')
    Reparations
@endsection

@section('main')
<div class="banner">
            <div class="wrapper">
                <h1>REPARACION</h1>
                <p class="wedo">Ремонт жилых помещений</p>
                <p class="counter">Заявок принято: 576</p>
            </div>
        </div>

        <div class="company-pros">
            <div class="wrapper row">
                <div class="column-pros">
                    <img src="img/Persent.png" alt="%">
                    <p>Cкидки в 10-20% на материалы</p>
                    <small>За счет оптовых поставщиков</small>
                </div>
                <div class="column-pros">
                    <img src="img/Calendar.png" alt="📅">
                    <p>Сдадим работу в срок</p>
                    <small>Иначе выплатим 1000 руб <br>
                        за каждый день просрочки</small>
                </div>
                <div class="column-pros">
                    <img src="img/DoneMark.png" alt="✓">
                    <p>Решим все вопросы с ТСЖ и УК</p>
                    <small id="examples">От отключения стояков до
                        перепланировки</small>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="wrapper headline">
                <div class="divader"></div>
                <h2>Наши работы</h2>
                <div class="divader"></div>
            </div>

            <div class="container">
                <input type="radio" id="blue" name="color" value="" checked />
                <label for="blue">Ремонт квартиры</label>
                <input type="radio" id="red" name="color" />
                <label for="red">Ремонт санузла</label>
                <input type="radio" id="green" name="color" />
                <label for="green">Ремонт квартиры</label>
                <input type="radio" id="orange" name="color" />
                <label for="orange">Ремонт коттеджа</label>
                <input type="radio" id="purple" name="color" />
                <label for="purple">Ремонт комнаты</label>

                <div class="tile blue">
                    <h3>Ремонт квартиры, ул. 40 лет Победы д. 140</h3>
                    <div class="work-example-card">
                        <div class="images-grid">
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card tall" style="background-image: url(img/82279913_i_07.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card"
                                style="background-image: url(img/33192d53349d1964cb4d289e29aa629538d7e0ae.jpeg);"></div>
                            <div class="photo-card long" style="background-image: url(img/82279913_i_07.jpg);"></div>
                        </div>
                        <div class="text-column">
                            <h4>Характеристики</h4>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>

                            <h4>Вид работ</h4>
                            <ul>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, siorem ipsum dolor, sit aorem ipsum dolor, sit at
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit aorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sitorem ipsum dolor, sit aorem ipsum dolor, sit aorem ipsum
                                        dolor, sit a amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dorem ipsum dolor, sit aolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum orem ipsum dolor, sit aorem ipsum dolor, sit adolor, sit
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolororem ipsum dolor, sit a, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit orem ipsum dolor, sit aorem ipsum dolor, sit
                                        aamet.<span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tile red">
                    <h3>Ремонт комнаты, ул. Lorema Ipsuma, дом 4812</h3>
                    <div class="work-example-card">
                        <div class="images-grid">
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card tall" style="background-image: url(img/413.jpg);"></div>
                            <div class="photo-card tall"
                                style="background-image: url(img/imgpsh_fullsize_anim-kopiya5e044429860b6.jpg);"></div>

                            <div class="photo-card"
                                style="background-image: url(img/33192d53349d1964cb4d289e29aa629538d7e0ae.jpeg);"></div>
                        </div>
                        <div class="text-column">
                            <h4>Характеристики</h4>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>

                            <h4>Вид работ</h4>
                            <ul>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, siorem ipsum dolor, sit aorem ipsum dolor, sit at
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit aorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sitorem ipsum dolor, sit aorem ipsum dolor, sit aorem ipsum
                                        dolor, sit a amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dorem ipsum dolor, sit aolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum orem ipsum dolor, sit aorem ipsum dolor, sit adolor, sit
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolororem ipsum dolor, sit a, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit orem ipsum dolor, sit aorem ipsum dolor, sit
                                        aamet.<span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tile green">
                    <h3>Ремонт квартиры, ул. 40 лет Победы д. 140</h3>
                    <div class="work-example-card">
                        <div class="images-grid">
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card tall" style="background-image: url(img/82279913_i_07.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card"
                                style="background-image: url(img/33192d53349d1964cb4d289e29aa629538d7e0ae.jpeg);"></div>
                            <div class="photo-card long" style="background-image: url(img/82279913_i_07.jpg);"></div>
                        </div>
                        <div class="text-column">
                            <h4>Характеристики</h4>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>

                            <h4>Вид работ</h4>
                            <ul>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, siorem ipsum dolor, sit aorem ipsum dolor, sit at
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit aorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sitorem ipsum dolor, sit aorem ipsum dolor, sit aorem ipsum
                                        dolor, sit a amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dorem ipsum dolor, sit aolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum orem ipsum dolor, sit aorem ipsum dolor, sit adolor, sit
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolororem ipsum dolor, sit a, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit orem ipsum dolor, sit aorem ipsum dolor, sit
                                        aamet.<span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tile orange">
                    <h3>Ремонт квартиры, ул. 40 лет Победы д. 140</h3>
                    <div class="work-example-card">
                        <div class="images-grid">
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card tall" style="background-image: url(img/82279913_i_07.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card"
                                style="background-image: url(img/33192d53349d1964cb4d289e29aa629538d7e0ae.jpeg);"></div>
                            <div class="photo-card long" style="background-image: url(img/82279913_i_07.jpg);"></div>
                        </div>
                        <div class="text-column">
                            <h4>Характеристики</h4>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>

                            <h4>Вид работ</h4>
                            <ul>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, siorem ipsum dolor, sit aorem ipsum dolor, sit at
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit aorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sitorem ipsum dolor, sit aorem ipsum dolor, sit aorem ipsum
                                        dolor, sit a amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dorem ipsum dolor, sit aolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum orem ipsum dolor, sit aorem ipsum dolor, sit adolor, sit
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolororem ipsum dolor, sit a, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit orem ipsum dolor, sit aorem ipsum dolor, sit
                                        aamet.<span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tile purple">
                    <h3>Ремонт квартиры, ул. 40 лет Победы д. 140</h3>
                    <div class="work-example-card">
                        <div class="images-grid">
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card tall" style="background-image: url(img/82279913_i_07.jpg);"></div>
                            <div class="photo-card" style="background-image: url(img/215-1024x683.jpg);"></div>
                            <div class="photo-card"
                                style="background-image: url(img/33192d53349d1964cb4d289e29aa629538d7e0ae.jpeg);"></div>
                            <div class="photo-card long" style="background-image: url(img/82279913_i_07.jpg);"></div>
                        </div>
                        <div class="text-column">
                            <h4>Характеристики</h4>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>
                            <p>Lorem ipsum dolor, sit amet adipisicing.</p>

                            <h4>Вид работ</h4>
                            <ul>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, siorem ipsum dolor, sit aorem ipsum dolor, sit at
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit aorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sitorem ipsum dolor, sit aorem ipsum dolor, sit aorem ipsum
                                        dolor, sit a amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dorem ipsum dolor, sit aolor, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit amet.<span></li>
                                <li><span>Lorem ipsum orem ipsum dolor, sit aorem ipsum dolor, sit adolor, sit
                                        amet.<span></li>
                                <li><span>Lorem ipsum dolororem ipsum dolor, sit a, sit amet.<span></li>
                                <li><span>Lorem ipsum dolor, sit orem ipsum dolor, sit aorem ipsum dolor, sit
                                        aamet.<span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper headline">
                <div class="divader"></div>
                <h2 name="examples">Мы решим все вопросы</h2>
                <div class="divader"></div>
            </div>

            <h3>Вам не нужно волноваться по разным организационным вопросам</h3>

            <div class="wrapper row flex space">
                <div class="qestion-text">
                    <span class="yellow">Фото и видео отчеты на Ваш телефон</span>
                    <p>Можно ежедневно контролировать ход работ в вашем помещении</p>

                    <span>Результат с гарантией</span>
                    <p>Даем 1 год гарантии на выполненные работы</p>

                    <span class="yellow">Рассрочка оплаты</span>
                    <p>Оплатить ремонт можно поэтапно, по факту выполненных работ.</p>

                    <span>Помощь в покупке материалов</span>
                    <p>Поможем приобрести стройматериалы со скидкой до 20%.
                        Организуем доставку до вашего объекта.</p>

                    <span class="yellow">Только экологичные материалы</span>
                    <p>Материали, предоставленные нашими постоянными поставшиками всегда качественны и максимально
                        экологичны</p>

                    <span>Работа по договору и детальной смете</span>
                    <p>Ремонт не выйдет за рамки бюджета и прописанного
                        в договоре срока.</p>
                </div>

                <div class="qiestion-image">
                    <img src="img/PinClipart.com_construction-man-clip-art_4216209.png" alt="thumbsup">
                </div>
            </div>
            <div class="wrapper row flex">
                <img src="img/DoneMark.png" alt="done">
                <p class="check yellow"> После ремонта делаем уборку и оставляем за собой чистоту и порядок!</p>
            </div>

            <div class="wrapper headline">
                <div class="divader"></div>
                <h2 name="examples" id="price">Сделаем ремонт под ваш бюджет</h2>
                <div class="divader"></div>
            </div>

            <div class="price-list">

                <p class="price-name">Наименование услуги</p>
                <p class="price-name text-center">Бюджетный</p>
                <p class="price-name text-center">Оптимальный</p>
                <p class="price-name text-center">Премиум</p>

                <div class="divader table-divader" style="opacity: 0;"></div>
                <div class="divader table-divader" style="opacity: 0;"></div>

                <p class="item">Шпаклевка стен</p>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Поклейка обоев</p>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Покраска </p>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Выравнивание стен</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>
                
                <p class="item">Электропроводка </p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Замена водопроводных струб</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Замена канализации </p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Замена радиаторов отопления</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Ремонт ванной комнаты</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Замена ванной и сантехники</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Ремонт туалета</p>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>
                <span class="yes">ДА</span>

                <p class="item">Замена пола</p>
                <span class="yes">Стелятся без замены основы</span>
                <span class="yes">Основа меняется</span>
                <span class="yes">Основа меняется</span>

                <p class="item">Потолки </p>
                <span class="yes">Одноуровневые натяжные</span>
                <span class="yes">Одноуровневые натяжные</span>
                <span class="yes">Натяжные любой сложности</span>

                <p class="item">Перепланировка</p>
                <span class="no">НЕТ</span>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>

                <p class="item">Элементы декора</p>
                <span class="no">НЕТ</span>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>

                <p class="item">Дизайн проект</p>
                <span class="no">НЕТ</span>
                <span class="no">НЕТ</span>
                <span class="yes">ДА</span>

                <div class="divader table-divader"></div>

                <p class="price-name bold ">Цена за м<sup>2</sup>, Руб</p>
                <p class="price-name bold text-center">от 1300</p>
                <p class="price-name bold text-center">от 3500</p>
                <p class="price-name bold text-center">от 5000</p>

                <div class="divader table-divader"></div>

            </div>
            

        </div>
@endsection