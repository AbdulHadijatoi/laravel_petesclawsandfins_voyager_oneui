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
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center _mt_100 sm_mt_60">
        <h1 class="h1 _50-width sm_full-width text-yellow sm_font-size-30 sm_text-center">LOCAL COMMUNITY ENGAGEMENT</h1>
        <p class="para sm_font-size-11 sm_text-center">
            It is in our core believe that if you benefit the local community, the people there will add value to your business as well. For every site we establish a manufacturing facility, our project will add value to the community as whole. We will provide jobs for hundreds of local residents with positions available within our production, sales, administration, and management teams. We will also offer hundreds of local farmers opportunities to join our supply network, providing training, coaching, and financial support to help them adapt to a more intensive and efficient farming system. Through our research and development, anything learned or discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many different local benefitting activities, is that we will arrange cleanup days where we offer students an extra income for their effort as well as courses in environment know-how and teach them the importance of keeping the environment healthy.
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
</script>