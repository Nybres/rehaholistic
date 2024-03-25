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
                @if ($groupOne = get_field('kontakt_pierwszy'))
                    <div class="contact__card">
                        <div class="contact__card-left">
                            <div>
                                <h3 class="h2 fw-500 contact__card-title mb--8">{{ $groupOne['imie_i_nazwisko'] }}</h3>
                                <p>{{ $groupOne['adres'] }}</p>
                            </div>
                            <div>
                                <h4 class="h3 mb--8 fw-500">Godziny Przyjęć</h4>
                                <p>{{ $groupOne['godziny_przyjec'] }}</p>
                            </div>
                            <div>
                                <h4 class="h3 mb--8 fw-500">Dane kontakowe</h4>
                                <a href="tel:{{ $groupOne['telefon'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    {{ $groupOne['telefon'] }}
                                </a>
                                <a href="mailto:{{ $groupOne['email'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    {{ $groupOne['email'] }}
                                </a>
                            </div>
                        </div>
                        <div class="contact__card-right">
                            <picture>
                                <img loading="lazy" width="240" height="180" src="{{ $groupOne['zdjecie']['url'] }}"
                                    alt="{{ $groupOne['zdjecie']['alt'] }}">
                            </picture>
                        </div>
                    </div>
                @endif
                @if ($groupOne = get_field('kontakt_drugi'))
                    <div class="contact__card">
                        <div class="contact__card-left">
                            <div>
                                <h3 class="h2 fw-500 contact__card-title mb--8">{{ $groupOne['imie_i_nazwisko'] }}</h3>
                                <p>{{ $groupOne['adres'] }}</p>
                            </div>
                            <div>
                                <h4 class="h3 mb--8 fw-500">Godziny Przyjęć</h4>
                                <p>{{ $groupOne['godziny_przyjec'] }}</p>
                            </div>
                            <div>
                                <h4 class="h3 mb--8 fw-500">Dane kontakowe</h4>
                                <a href="tel:{{ $groupOne['telefon'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    {{ $groupOne['telefon'] }}
                                </a>
                                <a href="mailto:{{ $groupOne['email'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    {{ $groupOne['email'] }}
                                </a>
                            </div>
                        </div>
                        <div class="contact__card-right">
                            <picture>
                                <img loading="lazy" width="240" height="180" src="{{ $groupOne['zdjecie']['url'] }}"
                                    alt="{{ $groupOne['zdjecie']['alt'] }}">
                            </picture>
                        </div>
                    </div>
                @endif
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
