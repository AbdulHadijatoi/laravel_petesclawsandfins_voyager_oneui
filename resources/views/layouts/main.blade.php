{{-- Developer: Abdul Hadi --}}
{{-- Developer email: abdulhadijatoi@gmail.com --}}
{{-- Author: Peter --}}
{{-- grey_shade_container is loaded dynamically --}}
{{-- main content's sections appear in reverse order as flex-column-reverse --}}
{{-- Header, footer, slider and main_menu are placed in includes folder --}}
{{-- Each sub page also include its own script at the end --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title') Pet's claws and Fins</title>

        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">

    </head>
    <body class="antialiased bg-grey open" onload="onLoad();" onresize="onResize();" style="background-image: url('{{asset("images/body_bg.jpg")}}')">

        @include('include.slider')

        <div class="justify-start max-w1280 margin-auto overflow-hidden">
            @include('include.main_menu')

            <div onclick="closeMenu();" class="flex-column container page-wrap relative float-right">

                @include('include.header')

                <main id="mainContainer">
                    @yield('content');
                </main>

                @include('include.footer')
            <div>
        </div>
        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('js/flickity.js')}}"></script>
    </body>
</html>
