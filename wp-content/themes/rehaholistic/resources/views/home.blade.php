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
                    @if (get_field('home_text') != '' && ($homeText = get_field('home_text')))
                        <p class="small-text gray-text mb--24">
                            {{ $homeText }}
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
                                        <a class="home-offert__card-link" href="{{ get_permalink($page->ID) }}">Czytaj
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
