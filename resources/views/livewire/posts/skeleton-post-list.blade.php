<div>
    <div class="grid gap-12 lg:grid-cols-2 lg:gap-20">
        @for ($i = 1; $i <= 8; $i++)
            <div class="flex animate-pulse relative flex-col lg:flex-row w-full">
                <div class="bg-max-soft/30 rounded-t-lg lg:rounded-lg h-[180px] lg:h-[380px] w-full">
                    <div class="flex justify-center h-full">
                        <x-lucide-image class="h-20 w-20 lg:h-40 lg:w-40 lg:-mt20 opacity-10 self-center" />
                    </div>
                </div>
                <div
                    class="lg:absolute lg:-bottom-8 lg:-right-8 rounded-b-lg lg:rounded-lg lg:w-2/3 h-40 w-full lg:h-52 p-3 bg-white">
                    <div class="flex flex-col h-full">
                        <span class="bg-gray-100 w-full h-8 flex rounded-lg mb-auto"></span>
                        <div class="flex flex-col my-auto">
                            <span class="bg-gray-100 w-full h-3 mb-1 flex rounded-lg"></span>
                            <span class="bg-gray-100 w-full h-3 my-1 flex rounded-lg"></span>
                            <span class="bg-gray-100 w-full h-3 mt-1 flex rounded-lg"></span>
                        </div>
                        <div class="flex justify-between mt-auto">
                            <span class="bg-gray-100 h-3 w-1/4 flex rounded-lg"></span>
                            <span class="bg-gray-100 h-3 w-1/4 flex rounded-lg"></span>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
