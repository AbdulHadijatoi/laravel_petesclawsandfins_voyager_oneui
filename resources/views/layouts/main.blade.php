{{-- Developer: Abdul Hadi --}}
{{-- Developer email: abdulhadijatoi@gmail.com --}}
{{-- Author: Peter --}}
{{-- Instructions: The "grey_shade_container" is loaded dynamically --}}
{{-- Instructions: The main content's sections appear in reverse order as flex-column-reverse --}}
{{-- Instructions: The Header, footer, slider and main_menu are placed in includes folder --}}
{{-- Instructions: Each sub page also include its own script at the end --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title') Pet's claws and Fins</title>

        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @yield('css_after')
    </head>
    <body class="antialiased" onload="onLoad();" onresize="onResize();" style="background-image: url('{{asset("patterns/pattern1.png")}}');">
        @yield('slider')

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
        @yield('js_after')
    </body>
</html>
