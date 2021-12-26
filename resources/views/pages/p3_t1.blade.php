@extends('layouts.main')

@section('title', 'Welcome Candidate')

@section('main-menu-items')
    <li><a href="#">Soft-shelled mudcrabs</a></li>
    <li><a href="#">Hard-shelled mudcrabs</a></li>
    <li><a href="#">Information</a></li>
    <li><a href="#">Where to buy</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="{{ route('profile.show') }}">Settings</a></li>
@endsection
        
@section('content')
<section id="lastSection" class="full-width h1000 align-in-center sm_h700">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center _mt_100 sm_mt_60">
        <h1 class="h1 text-yellow sm_font-size-30 text-right sm_text-center">{{$header3 ?? 'heading'}}</h1>
        <p class="para sm_font-size-11 text-right sm_text-center">
            {{$description3 ?? 'description'}}
        </p>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
    </div>
</section>
<section id="section2" class="full-width h1000 align-in-center sm_h1100">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-180 sm_mt-10">
        <div class="w400 p-30 absolute top-0 right-0 sm_p-10 sm_w250 sm_relative z-index-3">
            <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
        </div>
        <h1 class="h1 sm_font-size-25 text-white sm_text-center">{{$header2 ?? 'heading'}}</h1>
        <p class="para sm_font-size-11 sm_text-center">
            {{$description2 ?? 'description'}}
        </p>
        <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
            <div class="w400 p-30 sm_p-10 sm_w250">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width sm_text-center sm_90-width">
                <p class="para sm_font-size-11">
                    {{$description2_2 ?? 'description'}}
                </p>
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc2" src="{{asset('arch/9.svg')}}">
    </div>
</section>
<section id="section1" class="full-width h1100 align-in-center">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center">
        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-130">{{$heading1 ?? 'heading'}}</h1>
        <p class="sub-heading mb-20 sm_text-center sm_mb-0">{{$description1 ?? 'description'}}</p>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center">
            <div class="w400 p-30 sm_p-10 sm_w250">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width sm_text-center sm_90-width">
                <h2 class="h2 text-yellow sm_font-size-30">{{$heading1_2 ?? 'heading'}}</h2>
                <p class="para sm_font-size-11">
                    {{$description1_2 ?? 'description'}}
                </p>
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc1" src="{{asset('arch/10.svg')}}">
    </div>
</section>

<script> 
    function onLoad() {
        setGreyBackground(2, 8, 'grey1.jpg');
        setGreyBackground(1, 9, 'grey12.jpg');
        setGreyBackground(0, 20, 'grey17.jpg');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginBottom('lastSection');
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc1')) / 1.7, 'section2');
        setMarginTop(getHeight(getElem('arc2')) / 1.2, 'lastSection');
    }

    function onResize() {
        setMarginBottom('lastSection');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc1')) / 1.7, 'section2');
        setMarginTop(getHeight(getElem('arc2')) / 1.2, 'lastSection');
    }

    function setGreyBackground(containerIndex, frameIndex, textureImage) {
        frameIndex -= 1;
        greyContainer[containerIndex].innerHTML = bg_frame[frameIndex].replace("_GREY_SHADE_IMAGE_HERE_", "../images/" + textureImage);
    }
</script>
@endsection

