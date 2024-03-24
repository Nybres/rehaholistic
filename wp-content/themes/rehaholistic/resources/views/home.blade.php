{{--
  Template Name: Home
--}}

@extends('layouts.app')
@section('content')
    @include('sections.header')
    <section class="home-about section-padding">
        <div class="container">
            <div class="heading">
                <h2 class="h2 heading__title">Rehaholistic</h2>
                @if (get_field('home_subtitle') != '' && ($homeSubtitle = get_field('home_subtitle')))
                    <p class="heading__subtitle">{{ $homeSubtitle }}</p>
                @endif
            </div>

            <div class="home-about__row">
                <div class="home-about__left">
                    @php
                        $page_id = get_option('page_on_front');
                        $content = get_post_field('post_content', $page_id);
                    @endphp
                    @if ($content != '')
                        <p class="small-text gray-text mb--24">
                            {{ strip_tags($content) }}
                        </p>
                    @endif

                    <div class="home-about__images">
                        @if ($image = get_field('home_image_one'))
                            <picture>
                                <img loading="lazy" width="300" height="400" src="{{ $image['url'] }}"
                                    alt="{{ $image['alt'] }}">
                            </picture>
                        @endif
                        @if ($image2 = get_field('home_image_two'))
                            <picture>
                                <img loading="lazy" width="300" height="400" src="{{ $image2['url'] }}"
                                    alt="{{ $image2['alt'] }}">
                            </picture>
                        @endif
                    </div>
                </div>
                <div class="home-about__right">
                    <div class="home-about__benefit">
                        <div class="home-about__benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        @if (get_field('home_benefit_one_title') != '' && ($homeBenefitOneTitle = get_field('home_benefit_one_title')))
                            <h3 class="home-about__benefit-title h4 fw-500">
                                {{ $homeBenefitOneTitle }}
                            </h3>
                        @endif
                        @if (get_field('home_benefit_one_text') != '' && ($homeBenefitOneText = get_field('home_benefit_one_text')))
                            <div class="home-about__benefit-text small-text gray-text">
                                {{ $homeBenefitOneText }}
                            </div>
                        @endif
                    </div>
                    {{--  --}}
                    <div class="home-about__benefit">
                        <div class="home-about__benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </div>
                        @if (get_field('home_benefit_two_title') != '' && ($homeBenefitTwoTitle = get_field('home_benefit_two_title')))
                            <h3 class="home-about__benefit-title h4 fw-500">
                                {{ $homeBenefitTwoTitle }}
                            </h3>
                        @endif
                        @if (get_field('home_benefit_two_text') != '' && ($homeBenefitTwoText = get_field('home_benefit_two_text')))
                            <div class="home-about__benefit-text small-text gray-text">
                                {{ $homeBenefitTwoText }}
                            </div>
                        @endif
                    </div>
                    {{--  --}}
                    <div class="home-about__benefit">
                        <div class="home-about__benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-smile">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                            </svg>
                        </div>
                        @if (get_field('home_benefit_three_title') != '' && ($homeBenefitThreeTitle = get_field('home_benefit_three_title')))
                            <h3 class="home-about__benefit-title h4 fw-500">
                                {{ $homeBenefitThreeTitle }}
                            </h3>
                        @endif
                        @if (get_field('home_benefit_three_text') != '' && ($homeBenefitThreeText = get_field('home_benefit_three_text')))
                            <div class="home-about__benefit-text small-text gray-text">
                                {{ $homeBenefitThreeText }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $args = [
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'single-offert.blade.php',
            'meta_query' => [
                [
                    'key' => 'widoczny_na_stronie_glownej',
                    'value' => true,
                    'compare' => '=',
                    'type' => 'BOOLEAN',
                ],
            ],
        ];
        $query = new WP_Query($args);
        $pages = $query->get_posts();
        usort($pages, function ($a, $b) {
            $order_a = get_field('kolejnosc_na_stronie_glownej', $a->ID);
            $order_b = get_field('kolejnosc_na_stronie_glownej', $b->ID);
            return $order_a - $order_b;
        });
    @endphp
    @if (!empty($pages))
        <section class="home-offert section-padding section-gray">
            <div class="container">
                <div class="heading heading--center">
                    <h2 class="h2 heading__title">METODY LECZENIA</h2>
                    <p class="heading__subtitle">Czym się zajmujemy?</p>
                </div>
                <div class="splide jsHomeOffert" aria-label="Rehaholistic metody leczenia">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($pages as $page)
                                <li class="splide__slide home-offert__card">
                                    <div class="home-offert__card-img">
                                        <picture>
                                            <img width="412" height="277" loading="lazy"
                                                src="{{ get_the_post_thumbnail_url($page->ID) }}"
                                                alt="{{ $page->post_title }}">
                                        </picture>
                                    </div>
                                    <div class="home-offert__card-body">
                                        <h3 class="home-offert__card-title h3 fw-600 mb--8">{{ $page->post_title }}</h3>
                                        <p class="home-offert__card-text regular-text gray-text mb--24">
                                            {{ get_field('tekst_dla_karty_na_stronie_glownej', $page->ID) }}
                                        </p>
                                        <a class="home-offert__card-link" href="{{ get_permalink($page->ID) }}">
                                            Czytaj więcej >></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="section-padding home-gallery">
        <div class="container">
            <div class="heading heading--center">
                <h2 class="h2 heading__title">UCZYMY SIĘ OD NAJLEPSZYCH</h2>
                <p class="heading__subtitle">Stale poszerzamy swoją wiedzę</p>
            </div>
            @php
                $images = [];
                for ($i = 1; $i <= 9; $i++) {
                    $zdjecie = get_field('zdjecie_' . $i);
                    if ($zdjecie) {
                        $images[] = $zdjecie;
                    }
                }
            @endphp
            <div class="home-gallery__grid">
                @foreach ($images as $index => $image)
                    <div class="home-gallery__image home-gallery__image--{{ $index + 1 }}">
                        <picture>
                            <img width="{{ $image['width'] }}" height="{{ $image['height'] }}" loading="lazy"
                                src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                        </picture>
                    </div>
                @endforeach
            </div>
    </section>
    <section style="background-image: url(@asset('images/img/help_background.jpg'));" class="home-help">
        <div class="container">
            <div class="home-help__text">
                <h3 class="mb--8 h2 t-c">
                    Potrzebujesz naszej pomocy?
                </h3>
                <p class="t-c mb--16 normal-text">
                    Zapomnij o bólu i ograniczeniach ruchowych - z nami poczujesz się lepiej!
                </p>
                <a title="Skontaktuj się" class="btn btn--primary btn--md btn--center btn--fit"
                    href="{{ home_url('/kontakt/') }}">Skontaktuj
                    się</a>
            </div>
        </div>
    </section>
    @php
        $args = [
            'post_type' => 'pracownicy',
            'meta_key' => 'pokaz_na_stronie_glownej',
            'meta_value' => true,
        ];
        $query = new WP_Query($args);
        $employees = $query->get_posts();
        usort($employees, function ($a, $b) {
            $order_a = get_field('kolejnosc_strona_glowna', $a->ID);
            $order_b = get_field('kolejnosc_strona_glowna', $b->ID);
            return $order_a - $order_b;
        });
    @endphp
    @if (!empty($employees))
        <section class="section-padding home-employees">
            <div class="container">
                <div class="heading heading--center">
                    <h2 class="h2 heading__title">ZAPRASZAMY DO NASZYCH GABINETÓW</h2>
                    <p class="heading__subtitle">Certyfikowani fizjoterapeuci w Pile</p>
                </div>
                <div class="splide jsEmployes home-employees__row" aria-label="Rehaholistic nasi pracownicy">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($employees as $employe)
                                @php
                                    $image = wp_get_attachment_image_src(
                                        get_post_thumbnail_id($employe->ID),
                                        'employe_image',
                                    );
                                @endphp
                                <li class="splide__slide home-employees__card">
                                    @if ($image)
                                        <div class="home-employees__image">
                                            <picture>
                                                <img alt="{{ $employe->post_title }}" width="{{ $image[1] }}"
                                                    height="{{ $image[2] }}" loading="lazy"
                                                    src="{{ $image[0] }}" alt="{{ $employe->post_title }}">
                                            </picture>
                                        </div>
                                    @endif
                                    <div class="home-employees__body">
                                        <h3 class="h3 fw-600 mb--8 home-employees__body-title">{{ $employe->post_title }}
                                        </h3>
                                        <p class="regular-text gray-text mb--24 home-employees__body-text">
                                            {{ get_field('krotki_opis_strona_glowna', $employe->ID) }}</p>
                                        <a class="home-employees__body-link" title="Czytaj więcej"
                                            href="{{ home_url('/o-nas/') }}">Czytaj
                                            więcej >></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
