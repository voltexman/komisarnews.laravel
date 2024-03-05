<ul class="lg:flex mx-auto self-center">
    @foreach ($items as $item)
        @if ($item['url'] !== url()->current())
            <li class="text-max-light hover:text-max-soft text-sm transition">
                <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg"
                   href="{{ $item['url'] }}">
                    <i data-lucide="{{ $item['icon'] }}" class="h-4 w-4 inline-flex"></i>
                    {{ $item['label'] }}
                </a>
            </li>
        @endif
    @endforeach
</ul>
