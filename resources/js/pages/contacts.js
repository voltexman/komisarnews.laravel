import '../app'
// import axios from 'axios';
// import anime from 'animejs';

// // Отримайте посилання на форму
// const form = document.querySelector('.form1');

// // Отримайте значення атрибуту action
// const formAction = form.getAttribute('action');

// const responsePanel = document.querySelector('.response-panel');
// const iconWaiting = document.querySelector('.icon-waiting');
// const iconSuccess = document.querySelector('.icon-success');
// const messageAndReplace = document.querySelector('.message-and-replace');
// const messageSuccess = messageAndReplace.querySelector('span');

// const repeatButton = document.querySelector('.repeat-button');

// // Додайте обробник події submit форми
// form.addEventListener('submit', function (event) {
//     // Зупиніть стандартну поведінку форми
//     event.preventDefault();

//     form.classList.replace('d-block', 'd-none');
//     responsePanel.classList.replace('d-none', 'd-flex');

//     // Отримайте дані з форми
//     const formData = new FormData(form);

//     setTimeout(function () {
//         // Відправте дані на сервер за допомогою Axios і значення formAction
//         axios.post(formAction, formData)
//             .then(function (response) {
//                 if (response.status === 200) {
//                     iconWaiting.classList.replace('d-block', 'd-none');
//                     iconSuccess.classList.replace('d-none', 'd-block');
//                     messageAndReplace.classList.replace('d-none', 'd-block');

//                     anime({
//                         targets: iconSuccess,
//                         delay: 500,
//                         duration: 3000,
//                         scale: [0, 1],
//                         begin: function () {
//                             messageSuccess.classList.replace('d-none', 'd-block');
//                             anime({
//                                 targets: messageSuccess,
//                                 delay: 800,
//                                 duration: 2000,
//                                 scale: [0, 1],
//                             });
//                         },
//                     })

//                     form.reset();
//                 }
//             })
//             .catch(function (error) {
//                 console.log(error);
//             });
//     }, 1500)

//     repeatButton.addEventListener('click', () => {
//         form.classList.replace('d-none', 'd-block');
//         responsePanel.classList.replace('d-flex', 'd-none');
//         iconWaiting.classList.replace('d-none', 'd-block');
//         iconSuccess.classList.replace('d-block', 'd-none');
//         messageAndReplace.classList.replace('d-block', 'd-none');
//         messageSuccess.classList.replace('d-block', 'd-none');
//         repeatButton.classList.replace('d-block', 'd-none');
//     })
// });
