<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @php(do_action('get_header')) --}}
    @php(wp_head())

    <style>
        @font-face {
            font-family: "Poppins";
            font-display: swap;
            src: url(@asset('fonts/Poppins-Regular.ttf')) format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: "Poppins";
            font-display: swap;
            src: url(@asset('fonts/Poppins-Medium.ttf')) format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: "Poppins";
            font-display: swap;
            src: url(@asset('fonts/Poppins-SemiBold.ttf')) format('truetype');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: "Poppins";
            font-display: swap;
            src: url(@asset('fonts/Poppins-Bold.ttf')) format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
@include('partials.navigation')

<body @php(body_class())>
    @php(wp_body_open())
    <main id="main" class="main">
        @yield('content')
    </main>
    @include('partials.footer')
    {{-- <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div> --}}

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>


</html>
