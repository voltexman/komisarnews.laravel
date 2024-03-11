<ul class="self-center mx-auto lg:flex">
    @foreach ($items as $item)
        @if ($item['url'] !== url()->current())
            <li class="text-sm transition text-max-light hover:text-max-soft">
                <a class="flex font-normal w-full items-center gap-x-2 py-2 px-2.5 rounded-lg" href="{{ $item['url'] }}">
                    @svg('lucide-' . $item['icon'], 'inline-flex h-4 w-4')
                    {{ $item['label'] }}
                </a>
            </li>
        @endif
    @endforeach
</ul>
