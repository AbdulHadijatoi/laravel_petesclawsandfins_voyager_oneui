@extends('layouts.main')

@section('title', 'Welcome Partner')

@section('main-menu-items')
    <li><a href="#">Soft-shelled mudcrabs</a></li>
    <li><a href="#">Hard-shelled mudcrabs</a></li>
    <li><a href="#">Information</a></li>
    <li><a href="#">Where to buy</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Other Product</a></li>
    <li><a href="#">SoftShell production Info</a></li>
    <li><a href="#">Updates</a></li>
    <li><a href="#">Available Supply & Auction</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Setting</a></li>
@endsection
        
@section('content')
<section id="lastSection" class="full-width h1200 align-in-center sm_h1000">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center _mt_200 sm_mt_100">
        <h1 class="h1 _50-width sm_full-width text-yellow sm_font-size-30 sm_text-center">{{$heading1 ?? 'heading'}}</h1>
        <p class="para sm_font-size-11 sm_text-center">
            {{$description1 ?? 'description'}}
        </p>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
    </div>
</section>
@endsection


<script> 
    function onLoad() {
        setGreyBackground(0, 20, 'grey17.jpg');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginBottom('lastSection');
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'lastSection');
    }

    function onResize() {
        setMarginBottom('lastSection');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'lastSection');
    }

    function setGreyBackground(containerIndex, frameIndex, textureImage) {
        frameIndex -= 1;
        greyContainer[containerIndex].innerHTML = bg_frame[frameIndex].replace("_GREY_SHADE_IMAGE_HERE_", "../images/" + textureImage);
    }
</script>