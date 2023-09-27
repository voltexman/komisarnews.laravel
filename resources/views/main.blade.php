@extends('layouts.base')

@section('styles')
    @vite(['resources/css/pages/main.css'])
@endsection

@section('scripts')
    @vite(['resources/js/pages/main.js'])
@endsection

@section('content')
    <section id="scrollToContent" class="my-5 bginfo" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="section-head mb-20" data-aos="fade-down" data-aos-delay="250">
                        <h2 class="section-title text-center text-lg-start m-0">Шукаєте Кому Вигідно Продати Волосся?
                        </h2>
                        <h3 class="section-subtitle text-center text-lg-start mt-2">НАША КОМПАНІЯ ЗАВЖДИ ГОТОВА КУПИТИ
                            ВОЛОССЯ ДОРОГО!</h3>
                    </div>
                    <p data-aos="fade-right" data-aos-delay="250">Жителі багатьох міст можуть продати волосся
                        особисто нам в руки! Подаруєте собі настрій, не
                        бійтеся мінятися і удосконалюватися, продаючи свої коси, ви робите благу справу і заробляєте
                        додаткові гроші на потрібні покупки.</p>
                    <p data-aos="fade-right" data-aos-delay="250">Звертайтеся за консультацією прямо зараз за
                        номером телефону, ми завжди готові відповісти на
                        будь-які питання і запропонувати вам європейські ціни. Наша компанія завжди готова
                        запропонувати
                        найвищу ціну за натуральний слов'янський зріз від 40 см, а також кращий сервіс і
                        обслуговування.
                        Ми є професіоналами своєї справи і поважаємо кожного нашого клієнта, тому гарантуємо
                        максимум
                        задоволення від співпраці.</p>
                </div>
                <div class="col col-lg-3" data-aos="fade-down" data-aos-delay="250">
                    <div class="img-card-1">
                        <picture>
                            <source srcset="{{ asset('img/about2.avif') }}" type="image/avif">
                            <source srcset="{{ asset('img/about2.webp') }}" type="image/webp">
                            <img src="{{ asset('img/about2.jpg') }}" width="280" height="360"
                                class="border border-1 rounded-4 shadow-lg about-img-1" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <div class="img-card-2">
                        <picture>
                            <source srcset="{{ asset('img/about.avif') }}" type="image/avif">
                            <source srcset="{{ asset('img/about.webp') }}" type="image/webp">
                            <img src="{{ asset('img/about.jpg') }}" width="280" height="360"
                                class="border border-1 rounded-4 shadow-lg about-img-2" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-box bg- mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <h2 class="section-title m-0" data-aos="fade-left" data-aos-delay="300" data-aos-duration="5000">
                            Чому Варто Звернутися Саме В Нашу Компанію?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p data-aos="fade-down" data-aos-delay="300" data-aos-duration="5000">Куплю волосся - в мережі
                        можна знайти тисячі
                        оголошень , але далеко не всі продавці працюють
                        чесно.
                        Ми є Європейською компанією, яка співпрацює з клієнтами по всьому світу. Наша компанія є
                        прямим
                        скупником локонів, тому пропонуємо найвищі ціни. Цінуємо визнання і довіру наших клієнтів,
                        гарантуємо приємну співпрацю і гідну оплату Вашого товару. Здійснюємо скупку волосся по
                        Україні
                        і
                        відбираємо якісні, живі зрізи. Після покупки, всі зрізи проходять обробку і надходять в
                        подальший
                        продаж, а також використовуються у виробництві перук.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-head text-center">
                            <h3 class="section-subtitle mt-20" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="5000">ЗВЕРТАЮЧИСЬ В НАШУ КОМПАНІЮ З БАЖАННЯМ ПРОДАТИ
                                ВОЛОССЯ,
                                ВИ
                                ГАРАНТОВАНО ОТРИМУЄТЕ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('img/icons/individual.png') }}" alt="">
                        <div class="cont">
                            <span class="fw-bold text-uppercase">Індивідуальність</span>
                            <p>Окремий та індивідуальний підхід для кожного нашого покупця</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/icons/money.png') }}" alt="">
                        <div class="cont">
                            <span class="title">Вигоду</span>
                            <p>Найвигідніші для Вас умови співпраці. Ми зацікавлені в цьому</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('img/icons/handshake.png') }}" alt="">
                        <div class="cont">
                            <span class="title">Зручність</span>
                            <p>Обговорена грошова виплата в зручний для Вас час та спосіб</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('img/icons/fast.png') }}" alt="">
                        <div class="cont">
                            <span class="title">Швидкість</span>
                            <p>Моментальна оплата після оцінки та відправки Вашой шевелюри</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('img/icons/info.png') }}" alt="">
                        <div class="cont">
                            <span class="title">Інформативність</span>
                            <p>Відправляйте по вайберу фото волосся і спеціаліст оголосить ціну</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item" data-aos="zoom-in" data-aos-delay="600">
                        <img src="{{ asset('img/icons/style.png') }}" alt="">
                        <div class="cont">
                            <span class="title">Стиль</span>
                            <p>Запропонуємо Вам стильну та модну стрижку в подарунок</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about bg-darkbrown py-5 mb-5 shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-90 animate-box d-none d-lg-block" data-aos="fade-right" data-aos-delay="300">
                    <picture>
                        <source srcset="{{ asset('img/postman.avif') }}" type="image/avif">
                        <source srcset="{{ asset('img/postman.webp') }}" type="image/webp">
                        <img src="{{ asset('img/postman.jpg') }}" width="400" height="420"
                            class="border border-1 rounded-4 shadow-lg" alt="Відправка Новою поштою">
                    </picture>
                </div>
                <div class="col-12 col-lg-7 valign mb-30 animate-box" data-animate-effect="fadeInRight">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-head mb-20">
                                <h2 class="section-title white m-0" data-aos="fade-down" data-aos-delay="300">Як
                                    відправити
                                    свій зріз?</h2>
                                <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500">ВІДПРАВИТИ
                                    СВІЙ
                                    ЗРІЗ МОЖНА ЗА ДОПОМОГОЮ ПОСЛУГ НОВОЇ
                                    ПОШТИ
                                </h3>
                            </div>
                            <p data-aos="fade-left" data-aos-delay="300">При відправці ви вказуєте встановлену нашим
                                оцінювачем вартість, а при отриманні ми
                                оплачуємо дану суму, плюс вартість доставки. гроші ви зможете забрати в своєму
                                відділенні нової пошти.</p>
                            <ul class="about-list list-unstyled mb-30">
                                <li data-aos="fade-left" data-aos-delay="100">
                                    <div class="about-list-icon"> <span class="bi bi-check2-all"></span> </div>
                                    <div class="about-list-text">
                                        <p>Насамперед ви повинні обумовити деталі з нашим менеджером.</p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-delay="200">
                                    <div class="about-list-icon"> <span class="bi bi-check2-all"></span> </div>
                                    <div class="about-list-text">
                                        <p>Кладемо біля волосся сантиметр і робимо фото, після чого зважуємо їх.</p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-delay="300">
                                    <div class="about-list-icon"> <span class="bi bi-check2-all"></span> </div>
                                    <div class="about-list-text">
                                        <p>Надсилаємо фотографію на наш Вайбер, а оцінювач встановлює точну вартість
                                            зрізу.</p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-delay="400">
                                    <div class="about-list-icon"> <span class="bi bi-check2-all"></span> </div>
                                    <div class="about-list-text">
                                        <p>Коли локони надійно упаковані, їх можна відправляти поштою в нашу
                                            компанію.
                                        </p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-delay="500">
                                    <div class="about-list-icon"> <span class="bi bi-check2-all"></span> </div>
                                    <div class="about-list-text">
                                        <p>Відправка волосся проводиться післяплатою, через послуги Нової Пошти.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-1 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <h2 class="section-title m-0" data-aos="fade-down" data-aos-delay="300">Скупка волосся</h2>
                        <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500">ЯК ПРАВИЛЬНО ЗРОБИТИ
                            ЗРІЗ ЩОБ ВИРУЧИТИ МАКСИМАЛЬНУ ЦІНУ</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                {{-- IF ISMOBILE --}}

                <div class="col-12">
                    <ul class="accordion-box clearfix d-lg-none">
                        <li class="accordion block rounded-3 shadow" data-aos="fade-left" data-aos-delay="300">
                            <div class="acc-btn size-20">Миття волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hair-washing.png') }}" alt="">
                                        <p class="text-center">Попередньо необхідно вимити волосся шампунем, яким Ви
                                            зазвичай користуєтесь</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="400">
                            <div class="acc-btn size-20">Сушка волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/dry.png') }}" alt="">
                                        <p class="text-center">Добре просушити без використання фена, дайте локонам
                                            висохнути природним шляхом</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-left" data-aos-delay="500">
                            <div class="acc-btn size-20">Розчісування</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hairdresser.png') }}" alt="">
                                        <p class="text-center">Добре розчешіть пасма, щоб позбутися від ковтунів (якщо такі
                                            є), а також запобігти подальшому заплутування</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="600">
                            <div class="acc-btn size-20">Поділ волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hair-bunch.png') }}" alt="">
                                        <p class="text-center">Розділіть волосся на кілька пасом, в залежності від густоти,
                                            туго перетягніть кожну гумкою, обмотавши її кілька разів</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-left" data-aos-delay="700">
                            <div class="acc-btn size-20">Зріз волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hair-cutting.png') }}" alt="">
                                        <p class="text-center">Далі робимо зріз, відступивши кілька сантиметрів трохи вище
                                            кріплення та заплітаємо зрізане волосся в косу</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="800">
                            <div class="acc-btn size-20">Оцінка волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hair-evaluate.png') }}" alt="">
                                        <p class="text-center">Для оцінювання волосся нам необхідно побачити фотографію
                                            зрізу біля сантиметра і взнати точну його вагу</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- ELSE IF ISDESKTOP --}}

                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('img/icons/hair-washing.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Миття волосся</h2>
                        <p>Попередньо необхідно вимити волосся шампунем, яким Ви зазвичай користуєтесь</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/icons/dry.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Сушка волосся</h2>
                        <p>Добре просушити без використання фена, дайте локонам висохнути природним шляхом</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('img/icons/hairdresser.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Розчісування</h2>
                        <p>Добре розчешіть пасма, щоб позбутися від ковтунів (якщо такі є), а також
                            запобігти
                            подальшому заплутування</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('img/icons/hair-bunch.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Поділ волосся</h2>
                        <p>Розділіть волосся на кілька пасом, в залежності від густоти, туго перетягніть
                            кожну
                            гумкою, обмотавши її кілька разів</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('img/icons/hair-cutting.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Зріз волосся</h2>
                        <p>Далі робимо зріз, відступивши кілька сантиметрів трохи вище кріплення та
                            заплітаємо
                            зрізане волосся в косу</p>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="item rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="600">
                        <img src="{{ asset('img/icons/hair-evaluate.png') }}" alt="">
                        <h2 class="fs-5 fw-bold text-uppercase">Оцінка волосся</h2>
                        <p>Для оцінювання волосся нам необхідно побачити фотографію зрізу біля сантиметра і
                            взнати
                            точну його вагу</p>
                    </div>
                </div>

                {{-- ENDIF --}}

            </div>

            <div class="row">
                <p class="warning-info mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">Не намагайтесь обдурити
                    оцінювача, використовуючи прийоми, щоб
                    поліпшити якість волосся, або розтягувати пасмо, щоб візуально збільшити довжину. Наш фахівець
                    обов'язково розпізнає обман.</p>
            </div>
        </div>
    </section>

    <section class="services-1 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <h2 class="section-title m-0" data-aos="fade-down" data-aos-delay="300">ПРОДАТИ ВОЛОССЯ АБО ВСЕ Ж
                            ЗБЕРЕГТИ ДОВЖИНУ?</h2>
                        <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500">МІНЯЙТЕСЯ І
                            ЗАРОБЛЯЙТЕ НА НОВОМУ ОБРАЗІ ГРОШІ</h3>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <p>Якщо ви досі не вирішили, то завжди можете звернутися до нас з питаннями, що цікавлять. Ми готові
                    дати детальну інформацію про продажі покупку, провести повну консультацію, щоб кожен клієнт міг
                    зробити для себе остаточні висновки. Наші контактні менеджери завжди на зв'язку з клієнтами, що
                    робить наш сервіс кращим в. Гарна густа шевелюра – це справжнє багатство будь-якої жінки.
                    Стильна зачіска завжди прикрашає образ, робить його більш ніжним, акуратним, жіночним і
                    природним. Але така краса, забирає багато часу, сил і терпіння. Тривалі укладання, дорогий
                    догляд, все це вимагає не тільки грошових, але і вкладень, а в сучасному світі, де кожна хвилина
                    на рахунку, іноді просто немає можливості займатися тривалої укладанням. Якщо ви зважилися щось
                    змінити, змінити образ, надати йому родзинку і відчути небувалу легкість, то пропонуємо вам
                    продати волосся. Якщо ви думаєте про продаж волосся але ніяк не зважитеся, то уявіть, скільки
                    вільного часу у вас з'явиться. Ви зможете присвятити цінні години улюбленій справі, приділити
                    увагу близьким, а не витрачати час на укладання. Свіжий образ надихне вас на нові справи,
                    подарує впевненість, а компліменти на вашу адресу будуть сипатися звідусіль. Змінюючи себе, свій
                    образ і стиль, ви можете заробити хороші гроші в свій сімейний бюджет! Ще ніколи зміна образу не
                    була такою прибутковою. Пам'ятайте, що ваші локони можуть принести радість іншим людям, які в
                    силу різних причин не мають можливості відростити красиву довжину. Вся продукція надходить в
                    салони, для процедур нарощування, а також на виробництво перук, накладних кіс і шиньйонів. Що
                    потрібно знати, перш ніж зважитися на продаж волосся Купівля волосся нашою компанією
                    здійснюється тільки після їх оцінки. Вартість формується індивідуально в кожному випадку. Що б
                    озвучити точну ціну нам необхідно побачити фотографію зрізу біля сантиметра і знати точну вагу.
                    Ми гарантуємо чесну оцінку, без заниження ціни. Купуємо жіночі, чоловічі та дитячі коси від 40
                    сантиметрів, в будь-яких відтінках. Найвищу ціну готові запропонувати за шовковисті, м'які
                    зрізи, без сивини, що не піддавалися фарбуванню, а також хімічній завивці. Натуральні
                    слов'янські волосся-це дуже цінний товар, який не може коштувати мало. Ми готові запропонувати
                    дійсно високі ціни, так як цінуємо Вашу працю, витрачений на догляд за такою шевелюрою. Щоб
                    збільшити вартість, можна попередньо підготувати волосся. Пропийте курс вітамін, використовуйте
                    натуральні масла, пийте більше рідини, стежте за кінчиками, постійно оновлюючи їх і
                    позбавляючись від посічених кінців. Нас цікавлять живі, здорові, блискучі пасма.</p>
            </div>
        </div>
    </section>

    <section class="barber-pricing mb-5">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-head text-center">
                            <h2 class="section-title m-0" data-aos="fade-down" data-aos-delay="300">Покупка волосся</h2>
                            <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500">Які чинники
                                впливають на вартість</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-right" data-aos-delay="0">
                            <div class="flex">
                                <div class="title">Довжина зрізу</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Ми купуємо зрізи від 40 сантиметрів. Якщо ваші локони коротші, то рекомендуємо
                                    ненадовго відкласти продаж, кожен сантиметр здатний сильно відбитися на
                                    вартості.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-right" data-aos-delay="200">
                            <div class="flex">
                                <div class="title">Структура локонів</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Вища вартість пропонується за якісні, здорові та рівномірні локони. М'які і
                                    природньо
                                    гладкі на дотик пасма, завжди мають значно вищу ціну.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-right" data-aos-delay="400">
                            <div class="flex">
                                <div class="title">Стан пучка</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Зріз має бути зроблений за правилами та закріплений зверху гумкою і не мати
                                    колунів.
                                    Краще продавати свіжозрізані коси, їх ціна вища. Пролежані
                                    прядки втрачають свій природний блиск та натуральні масла, які містяться в
                                    них.</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-left" data-aos-delay="0">
                            <div class="flex">
                                <div class="title">Хімічний вплив</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Ми не приймаємо пошкодженні, ламкі та сухі локони, або локони з неоднорідною
                                    структурою. А також волосся із завивкою, забруднене або оброблене будь якими
                                    хімічними речовинами</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-left" data-aos-delay="200">
                            <div class="flex">
                                <div class="title">Колір волосся</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Пофарбовані пасма будуть коштувати набагато дешевше натуральних. Скупка волосся
                                    здійснюється будь-якому кольорі, але більш висока ціна встановлюється на світлі
                                    натуральні тони.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item" data-aos="fade-left" data-aos-delay="400">
                            <div class="flex">
                                <div class="title">Наявність сивини</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Зрізи з сивиною теж підлягають купівлі, але багато залежить від доглянутості
                                    волосся
                                    та як довго росло з сивиною. Забарвлене і сиве волосся приймається від 50
                                    сантиметрів</i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="warning-info mt-0" data-aos="fade-up" data-aos-delay="300">
                    Відсоткове відношення впливу на ціну є відносним та орієнтовним. В деяких випадках відсотки
                    можуть змінюватись та інші фактори можуть переважати.
                </p>
            </div>
        </div>
    </section>

    {{-- @section('scripts') --}}
    {{-- @vite(['resources/js/main.js']) --}}
    {{-- @endsection --}}
@endsection
