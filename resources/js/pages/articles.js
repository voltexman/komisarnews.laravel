import '../app'

import InfiniteScroll from 'infinite-scroll'

const articlesList = document.querySelector('.articles-list')
const nextButton = document.querySelector('a[rel="next"]')

console.log(nextButton)

if (articlesList && nextButton) {
    new InfiniteScroll(articlesList, {
        path: 'a[rel="next"]',
        append: 'article',
        button: 'button.load-next',
        hideNav: 'nav[role="navigation"]',
        loadOnScroll: false,
        history: 'push'
    })
}
