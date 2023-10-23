<div class="booking-box wrapper rounded-3 shadow-lg my-5 my-lg-0">
    <form action="{{ route('orders.store') }}" class="form1 form-wizard clearfix" enctype="multipart/form-data">
        {{-- @csrf --}}
        <div id="wizard" class="wizard">
            <div class="wizard__content">
                <header class="wizard__header">
                    <div class="wizard__header-overlay"></div>
                    <div class="wizard__header-content">
                        <div class="wizard__title">Оцінка та продаж волосся</div>
                    </div>
                    <div class="wizard__steps">
                        <nav class="steps">
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="bi bi-ui-checks"></i></p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle cx="26" cy="26" r="25" fill="none" />
                                        <path fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>
                                    <div class="lines">
                                        <div class="line -start">
                                        </div>

                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="bi bi-camera-fill"></i>
                                    </p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle cx="26" cy="26" r="25" fill="none" />
                                        <path fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>
                                    <div class="lines">
                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="bi bi-chat-square-text-fill"></i></p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle cx="26" cy="26" r="25" fill="none" />
                                        <path fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>

                                    <div class="lines">
                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="bi bi-file-text-fill"></i>
                                    </p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle cx="26" cy="26" r="25" fill="none" />
                                        <path fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>

                                    <div class="lines">
                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>

                <div class="panels mt-4">

                    <div class="panel">
                        <div class="row">
                            <div class="col-12">
                                {{-- <label for="goal" aria-label="Оберіть мету">Оберіть мету</label>
                                    <select name="goal" id="goal" class="select order-goal-select">
                                        <option value="0">Хочу оцінити вартість</option>
                                        <option value="1">Хочу продати волосся</option>
                                    </select> --}}

                                <div class="select-box mb-3">
                                    <div class="select-box__current">
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="goal_0"
                                                value="Хочу оцінити вартість" name="goal" checked="checked" />
                                            <p class="select-box__input-text">Хочу оцінити вартість</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="goal_1"
                                                value="Хочу продати волосся" name="goal" />
                                            <p class="select-box__input-text">Хочу продати волосся</p>
                                        </div>
                                        {{-- img src... --}}
                                    </div>
                                    <ul class="select-box__list">
                                        <li>
                                            <label class="select-box__option" for="goal_0" aria-hidden="true">
                                                Хочуоцінити вартість
                                            </label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="goal_1" aria-hidden="true">
                                                Хочу продати волосся
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label>Ваше ім'я</label>
                                <input name="name" type="text" class="form-control input"
                                    placeholder="Ваше ім'я" maxlength="60">
                            </div>
                            <div class="col-6">
                                <div class="position-relative">
                                    <label>Місто</label>
                                    <input name="city" type="text" class="form-control input"
                                        placeholder="Місто" maxlength="60" required>
                                    <span class="required-input">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Електронна пошта</label>
                                <input name="email" type="email" class="form-control input"
                                    placeholder="Електронна пошта" maxlength="80">
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <label>Номер телефону</label>
                                    <input name="phone" type="number" class="form-control input"
                                        placeholder="Номер телефону" maxlength="20" required>
                                    <span class="required-input">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="select-box mb-3">
                                <div class="select-box__current">
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="0"
                                            value="Блонд" name="color" checked="checked" />
                                        <p class="select-box__input-text">Блонд</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="1"
                                            value="Світло-коричневий" name="color" />
                                        <p class="select-box__input-text">Світло-русий</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4"
                                            value="Русий" name="color" />
                                        <p class="select-box__input-text">Русий</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4"
                                            value="Світло-коричневий" name="color" />
                                        <p class="select-box__input-text">Світло-коричневий</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4"
                                            value="Темно-коричневий" name="color" />
                                        <p class="select-box__input-text">Темно-коричневий</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4"
                                            value="Чорний" name="color" />
                                        <p class="select-box__input-text">Чорний</p>
                                    </div>
                                    {{-- img src... --}}
                                </div>
                                <ul class="select-box__list">
                                    <li>
                                        <label class="select-box__option" for="0"
                                            aria-hidden="true">Блонд</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="1"
                                            aria-hidden="true">Світло-русий</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="2"
                                            aria-hidden="true">Русий</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="3"
                                            aria-hidden="true">Світло-коричневий</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="4"
                                            aria-hidden="true">Темно-коричневий</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="5"
                                            aria-hidden="true">Чорний</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>Вага</label>
                                <input name="weight" type="number" class="form-control input" placeholder="Вага"
                                    maxlength="3">
                            </div>
                            <div class="col-4">
                                <div class="position-relative">
                                    <label>Довжина</label>
                                    <input name="length" type="number" class="form-control input"
                                        placeholder="Довжина" maxlength="3" required>
                                    <span class="required-input">*</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>Ваш вік</label>
                                <input name="age" type="number" class="form-control input"
                                    placeholder="Ваш вік" maxlength="2">
                            </div>
                        </div>
                    </div>

                    <div class="panel d-flex flex-column">
                        <div id="uploadZone" class="d-flex align-items-start rounded-3 p-3 dropzone">
                            <div class="dz-message needscli d-flex w-100">
                                <div class="w-25 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-camera"></i>
                                </div>
                                <div class="w-75 ms-3 flex-column d-flex">
                                    <div class="add-title d-flex text-start">
                                        Додайте фотографії волосся
                                    </div>
                                    <div class="add-description d-flex flex-row">
                                        <div class="d-flex justify-content-center flex-column mt-2">
                                            <span class="text-muted">можете додати до 4 фото</span>
                                            <span class="text-muted">
                                                <i class="bi bi-aspect-ratio"></i>1920x1080
                                                <i class="bi bi-file-earmark-richtext">JPG,PNG</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="acceptedImages" class="d-flex mt-auto row"></div>

                        <div id="imagesDescription">
                            <p class="text-muted text-center mt-3">Додайте фотографії вашого волосся
                                для<br>подальшої оцінки нашим спеціалістом</p>
                            <p class="text-muted text-center">Намагайтесь обирати найвдаліші
                                фото,<br>які
                                краще відображають реальний стан волосся</p>
                            <p class="text-muted text-center">Ви можете відредагувати фото натиснувши <i
                                    class="bi bi-crop fw-bold text-black"></i><br>На мініатюрах фото можуть
                                виглядати
                                інакше</p>
                        </div>

                        <div class="d-flex align-items-end mt-auto">
                            <ul class="ks-cboxtags d-flex w-100">
                                <li class="flex-fill">
                                    <input name="cutted" value="1" type="checkbox" id="checkboxOne">
                                    <label for="checkboxOne">Зрізані</label>
                                </li>
                                <li class="flex-fill">
                                    <input name="painted" value="1" type="checkbox" id="checkboxTwo">
                                    <label for="checkboxTwo">Фарбовані</label>
                                </li>
                                <li class="flex-fill">
                                    <input name="gray" value="1" type="checkbox" id="checkboxThree">
                                    <label for="checkboxThree">З сивиною</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-start input2_inner">
                                <label for="formControlTextarea1" class="form-label">Опис</label>
                                <textarea name="description" class="input" placeholder="Опис" id="formControlTextarea1" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="panel d-flex flex-column">
                        <header class="panel__header">
                            <h2 class="panel__title">Перевірте данні</h2>
                            <p class="panel__subheading fw-bold">Хочу оцінити вартість</p>
                        </header>

                        <div class="panel__content">
                            <div class="d-flex">
                                <div class="fw-bold w-50 fs-6">Ім'я:
                                    <small class="name"></small>
                                </div>
                                <div class="fw-bold w-50 me-auto fs-6">Місто:
                                    <small class="city"></small>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="fw-bold w-50 fs-6">E-Mail:
                                    <small class="email"></small>
                                </div>
                                <div class="fw-bold w-50 fs-6">Телефон:
                                    <small class="phone"></small>
                                </div>
                            </div>
                            <div class="d-flex fw-bold me-auto fs-6">Колір:
                                <small class="color"></small>
                            </div>
                            <div class="d-flex">
                                <div class="fw-bold me-auto fs-6">Вага:
                                    <small class="weight"></small> гр.
                                </div>
                                <div class="fw-bold mx-auto fs-6">Довжина:
                                    <small class="length"></small> см.
                                </div>
                                <div class="fw-bold ms-auto fs-6">Вік:
                                    <small class="age"></small> р.
                                </div>
                            </div>
                            <div class="fw-bold fs-6">Опис:
                                <small class="description"></small>
                            </div>
                        </div>

                        <div class="styled-input-single d-flex mt-auto">
                            <input type="checkbox" name="fieldset-5" id="checkbox-example-one">
                            <label for="checkbox-example-one">Погоджуюсь з</label>
                            <span class="fw-bold ms-1 cursor-pointer" data-bs-target="#modalOrder"
                                data-bs-toggle="modal">правилами</span>
                        </div>
                    </div>

                </div>

                <div class="wizard__footer">
                    <div class="d-flex flex-row my-2">
                        <button class="button me-2 d-none previous" type="button">
                            <i class="bi bi-arrow-left-circle"></i>
                        </button>
                        <button class="button me-2" data-bs-toggle="modal" data-bs-target="#modalOrder"
                            aria-label="Детальна інформація" type="button">
                            <i class="bi bi-info-circle"></i>
                        </button>
                        <button class="button flex-fill next disabled" type="button" disabled>
                            <i class="bi bi-camera-fill me-2"></i>До фото
                            <i class="bi bi-arrow-right-short ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="congrats-message rounded-3 align-content-center flex-wrap flex-column d-none">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                        fill="none" class="waiting-image d-block">
                        <g style="animation:rotate-center 1.5s ease-in-out infinite both;transform-origin:center center"
                            stroke-width=".5">
                            <path stroke="#91765a" stroke-linecap="round"
                                d="M6.883 11.778a5 5 0 018.473-3.597m1.761 4.131a5 5 0 01-8.473 3.597" />
                            <path fill="#b5a290" stroke="#b5a290"
                                d="M17.078 10.145l-2.308-.347a.066.066 0 01-.018-.005.026.026 0 01-.007-.005.056.056 0 01-.015-.024.056.056 0 01-.002-.03l.003-.007a.069.069 0 01.012-.015l1.995-1.964a.064.064 0 01.015-.012.028.028 0 01.007-.003.056.056 0 01.029.003c.012.004.02.01.024.015a.03.03 0 01.005.007.069.069 0 01.004.019l.313 2.312a.046.046 0 01-.015.042.045.045 0 01-.043.014zm-10.156 3.8l2.308.348.018.005a.03.03 0 01.007.005c.004.003.01.011.015.024a.056.056 0 01.002.029.027.027 0 01-.003.007.065.065 0 01-.012.015l-1.995 1.965a.072.072 0 01-.015.012.03.03 0 01-.007.003.056.056 0 01-.029-.003.057.057 0 01-.024-.016.028.028 0 01-.005-.006.066.066 0 01-.004-.019l-.313-2.312a.046.046 0 01.002-.023.053.053 0 01.013-.02.052.052 0 01.02-.012.046.046 0 01.022-.002z" />
                        </g>
                    </svg>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                        fill="none" class="success-image d-none">
                        <circle cx="12.735" cy="12" r="7" stroke="#91765a" stroke-width=".5" />
                        <circle cx="9.735" cy="10.277" r="1" fill="#91765a" />
                        <circle cx="15.735" cy="10.277" r="1" fill="#91765a" />
                        <path stroke="#91765a" stroke-linecap="round"
                            d="M15.735 14.147l-.049.04a4.631 4.631 0 01-5.951-.04"
                            style="animation:happy 3s infinite linear" stroke-dasharray="100" />
                    </svg>

                    <div
                        class="message-and-replace d-flex flex-fill align-content-center flex-wrap justify-content-center">
                        <span class="fw-bold text-uppercase success-message">Успішно надіслано</span>
                        {{-- <span class="btn-form2-submit mt-3 repeat-button">Відправити ще
                            <i class="bi bi-arrow-90deg-left"></i>
                        </span> --}}
                    </div>
                </div>
            </div>
    </form>
</div>
