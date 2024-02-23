<div>
    <ul class="flex mt-5 space-x-3">
        <li class="flex">
            <a class="text-max-soft border border-max-soft/80 h-8 w-8 rounded-full hover:bg-max-soft/30 transition shadow-max-soft/30 shadow-md hover:scale-110 hover:shadow-lg"
                href="{{ Share::currentPage()->facebook()->getRawLinks() }}">
                <x-lucide-facebook class="h-5 w-5" />
            </a>
        </li>
        <li class="flex">
            <a class="text-max-soft border border-max-soft/80 h-8 w-8 rounded-full hover:bg-max-soft/30 transition shadow-max-soft/30 shadow-md hover:scale-110 hover:shadow-lg"
                href="{{ Share::currentPage()->telegram() }}">
                <x-lucide-send class="h-5 w-5" />
            </a>
        </li>
    </ul>
</div>
