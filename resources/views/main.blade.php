@extends('layouts.base')

@section('title', 'Головна сторінка')
@section('keywords', 'Головна сторінка')
@section('description', 'Головна сторінка')
@section('robots', 'all')

@section('header')
    @parent
    <div class="relative w-full h-screen py-24 overflow-hidden bg-gray-900 isolate sm:py-32">
        <div class="absolute top-0 left-0 w-full h-full bg-max-black/75"></div>
        <img data-src="{{ asset('images/bg-header.webp') }}" data-sizes="auto" alt="Komisarnews"
            class="absolute inset-0 object-cover object-right w-full h-full -z-10 md:object-center wscreen hscreen lazyload animate-ricochet lg:animate-none">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="absolute w-full top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 mx-auto lg:mx-0">
                <h1 class="text-2xl font-thin text-center text-white uppercase lg:text-4xl">
                    Продаж та покупка<br>волосся у Києві<span class="text-max-soft">.</span></h1>
                <h2 class="mt-5 font-semibold text-center text-white uppercase">Швидко, Дорого, Надійно</h2>
            </div>
        </div>
        <div class="absolute flex -translate-x-1/2 bottom-8 left-1/2 ">
            <a href="#about" rel="nofollow" aria-label="Перейти до опису"
                class="z-40 flex w-12 h-12 border rounded-full animate-bounce bg-slate-50/20">
                <x-lucide-arrow-down class="self-center w-6 h-6 mx-auto text-slate-100" />
            </a>
        </div>
    </div>
@endsection

