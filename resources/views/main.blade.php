@extends('layouts.base')

@section('title', 'Головна сторінка')
@section('keywords', 'Головна сторінка')
@section('description', 'Головна сторінка')
@section('robots', 'all')

@section('header')
    @parent
    <div class="relative h-screen w-full overflow-hidden">
        <div class="bg-black/60 h-screen w-full absolute"></div>
        <div
            class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 uppercase text-white text-center w-full px-4 lg:px-0">
            <h1 class="font-thin text-2xl lg:text-4xl lg:leading-[50px]">
                Продаж та покупка<br>волосся у Києві<span>.</span></h1>
            <h2 class="font-semibold mt-5">Швидко, Дорого, Надійно</h2>
        </div>
        <img src="{{ asset('images/bg-header.webp') }}" data-sizes="auto" alt="komisarnes"
            class="object-cover object-left h-screen w-full animate-ricochet lg:animate-none">

        {{-- Кнопка прокрутки вниз --}}
        <div class="flex absolute bottom-8 left-1/2 -translate-x-1/2 ">
            <a href="#about" aria-label="Перейти до опису"
                class="flex animate-bounce border w-12 h-12 rounded-full bg-slate-50/10 z-40">
                <x-lucide-arrow-down class="w-6 h-6 text-slate-100 self-center mx-auto" />
            </a>
        </div>
    </div>
@endsection

