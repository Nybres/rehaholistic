{{--
  Template Name: About-us
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <section class="section-padding about-page">
        <div class="container">
            <div class="heading heading--center">
                <h2 class="h2 heading__title">KIM JESTEŚMY, CO ROBIMY</h2>
                <p class="heading__subtitle">Magistrzy kierunku fizjoterapii</p>
            </div>

            @php
                $args = [
                    'post_type' => 'pracownicy',
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
                <div class="chessboard">
                    @foreach ($employees as $index => $employe)
                        @php
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($employe->ID), 'employe_image');
                        @endphp
                        <div class="chessboard__item @if (($index + 1) % 2 == 0) chessboard__item--reverse @endif">
                            <div class="chessboard__item-left">
                                <h3 class="h1 chessboard__item-title mb--8 fw-500">{{ $employe->post_title }}</h3>
                                <div class="gray-text chessboard__item-text mb--16">
                                    {!! $employe->post_content !!}
                                </div>
                                <a class="btn btn--primary btn--sm btn--center btn--fit" title="Umów wizyte"
                                    href="{{ home_url('/kontakt/') }}">Umów wizytę</a>
                            </div>
                            @if ($image)
                                <div class="chessboard__item-right">
                                    <picture>
                                        <img alt="{{ $employe->post_title }}" width="{{ $image[1] }}"
                                            height="{{ $image[2] }}" loading="lazy" src="{{ $image[0] }}"
                                            alt="{{ $employe->post_title }}">
                                    </picture>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <section class="section-padding about-page">
        <div class="container">
            <div class="heading heading--center">
                <h2 class="h2 heading__title">NASZE KURSY</h2>
                <p class="heading__subtitle">Stale uczestniczym w kursach poszerzając swoją wiedzę</p>
            </div>
            <div class="about-page__gallery">
                {!! get_the_content() !!}
            </div>
        </div>
    </section>
@endsection