@section('content')
    <x-section class="bg-max-light py-14 scroll-mt-16" id="about">
        <div class="grid overflow-hidden lg:grid-cols-2 gap-x-5">
            <div>
                <h2 class="text-2xl font-semibold text-center uppercase drop-shadow-lg lg:text-left">
                    Шукаєте Кому Вигідно<br class="lg:hidden">Продати Волосся?
                </h2>
                <h3 class="mb-5 font-bold text-center uppercase drop-shadow-lg lg:text-left text-max-dark">
                    Наша компанія завжди готова<br class="lg:hidden">купити волосся дорого!
                </h3>
                <p class="leading-7">Жителі багатьох міст можуть продати волосся
                    особисто нам в руки! Подаруєте собі настрій, не бійтеся мінятися і удосконалюватися,
                    продаючи свої коси, ви робите благу справу і заробляєте додаткові гроші на потрібні покупки.</p>
                <p class="mt-5 leading-7">Звертайтеся за консультацією прямо зараз за номером телефону,
                    ми завжди готові відповісти на будь-які питання і запропонувати вам європейські ціни. Наша компанія
                    завжди готова запропонувати найвищу ціну за натуральний слов'янський зріз від 40 см, а також кращий
                    сервіс і обслуговування. Ми є професіоналами своєї справи і поважаємо кожного нашого клієнта, тому
                    гарантуємо максимум задоволення від співпраці.</p>
            </div>
            <div class="flex justify-center px-5 py-10 lg:py-10 lg:px-10">
                <div class="animate-jumping-down">
                    <img data-src="{{ asset('images/about2.webp') }}" width="280" height="360" alt="Фото салону"
                        title="Фото салону"
                        class="lazyload skew-12 rotate-[-10deg] border-2 rounded-2xl shadow-lg shadow-max-soft/50 hover:transform-none transition-transform duration-500">
                </div>
                <div class="mt-10 animate-jumping-up">
                    <img data-src="{{ asset('images/about.webp') }}" width="280" height="360" alt="Фото салону"
                        title="Фото салону"
                        class="lazyload rotate-[10deg] border-2 rounded-2xl shadow-lg shadow-max-soft/50 hover:transform-none transition-transform duration-500">
                </div>
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-light pb-14">
        <h2 class="mb-5 text-2xl font-semibold text-center uppercase drop-shadow-lg">
            Чому Варто Звернутися Саме В Нашу Компанію?</h2>
        <p>Куплю волосся - в мережі можна знайти тисячі
            оголошень , але далеко не всі продавці працюють чесно.
            Ми є Європейською компанією, яка співпрацює з клієнтами по всьому світу. Наша компанія є прямим
            скупником локонів, тому пропонуємо найвищі ціни. Цінуємо визнання і довіру наших клієнтів,
            гарантуємо приємну співпрацю і гідну оплату Вашого товару. Здійснюємо скупку волосся по Україні і
            відбираємо якісні, живі зрізи. Після покупки, всі зрізи проходять обробку і надходять в подальший
            продаж, а також використовуються у виробництві перук.</p>

        <h3 class="mb-8 font-bold text-center uppercase drop-shadow-lg text-max-dark mt-14">
            Звертаючись в нашу компанію з бажанням <br class="lg:hidden">продати волосся, ви гарантовано отримуєте</h3>

        <div class="grid grid-flow-col grid-rows-6 gap-8 sm:grid-cols-2 sm:grid-rows-3 lg:grid-rows-2">
            @isset($accordion)
                @foreach ($about as $item)
                    <div class="flex">
                        <div class="size-16 me-3">
                            <img src="{{ asset("images/icons/{$item['icon']}.svg") }}" width="100" height="100"
                                alt="{{ $item['name'] }}">
                        </div>
                        <div class="flex flex-col">
                            <div class="font-semibold uppercase">{{ $item['name'] }}</div>
                            <div class="description">{{ $item['description'] }}</div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </x-section>

    <x-section class="py-20 bg-max-black">
        <div class="container flex">
            <div class="justify-center hidden w-1/2 lg:flex">
                <img data-src="{{ asset('images/postman.jpg') }}" alt="Відправка Новою поштою"
                    class="origin-right -translate-y-4 -skew-x-3 border-2 shadow-lg lazyload -rotate-6 rounded-xl shadow-max-dark/40 border-max-soft/60">
            </div>
            <div class="flex flex-col self-center lg:w-1/2">
                <h2 class="text-xl font-bold text-center uppercase text-max-light/80 lg:text-left">
                    Як відправити свій зріз?
                </h2>
                <h3 class="mt-1 text-sm font-bold text-center uppercase text-max-text lg:text-left">
                    Відправити свій зріз можна за<br class="lg:hidden">допомогою послуг Нової Пошти
                </h3>
                <p class="my-8 font-semibold text-max-light">При відправці ви вказуєте встановлену
                    нашим оцінювачем вартість, а при отриманні ми оплачуємо дану суму, плюс вартість
                    доставки. гроші ви зможете забрати в своєму відділенні нової пошти.</p>
                <ul class="list-unstyled text-max-light">
                    <li class="flex mb-2 text-sm font-semibold">
                        <x-lucide-check class="w-5 h-5 me-2" />
                        Насамперед ви повинні обумовити деталі з нашим менеджером.
                    </li>
                    <li class="flex mb-2 text-sm font-semibold">
                        <x-lucide-check class="w-5 h-5 me-2" />
                        Кладемо біля волосся сантиметр і робимо фото, після чого зважуємо їх.
                    </li>
                    <li class="flex mb-2 text-sm font-semibold">
                        <x-lucide-check class="w-5 h-5 me-2" />
                        Надсилаємо фотографію на наш Вайбер, а оцінювач встановлює точну вартість зрізу.
                    </li>
                    <li class="flex mb-2 text-sm font-semibold">
                        <x-lucide-check class="w-5 h-5 me-2" />
                        Коли локони надійно упаковані, їх можна відправляти поштою в нашу компанію.
                    </li>
                    <li class="flex mb-2 text-sm font-semibold">
                        <x-lucide-check class="w-5 h-5 me-2" />
                        Відправка волосся проводиться післяплатою, через послуги Нової Пошти.
                    </li>
                </ul>
            </div>
        </div>
    </x-section>

    <x-section class="bg-max-light py-14">

        <x-slot:title>Купівля волосся</x-slot>
        <x-slot:caption class="text-max-dark">
            ЯК ПРАВИЛЬНО ЗРОБИТИ ЗРІЗ<br class="lg:hidden">ЩОБ ВИРУЧИТИ МАКСИМАЛЬНУ ЦІНУ
        </x-slot>

        {{-- IF DESKTOP --}}
        <div class="hidden grid-flow-col grid-rows-2 gap-8 lg:grid">
            @isset($accordion)
                @foreach ($accordion as $item)
                    <div
                        class="flex flex-col items-center px-8 py-10 transition-shadow bg-white rounded-lg shadow-md hover:shadow-xl">
                        <img data-src="{{ asset("images/icons/{$item['icon']}.svg") }}" class="w-20 h-20 lazyload"
                            alt="{{ $item['heading'] }}">
                        <h2 class="mt-8 mb-2 font-bold text-center uppercase">{{ $item['heading'] }}</h2>
                        <div class="">{{ $item['content'] }}</div>
                    </div>
                @endforeach
            @endisset
        </div>

        {{-- IF MOBILE --}}
        <x-accordion>
            @foreach ($accordion as $item)
                <x-accordion.item :label="$item['heading']" :index="$loop->index" :active="$loop->first">
                    <img data-src="{{ asset("images/icons/{$item['icon']}.svg") }}" class="w-24 h-24 mx-auto mb-5 lazyload"
                        alt="{{ $item['heading'] }}">
                    {{ $item['content'] }}
                </x-accordion.item>
            @endforeach
        </x-accordion>

        {{-- Warning Info --}}
        <x-alert type="info" class="mt-5 lg:w-2/4">
            Не намагайтесь обдурити оцінювача, використовуючи прийоми, щоб поліпшити
            якість волосся, або розтягувати пасмо, щоб візуально збільшити довжину.
            Наш фахівець обов'язково розпізнає обман.
        </x-alert>
    </x-section>

    <x-section class="bg-max-light pb-14">

        <x-slot:title>ПРОДАТИ ВОЛОССЯ АБО<br class="lg:hidden"> ВСЕ Ж ЗБЕРЕГТИ ДОВЖИНУ?</x-slot>
        <x-slot:caption class="text-max-dark">
            МІНЯЙТЕСЯ І ЗАРОБЛЯЙТЕ<br class="lg:hidden"> НА НОВОМУ ОБРАЗІ ГРОШІ
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
        <x-slot:caption class="text-max-text">Які чинники впливають на вартість</x-slot>

        <div class="grid lg:grid-cols-2 gap-y-8 lg:gap-x-8">
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Довжина зрізу</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Ми купуємо зрізи від 40 сантиметрів. Якщо ваші локони
                    коротші, то
                    рекомендуємо ненадовго відкласти продаж, кожен сантиметр здатний сильно відбитися на
                    вартості.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Структура локонів</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Вища вартість пропонується за якісні, здорові та рівномірні
                    локони.
                    М'які і природньо гладкі на дотик пасма, завжди мають значно вищу ціну.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Стан пучка</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Зріз має бути зроблений за правилами та закріплений зверху
                    гумкою і
                    не мати колунів. Краще продавати свіжозрізані коси, їх ціна вища. Пролежані
                    прядки втрачають свій природний блиск та натуральні масла, які містяться в них.
                </p>
            </div>
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Хімічний вплив</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Ми не приймаємо пошкодженні, ламкі та сухі локони, або локони
                    з
                    неоднорідною структурою. А також волосся із завивкою, забруднене або оброблене будь якими
                    хімічними речовинами.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Колір волосся</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Пофарбовані пасма будуть коштувати набагато дешевше
                    натуральних.
                    Скупка волосся здійснюється будь-якому кольорі, але більш висока ціна встановлюється на
                    світлі
                    натуральні тони.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="flex-none text-lg text-max-text me-3">Наявність сивини</div>
                    <div class="relative w-full mx-auto">
                        <span class="border-b-2 absolute top-[50%] left-0 border-max-soft/60 border-dotted w-full"></span>
                    </div>
                    <div class="flex justify-center flex-none border-2 rounded-full border-max-soft h-11 w-11 ms-3">
                        <span class="self-center text-xs font-bold text-max-text">~20%</span>
                    </div>
                </div>
                <p class="italic text-gray-200/90">Зрізи з сивиною теж підлягають купівлі, але багато залежить
                    від
                    доглянутості волосся та як довго росло з сивиною. Забарвлене і сиве волосся приймається від
                    50
                    сантиметрів.</p>
            </div>
        </div>

        {{-- Warning Info --}}
        <div class="flex p-3 mt-10 border rounded-lg bg-max-soft/15 border-max-soft/10 lg:w-1/2">
            <div class="flex me-3">
                <x-lucide-info class="self-center w-8 h-8 text-max-text/50 animate-pulse" />
            </div>
            <div class="text-xs font-semibold leading-3 text-max-text">
                Відсоткове відношення впливу на ціну є відносним та орієнтовним. В деяких випадках відсотки
                можуть змінюватись та інші фактори можуть переважати.
            </div>
        </div>
    </x-section>
@endsection
