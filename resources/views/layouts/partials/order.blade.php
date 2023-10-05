<div class="booking-box wrapper rounded-3 shadow-lg my-5 my-lg-0">
    <form action="{{ route('orders.store') }}" class="form1 clearfix">
        @csrf
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
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                            fill="none" />
                                        <path class="checkmark__check" fill="none"
                                            d="M14.1 27.2l7.1 7.2 16.7-16.8" />
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
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                            fill="none" />
                                        <path class="checkmark__check" fill="none"
                                            d="M14.1 27.2l7.1 7.2 16.7-16.8" />
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
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                            fill="none" />
                                        <path class="checkmark__check" fill="none"
                                            d="M14.1 27.2l7.1 7.2 16.7-16.8" />
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
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                            fill="none" />
                                        <path class="checkmark__check" fill="none"
                                            d="M14.1 27.2l7.1 7.2 16.7-16.8" />
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
                                <div class="select1_wrapper">
                                    {{-- <label for="goal" aria-label="Оберіть мету">Оберіть мету</label>
                                    <select name="goal" id="goal" class="select order-goal-select">
                                        <option value="0">Хочу оцінити вартість</option>
                                        <option value="1">Хочу продати волосся</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input1_wrapper">
                                    <label>Ваше ім'я</label>
                                    <div class="input2_inner">
                                        <input name="name" type="text" class="form-control input"
                                            placeholder="Ваше ім'я" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input1_wrapper">
                                    <label>Місто</label>
                                    <div class="input2_inner">
                                        <input name="city" type="text" class="form-control input"
                                            placeholder="Місто" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <label>Електронна пошта</label>
                                    <div class="input2_inner">
                                        <input name="email" type="text" class="form-control input"
                                            placeholder="Електронна пошта" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <label>Номер телефону</label>
                                    <div class="input2_inner">
                                        <input name="phone" type="text" class="form-control input"
                                            placeholder="Номер телефону" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="select-box">
                                    <div class="select-box__current">
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="0"
                                                value="1" name="Ben" checked="checked" />
                                            <p class="select-box__input-text">Cream</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="1"
                                                value="2" name="Ben" checked="checked" />
                                            <p class="select-box__input-text">Cheese</p>
                                        </div>
                                        <div class="select-box__value">
                                            <input class="select-box__input" type="radio" id="4"
                                                value="5" name="Ben" checked="checked" />
                                            <p class="select-box__input-text">Toast</p>
                                        </div>
                                        {{-- img src... --}}
                                    </div>
                                    <ul class="select-box__list">
                                        <li>
                                            <label class="select-box__option" for="0"
                                                aria-hidden="Cream">Cream</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="1"
                                                aria-hidden="Cheese">Cheese</label>
                                        </li>
                                        <li>
                                            <label class="select-box__option" for="4"
                                                aria-hidden="Toast">Toast</label>
                                        </li>
                                    </ul>
                                </div>


                                {{-- <label for="color" aria-label="Колір">Колір
                                        <select name="color" id="color" class="select order-color-select">
                                            <option value="0">Блонд</option>
                                            <option value="1">Світло-русий</option>
                                            <option value="2">Русий</option>
                                            <option value="3">Світло-коричневий</option>
                                            <option value="4">Темно-коричневий</option>
                                            <option value="5">Чорний</option>
                                        </select>
                                    </label> --}}
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label>Вага</label>
                                    <div class="input2_inner">
                                        <input name="weight" type="text" class="form-control input"
                                            placeholder="Вага">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Довжина</label>
                                    <div class="input2_inner">
                                        <input name="length" type="text" class="form-control input"
                                            placeholder="Довжина">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Ваш вік</label>
                                    <div class="input2_inner">
                                        <input name="age" type="text" class="form-control input"
                                            placeholder="Ваш вік">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel d-flex flex-column">
                            <button id="uploadZone" class="d-flex align-items-start rounded-3 p-3">
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
                            </button>

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
                                        <input name="cutted" type="checkbox" id="checkboxOne">
                                        <label for="checkboxOne">Зрізані</label>
                                    </li>
                                    <li class="flex-fill">
                                        <input name="painted" type="checkbox" id="checkboxTwo">
                                        <label for="checkboxTwo">Фарбовані</label>
                                    </li>
                                    <li class="flex-fill">
                                        <input name="gray" type="checkbox" id="checkboxThree">
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

                        <div class="panel">
                            <header class="panel__header">
                                <h2 class="panel__title">Перевірте данні</h2>
                                <p class="panel__subheading fw-bold">Хочу оцінити вартість</p>
                            </header>

                            <div class="panel__content">
                                <div class="d-flex">
                                    <div class="fw-bold w-50">Ім'я:
                                        <span class="name">safd</span>
                                    </div>
                                    <div class="fw-bold w-50 me-auto">Місто:
                                        <span class="city"></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="fw-bold w-50">E-Mail:
                                        <span class="email"></span>
                                    </div>
                                    <div class="fw-bold w-50">Телефон:
                                        <span class="phone"></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="fw-bold me-auto">Колір:
                                        <span class="color"></span>
                                    </div>
                                    <div class="fw-bold mx-auto">Вага:
                                        <span class="weight"></span>
                                    </div>
                                    <div class="fw-bold mx-auto">Довжина:
                                        <span class="length"></span>
                                    </div>
                                    <div class="fw-bold ms-auto">Вік:
                                        <span class="age"></span>
                                    </div>
                                </div>
                                <div class="fw-bold">Опис:
                                    <span class="description">gsadghsadg</span>
                                </div>
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
                            <button class="button flex-fill next" type="button">
                                <i class="bi bi-camera-fill me-2"></i>До фото
                                <i class="bi bi-arrow-right-short ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="congrats-message">
                    Congratulations, you are now in a world of pain and suffering!
                </div>
            </div>
    </form>
</div>
