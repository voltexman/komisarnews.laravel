<ul class="lg:flex mx-auto self-center">
    @foreach ($items as $item)
        @if ($item['url'] !== url()->current())
            <li class="text-max-light hover:text-max-soft text-sm transition">
                <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg" href="{{ $item['url'] }}">
                    <x-lucide-home class="h-3.5 w-3.5" />
                    {{ $item['label'] }}
                </a>
            </li>
        @endif
    @endforeach
</ul>
