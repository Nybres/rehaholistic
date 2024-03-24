<header class="hero">
    <div class="container">
        <div class="hero__row">
            <div class="hero__left">
                <h1 class="h1 hero__title fw-600 mb--16">{{ get_the_title() }}</h1>
                @if (get_field('hero_subtitle') != '' && ($heroSubtitle = get_field('hero_subtitle')))
                    <p class="h3 mb--8">
                        {{ $heroSubtitle }}
                    </p>
                @endif
                @if (get_field('hero_text') != '' && ($heroText = get_field('hero_text')))
                    <p class="text-small mb--16">
                        {{ $heroText }}
                    </p>
                @endif
                @if (get_field('hero_button_text') != '' && ($btnText = get_field('hero_button_text')))
                    <a title="{{ $btnText }}" href="{{ home_url('/kontakt/') }}" class="btn btn--primary btn--md btn--center btn--fit">
                        {{ $btnText }}
                    </a>
                @endif
            </div>
            @if ($image = get_field('hero_image'))
                <div class="hero__right">
                    <picture>
                        <img alt="{{ $image['alt'] }}" width="700" height="550" src="{{ $image['url'] }}">
                    </picture>
                </div>
            @endif
        </div>
    </div>
</header>
