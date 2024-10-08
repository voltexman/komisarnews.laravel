@props(['text', 'cursor'])

<div x-data="{
    text: '',
    textArray: [{{ $text }}],
    textIndex: 0,
    charIndex: 0,
    typeSpeed: 110,
    cursorSpeed: 550,
    pauseEnd: 1500,
    pauseStart: 20,
    direction: 'forward',
}" x-init="$nextTick(() => {
    let typingInterval = setInterval(startTyping, $data.typeSpeed);

    function startTyping() {
        let current = $data.textArray[$data.textIndex];
        // check to see if we hit the end of the string
        if ($data.charIndex > current.length) {
            $data.direction = 'backward';
            clearInterval(typingInterval);
            setTimeout(function() {
                typingInterval = setInterval(startTyping, $data.typeSpeed);
            }, $data.pauseEnd);
        }
        $data.text = current.substring(0, $data.charIndex);
        if ($data.direction == 'forward') {
            $data.charIndex += 1;
        } else {
            if ($data.charIndex == 0) {
                $data.direction = 'forward';
                clearInterval(typingInterval);
                setTimeout(function() {
                    $data.textIndex += 1;
                    if ($data.textIndex >= $data.textArray.length) {
                        $data.textIndex = 0;
                    }
                    typingInterval = setInterval(startTyping, $data.typeSpeed);
                }, $data.pauseStart);
            }
            $data.charIndex -= 1;
        }
    }
    @isset($cursor)
    setInterval(function() {
        if ($refs.cursor.classList.contains('hidden')) {
            $refs.cursor.classList.remove('hidden');
        } else {
            $refs.cursor.classList.add('hidden');
        }
    }, $data.cursorSpeed);
    @endisset
})"
    class="flex items-center justify-center mx-auto text-center max-w-7xl">
    <div class="relative flex items-center justify-center h-auto">
        <div class="leading-tight" x-text="text ? text : '&nbsp;'"></div>
        @isset($cursor)
            <span class="absolute right-0 w-2 h-4 -mr-2 bg-max-light" x-ref="cursor"></span>
        @endisset
    </div>
</div>
