@php
    $menu_name = 'Navigation';
    $menu = wp_get_nav_menu_object($menu_name);

    $footer_menu_name = 'Footer';
    $footer = wp_get_nav_menu_object($footer_menu_name);
    $footer_menu_items = wp_get_nav_menu_items($footer->term_id);
@endphp
<footer class="footer">
    <picture>
        <img loading="lazy" width="1920" height="180" class="footer__wave" src="@asset('images/img/wave.svg')"
            alt="Obrazek dekoracyjny">
    </picture>
    <div class="container">
        <div class="footer__info">
            <a title="{{ get_bloginfo('name') }}" href="{!! site_url() !!}">
                <img class="mb--8"" loading="lazy" width="80" height="70" src="@asset('images/logo.png')"
                    alt="{{ get_bloginfo('name') }}">
            </a>
            @if (get_field('footer_text', $menu) != '')
                <p class="mb--16 small-text">
                    {{ get_field('footer_text', $menu) }}
                </p>
            @endif
        </div>

        <div class="footer__socials">
            @if (get_field('facebook_link', $menu) != '')
                <a class="social-icon" target="_blank" rel="nofollow" href="{{ get_field('facebook_link', $menu) }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.1252 23.8876V15.5028H7.07749V12.0332H10.1252V9.38885C10.1252 6.38 11.9173 4.71947 14.6579 4.71947C15.9708 4.71947 17.3444 4.95404 17.3444 4.95404V7.90721H15.8307C14.3389 7.90721 13.8748 8.83366 13.8748 9.78205V12.0332H17.2026L16.6711 15.5028H13.8748V23.8876C19.6117 22.9875 24 18.0228 24 12.0332C24 5.40579 18.6274 0.0332031 12 0.0332031C5.37258 0.0332031 0 5.40579 0 12.0332C0 18.0228 4.38828 22.9875 10.1252 23.8876Z"
                            fill="black"></path>
                    </svg>
                </a>
            @endif
            @if (get_field('instagram', $menu) != '')
                <a class="social-icon" target="_blank" rel="nofollow" href="{{ get_field('instagram', $menu) }}">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.0025 5.35948C7.88098 5.35948 5.36319 7.87783 5.36319 11C5.36319 14.1222 7.88098 16.6405 11.0025 16.6405C14.1239 16.6405 16.6417 14.1222 16.6417 11C16.6417 7.87783 14.1239 5.35948 11.0025 5.35948ZM11.0025 14.6671C8.98528 14.6671 7.3362 13.0225 7.3362 11C7.3362 8.97746 8.98037 7.33292 11.0025 7.33292C13.0245 7.33292 14.6687 8.97746 14.6687 11C14.6687 13.0225 13.0196 14.6671 11.0025 14.6671ZM18.1877 5.12875C18.1877 5.8602 17.5988 6.44438 16.8724 6.44438C16.1411 6.44438 15.5571 5.85529 15.5571 5.12875C15.5571 4.40221 16.146 3.81312 16.8724 3.81312C17.5988 3.81312 18.1877 4.40221 18.1877 5.12875ZM21.9227 6.46402C21.8393 4.70166 21.4368 3.14058 20.146 1.8544C18.8601 0.568225 17.2994 0.165681 15.5374 0.0773179C13.7215 -0.0257726 8.27853 -0.0257726 6.46258 0.0773179C4.70552 0.160772 3.14479 0.563316 1.85399 1.84949C0.56319 3.13567 0.165644 4.69675 0.0773006 6.45911C-0.0257669 8.27547 -0.0257669 13.7196 0.0773006 15.536C0.160736 17.2983 0.56319 18.8594 1.85399 20.1456C3.14479 21.4318 4.70061 21.8343 6.46258 21.9227C8.27853 22.0258 13.7215 22.0258 15.5374 21.9227C17.2994 21.8392 18.8601 21.4367 20.146 20.1456C21.4319 18.8594 21.8344 17.2983 21.9227 15.536C22.0258 13.7196 22.0258 8.28037 21.9227 6.46402ZM19.5767 17.4849C19.1939 18.4471 18.4528 19.1883 17.4859 19.5761C16.038 20.1505 12.6025 20.018 11.0025 20.018C9.40245 20.018 5.96196 20.1456 4.51902 19.5761C3.55705 19.1932 2.81595 18.452 2.42822 17.4849C1.85399 16.0367 1.9865 12.6004 1.9865 11C1.9865 9.39964 1.8589 5.95838 2.42822 4.51512C2.81104 3.55294 3.55215 2.81167 4.51902 2.42385C5.96687 1.84949 9.40245 1.98204 11.0025 1.98204C12.6025 1.98204 16.0429 1.8544 17.4859 2.42385C18.4479 2.80676 19.189 3.54803 19.5767 4.51512C20.1509 5.96329 20.0184 9.39964 20.0184 11C20.0184 12.6004 20.1509 16.0416 19.5767 17.4849Z"
                            fill="black"></path>
                    </svg>
                </a>
            @endif
            @if (get_field('youtube_link', $menu) != '')
                <a class="social-icon" target="_blank" rel="nofollow" href="{{ get_field('youtube_link', $menu) }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.3475 4.10286C22.3814 4.37938 23.1879 5.18895 23.4674 6.2228C24.1987 9.17228 24.1511 14.7486 23.4828 17.7442C23.2063 18.7781 22.3967 19.5846 21.3629 19.8641C18.4441 20.5862 5.37116 20.4971 2.62139 19.8641C1.58753 19.5876 0.781033 18.7781 0.501447 17.7442C-0.188301 14.933 -0.140679 8.98794 0.486085 6.23816C0.762599 5.20431 1.57217 4.39781 2.60602 4.11823C6.50794 3.30405 19.9588 3.56673 21.3475 4.10286ZM9.66797 8.38712L15.9356 11.9818L9.66797 15.5765V8.38712Z"
                            fill="black"></path>
                    </svg>
                </a>
            @endif
        </div>
        <div class="footer__menu">
            <div>
                <div class="footer__menu-heading h3 fw-600 mb--16">
                    Przydatne Linki
                </div>
                @if ($footer_menu_items)
                    <ul>
                        @foreach ($footer_menu_items as $item)
                            <li>
                                <a title="{{ $item->title }}" href="{{ $item->url }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div>
                <div class="footer__menu-heading h3 fw-600 mb--16">
                    Kontakt
                </div>
                <ul>
                    @if (get_field('numer_telefonu', $menu) != '')
                        <li>
                            <a class="footer__link" href="tel:+{{ get_field('numer_telefonu', $menu) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                {{ get_field('numer_telefonu', $menu) }}
                            </a>
                        </li>
                    @endif
                    @if (get_field('adres_e-mail', $menu) != '')
                        <li>
                            <a class="footer__link" href="mailto:{{ get_field('adres_e-mail', $menu) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                {{ get_field('adres_e-mail', $menu) }}
                            </a>
                        </li>
                    @endif
                    @if (get_field('adres', $menu) != '')
                        <li>
                            <div class="footer__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                {{ get_field('adres', $menu) }}
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
