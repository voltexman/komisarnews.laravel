@extends('layouts.base')

@section('headerTitle', 'Контакти')
@section('headerSubTitle', "Зв'язок з нами")

@section('styles')
    @vite(['resources/css/pages/contacts.css'])
@endsection

@section('scripts')
    @vite(['resources/js/pages/contacts.js'])
@endsection

@section('content')
    <section class="info-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-5">
                        <p class="m-0">Зв'яжіться з нами, надіславши листа.</p>
                        <p class="m-0">Також, ми завжди на зв'язку в месенджерах Viber та WhatsApp.</p>
                        <p class="m-0">Чекаємо на Ваші коментарі, зауваження чи побажанння.</p>
                    </div>
                    <div class="item"> <i class="icon bi bi-geo-alt"></i>
                        <div class="cont">
                            <h5>Адреса</h5>
                            <p>Україна, Київ</p>
                        </div>
                    </div>
                    <div class="item"> <span class="icon bi bi-telephone"></span>
                        <div class="cont">
                            <h5>Телефон</h5>
                            <p><a href="tel:+380737857777">+380 (73) 785-77-77</a></p>
                        </div>
                    </div>
                    <div class="item"> <span class="icon bi bi-envelope"></span>
                        <div class="cont">
                            <h5>e-Mail</h5>
                            <p>123komisar@gmail.com</p>
                        </div>
                    </div>
                    <div class="item"> <span class="icon bi bi-person"></span>
                        <div class="cont">
                            <h5>Контактна особа</h5>
                            <p>Максим Комісар</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="contact-form bg-darkbrown rounded-3 shadow">
                        <div class="booking-inner position-relative clearfix">
                            <div class="response-panel d-none flex-column justify-content-center align-items-center">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                    fill="none" class="icon-waiting d-block">
                                    <g style="animation:rotate-center 1.5s ease-in-out infinite both;transform-origin:center center"
                                        stroke-width=".5">
                                        <path stroke="#91765a" stroke-linecap="round"
                                            d="M6.883 11.778a5 5 0 018.473-3.597m1.761 4.131a5 5 0 01-8.473 3.597" />
                                        <path fill="#FFF" stroke="#FFF"
                                            d="M17.078 10.145l-2.308-.347a.066.066 0 01-.018-.005.026.026 0 01-.007-.005.056.056 0 01-.015-.024.056.056 0 01-.002-.03l.003-.007a.069.069 0 01.012-.015l1.995-1.964a.064.064 0 01.015-.012.028.028 0 01.007-.003.056.056 0 01.029.003c.012.004.02.01.024.015a.03.03 0 01.005.007.069.069 0 01.004.019l.313 2.312a.046.046 0 01-.015.042.045.045 0 01-.043.014zm-10.156 3.8l2.308.348.018.005a.03.03 0 01.007.005c.004.003.01.011.015.024a.056.056 0 01.002.029.027.027 0 01-.003.007.065.065 0 01-.012.015l-1.995 1.965a.072.072 0 01-.015.012.03.03 0 01-.007.003.056.056 0 01-.029-.003.057.057 0 01-.024-.016.028.028 0 01-.005-.006.066.066 0 01-.004-.019l-.313-2.312a.046.046 0 01.002-.023.053.053 0 01.013-.02.052.052 0 01.02-.012.046.046 0 01.022-.002z" />
                                    </g>
                                </svg>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                    fill="none" class="icon-success d-none">
                                    <circle cx="12.735" cy="12" r="7" stroke="#91765a"
                                        stroke-width=".5" />
                                    <circle cx="9.735" cy="10.277" r="1" fill="#91765a" />
                                    <circle cx="15.735" cy="10.277" r="1" fill="#91765a" />
                                    <path stroke="#91765a" stroke-linecap="round"
                                        d="M15.735 14.147l-.049.04a4.631 4.631 0 01-5.951-.04"
                                        style="animation:happy 3s infinite linear" stroke-dasharray="100" />
                                </svg>
                                <div class="message-and-replace w-100 d-none">
                                    <span class="d-none fw-bold text-uppercase">Успішно надіслано</span>
                                    <span class="btn-form2-submit mt-3 repeat-button">Відправити ще
                                        <i class="bi bi-arrow-90deg-left"></i>
                                    </span>
                                </div>
                            </div>
                            <form method="POST" class="form1 d-block clearfix contact__form"
                                action="{{ route('contacts.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 text-center mb-20">
                                        <h4 class="white fw-normal">ЗВОРОТНІЙ ЗВ'ЯЗК</h4>
                                    </div>
                                </div>
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input1_wrapper">
                                            <label for="name">Ваше ім'я</label>
                                            <div class="input2_inner">
                                                <input id="name" type="text" name="name"
                                                    class="form-control input" placeholder="Ваше ім'я">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input1_wrapper">
                                            <label for="contact">Телефон або e-Mail</label>
                                            <div class="input2_inner">
                                                <input id="contact" type="text" name="contact"
                                                    class="form-control input" placeholder="Телефон або e-Mail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="text" cols="30" rows="4" placeholder="Повідомлення" required></textarea>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <button type="submit" class="btn-form2-submit">Відправити листа <i
                                                class="bi bi-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
