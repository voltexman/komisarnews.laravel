// import '../app'

import anime from 'animejs/lib/anime.es.js';

anime({
    targets: '#hero',
    backgroundPosition: ['0%', '100%'],
    easing: 'linear',
    direction: 'alternate',
    loop: true,
    duration: 25000
})

anime({
    targets: '.arrow',
    translateY: 20,
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: true,
    duration: 500
})

anime({
    targets: '.image-card-1',
    translateY: -20,
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: true,
    duration: 2000
})

anime({
    targets: '.image-card-2',
    translateY: 20,
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: true,
    duration: 2000
})
