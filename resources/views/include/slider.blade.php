@section('css_after')
  <link rel='stylesheet' href='{{ asset('slider/slick.css') }}'>
  <link rel='stylesheet' href='{{ asset('slider/slick-theme.css') }}'>
  <link rel='stylesheet' href="{{ asset('slider/style.css') }}">
@endsection
<div class="full-width full-height" id="popup-slider">
  <div class="slider_content" onclick="closeMenu();">
        <div onclick="visibilityHidden('popup-slider');" class="btn-close-slider">+</div>
       
        <div class="slider">
          <div class="background-size-cover text-center text-white full-height flex-column justify-end" style="background-image: url({{asset('images/random/image1.jpg')}});">
              <h2 class="inline-block bg-black p-5 font-size-18 md_font-size-15 sm_font-size-13 full-width">The bedding was hardly able to cover it</h2>
              <p class="mb-3 bg-black inline-block p-5 font-size-14 md_font-size-12 sm_font-size-10 full-width">
                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
              </p>
          </div>

          <div class="background-size-cover text-center text-white full-height flex-column justify-end" style="background-image: url({{asset('images/random/image5.jpg')}});">
              <h2 class="inline-block bg-black p-5 font-size-18 md_font-size-15 sm_font-size-13 full-width">The bedding was hardly able to cover it</h2>
              <p class="mb-3 bg-black inline-block p-5 font-size-14 md_font-size-12 sm_font-size-10 full-width">
                It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.
              </p>
          </div>

          <div class="background-size-cover text-center text-white full-height flex-column justify-end" style="background-image: url({{asset('images/random/image3.jpg')}});">
              <h2 class="inline-block bg-black p-5 font-size-18 md_font-size-15 sm_font-size-13 full-width">The bedding was hardly able to cover it</h2>
              <p class="mb-3 bg-black inline-block p-5 font-size-14 md_font-size-12 sm_font-size-10 full-width">
                He lay on his armour-like back, and if he lifted his head a little he could see his brown belly.
              </p>
          </div>
        </div>
          
    </div>
</div>

@section('js_after')
  <script src='{{ asset('slider/jquery.min.js') }}'></script>
  <script src='{{ asset('slider/slick.js') }}'></script>
  <script src="{{ asset('slider/script.js') }}"></script>
@endsection