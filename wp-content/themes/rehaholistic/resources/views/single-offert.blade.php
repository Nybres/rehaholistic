{{--
  Template Name: Single-offert
--}}

@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    <section class="section-padding page-content">
        <div class="container">
            <div class="heading heading--center">
                @if (get_field('duzy_tytul') != '' && ($bigTitle = get_field('duzy_tytul')))
                    <h2 class="h2 heading__title">{{ $bigTitle }}</h2>
                @endif
                @if (get_field('maly_tytul') != '' && ($smallTitle = get_field('maly_tytul')))
                    <p class="heading__subtitle">{{ $smallTitle }}</p>
                @endif
            </div>
            @if (get_field('welcome_text') != '' && ($welcomeText = get_field('welcome_text')))
                <div class="page-content__welcome gray-text normal-text">
                    {{ $welcomeText }}
                </div>
            @endif
            <div class="page-content__content">
                {!! get_the_content() !!}
            </div>
        </div>
    </section>
    @include('partials.need-help')
@endsection
