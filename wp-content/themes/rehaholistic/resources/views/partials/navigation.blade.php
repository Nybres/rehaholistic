@php
    $menu_name = 'Navigation';
    $menu = wp_get_nav_menu_object($menu_name);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
@endphp
{{-- @dd($facebook_link = get_field('facebook_link', $menu)) --}}

{{-- @if (!empty($menu_items))
    <ul>
        @foreach ($menu_items as $menu_item)
            @if (!$menu_item->menu_item_parent)
                <li>
                    <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                    @php
                        $children = array_filter($menu_items, function ($child) use ($menu_item) {
                            return (int) $child->menu_item_parent === (int) $menu_item->ID;
                        });
                    @endphp
                    @if (!empty($children))
                        <ul class="sub-menu">
                            @foreach ($children as $child)
                                <li>
                                    <a href="{{ $child->url }}">{{ $child->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
@endif --}}
<nav>
    <div class="container">
        <div class="nav__row">
            <a href="{!! site_url() !!}" title="{{ get_bloginfo('name') }}" class="nav__logo">
                <img width="80" height="70" src="@asset('images/logo.jpg')" alt="">
                <span class="fw-500">{{ get_bloginfo('name') }}</span>
            </a>
            <div class="nav__back jsBacElement">
                <svg class="jsBackArrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#1d1d1b" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </div>
            <div class="nav__navigation jsNavigation">
                <ul class="nav__menu">
                    @foreach ($menu_items as $menu_item)
                        @if (!$menu_item->menu_item_parent)
                            @php
                                $children = array_filter($menu_items, function ($child) use ($menu_item) {
                                    return (int) $child->menu_item_parent === (int) $menu_item->ID;
                                });
                            @endphp
                            @if (count($children) > 0)
                                <li class="nav__menu-item nav__menu-item--flex jsSubMenuLink">
                                    <div class="nav__menu-link pointer">{{ $menu_item->title }}
                                    </div>
                                    <svg class="nav__submenu-arrow" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#1d1d1b"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                    <svg class="nav__submenu-chevron" xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="#1d1d1b"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                    <div class="nav__submenu jsSubMenu">
                                        <ul>
                                            @foreach ($children as $child)
                                                <li class="nav__submenu-item">
                                                    <a class="nav__submenu-link" title="{{ $child->title }}"
                                                        href="{{ $child->url }}"
                                                        href="">{{ $child->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li class="nav__menu-item">
                                    <a class="nav__menu-link" title="{{ $menu_item->title }}"
                                        href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
                <div class="nav__box">
                    <div class="nav__socials">
                        {{-- @dd($facebook_link = get_field('facebook_link', $menu)) --}}

                        @if (get_field('facebook_link', $menu) != '')
                            <a class="social-icon" target="_blank" rel="nofollow"
                                href="{{ get_field('facebook_link', $menu) }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.1252 23.8876V15.5028H7.07749V12.0332H10.1252V9.38885C10.1252 6.38 11.9173 4.71947 14.6579 4.71947C15.9708 4.71947 17.3444 4.95404 17.3444 4.95404V7.90721H15.8307C14.3389 7.90721 13.8748 8.83366 13.8748 9.78205V12.0332H17.2026L16.6711 15.5028H13.8748V23.8876C19.6117 22.9875 24 18.0228 24 12.0332C24 5.40579 18.6274 0.0332031 12 0.0332031C5.37258 0.0332031 0 5.40579 0 12.0332C0 18.0228 4.38828 22.9875 10.1252 23.8876Z"
                                        fill="black"></path>
                                </svg>
                            </a>
                        @endif
                        @if (get_field('instagram', $menu) != '')
                            <a class="social-icon" target="_blank" rel="nofollow"
                                href="{{ get_field('instagram', $menu) }}">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0025 5.35948C7.88098 5.35948 5.36319 7.87783 5.36319 11C5.36319 14.1222 7.88098 16.6405 11.0025 16.6405C14.1239 16.6405 16.6417 14.1222 16.6417 11C16.6417 7.87783 14.1239 5.35948 11.0025 5.35948ZM11.0025 14.6671C8.98528 14.6671 7.3362 13.0225 7.3362 11C7.3362 8.97746 8.98037 7.33292 11.0025 7.33292C13.0245 7.33292 14.6687 8.97746 14.6687 11C14.6687 13.0225 13.0196 14.6671 11.0025 14.6671ZM18.1877 5.12875C18.1877 5.8602 17.5988 6.44438 16.8724 6.44438C16.1411 6.44438 15.5571 5.85529 15.5571 5.12875C15.5571 4.40221 16.146 3.81312 16.8724 3.81312C17.5988 3.81312 18.1877 4.40221 18.1877 5.12875ZM21.9227 6.46402C21.8393 4.70166 21.4368 3.14058 20.146 1.8544C18.8601 0.568225 17.2994 0.165681 15.5374 0.0773179C13.7215 -0.0257726 8.27853 -0.0257726 6.46258 0.0773179C4.70552 0.160772 3.14479 0.563316 1.85399 1.84949C0.56319 3.13567 0.165644 4.69675 0.0773006 6.45911C-0.0257669 8.27547 -0.0257669 13.7196 0.0773006 15.536C0.160736 17.2983 0.56319 18.8594 1.85399 20.1456C3.14479 21.4318 4.70061 21.8343 6.46258 21.9227C8.27853 22.0258 13.7215 22.0258 15.5374 21.9227C17.2994 21.8392 18.8601 21.4367 20.146 20.1456C21.4319 18.8594 21.8344 17.2983 21.9227 15.536C22.0258 13.7196 22.0258 8.28037 21.9227 6.46402ZM19.5767 17.4849C19.1939 18.4471 18.4528 19.1883 17.4859 19.5761C16.038 20.1505 12.6025 20.018 11.0025 20.018C9.40245 20.018 5.96196 20.1456 4.51902 19.5761C3.55705 19.1932 2.81595 18.452 2.42822 17.4849C1.85399 16.0367 1.9865 12.6004 1.9865 11C1.9865 9.39964 1.8589 5.95838 2.42822 4.51512C2.81104 3.55294 3.55215 2.81167 4.51902 2.42385C5.96687 1.84949 9.40245 1.98204 11.0025 1.98204C12.6025 1.98204 16.0429 1.8544 17.4859 2.42385C18.4479 2.80676 19.189 3.54803 19.5767 4.51512C20.1509 5.96329 20.0184 9.39964 20.0184 11C20.0184 12.6004 20.1509 16.0416 19.5767 17.4849Z"
                                        fill="black"></path>
                                </svg>
                            </a>
                        @endif
                        @if (get_field('youtube_link', $menu) != '')
                            <a class="social-icon" target="_blank" rel="nofollow"
                                href="{{ get_field('youtube_link', $menu) }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.3475 4.10286C22.3814 4.37938 23.1879 5.18895 23.4674 6.2228C24.1987 9.17228 24.1511 14.7486 23.4828 17.7442C23.2063 18.7781 22.3967 19.5846 21.3629 19.8641C18.4441 20.5862 5.37116 20.4971 2.62139 19.8641C1.58753 19.5876 0.781033 18.7781 0.501447 17.7442C-0.188301 14.933 -0.140679 8.98794 0.486085 6.23816C0.762599 5.20431 1.57217 4.39781 2.60602 4.11823C6.50794 3.30405 19.9588 3.56673 21.3475 4.10286ZM9.66797 8.38712L15.9356 11.9818L9.66797 15.5765V8.38712Z"
                                        fill="black"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                    <a class="btn btn--primary btn--md btn--center" href="#">Umów wizytę</a>
                </div>
            </div>
            <div class="hamburger jsHamburger">
                <div class="hamburger__line hamburger__line--one"></div>
                <div class="hamburger__line hamburger__line--two"></div>
                <div class="hamburger__line hamburger__line--three"></div>
            </div>
        </div>
    </div>
</nav>
