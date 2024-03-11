<ul class="self-center mx-auto lg:flex lg:gap-x-10">
    @foreach ($items as $item)
        @if ($item['url'] !== url()->current())
            <li class="mx-10 mb-3 text-sm transition lg:m-0 text-max-light hover:text-max-soft">
                <a class="flex items-center w-full p-3 font-normal border rounded-lg ps-6 lg:p-0 lg:bg-transparent lg:border-0 gap-x-2 border-max-soft/20 bg-max-soft/10"
                    href="{{ $item['url'] }}">
                    @svg('lucide-' . $item['icon'], 'inline-flex h-4 w-4')
                    {{ $item['label'] }}
                </a>
            </li>
        @endif
    @endforeach
</ul>
