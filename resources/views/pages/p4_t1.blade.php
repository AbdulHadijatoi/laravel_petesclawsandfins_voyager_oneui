@extends('layouts.main')

@section('title', 'Welcome Guest')

@section('main-menu-items')
    <li><a href="{{URL('/')}}">Home</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Whole</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Cleaned</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Alive</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Deep Fried</a></li>
@endsection

@section('content')


<section id="section4" class="full-width h1300 justify-center sm_h1000">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width mt-150 sm_align-center sm_mt-50">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase sm_text-center">{{$heading5 ?? 'Heading'}}</h1>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center mt-20">
            <div class="flex-column _50-width sm_text-center sm_full-width">
                <p class="para sm_font-size-11">
                    {{$description5 ?? 'description'}}
                </p>
            </div>
            <div class="w350 sm_w250 sm_mt-20">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        {{-- <img id="arc5" src="{{asset('arch/15.svg')}}"> --}}
    </div>
</section>
<section id="section3" class="full-width h1300 justify-center sm_h900">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-260 sm_mt-100">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase sm_text-center">{{$heading4 ?? 'Heading'}}</h1>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center mt-10">
            <div class="flex-column sm_text-center sm_full-width">
                <p class="para sm_font-size-11">
                    {{$description4 ?? 'description'}}
                </p>
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc3" src="{{asset('arch/16.svg')}}">
    </div>
</section>

<section id="section2" class="full-width h1100 align-in-center">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width mt-50 sm_align-center sm_mt-10">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase sm_text-center">{{$heading2 ?? 'Heading'}}</h1>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center mt-20">
            <div class="flex-column _50-width sm_text-center sm_full-width">
                <p class="para sm_font-size-11">
                    {{$description2 ?? 'description'}}
                </p>
            </div>
            <div class="w350 sm_w250 sm_mt-20">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc2" src="{{asset('arch/12.svg')}}">
    </div>
</section>
<section id="section1" class="full-width h900 align-in-center sm_h1000">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width sm_align-center">
        <h1 class="h1 _50-width text-yellow sm_full-width sm_font-size-35 sm_mt-150 uppercase sm_text-center">{{$heading1 ?? 'Heading'}}</h1>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center mt-20">
            <div class="w350 sm_w250">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width sm_text-center sm_full-width">
                <h2 class="h2 text-yellow sm_font-size-30">{{$sub_heading1 ?? 'Heading'}}</h2>
                <p class="para sm_font-size-11">
                    {{$description1 ?? 'description'}}
                </p>
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc1" src="{{asset('arch/14.svg')}}">
    </div>
</section>
@endsection


<script> 
    function onLoad() {
        setGreyBackground(0, 20, 'grey22.jpg');
        setGreyBackground(1, 16, 'grey23.jpg');
        setGreyBackground(2, 12, 'grey24.jpg');
        setGreyBackground(3, 14, 'grey19.jpg');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginBottom('section4');
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc2')), 'section3');
        setMarginTop(getHeight(getElem('arc1')), 'section2');
        setMarginTop(getHeight(getElem('arc3')), 'section4');
        getElem('sec3-content').style.marginTop = getHeight(getElem('arc3'))/2;
        
    }

    function onResize() {
        setMarginBottom('section4');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc2')), 'section3');
        setMarginTop(getHeight(getElem('arc1')), 'section2');
        setMarginTop(getHeight(getElem('arc3')), 'section4');
        getElem('sec3-content').style.marginTop = getHeight(getElem('arc3'))/2;
    }

    function setGreyBackground(containerIndex, frameIndex, textureImage) {
        frameIndex -= 1;
        greyContainer[containerIndex].innerHTML = bg_frame[frameIndex].replace("_GREY_SHADE_IMAGE_HERE_", "../images/" + textureImage);
    }
</script>