
import AOS from 'aos';
import anime from 'animejs/lib/anime.es.js';

/**
 * Animation on scroll
 */

AOS.init({
    duration: 1000,
    easing: "ease-out-back",
    once: true,
    mirror: true
});

anime({
    targets: '#hero',
    backgroundPosition: ['0%', '100%'],
    easing: 'linear',
    direction: 'alternate',
    loop: true,
    duration: 25000
})

anime({
    targets: '.img-card-1',
    translateY: -20,
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: true,
    duration: 2000
})

anime({
    targets: '.img-card-2',
    translateY: 20,
    easing: 'easeInOutQuad',
    direction: 'alternate',
    loop: true,
    duration: 2000
})
