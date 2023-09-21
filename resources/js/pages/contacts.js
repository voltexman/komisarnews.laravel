import '../app'
import axios from 'axios';

// Отримайте посилання на форму
const form = document.querySelector('.form1');

// Отримайте значення атрибуту action
const formAction = form.getAttribute('action');

const responsePanel = document.querySelector('.response-panel');
const iconWaiting = document.querySelector('.icon-waiting');
const iconSuccess = document.querySelector('.icon-success');
const messageAndReplace = document.querySelector('.message-and-replace');

const repeatButton = document.querySelector('.repeat-button');

// Додайте обробник події submit форми
form.addEventListener('submit', function (event) {
    // Зупиніть стандартну поведінку форми
    event.preventDefault();

    form.classList.replace('d-block', 'd-none');
    responsePanel.classList.replace('d-none', 'd-flex');

    // Отримайте дані з форми
    const formData = new FormData(form);

    setTimeout(function () {
        // Відправте дані на сервер за допомогою Axios і значення formAction
        axios.post(formAction, formData)
            .then(function (response) {
                console.log(response)
                if (response.status === 200) {
                    iconWaiting.classList.replace('d-block', 'd-none');
                    iconSuccess.classList.replace('d-none', 'd-block');
                    messageAndReplace.classList.replace('d-none', 'd-block');
                    form.reset()
                }
            })
            .catch(function (error) {
                console.log(error)
            });
    }, 2000)

    repeatButton.addEventListener('click', () => {
        form.classList.replace('d-none', 'd-block');
        responsePanel.classList.replace('d-flex', 'd-none');
        iconWaiting.classList.replace('d-none', 'd-block');
        iconSuccess.classList.replace('d-block', 'd-none');
        messageAndReplace.classList.replace('d-block', 'd-none');
    })
});
