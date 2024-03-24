{{--
  Template Name: Contact
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <section class="section-padding contact">
        <div class="container">
            <div class="heading heading--center">
                <h2 class="h2 heading__title">SKONTAKTUJ SIĘ Z NAMI</h2>
                <p class="heading__subtitle">Umów się na wizytę już dziś!</p>
            </div>
            <div class="contact__row">
                <div class="contact__card">
                    <div class="contact__card-left">
                        <div>
                            <h3>Radosław Meller</h3>
                            <p>ul.Lotnicza 25B/2</p>
                        </div>
                        <div>
                            <h4>Godziny Przyjęć</h4>
                            <p>sfsfas sasafasf safsaasf</p>
                        </div>
                        <div>
                            <h4>Dane kontakowe</h4>
                            <a href="tel:+">
                                sfasfasfsafsfasaf
                            </a>
                            <a href="mailto:">
                                sfasafsfasafsafsfasfa
                            </a>
                        </div>
                    </div>
                    <div class="contact__card-right">
                        <picture>
                            <img src="" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding contact-map">
        <div class="container">
            <div class="container">
                <div class="heading heading--center">
                    <h2 class="h2 heading__title">MAPA DOJAZDU</h2>
                    <p class="heading__subtitle">Łatwy dojazd</p>
                </div>
                <div class="contact-map__map">
                    <iframe title="Mapa dojazdu do gabinetu" class="map__container-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2392.3533159477715!2d16.718907949442425!3d53.15769961726543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd393d6dd7fda359!2sOsteopatia%20Kr%C4%99garstwo%20Fizjoterapia%20Masa%C5%BC%20Akupunktura%20Pi%C5%82a%20Rados%C5%82aw%20Meller!5e0!3m2!1spl!2spl!4v1653222794217!5m2!1spl!2spl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
