@extends('layouts.base')

@section('styles')
    @vite(['resources/css/pages/main.css'])
@endsection

@section('scripts')
    @vite(['resources/js/pages/main.js'])
@endsection

@section('content')
    <section id="scrollToContent" class="about" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="mb-20" data-aos="fade-down" data-aos-delay="250">
                        <h2 class="section-title text-center text-lg-start m-0">
                            Шукаєте Кому Вигідно Продати Волосся?
                        </h2>
                        <h3 class="text-center text-lg-start mt-2">
                            НАША КОМПАНІЯ ЗАВЖДИ ГОТОВА КУПИТИ ВОЛОССЯ ДОРОГО!
                        </h3>
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
                    <picture class="image-card-1">
                        <source srcset="{{ asset('img/about2.webp') }}" type="image/webp">
                        <img src="{{ asset('img/about2.jpg') }}" width="280" height="360"
                            class="border border-1 rounded-4 shadow-lg image-1 mt-4" alt="Фото салону 1">
                    </picture>
                </div>
                <div class="col col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <picture class="image-card-2">
                        <source srcset="{{ asset('img/about.webp') }}" type="image/webp">
                        <img src="{{ asset('img/about.jpg') }}" width="280" height="360"
                            class="border border-1 rounded-4 shadow-lg image-2 mt-4" alt="Фото салону 2">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="why pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" data-aos="fade-left" data-aos-delay="300" data-aos-duration="5000">
                        Чому Варто Звернутися Саме В Нашу Компанію?</h2>
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
                        Україні і
                        відбираємо якісні, живі зрізи. Після покупки, всі зрізи проходять обробку і надходять в
                        подальший
                        продаж, а також використовуються у виробництві перук.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center my-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="5000">
                            ЗВЕРТАЮЧИСЬ В НАШУ КОМПАНІЮ З БАЖАННЯМ ПРОДАТИ ВОЛОССЯ, ВИ ГАРАНТОВАНО ОТРИМУЄТЕ</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/individual.svg') }}" width="100" height="100"
                                alt="Індивідуальний підхід">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Індивідуальність</div>
                            <div class="description">Окремий та індивідуальний підхід для кожного нашого покупця</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/money.svg') }}" width="100" height="100"
                                alt="Вигідні умови співпраці">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Вигоду</div>
                            <div class="description">Найвигідніші для Вас умови співпраці. Ми зацікавлені в цьому</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/handshake.svg') }}" width="100" height="100"
                                alt="Зручність та виплата">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Зручність</div>
                            <div class="description">Обговорена грошова виплата в зручний для Вас час та спосіб</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/fast-money.svg') }}" width="100" height="100"
                                alt="Моментальна оплата">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Швидкість</div>
                            <div class="description">Моментальна оплата після оцінки та відправки Вашой шевелюри</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="500">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/info.svg') }}" width="100" height="100"
                                alt="Інформативна оцінка">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Інформативність</div>
                            <div class="description">Відправляйте по вайберу фото волосся і спеціаліст оголосить ціну</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="icon me-3">
                            <img src="{{ asset('img/icons/style.svg') }}" width="100" height="100"
                                alt="Стильно та модно">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="title">Стиль</div>
                            <div class="description">Ми запропонуємо Вам стильну та модну стрижку в подарунок</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-darkbrown shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-90 animate-box d-none d-lg-block" data-aos="fade-right" data-aos-delay="300">
                    <picture>
                        <source srcset="{{ asset('img/postman.webp') }}" type="image/webp" loading="lazy">
                        <img src="{{ asset('img/postman.jpg') }}" width="400" height="420" loading="lazy"
                            class="border border-1 rounded-4 shadow-lg" alt="Відправка Новою поштою">
                    </picture>
                </div>
                <div class="col-12 col-lg-7">
                    <h2 class="text-center text-lg-start m-0" data-aos="fade-down" data-aos-delay="300">
                        Як відправити свій зріз?
                    </h2>
                    <h3 class="text-center text-lg-start mt-2" data-aos="fade-down" data-aos-delay="500">
                        Відправити свій зріз можна за допомогою послуг Нової Пошти
                    </h3>
                    <p data-aos="fade-left" data-aos-delay="300">При відправці ви вказуєте встановлену нашим
                        оцінювачем вартість, а при отриманні ми
                        оплачуємо дану суму, плюс вартість доставки. гроші ви зможете забрати в своєму
                        відділенні нової пошти.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2" data-aos="fade-left" data-aos-delay="100">
                            <i class="bi bi-check2-all me-2"></i>
                            Насамперед ви повинні обумовити деталі з нашим менеджером.
                        </li>
                        <li class="mb-2" data-aos="fade-left" data-aos-delay="200">
                            <i class="bi bi-check2-all me-2"></i>
                            Кладемо біля волосся сантиметр і робимо фото, після чого зважуємо їх.
                        </li>
                        <li class="mb-2" data-aos="fade-left" data-aos-delay="300">
                            <i class="bi bi-check2-all me-2"></i>
                            Надсилаємо фотографію на наш Вайбер, а оцінювач встановлює точну вартість зрізу.
                        </li>
                        <li class="mb-2" data-aos="fade-left" data-aos-delay="400">
                            <i class="bi bi-check2-all me-2"></i>
                            Коли локони надійно упаковані, їх можна відправляти поштою в нашу компанію.
                        </li>
                        <li class="mb-2" data-aos="fade-left" data-aos-delay="500">
                            <i class="bi bi-check2-all me-2"></i>
                            Відправка волосся проводиться післяплатою, через послуги Нової Пошти.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="buying pb-0">
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
                            <div class="acc-btn size-20"><span class="number me-3">1</span>Миття волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/washing.svg') }}" alt="">
                                        <p class="text-center mt-3">Попередньо необхідно вимити волосся шампунем, яким Ви
                                            зазвичай користуєтесь</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="400">
                            <div class="acc-btn size-20"><span class="number me-3">2</span>Сушка волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/dry.svg') }}" alt="">
                                        <p class="text-center mt-3">Добре просушити без використання фена, дайте локонам
                                            висохнути природним шляхом</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-left" data-aos-delay="500">
                            <div class="acc-btn size-20"><span class="number me-3">3</span>Розчісування</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hairdresser.svg') }}" alt="">
                                        <p class="text-center mt-3">Добре розчешіть пасма, щоб позбутися від ковтунів (якщо
                                            такі
                                            є), а також запобігти подальшому заплутування</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="600">
                            <div class="acc-btn size-20"><span class="number me-3">4</span>Поділ волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/bunch.svg') }}" alt="">
                                        <p class="text-center mt-3">Розділіть волосся на кілька пасом, в залежності від
                                            густоти,
                                            туго перетягніть кожну гумкою, обмотавши її кілька разів</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-left" data-aos-delay="700">
                            <div class="acc-btn size-20"><span class="number me-3">5</span>Зріз волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/cutting.svg') }}" alt="">
                                        <p class="text-center mt-3">Далі робимо зріз, відступивши кілька сантиметрів трохи
                                            вище
                                            кріплення та заплітаємо зрізане волосся в косу</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block rounded-3 shadow" data-aos="fade-right" data-aos-delay="800">
                            <div class="acc-btn size-20"><span class="number me-3">6</span>Оцінка волосся</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <img src="{{ asset('img/icons/hair-info.svg') }}" alt="">
                                        <p class="text-center mt-3">Для оцінювання волосся нам необхідно побачити
                                            фотографію
                                            зрізу біля сантиметра і взнати точну його вагу</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- ELSE IF ISDESKTOP --}}

                <div class="col-md-4 d-none d-lg-block mb-4">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('img/icons/washing.svg') }}" alt="Миття волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Миття волосся</h2>
                        <div class="description">Попередньо необхідно вимити волосся шампунем, яким Ви зазвичай
                            користуєтесь</div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block mb-4">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('img/icons/dry.svg') }}" alt="Сушка волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Сушка волосся</h2>
                        <div class="description">Просушити волосся без використання фена, дайте локонам висохнути природним
                            шляхом</div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block mb-4">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('img/icons/hairdresser.svg') }}" alt="Розчісування волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Розчісування</h2>
                        <div class="description">Розчесати пасма, щоб позбутися ковтунів (якщо такі є), також,
                            запобігти подальшому заплутування</div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('img/icons/bunch.svg') }}" alt="Поділ волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Поділ волосся</h2>
                        <div class="description">Розділити волосся на кілька пасів, обмотавши кілька разів, туго
                            перетягнути кожну гумкою</div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('img/icons/cutting.svg') }}" alt="Зріз волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Зріз волосся</h2>
                        <div class="description">Зробити зріз, відступивши кілька сантиметрів трохи вище кріплення та
                            заплітаємо зрізане волосся в косу</div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <div class="bg-light px-4 py-5 rounded-3 shadow-sm" data-aos="zoom-in" data-aos-delay="600">
                        <img src="{{ asset('img/icons/hair-info.svg') }}" alt="Оцінка волосся">
                        <h2 class="fs-5 mt-4 mb-2 fw-bold text-uppercase text-center">Оцінка волосся</h2>
                        <div class="description">Зважити зріз та сфотографувати біля сантиметра і надіслати дані для
                            оцінювання</div>
                    </div>
                </div>

                {{-- ENDIF --}}

            </div>

            {{-- Warning Info --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex bg-warning bg-opacity-10 border border-opacity-25 border-warning rounded mt-4"
                        data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex align-items-center border-opacity-25 border-end border-warning px-3">
                            <span class="animate__animated animate__tada animate__infinite">
                                <i class="bi-exclamation-triangle fs-3 text-warning"></i>
                            </span>
                        </div>
                        <div class="p-3 center textdark textuppercase lh-1">
                            Не намагайтесь обдурити оцінювача, використовуючи прийоми, щоб поліпшити
                            якість волосся, або розтягувати пасмо, щоб візуально збільшити довжину.
                            Наш фахівець обов'язково розпізнає обман.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
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

    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <h2 class="section-title m-0" data-aos="fade-down" data-aos-delay="300">Покупка волосся</h2>
                        <h3 class="section-subtitle mt-2" data-aos="fade-down" data-aos-delay="500">Які чинники
                            впливають на вартість</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list">
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
                    <div class="menu-list">
                        <div class="item" data-aos="fade-right" data-aos-delay="200">
                            <div class="flex">
                                <div class="title">Структура локонів</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Вища вартість пропонується за якісні, здорові та рівномірні локони. М'які і
                                    природньо гладкі на дотик пасма, завжди мають значно вищу ціну.</i></p>
                        </div>
                    </div>
                    <div class="menu-list">
                        <div class="item" data-aos="fade-right" data-aos-delay="400">
                            <div class="flex">
                                <div class="title">Стан пучка</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Зріз має бути зроблений за правилами та закріплений зверху гумкою і не мати
                                    колунів. Краще продавати свіжозрізані коси, їх ціна вища. Пролежані
                                    прядки втрачають свій природний блиск та натуральні масла, які містяться в них.</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list">
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
                    <div class="menu-list">
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
                    <div class="menu-list">
                        <div class="item" data-aos="fade-left" data-aos-delay="400">
                            <div class="flex">
                                <div class="title">Наявність сивини</div>
                                <div class="dots"></div>
                                <div class="price"><span>~20%</span></div>
                            </div>
                            <p><i>Зрізи з сивиною теж підлягають купівлі, але багато залежить від доглянутості волосся
                                    та як довго росло з сивиною. Забарвлене і сиве волосся приймається від 50
                                    сантиметрів</i></p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Warning Info --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex bg-dark bg-opacity-10 border border-opacity-10 border-dark rounded mt-2"
                        data-aos="fade-right" data-aos-delay="600">
                        <div class="d-flex align-items-center border-opacity-10 border-end border-dark px-3">
                            <i class="bi-info-circle fs-3 text-muted"></i>
                        </div>
                        <div class="p-3 lh-1">
                            Відсоткове відношення впливу на ціну є відносним та орієнтовним.
                            В деяких випадках відсотки можуть змінюватись та інші фактори можуть переважати.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
