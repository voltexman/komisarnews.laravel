<ul class="lg:flex mx-auto self-center">
    @if (!Request::is('/'))
        <li class="text-max-light hover:text-max-soft transition">
            <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg" href="{{ route('main') }}">
                <x-lucide-home class="h-4 w-4" />
                Головна
            </a>
        </li>
    @endif

    {{-- {{ Route::currentRouteName() }} --}}

    {{-- @if (Route::currentRouteName() === 'articles.list')
        <li class="hover:text-max-soft transition">
            <a href="{{ route('articles.list') }}">Статті</a>
        </li>
    @endif --}}

    @if (Route::currentRouteName() !== 'articles.show' && !Request::is('articles'))
        <li class="text-max-light hover:text-max-soft transition">
            <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg"
                href="{{ route('articles.list') }}">
                <x-lucide-newspaper class="h-4 w-4" />
                Статті
            </a>
        </li>
    @elseif (Route::currentRouteName() === 'article.show')
        <li class="hover:text-max-soft transition text-max-light font-bold">
            <a class="font-normal" href="{{ route('articles.list') }}">Статті</a>
        </li>
    @endif

    @if (!Request::is('contacts'))
        <li class="text-max-light hover:text-max-soft transition">
            <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg"
                href="{{ route('contacts.show') }}">
                <x-lucide-contact class="h-4 w-4" />
                Контакти
            </a>
        </li>
    @endif
</ul>
