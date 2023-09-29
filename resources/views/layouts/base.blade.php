<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head')

    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link rel="preload" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">

        <meta name="google-site-verification" content="P_5zyoITcuRC83ELC_TcPLOmRi_NKcdcH4Sct9jORGg" />

        {{-- // TODO: Додати favicon для всіх можливих варіантів --}}
        <link rel="icon" type="image/png" href="favicon.png">

        <!-- Allow web app to be run in full-screen mode - iOS. -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Allow web app to be run in full-screen mode - Android. -->
        <meta name="mobile-web-app-capable" content="yes">
        <!-- Make the app title different than the page title - iOS. -->
        <meta name="apple-mobile-web-app-title" content="KomisarNews">
        <!-- Configure the status bar - iOS. -->
        <meta name="apple-mobile-web-app-status-bar-style" content="brown">
        <!-- Disable automatic phone number detection. -->
        <meta name="format-detection" content="telephone=no">

        <title>{{ $seo['title'] }}</title>

        <style>
            @charset "UTF-8";@font-face{font-family:Nunito;font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDOUhRTM.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDLshRTM.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDIkhRTM.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDGUmRTM.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDFwmRTM.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v26/XRXI3I6Li01BKofiOc5wtlZ2di8HDDsmRTM.ttf) format('truetype')}.shadow-sm{box-shadow:var(--bs-box-shadow-sm)!important}.mt-4{margin-top:1.5rem!important}.mb-2{margin-bottom:.5rem!important}.mb-4{margin-bottom:1.5rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.fw-bold{font-weight:700!important}.text-uppercase{text-transform:uppercase!important}.bg-light{--bs-bg-opacity:1;background-color:rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important}@font-face{font-display:block;font-family:bootstrap-icons;src:url('https://www.komisarnews.com/build/assets/bootstrap-icons-bacd70af.woff2?2820a3852bdb9a5832199cc61cec4e65') format("woff2"),url('https://www.komisarnews.com/build/assets/bootstrap-icons-4d4572ef.woff?2820a3852bdb9a5832199cc61cec4e65') format("woff")}[data-aos^=zoom][data-aos^=zoom]{opacity:0}[data-aos=zoom-in]{transform:scale(.6)}.buying .description{line-height:1.5;font-size:16px;font-weight:500}:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-black:#000;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-primary-rgb:13,110,253;--bs-secondary-rgb:108,117,125;--bs-success-rgb:25,135,84;--bs-info-rgb:13,202,240;--bs-warning-rgb:255,193,7;--bs-danger-rgb:220,53,69;--bs-light-rgb:248,249,250;--bs-dark-rgb:33,37,41;--bs-primary-text-emphasis:#052c65;--bs-secondary-text-emphasis:#2b2f32;--bs-success-text-emphasis:#0a3622;--bs-info-text-emphasis:#055160;--bs-warning-text-emphasis:#664d03;--bs-danger-text-emphasis:#58151c;--bs-light-text-emphasis:#495057;--bs-dark-text-emphasis:#495057;--bs-primary-bg-subtle:#cfe2ff;--bs-secondary-bg-subtle:#e2e3e5;--bs-success-bg-subtle:#d1e7dd;--bs-info-bg-subtle:#cff4fc;--bs-warning-bg-subtle:#fff3cd;--bs-danger-bg-subtle:#f8d7da;--bs-light-bg-subtle:#fcfcfd;--bs-dark-bg-subtle:#ced4da;--bs-primary-border-subtle:#9ec5fe;--bs-secondary-border-subtle:#c4c8cb;--bs-success-border-subtle:#a3cfbb;--bs-info-border-subtle:#9eeaf9;--bs-warning-border-subtle:#ffe69c;--bs-danger-border-subtle:#f1aeb5;--bs-light-border-subtle:#e9ecef;--bs-dark-border-subtle:#adb5bd;--bs-white-rgb:255,255,255;--bs-black-rgb:0,0,0;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, .15), rgba(255, 255, 255, 0));--bs-body-font-family:var(--bs-font-sans-serif);--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#212529;--bs-body-color-rgb:33,37,41;--bs-body-bg:#fff;--bs-body-bg-rgb:255,255,255;--bs-emphasis-color:#000;--bs-emphasis-color-rgb:0,0,0;--bs-secondary-color:rgba(33, 37, 41, .75);--bs-secondary-color-rgb:33,37,41;--bs-secondary-bg:#e9ecef;--bs-secondary-bg-rgb:233,236,239;--bs-tertiary-color:rgba(33, 37, 41, .5);--bs-tertiary-color-rgb:33,37,41;--bs-tertiary-bg:#f8f9fa;--bs-tertiary-bg-rgb:248,249,250;--bs-heading-color:inherit;--bs-link-color:#0d6efd;--bs-link-color-rgb:13,110,253;--bs-link-decoration:underline;--bs-link-hover-color:#0a58ca;--bs-link-hover-color-rgb:10,88,202;--bs-code-color:#d63384;--bs-highlight-color:#212529;--bs-highlight-bg:#fff3cd;--bs-border-width:1px;--bs-border-style:solid;--bs-border-color:#dee2e6;--bs-border-color-translucent:rgba(0, 0, 0, .175);--bs-border-radius:.375rem;--bs-border-radius-sm:.25rem;--bs-border-radius-lg:.5rem;--bs-border-radius-xl:1rem;--bs-border-radius-xxl:2rem;--bs-border-radius-2xl:var(--bs-border-radius-xxl);--bs-border-radius-pill:50rem;--bs-box-shadow:0 .5rem 1rem rgba(0, 0, 0, .15);--bs-box-shadow-sm:0 .125rem .25rem rgba(0, 0, 0, .075);--bs-box-shadow-lg:0 1rem 3rem rgba(0, 0, 0, .175);--bs-box-shadow-inset:inset 0 1px 2px rgba(0, 0, 0, .075);--bs-focus-ring-width:.25rem;--bs-focus-ring-opacity:.25;--bs-focus-ring-color:rgba(13, 110, 253, .25);--bs-form-valid-color:#198754;--bs-form-valid-border-color:#198754;--bs-form-invalid-color:#dc3545;--bs-form-invalid-border-color:#dc3545}*,:after,:before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:var(--bs-body-bg);-webkit-text-size-adjust:100%}h1,h2{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2;color:var(--bs-heading-color)}h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){h1{font-size:2.5rem}}h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){h2{font-size:2rem}}p{margin-top:0;margin-bottom:1rem}ul{padding-left:2rem}ul{margin-top:0;margin-bottom:1rem}a{color:rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));text-decoration:underline}img,svg{vertical-align:middle}label{display:inline-block}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{text-transform:none}[type=button],button{-webkit-appearance:button}::-moz-focus-inner{padding:0;border-style:none}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}::file-selector-button{font:inherit;-webkit-appearance:button}.container{--bs-gutter-x:1.5rem;--bs-gutter-y:0;width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}:root{--bs-breakpoint-xs:0;--bs-breakpoint-sm:576px;--bs-breakpoint-md:768px;--bs-breakpoint-lg:992px;--bs-breakpoint-xl:1200px;--bs-breakpoint-xxl:1400px}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}@media (min-width:992px){.col-lg-3{flex:0 0 auto;width:25%}}.form-label{margin-bottom:.5rem}.btn{--bs-btn-padding-x:.75rem;--bs-btn-padding-y:.375rem;--bs-btn-font-size:1rem;--bs-btn-font-weight:400;--bs-btn-line-height:1.5;--bs-btn-color:var(--bs-body-color);--bs-btn-bg:transparent;--bs-btn-border-width:var(--bs-border-width);--bs-btn-border-color:transparent;--bs-btn-border-radius:var(--bs-border-radius);--bs-btn-hover-border-color:transparent;--bs-btn-box-shadow:inset 0 1px 0 rgba(255, 255, 255, .15),0 1px 1px rgba(0, 0, 0, .075);--bs-btn-disabled-opacity:.65;--bs-btn-focus-box-shadow:0 0 0 .25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);display:inline-block;padding:var(--bs-btn-padding-y) var(--bs-btn-padding-x);font-family:var(--bs-btn-font-family);font-size:var(--bs-btn-font-size);font-weight:var(--bs-btn-font-weight);line-height:var(--bs-btn-line-height);color:var(--bs-btn-color);text-align:center;text-decoration:none;vertical-align:middle;border:var(--bs-btn-border-width) solid var(--bs-btn-border-color);border-radius:var(--bs-btn-border-radius);background-color:var(--bs-btn-bg)}.fade:not(.show){opacity:0}.nav-link{display:block;padding:var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);font-size:var(--bs-nav-link-font-size);font-weight:var(--bs-nav-link-font-weight);color:var(--bs-nav-link-color);text-decoration:none;background:0 0;border:0}.navbar{--bs-navbar-padding-x:0;--bs-navbar-padding-y:.5rem;--bs-navbar-color:rgba(var(--bs-emphasis-color-rgb), .65);--bs-navbar-hover-color:rgba(var(--bs-emphasis-color-rgb), .8);--bs-navbar-disabled-color:rgba(var(--bs-emphasis-color-rgb), .3);--bs-navbar-active-color:rgba(var(--bs-emphasis-color-rgb), 1);--bs-navbar-brand-padding-y:.3125rem;--bs-navbar-brand-margin-end:1rem;--bs-navbar-brand-font-size:1.25rem;--bs-navbar-brand-color:rgba(var(--bs-emphasis-color-rgb), 1);--bs-navbar-brand-hover-color:rgba(var(--bs-emphasis-color-rgb), 1);--bs-navbar-nav-link-padding-x:.5rem;--bs-navbar-toggler-padding-y:.25rem;--bs-navbar-toggler-padding-x:.75rem;--bs-navbar-toggler-font-size:1.25rem;--bs-navbar-toggler-icon-bg:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");--bs-navbar-toggler-border-color:rgba(var(--bs-emphasis-color-rgb), .15);--bs-navbar-toggler-border-radius:var(--bs-border-radius);--bs-navbar-toggler-focus-width:.25rem;position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding:var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)}.accordion{--bs-accordion-color:var(--bs-body-color);--bs-accordion-bg:var(--bs-body-bg);--bs-accordion-border-color:var(--bs-border-color);--bs-accordion-border-width:var(--bs-border-width);--bs-accordion-border-radius:var(--bs-border-radius);--bs-accordion-inner-border-radius:calc(var(--bs-border-radius) - (var(--bs-border-width)));--bs-accordion-btn-padding-x:1.25rem;--bs-accordion-btn-padding-y:1rem;--bs-accordion-btn-color:var(--bs-body-color);--bs-accordion-btn-bg:var(--bs-accordion-bg);--bs-accordion-btn-icon:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");--bs-accordion-btn-icon-width:1.25rem;--bs-accordion-btn-icon-transform:rotate(-180deg);--bs-accordion-btn-active-icon:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23052c65'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");--bs-accordion-btn-focus-border-color:#86b7fe;--bs-accordion-btn-focus-box-shadow:0 0 0 .25rem rgba(13, 110, 253, .25);--bs-accordion-body-padding-x:1.25rem;--bs-accordion-body-padding-y:1rem;--bs-accordion-active-color:var(--bs-primary-text-emphasis);--bs-accordion-active-bg:var(--bs-primary-bg-subtle)}.btn-close{--bs-btn-close-color:#000;--bs-btn-close-bg:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");--bs-btn-close-opacity:.5;--bs-btn-close-hover-opacity:.75;--bs-btn-close-focus-shadow:0 0 0 .25rem rgba(13, 110, 253, .25);--bs-btn-close-focus-opacity:1;--bs-btn-close-disabled-opacity:.25;--bs-btn-close-white-filter:invert(1) grayscale(100%) brightness(200%);box-sizing:content-box;width:1em;height:1em;padding:.25em;color:var(--bs-btn-close-color);background:transparent var(--bs-btn-close-bg) center/1em auto no-repeat;border:0;border-radius:.375rem;opacity:var(--bs-btn-close-opacity)}.btn-close-white{filter:var(--bs-btn-close-white-filter)}.modal{--bs-modal-zindex:1055;--bs-modal-width:500px;--bs-modal-padding:1rem;--bs-modal-margin:.5rem;--bs-modal-bg:var(--bs-body-bg);--bs-modal-border-color:var(--bs-border-color-translucent);--bs-modal-border-width:var(--bs-border-width);--bs-modal-border-radius:var(--bs-border-radius-lg);--bs-modal-box-shadow:var(--bs-box-shadow-sm);--bs-modal-inner-border-radius:calc(var(--bs-border-radius-lg) - (var(--bs-border-width)));--bs-modal-header-padding-x:1rem;--bs-modal-header-padding-y:1rem;--bs-modal-header-padding:1rem 1rem;--bs-modal-header-border-color:var(--bs-border-color);--bs-modal-header-border-width:var(--bs-border-width);--bs-modal-title-line-height:1.5;--bs-modal-footer-gap:.5rem;--bs-modal-footer-border-color:var(--bs-border-color);--bs-modal-footer-border-width:var(--bs-border-width);position:fixed;top:0;left:0;z-index:var(--bs-modal-zindex);display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:var(--bs-modal-margin)}.modal.fade .modal-dialog{transform:translateY(-50px)}.modal-dialog-scrollable{height:calc(100% - var(--bs-modal-margin) * 2)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - var(--bs-modal-margin) * 2)}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;color:var(--bs-modal-color);background-color:var(--bs-modal-bg);background-clip:padding-box;border:var(--bs-modal-border-width) solid var(--bs-modal-border-color);border-radius:var(--bs-modal-border-radius);outline:0}.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:var(--bs-modal-header-padding);border-bottom:var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);border-top-left-radius:var(--bs-modal-inner-border-radius);border-top-right-radius:var(--bs-modal-inner-border-radius)}.modal-header .btn-close{padding:calc(var(--bs-modal-header-padding-y) * .5) calc(var(--bs-modal-header-padding-x) * .5);margin:calc(-.5 * var(--bs-modal-header-padding-y)) calc(-.5 * var(--bs-modal-header-padding-x)) calc(-.5 * var(--bs-modal-header-padding-y)) auto}.modal-title{margin-bottom:0;line-height:var(--bs-modal-title-line-height)}.modal-body{position:relative;flex:1 1 auto;padding:var(--bs-modal-padding)}.modal-footer{display:flex;flex-shrink:0;flex-wrap:wrap;align-items:center;justify-content:flex-end;padding:calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * .5);background-color:var(--bs-modal-footer-bg);border-top:var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);border-bottom-right-radius:var(--bs-modal-inner-border-radius);border-bottom-left-radius:var(--bs-modal-inner-border-radius)}.modal-footer>*{margin:calc(var(--bs-modal-footer-gap) * .5)}@media (min-width:576px){.modal{--bs-modal-margin:1.75rem;--bs-modal-box-shadow:var(--bs-box-shadow)}.modal-dialog{max-width:var(--bs-modal-width);margin-right:auto;margin-left:auto}.modal-sm{--bs-modal-width:300px}}.clearfix:after{display:block;clear:both;content:""}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.float-end{float:right!important}.opacity-50{opacity:.5!important}.d-flex{display:flex!important}.d-none{display:none!important}.shadow{box-shadow:var(--bs-box-shadow)!important}.shadow-lg{box-shadow:var(--bs-box-shadow-lg)!important}.position-relative{position:relative!important}.border{border:var(--bs-border-width) var(--bs-border-style) var(--bs-border-color)!important}.border-1{border-width:1px!important}.h-auto{height:auto!important}.justify-content-center{justify-content:center!important}.align-items-center{align-items:center!important}.order-last{order:6!important}.m-0{margin:0!important}.mt-3{margin-top:1rem!important}.me-1{margin-right:.25rem!important}.me-2{margin-right:.5rem!important}.me-3{margin-right:1rem!important}.me-auto{margin-right:auto!important}.fs-5{font-size:1.25rem!important}.text-center{text-align:center!important}.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important}.text-muted{--bs-text-opacity:1;color:var(--bs-secondary-color)!important}.bg-danger{--bs-bg-opacity:1;background-color:rgba(var(--bs-danger-rgb),var(--bs-bg-opacity))!important}.rounded-3{border-radius:var(--bs-border-radius-lg)!important}.rounded-4{border-radius:var(--bs-border-radius-xl)!important}@media (min-width:992px){.modal-lg{--bs-modal-width:800px}.d-lg-none{display:none!important}.justify-content-lg-between{justify-content:space-between!important}.order-lg-0{order:0!important}.me-lg-0{margin-right:0!important}.text-lg-start{text-align:left!important}}.bi:before,[class*=" bi-"]:before{display:inline-block;font-family:bootstrap-icons!important;font-style:normal;font-weight:400!important;font-variant:normal;text-transform:none;line-height:1;vertical-align:-.125em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.bi-arrow-down:before{content:""}.bi-arrow-left-circle:before{content:""}.bi-arrow-up-short:before{content:""}.bi-arrow-up:before{content:""}.bi-exclamation-triangle-fill:before{content:""}.bi-info-circle:before{content:""}.bi-list:before{content:""}.bi-question-circle:before{content:""}.bi-trash:before{content:""}.bi-x:before{content:""}[data-aos^=fade][data-aos^=fade]{opacity:0}[data-aos=fade-up]{transform:translate3d(0,100px,0)}[data-aos=fade-down]{transform:translate3d(0,-100px,0)}[data-aos=fade-right]{transform:translate3d(-100px,0,0)}[data-aos=fade-left]{transform:translate3d(100px,0,0)}.button{font-size:16px;line-height:42px;background:#91765a;color:#fff;width:42px;font-weight:800;border-radius:var(--bs-border-radius-lg)!important;border:none;outline:0;display:inline-block}:root{--animate-duration:1s;--animate-delay:1s;--animate-repeat:1}.animate__animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-duration:var(--animate-duration);animation-duration:var(--animate-duration);-webkit-animation-fill-mode:both;animation-fill-mode:both}.animate__animated.animate__infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@media print,(prefers-reduced-motion:reduce){.animate__animated{-webkit-animation-duration:1ms!important;animation-duration:1ms!important;-webkit-animation-iteration-count:1!important;animation-iteration-count:1!important}}@-webkit-keyframes tada{0%{-webkit-transform:scale3d(1,1,1);transform:scaleZ(1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}to{-webkit-transform:scale3d(1,1,1);transform:scaleZ(1)}}@keyframes tada{0%{-webkit-transform:scale3d(1,1,1);transform:scaleZ(1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}to{-webkit-transform:scale3d(1,1,1);transform:scaleZ(1)}}.animate__tada{-webkit-animation-name:tada;animation-name:tada}body,html{-webkit-overflow-scrolling:touch;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;-moz-font-smoothing:antialiased;font-smoothing:antialiased;min-height:-webkit-fill-available}*{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box;outline:0;list-style:none;word-wrap:break-word}body{font-family:Nunito,sans-serif;font-size:15px;font-weight:300;line-height:1.75em;color:#625c56;overflow-x:hidden!important;background:#f5eee7}section{padding:60px 0;overflow:hidden}p{font-family:Nunito,sans-serif;font-size:16px;font-weight:600;line-height:1.75em;color:#625c56;margin-bottom:15px}h1,h2{font-family:Nunito,sans-serif;font-weight:800;line-height:1.25em;margin:0 0 20px;color:#14100c}h1{font-size:60px}h2{font-size:48px}img{width:100%;height:auto}img{color:#f4f4f4}a,span{display:inline-block;text-decoration:none;color:inherit}button{text-shadow:none;-webkit-box-shadow:none;box-shadow:none;line-height:1.75em;background:0 0;border:0 solid transparent}::-webkit-input-placeholder{color:#14100c;font-size:15px;font-weight:300}::-moz-placeholder{color:#14100c;opacity:1}.progress-wrap{background:rgba(100,100,100,.15);position:fixed;bottom:20px;right:20px;height:50px;width:50px;display:block;border-radius:50px;z-index:100;opacity:0;visibility:hidden;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px)}.progress-wrap i{position:absolute;content:"";text-align:center;line-height:50px;font-size:15px;color:#91765a;left:0;top:0;font-weight:800;height:50px;width:50px;display:block;z-index:1}.progress-wrap svg path{fill:none}.progress-wrap svg.progress-circle path{stroke-width:4;-webkit-box-sizing:border-box;box-sizing:border-box}.progress-wrap{-webkit-box-shadow:inset 0 0 0 0 rgba(217,214,209,.5);box-shadow:inset 0 0 #d9d6d180}.progress-wrap:after{color:#91765a}.progress-wrap svg.progress-circle path{stroke:#91765a}#header{z-index:997;padding:15px 0}#header .logo{font-size:20px;margin:0;padding:0;line-height:1;font-weight:600;letter-spacing:2px;text-transform:uppercase}#header .logo a{color:#fff}#header .logo a span{font-weight:800}@media (max-width:992px){.get-started-btn{font-weight:600}}.navbar{padding:0}.navbar ul{margin:0;padding:0;display:flex;list-style:none;align-items:center}.navbar li{position:relative;width:100%}.navbar a{display:flex;align-items:center;justify-content:space-between;padding:10px 0 10px 30px;font-size:15px;font-weight:600;color:#fff;white-space:nowrap}.navbar .active{color:#91765a}.mobile-nav-toggle{color:#fff;font-size:28px;display:none;line-height:0}@media (max-width:991px){.mobile-nav-toggle{display:block}.navbar ul{display:none}}@media (min-width:1200px){.container{max-width:1140px!important}}@media screen and (max-width:991px){.navbar .nav-link{margin:0 auto!important;width:100%}}.get-started-btn{color:#fff;padding:8px;font-weight:500;white-space:nowrap;font-size:12px;border-radius:var(--bs-border-radius-lg)!important;display:inline-block;text-transform:uppercase;background-color:#685340}@media (max-width:992px){.get-started-btn{padding:8px;font-weight:600;margin-right:15px}}.back-to-top{position:fixed;visibility:hidden;opacity:0;right:15px;bottom:15px;z-index:996;background:#91765a;width:40px;height:40px;border-radius:4px}.back-to-top i{font-size:28px;color:#151515;line-height:0}.form1 label{display:none}#preloader{position:fixed;top:0;left:0;right:0;bottom:0;z-index:9999;overflow:hidden;background:#151515}#preloader:before{content:"";position:fixed;top:calc(50% + 0px);left:calc(50% - 30px);border:6px solid #91765a;border-top-color:#151515;border-bottom-color:#151515;border-radius:50%;width:60px;height:60px;animation:1s linear infinite animate-preloader}@keyframes animate-preloader{0%{transform:rotate(0)}to{transform:rotate(360deg)}}ul{list-style:none;padding:0}.modal-content{border:none;border-radius:0;background-color:#f5eee7}.modal-title{text-transform:uppercase;font-weight:600;color:#f5eee7}.modal-header{background-color:#91765a;border-radius:0}.modal-footer{border-top:0;background-color:#91765a33}.modal-body p{line-height:25px}.rules-danger{background-color:#ffd8d8}.rules-danger p{padding:5px;color:#5e5e5e;line-height:16px!important;font-size:12px;font-weight:700}h2{text-transform:uppercase}h2{font-weight:600;font-size:26px;color:#14100c}.logo-symbol{background-color:#685340;color:#f5eee7;padding:5px 8px;border-radius:5px}#hero{width:100%;height:100vh;background-image:url('https://www.komisarnews.com/public/img/bg-header.jpg') top center;background-image:-webkit-image-set(url('https://www.komisarnews.com/build/assets/bg-header-c15a73e0.webp') 1x);background-position:center;background-size:cover;position:relative;overflow:hidden}#hero:before{content:"";background:rgba(0,0,0,.6);position:absolute;bottom:0;top:0;left:0;right:0}#hero .container{position:relative;padding-top:74px;text-align:center}#hero h1{margin:0;font-size:40px;font-weight:400;line-height:54px;color:#fff;text-transform:uppercase;font-family:Nunito,sans-serif}#hero h1 span{color:#91765a}#hero h2{color:#ffffffe6;margin:10px 0 0;font-size:20px;font-weight:300;text-transform:uppercase}@media (min-width:1024px){#hero{background-attachment:fixed}}@media (max-width:768px){#hero h1{font-size:28px;line-height:36px}#hero h2{font-size:20px;line-height:24px}}.arrow{position:absolute;bottom:40px;width:100%;text-align:center;z-index:8}.arrow i{position:relative;display:inline-block;width:50px;height:50px;line-height:50px;color:#fff;font-size:15px;border:1px solid #fff;border-radius:100%}.about .image-1{transform-style:preserve-3d;border-radius:32px}.about .image-1{transform:rotateX(30deg) rotate(-10deg)}picture{perspective:700px;display:block}.accordion-box{position:relative;padding:0}.accordion-box .block{position:relative;background:0 0;overflow:hidden;margin-bottom:15px;border:1px solid rgba(145,118,90,.3)}.accordion-box .block:last-child{margin-bottom:0}.accordion-box .block .acc-btn{position:relative;font-family:Nunito,sans-serif;font-size:18px;line-height:30px;font-weight:500;padding:10px 20px;color:#14100c;text-transform:uppercase}.accordion-box .block .acc-btn.size-20{font-size:18px}.accordion-box .block .acc-btn:before{position:absolute;right:20px;top:10px;height:30px;font-size:20px;font-weight:400;color:#91765a;line-height:30px;content:"";font-family:bootstrap-icons}.accordion-box .block .acc-content{position:relative;max-height:0;overflow:hidden}.accordion-box .block .content{position:relative;padding:30px 20px 20px;background-color:transparent;color:#625c56}.accordion-box .block .content .text{position:relative;top:0;display:block}.accordion-box .block .number{border:2px solid #91765a;border-radius:50%;width:30px;height:30px;line-height:1.5;font-weight:700;color:#91765a;background-color:#64646426;text-align:center}.buying img{width:100px;height:100px;display:block;margin:auto}
        </style>
        @yield('styles')

        @isset($seo['keywords'])
            <meta name="keywords" content="{{ $seo['keywords'] }}">
        @endisset

        @isset($seo['description'])
            <meta name="description" content="{{ $seo['description'] }}">
        @endisset

        <meta name="robots" content="{{ $seo['robots'] ? 'index, follow' : 'noindex, nofollow' }}">

    </head>
@show

<body>
    <div class="progress-wrap cursor-pointer">
        <i class="bi bi-arrow-up"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0" data-aos="fade-right" data-aos-delay="400">
                <a href="/">Kom<span class="logo-symbol">
                        <span class="animate__animated animate__tada animate__infinite">!</span></span>sarNews
                </a>
            </h1>

            <nav id="navbar" class="navbar order-last order-lg-0 mob-nav-toggle" data-aos="fade-top"
                data-aos-delay="900">
                {!! Menu::main() !!}
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#scrollToMapAndOrder" class="get-started-btn scrollto" data-aos="fade-left"
                data-aos-delay="400">Обрати місто</a>

        </div>
    </header>

    @if (Request::is('/'))
        <section id="hero" class="d-flex align-items-center justify-content-center shadow">
            <div class="container">

                <div class="justify-content-center">
                    <h1 data-aos="fade-down" data-aos-delay="150">Продаж та покупка<br>волосся у Києві<span>.</span>
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="150">Швидко, Дорого, Надійно</h2>
                </div>

            </div>

            {{-- arrow down --}}
            <div class="arrow text-center">
                <a href="#scrollToContent" class="scrollto" aria-label="Вниз">
                    <i class="bi bi-arrow-down"></i>
                </a>
            </div>

        </section>
    @else
        <div class="banner-header">
            <picture>
                <img src="{{ asset('img/bg-header.webp') }}" width="auto" height="280" type="image/webp">
                <img src="{{ asset('img/bg-header.jpg') }}" width="auto" height="280" alt="" title="">
            </picture>
            <div class="caption d-flex justify-content-center flex-column">
                <h1 class="{{ !isset($headerSubTitle) ? 'mb-0' : 'mb-3' }}">
                    @yield('headerTitle')
                </h1>
                @hasSection('headerSubTitle')
                    <div class="sub-title">
                        @yield('headerSubTitle')
                    </div>
                @endif
            </div>
        </div>
    @endif

    <main id="main">

        @yield('content')

        <section id="scrollToMapAndOrder" class="map-order py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2 class="text-light mb-0" data-aos="fade-down" data-aos-delay="300">
                                Купівля і продаж волосся в містах
                            </h2>
                            <h3 class="mt-2" data-aos="fade-down" data-aos-delay="500" style="color: #cfcfcf">Оберіть
                                ваше мість або зробіть заявку
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7" data-aos="fade-right" data-aos-delay="300">
                        @include('layouts.partials.map')
                    </div>

                    <div class="col-12 col-lg-5" data-aos="fade-left" data-aos-delay="300">
                        @include('layouts.partials.order')
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-5 col-lg-4">
                        <div
                            class="footer-column footer-contact d-flex justify-content-center justify-content-lg-start flex-column">
                            <div class="footer-contact-text text-center text-lg-start">
                                <p><i class="bi bi-geo-alt-fill me-1"></i>Україна, Київ</p>
                                <p><i class="bi bi-person-fill me-1"></i>Максим Комісар</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-lg-4">
                        <div class="footer-contact-info text-center d-flex justify-content-center flex-column">
                            <p class="footer-contact-phone">+380 (73) 785-77-77</p>
                            <p class="footer-contact-mail mx-auto">123komisar@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="footer-about-social-list d-flex justify-content-center justify-content-lg-end">
                            <a href="https://www.facebook.com/profile.php?id=100081276925197"
                                aria-label="Ми в Facebook" target="_blank"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="https://instagram.com/sale_hair_kyiv?igshid=OGQ5ZDc2ODk2ZA=="
                                aria-label="Ми в Instagram" target="_blank"><i class="bi bi-instagram fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">2023 © KomisarNews. Всі права застережено.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Delete Image Confirm -->
    <div class="modal modal-sm fade" id="deleteImageConfirm" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <span class="me-2"><i class="bi bi-question-circle me-2"></i>Видалення
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="confirm-img"></div>
                    <p class="text-center text-muted info">Фото не видалиться з вашої галереї.<br>За потреби, ви
                        зможете
                        додати його.</p>
                    <button type="button" class="btn bg-danger color-white float-end confirm-delete">
                        <i class="bi bi-trash me-1"></i>Видалити
                    </button>
                    <button type="button" class="btn me-2 float-end" data-bs-dismiss="modal">
                        <i class="bi bi-x me-1"></i>Відмінити
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal rules -->
    <div class="modal modal-lg fade" id="modalOrder" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5">
                        <span class="me-2"><i class="bi bi-info-circle me-2"></i>Правила
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="h-auto" style="height: 100px;">Заповніть всі необхіні поля та надішліть нам замовлення.

                        Бажано вказати колір, вагу і довжину Вашого волосся.

                        Електронна пошта та номер телефону нам необхідний для зворотнього зв`язку з Вами та для того щоб
                        повідомити Вас про купівлю волосся і його вартість. Спочатку Ви отримаєте сповіщення про те, що
                        наш фахівець ознайомлюється з замовленням, після чого Вам надійде другий лист з інформацією про
                        вартість та іншими деталями.
                        Зазвичай це займає не більше декількох годин після відправлення замовлення.

                        В полі "Ваше повідомлення" Ви можете вказати будь-яку іншу, на Вашу думку, важливу інформацію
                        стосовно волосся. Наприклад, структуру волосся, стан зрізу: свіжа рівна стрижка або просто
                        укладене волосся або шиньйон. Вкажіть якомога більше інформації, важливі всі деталі.</p>
                </div>
                <div class="modal-footer rules-danger">
                    <p class=" position-relative">
                        <i class="bi bi-exclamation-triangle-fill float-end fs-5 text-danger opacity-50"></i>
                        МИ НЕ НАДАЄМО ВАШІ КОНТАКТНІ ДАНІ ІНШИМ ОСОБАМ ТА НЕ РОЗСИЛАЄМО СПАМ!<br>
                        НЕ НАМАГАЙТЕСЯ ОБДУРИТИ ОЦІНЮВАЧА, ВИКОРИСТОВУЮЧИ ПРИЙОМИ, ЩОБ ПОЛІПШИТИ ЯКІСТЬ ВОЛОССЯ, АБО
                        РОЗТЯГУВАТИ ПАСМО ЩОБ ВІЗУАЛЬНО ЗБІЛЬШИТИ ДОВЖИНУ. НАШ ФАХІВЕЦЬ ОБОВ'ЯЗКОВО РОЗПІЗНАЄ ОБМАН.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @yield('scripts')
</body>

</html>
