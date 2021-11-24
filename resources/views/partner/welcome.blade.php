@extends('layouts.welcome')

@section('title', 'Welcome Partner')

@section('main-menu-items')
    <li><a href="#">Soft-shelled mudcrabs</a></li>
    <li><a href="#">Hard-shelled mudcrabs</a></li>
    <li><a href="#">Information</a></li>
    <li><a href="#">Where to buy</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Other Product</a></li>
    <li><a href="#">SoftShell production Information</a></li>
    <li><a href="#">Updates</a></li>
    <li><a href="#">Available Supply & Auction</a></li>
    <li><a href="">Gallery</a></li>
    <li><a href="{{ route('profile.show') }}">Setting</a></li>
@endsection
        
@section('content')
<section id="lastSection" class="full-width h1000 align-in-center sm_h700">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center _mt_100 sm_mt_60">
        <h1 class="h1 text-yellow sm_font-size-30 text-right sm_text-center">LOCAL COMMUNITY ENGAGEMENT</h1>
        <p class="para sm_font-size-11 text-right sm_text-center">
            It is in our core believe that if you benefit the local community, the people there will add value to your business as well. For every site we establish a manufacturing facility, our project will add value to the community as whole. We will provide jobs for hundreds of local residents with positions available within our production, sales, administration, and management teams. We will also offer hundreds of local farmers opportunities to join our supply network, providing training, coaching, and financial support to help them adapt to a more intensive and efficient farming system. Through our research and development, anything learned or discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many different local benefitting activities, is that we will arrange cleanup days where we offer students an extra income for their effort as well as courses in environment know-how and teach them the importance of keeping the environment healthy.
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
        <h1 class="h1 sm_font-size-25 text-white sm_text-center">ECOLOGICAL PRODUCTION</h1>
        <p class="para sm_font-size-11 sm_text-center">
            All our seafoods are ecologically produced. Our endeavor is not using resources from the wildlife. We are only using farm-raised animals for our production. Our production is free from using harmful chemicals that can contaminate the environment or the food products we produce. Instead, we use natural minerals and bacteria to break down our waste products into harmless, biodegradable compounds.
        </p>
        <div class="full-width justify-between align-center sm_flex-column sm_justify-center">
            <div class="w400 p-30 sm_p-10 sm_w250">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width sm_text-center sm_90-width">
                <p class="para sm_font-size-11">
                    We recycle all organic waste we produce, also, we obtain organic waste from other farms, restaurants, and food markets. The organic waste we collect allows a particular larva from the <em class="text-yellow">Hermetia illucens</em> species, known commonly as black soldier fly larva (BSFL), to feeds on it and grow fatter. When the larva has developed to a pupa, it is cleaned, cooked and grided to a paste used as a high-quality protein and lipids perfectly suited as ecological animal feed, reducing the need for wild-sourced feed ingredients such as fishmeal which contributes to the global overfishing.
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
        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-130">We are using</h1>
        <p class="sub-heading mb-20 sm_text-center sm_mb-0">High-tech and artificial intelligence (AI) to produce ecological food.</p>
        <div class="full-width justify-between sm_flex-column sm_align-center sm_justify-center">
            <div class="w400 p-30 sm_p-10 sm_w250">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width sm_text-center sm_90-width">
                <h2 class="h2 text-yellow sm_font-size-30">ABOUT US</h2>
                <p class="para sm_font-size-11">
                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.
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