@section('content')
    <x-section class="bg-max-light py-14" id="about">
        <div class="grid lg:grid-cols-2 gap-x-5">
            <div>
                <h2 class="text-2xl drop-shadow-lg text-center lg:text-left font-semibold uppercase">
                    Шукаєте Кому Вигідно<br class="lg:hidden">Продати Волосся?
                </h2>
                <h3 class="font-bold drop-shadow-lg text-center lg:text-left uppercase text-max-soft mb-5">
                    НАША КОМПАНІЯ ЗАВЖДИ ГОТОВА<br class="lg:hidden">КУПИТИ ВОЛОССЯ ДОРОГО!
                </h3>
                <p class="leading-7">Жителі багатьох міст можуть продати волосся
                    особисто нам в руки! Подаруєте собі настрій, не
                    бійтеся мінятися і удосконалюватися, продаючи свої коси, ви робите благу справу і заробляєте
                    додаткові гроші на потрібні покупки.</p>
                <p class="mt-5 leading-7">Звертайтеся за консультацією прямо
                    зараз
                    за
                    номером телефону, ми завжди готові відповісти на
                    будь-які питання і запропонувати вам європейські ціни. Наша компанія завжди готова
                    запропонувати
                    найвищу ціну за натуральний слов'янський зріз від 40 см, а також кращий сервіс і
                    обслуговування.
                    Ми є професіоналами своєї справи і поважаємо кожного нашого клієнта, тому гарантуємо
                    максимум
                    задоволення від співпраці.</p>
            </div>
            <div class="flex justify-center mt-10 lg:mt-0 px-5 lg:px-0">
                <div class="animate-jumping-down">
                    <img data-src="{{ asset('images/about2.webp') }}" width="280" height="360" alt="Фото салону 1"
                        class="lazyload skew-12 rotate-[-10deg] border-2 rounded-2xl shadow-lg shadow-max-soft/50 hover:transform-none transition-transform duration-500">
                </div>
                <div class="animate-jumping-up mt-10">
                    <img data-src="{{ asset('images/about.webp') }}" width="280" height="360" alt="Фото салону 2"
                        class="lazyload rotate-[10deg] border-2 rounded-2xl shadow-lg shadow-max-soft/50 hover:transform-none transition-transform duration-500">
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-light pb-14">
        <h2 class="text-2xl drop-shadow-lg text-center mb-5 font-semibold uppercase">
            Чому Варто Звернутися Саме В Нашу Компанію?</h2>
        <p>Куплю волосся - в мережі можна знайти тисячі
            оголошень , але далеко не всі продавці працюють чесно.
            Ми є Європейською компанією, яка співпрацює з клієнтами по всьому світу. Наша компанія є прямим
            скупником локонів, тому пропонуємо найвищі ціни. Цінуємо визнання і довіру наших клієнтів,
            гарантуємо приємну співпрацю і гідну оплату Вашого товару. Здійснюємо скупку волосся по Україні і
            відбираємо якісні, живі зрізи. Після покупки, всі зрізи проходять обробку і надходять в подальший
            продаж, а також використовуються у виробництві перук.</p>
        <h3 class="font-bold text-center drop-shadow-lg uppercase text-max-soft mt-14 mb-8">
            ЗВЕРТАЮЧИСЬ В НАШУ КОМПАНІЮ З БАЖАННЯМ ПРОДАТИ ВОЛОССЯ, ВИ ГАРАНТОВАНО ОТРИМУЄТЕ</h3>

        <div class="grid grid-rows-6 lg:grid-rows-2 grid-flow-col gap-8">
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/individual.svg') }}" width="100" height="100"
                        alt="Індивідуальний підхід">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Індивідуальність</div>
                    <div class="description">Окремий та індивідуальний підхід для кожного нашого покупця</div>
                </div>
            </div>
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/money.svg') }}" width="100" height="100"
                        alt="Вигідні умови співпраці">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Вигоду</div>
                    <div class="description">Найвигідніші для Вас умови співпраці. Ми зацікавлені в цьому</div>
                </div>
            </div>
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/handshake.svg') }}" width="100" height="100"
                        alt="Зручність та виплата">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Зручність</div>
                    <div class="description">Обговорена грошова виплата в зручний для Вас час та спосіб</div>
                </div>
            </div>
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/fast-money.svg') }}" width="100" height="100"
                        alt="Моментальна оплата">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Швидкість</div>
                    <div class="description">Моментальна оплата після оцінки та відправки Вашой шевелюри</div>
                </div>
            </div>
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/info.svg') }}" width="100" height="100" alt="Інформативна оцінка">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Інформативність</div>
                    <div class="description">Відправляйте по вайберу фото волосся і спеціаліст оголосить ціну</div>
                </div>
            </div>
            <div class="flex">
                <div class="me-3 h-16 w-16">
                    <img src="{{ asset('images/icons/style.svg') }}" width="100" height="100" alt="Стильно та модно">
                </div>
                <div class="flex flex-col">
                    <div class="uppercase font-semibold">Стиль</div>
                    <div class="description">Ми запропонуємо Вам стильну та модну стрижку в подарунок</div>
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-black py-20">
        <div class="container flex">
            <div class="hidden lg:flex justify-center w-1/2">
                <img data-src="{{ asset('images/postman.jpg') }}" alt="Відправка Новою поштою"
                    class="lazyload -skew-x-3 origin-right -rotate-6 -translate-y-4 border-2 rounded-xl shadow-lg shadow-max-dark/40 border-max-soft/60">
            </div>
            <div class="lg:w-1/2 flex flex-col self-center">
                <h2 class="text-max-light/80 text-center lg:text-left uppercase font-bold text-xl">
                    Як відправити свій зріз?
                </h2>
                <h3 class="text-max-soft text-center lg:text-left uppercase font-bold text-sm mt-1">
                    Відправити свій зріз можна за<br class="lg:hidden">допомогою послуг Нової Пошти
                </h3>
                <p class="text-max-light font-semibold my-8">При відправці ви вказуєте встановлену
                    нашим оцінювачем вартість, а при отриманні ми оплачуємо дану суму, плюс вартість
                    доставки. гроші ви зможете забрати в своєму відділенні нової пошти.</p>
                <ul class="list-unstyled text-max-light">
                    <li class="flex text-sm font-semibold mb-2">
                        <x-lucide-check-check class="h-5 w-5 me-2" />
                        Насамперед ви повинні обумовити деталі з нашим менеджером.
                    </li>
                    <li class="flex text-sm font-semibold mb-2">
                        <x-lucide-check-check class="h-5 w-5 me-2" />
                        Кладемо біля волосся сантиметр і робимо фото, після чого зважуємо їх.
                    </li>
                    <li class="flex text-sm font-semibold mb-2">
                        <x-lucide-check-check class="h-5 w-5 me-2" />
                        Надсилаємо фотографію на наш Вайбер, а оцінювач встановлює точну вартість зрізу.
                    </li>
                    <li class="flex text-sm font-semibold mb-2">
                        <x-lucide-check-check class="h-5 w-5 me-2" />
                        Коли локони надійно упаковані, їх можна відправляти поштою в нашу компанію.
                    </li>
                    <li class="flex text-sm font-semibold mb-2">
                        <x-lucide-check-check class="h-5 w-5 me-2" />
                        Відправка волосся проводиться післяплатою, через послуги Нової Пошти.
                    </li>
                </ul>
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-light py-14">

        <x-slot:title>Скупка волосся</x-slot>
        <x-slot:caption class="text-max-soft">
            ЯК ПРАВИЛЬНО ЗРОБИТИ ЗРІЗ<br class="lg:hidden">ЩОБ ВИРУЧИТИ МАКСИМАЛЬНУ ЦІНУ
        </x-slot>

        {{-- ELSE IF ISDESKTOP --}}
        <div class="grid-rows-2 grid-flow-col gap-8 hidden lg:grid">
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/washing.svg') }}" class="h-20 w-20" alt="Миття волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Миття волосся</h2>
                <div class="description">Попередньо необхідно вимити волосся шампунем, яким Ви зазвичай
                    користуєтесь</div>
            </div>
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/bunch.svg') }}" class="h-20 w-20" alt="Поділ волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Поділ волосся</h2>
                <div class="description">Розділити волосся на кілька пасів, обмотавши кілька разів, туго
                    перетягнути кожну гумкою</div>
            </div>
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/dry.svg') }}" class="h-20 w-20" alt="Сушка волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Сушка волосся</h2>
                <div class="description">Просушити волосся без використання фена, дайте локонам висохнути природним
                    шляхом</div>
            </div>
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/cutting.svg') }}" class="h-20 w-20" alt="Зріз волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Зріз волосся</h2>
                <div class="description">Зробити зріз, відступивши кілька сантиметрів трохи вище кріплення та
                    заплітаємо зрізане волосся в косу</div>
            </div>
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/hairdresser.svg') }}" class="h-20 w-20" alt="Розчісування волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Розчісування</h2>
                <div class="description">Розчесати пасма, щоб позбутися ковтунів (якщо такі є), також,
                    запобігти подальшому заплутування</div>
            </div>
            <div
                class="bg-white rounded-lg shadow-md py-10 px-5 flex flex-col items-center hover:shadow-xl transition-shadow">
                <img src="{{ asset('images/icons/hair-info.svg') }}" class="h-20 w-20" alt="Оцінка волосся">
                <h2 class="font-bold uppercase text-center mt-8 mb-2">Оцінка волосся</h2>
                <div class="description">Зважити зріз та сфотографувати біля сантиметра і надіслати дані для
                    оцінювання</div>
            </div>
        </div>

        {{-- IF ISMOBILE --}}
        <div class="hs-accordion-group lg:hidden bg-max-dark/20 rounded-lg shadow-lg shadow-max-dark/30 mt-8">
            <div class="hs-accordion active hs-accordion-active:bg-max-soft/10 rounded-t-lg" id="hs-basic-heading-1">
                <button
                    class="hs-accordion-toggle uppercase p-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start rounded-lg"
                    aria-controls="hs-basic-collapse-1">
                    <div
                        class="h-8 w-8 flex bg-max-soft/20 hs-accordion-active:bg-max-soft/30 rounded-full border-2 border-max-dark/20 hs-accordion-active:border-max-dark/30 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">1</span>
                    </div>
                    Миття волосся
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-1"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-1">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/washing.svg') }}" class="h-24 w-24" alt="Миття волосся">
                        <p class="text-max-soft font-semibold mt-5">Попередньо необхідно вимити волосся шампунем, яким
                            Ви зазвичай користуєтесь</p>
                    </div>
                </div>
            </div>

            <div class="hs-accordion hs-accordion-active:bg-max-soft/10" id="hs-basic-heading-2">
                <button
                    class="hs-accordion-toggle uppercase font-semibold p-3 inline-flex items-center gap-x-3 text-sm w-full text-start rounded-lg"
                    aria-controls="hs-basic-collapse-2">
                    <div class="h-8 w-8 flex bg-max-soft/20 rounded-full border-2 border-max-dark/20 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">2</span>
                    </div>
                    Сушка волосся
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-2"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-2">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/dry.svg') }}" class="h-24 w-24" alt="Сушка волосся">
                        <p class="text-max-soft font-semibold mt-5">Просушити волосся без використання фена, дайте
                            локонам
                            висохнути природним шляхом</p>
                    </div>
                </div>
            </div>

            <div class="hs-accordion hs-accordion-active:bg-max-soft/10" id="hs-basic-heading-3">
                <button
                    class="hs-accordion-toggle uppercase font-semibold p-3 inline-flex items-center gap-x-3 text-sm w-full text-start rounded-lg"
                    aria-controls="hs-basic-collapse-3">
                    <div class="h-8 w-8 flex bg-max-soft/20 rounded-full border-2 border-max-dark/20 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">3</span>
                    </div>
                    Розчісування
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-3"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-3">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/hairdresser.svg') }}" class="h-24 w-24"
                            alt="Розчісування волосся">
                        <p class="text-max-soft font-semibold mt-5">
                            Розчесати пасма, щоб позбутися ковтунів (якщо такі є), також, запобігти подальшому
                            заплутування</p>
                    </div>
                </div>
            </div>

            <div class="hs-accordion hs-accordion-active:bg-max-soft/10" id="hs-basic-heading-4">
                <button
                    class="hs-accordion-toggle uppercase font-semibold p-3 inline-flex items-center gap-x-3 text-sm w-full text-start rounded-lg"
                    aria-controls="hs-basic-collapse-4">
                    <div class="h-8 w-8 flex bg-max-soft/20 rounded-full border-2 border-max-dark/20 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">4</span>
                    </div>
                    Поділ волосся
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-4"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-4">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/bunch.svg') }}" class="h-24 w-24" alt="Поділ волосся">
                        <p class="text-max-soft font-semibold mt-5">
                            Розділити волосся на кілька пасів, обмотавши кілька разів, туго перетягнути кожну гумкою
                        </p>
                    </div>
                </div>
            </div>

            <div class="hs-accordion hs-accordion-active:bg-max-soft/10" id="hs-basic-heading-5">
                <button
                    class="hs-accordion-toggle uppercase font-semibold p-3 inline-flex items-center gap-x-3 text-sm w-full text-start rounded-lg"
                    aria-controls="hs-basic-collapse-5">
                    <div class="h-8 w-8 flex bg-max-soft/20 rounded-full border-2 border-max-dark/20 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">5</span>
                    </div>
                    Зріз волосся
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-5"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-5">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/cutting.svg') }}" class="h-24 w-24" alt="Зріз волосся">
                        <p class="text-max-soft font-semibold mt-5">Зробити зріз, відступивши кілька сантиметрів трохи
                            вище
                            кріплення та заплітаємо зрізане волосся в косу</p>
                    </div>
                </div>
            </div>

            <div class="hs-accordion hs-accordion-active:bg-max-soft/10 hs-accordion-active:rounded-b-lg"
                id="hs-basic-heading-6">
                <button
                    class="hs-accordion-toggle uppercase font-semibold p-3 inline-flex items-center gap-x-3 text-sm w-full text-start rounded-lg"
                    aria-controls="hs-basic-collapse-6">
                    <div class="h-8 w-8 flex bg-max-soft/20 rounded-full border-2 border-max-dark/20 justify-center">
                        <span class="self-center text-sm font-bold text-max-soft">6</span>
                    </div>
                    Оцінка волосся
                    <x-lucide-chevron-up class="h-5 w-5 ms-auto hs-accordion-active:block hidden" />
                    <x-lucide-chevron-down class="h-5 w-5 ms-auto hs-accordion-active:hidden block" />
                </button>
                <div id="hs-basic-collapse-6"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                    aria-labelledby="hs-basic-heading-6">
                    <div class="pb-6 pt-3 ps-14 px-12 flex flex-col items-center">
                        <img src="{{ asset('images/icons/hair-info.svg') }}" class="h-24 w-24" alt="Оцінка волосся">
                        <p class="text-max-soft font-semibold mt-5">Зважити зріз та сфотографувати біля сантиметра і
                            надіслати дані для оцінювання</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Warning Info --}}
        <div class="flex bg-max-soft/10 border-max-soft/10 border rounded-lg mt-8 lg:w-1/2 p-3">
            <div class="flex me-3">
                <x-lucide-alert-triangle class="h-8 w-8 text-max-dark/70 animate-pulse self-center" />
            </div>
            <div class="leading-3 text-max-dark/60 font-semibold text-xs">
                Не намагайтесь обдурити оцінювача, використовуючи прийоми, щоб поліпшити
                якість волосся, або розтягувати пасмо, щоб візуально збільшити довжину.
                Наш фахівець обов'язково розпізнає обман.
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-light pb-14">

        <x-slot:title>ПРОДАТИ ВОЛОССЯ АБО<br class="lg:hidden"> ВСЕ Ж ЗБЕРЕГТИ ДОВЖИНУ?</x-slot>
        <x-slot:caption class="text-max-soft">
            МІНЯЙТЕСЯ І ЗАРОБЛЯЙТЕ<br class="lg:hidden"> НА НОВОМУ ОБРАЗІГРОШІ
        </x-slot>

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
            позбавляючись від посічених кінців. Нас цікавлять живі, здорові, блискучі пасма.</paos=>
    </x-section>

    <x-section class="bg-max-black py-14">

        <x-slot:title class="text-gray-300">Покупка волосся</x-slot>
        <x-slot:caption class="text-max-soft">Які чинники впливають на вартість</x-slot>

        <div class="grid lg:grid-cols-2 gap-y-8 lg:gap-x-8">
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Довжина зрізу</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Ми купуємо зрізи від 40 сантиметрів. Якщо ваші локони коротші, то
                    рекомендуємо ненадовго відкласти продаж, кожен сантиметр здатний сильно відбитися на
                    вартості.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Структура локонів</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Вища вартість пропонується за якісні, здорові та рівномірні локони.
                    М'які і природньо гладкі на дотик пасма, завжди мають значно вищу ціну.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Стан пучка</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Зріз має бути зроблений за правилами та закріплений зверху гумкою і
                    не мати колунів. Краще продавати свіжозрізані коси, їх ціна вища. Пролежані
                    прядки втрачають свій природний блиск та натуральні масла, які містяться в них.
                </p>
            </div>
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Хімічний вплив</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Ми не приймаємо пошкодженні, ламкі та сухі локони, або локони з
                    неоднорідною структурою. А також волосся із завивкою, забруднене або оброблене будь якими
                    хімічними речовинами.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Колір волосся</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Пофарбовані пасма будуть коштувати набагато дешевше натуральних.
                    Скупка волосся здійснюється будь-якому кольорі, але більш висока ціна встановлюється на світлі
                    натуральні тони.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="text-lg flex-none text-max-soft me-3">Наявність сивини</div>
                    <div class="mx-auto w-full relative">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-dark/60 border-dotted w-full"></span>
                    </div>
                    <div class="border-2 flex-none border-max-dark rounded-full h-11 w-11 flex justify-center ms-3">
                        <span class="text-xs text-max-dark font-bold self-center">~20%</span>
                    </div>
                </div>
                <p class="text-gray-200/90 italic">Зрізи з сивиною теж підлягають купівлі, але багато залежить від
                    доглянутості волосся та як довго росло з сивиною. Забарвлене і сиве волосся приймається від 50
                    сантиметрів.</p>
            </div>
        </div>

        {{-- Warning Info --}}
        <div class="flex bg-max-soft/20 border-max-soft/10 border rounded-lg mt-10 lg:w-1/2 p-3">
            <div class="flex me-3">
                <x-lucide-info class="h-8 w-8 text-max-dark/70 animate-pulse self-center" />
            </div>
            <div class="leading-3 text-max-soft/50 font-semibold text-xs">
                Відсоткове відношення впливу на ціну є відносним та орієнтовним. В деяких випадках відсотки можуть
                змінюватись та інші фактори можуть переважати.
            </div>
        </div>
    </x-section>
@endsection
