@extends('layouts.base')

@vite(['resources/css/pages/contacts.css', 'resources/js/pages/articles.js'])

@section('content')
    <section class="info-box section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-head mb-30">
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
                        <div class="booking-inner clearfix">
                            <form method="post" class="form1 clearfix contact__form" action="mail.php">
                                <div class="row">
                                    <div class="col-md-12 text-center mb-20">
                                        <h4 class="white">Зворотній зв'язок</h4>
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
                                            <label>Ваше ім'я</label>
                                            <div class="input2_inner">
                                                <input type="text" class="form-control input" placeholder="Ваше ім'я"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Телефон або e-Mail</label>
                                            <div class="input2_inner">
                                                <input type="text" class="form-control input"
                                                    placeholder="Телефон або e-Mail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Повідомлення" required></textarea>
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
