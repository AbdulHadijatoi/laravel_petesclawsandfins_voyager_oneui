@extends('layouts.main')

@section('title', '')

@section('slider')
    @include('include.slider')
@endsection

@section('main-menu-items')
    <li><a href="{{URL('/')}}">Home</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Whole</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Cleaned</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Alive</a></li>
    <li><a href="#" onclick="visibilityVisible('popup-slider')">Frozen - Deep Fried</a></li>
@endsection

@section('content')

<section id="lastSection" class="full-width h1400 align-in-center sm_h900">
    <div class="_75-width flex-column z-index-1 justify-center sm_90-width sm_align-center">
        <h1 class="h1 text-yellow sm_font-size-30 md_text-center uppercase">Competitor's Chemically Dissolved Crab Shells</h1>
        <p class="para sm_font-size-11 text-justify md_text-center">
            It is in our core believe that if you benefit the local community, the people there will add value to your business as well. For every site we establish a manufacturing facility, our project will add value to the community as whole. We will provide jobs for hundreds of local residents with positions available within our production, sales, administration, and management teams. We will also offer hundreds of local farmers opportunities to join our supply network, providing training, coaching, and financial support to help them adapt to a more intensive and efficient farming system. Through our research and development, anything learned or discovered will be shared with our farmers to produce more efficiently and a healthier product. One among many different local benefitting activities, is that we will arrange cleanup days where we offer students an extra income for their effort as well as courses in environment know-how and teach them the importance of keeping the environment healthy.
        </p>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
    </div>
</section>
<section id="section5" class="full-width h1300 justify-center md_h1400 sm_h1000">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width mt-150 sm_align-center sm_mt-50">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase sm_text-center">We don't harm our crabs</h1>
        <div class="full-width justify-between md_flex-column md_align-center md_justify-center mt-20">
            <div class="flex-column _50-width md_text-center md_full-width md_mr-20">
                <p class="para md_text-center sm_font-size-11">
                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson
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
        <img id="arc5" src="{{asset('arch/15.svg')}}">
    </div>
</section>
<section id="section4" class="full-width h1300 justify-center sm_h900">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width sm_align-center mt-260 sm_mt-100">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase md_text-center">Production (Short Version...)</h1>
        <div class="full-width justify-between md_flex-column md_align-center md_justify-center mt-10">
            <div class="flex-column md_text-center md_full-width">
                <p class="para md_text-center sm_font-size-11">
                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson
                </p>
            </div>
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc4" src="{{asset('arch/16.svg')}}">
    </div>
</section>
<section id="section3" class="full-width h1200 justify-center sm_h800">
    <div id="sec3-content" class="_70-width flex-column z-index-1 justify-center sm_90-width sm_align-center sm_mt-10">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase md_text-center">Nutrition</h1>
        <div class="full-width justify-between sm_align-center sm_justify-center mt-20">
            {{-- THESE ARE CAUSING RESPONSIVENESS ERROR --}}
            {{-- <div class="w500 p-10 sm_w250 sm_mt_150">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="w700 p-10 sm_w350 _mt_80 sm_mt_10">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="w500 p-10 sm_w250 _mt_200 sm_mt_240">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div> --}}
        </div>
    </div>
    <div class="arc_bg">
        <div class="grey_shade_container">
        </div>
        <img id="arc3" src="{{asset('arch/2.svg')}}">
    </div>
</section>
<section id="section2" class="full-width h1100 align-in-center md_h1300  sm_h1000">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width mt-50 sm_align-center sm_mt-10">
        <h1 class="h1 text-yellow sm_full-width sm_font-size-35 uppercase md_text-center">What is a soft-Shelled Mud Crab?</h1>
        <div class="full-width justify-between md_flex-column md_align-center md_justify-center mt-20">
            <div class="flex-column _50-width md_text-center md_full-width md_mr-30">
                <p class="para md_text-center sm_font-size-11">
                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson
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
<section id="section1" class="full-width h900 align-in-center md_h1100 sm_h1200">
    <div class="_70-width flex-column z-index-1 justify-center sm_90-width sm_align-center">
        <h1 class="h1 _50-width text-yellow md_full-width sm_font-size-35 md_mt-150 sm_mt-300 uppercase md_text-center">What makes our crabs so special</h1>
        <div class="full-width justify-between md_flex-column md_align-center md_justify-center mt-20">
            <div class="w350 sm_w250 md_mr-30">
                <img class="full-width circle border-15-orange sm_border-10 shadow_1" src="{{asset('images/image_2.jpg')}}">
            </div>
            <div class="flex-column _50-width md_text-center md_full-width">
                <h2 class="h2 text-yellow sm_font-size-30">Lorem Ipsum</h2>
                <p class="para md_font-size-11 md_text-center">
                    Pete’s Claws and Fins is a high-tech producer of ecological seafood. We use state-of-the-art, highly computerized equipment to monitor and manage our seafood to ensure it is of the highest possible quality. All equipment we use is developed by ourselves in-house. We are the only company operating such high-tech equipment. The company started its research and development 2016 by Peter Persson, a Swedish inventor who has designed and built automated and computer-controlled machines and robots for over 30 years. Peter has over the years developed an increasing personal interest for natural and unprocessed food, and though he could make difference with help of his high-tech knowhow.
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
        setGreyBackground(1, 15, 'grey23.jpg');
        setGreyBackground(2, 16, 'grey24.jpg');
        setGreyBackground(3, 2, 'grey19.jpg');
        setGreyBackground(4, 12, 'grey21.jpg');
        setGreyBackground(5, 14, 'grey20.jpg');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginBottom('lastSection');
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc2')), 'section3');
        setMarginTop(getHeight(getElem('arc1')), 'section2');
        setMarginTop(getHeight(getElem('arc3')), 'section4');
        setMarginTop(getHeight(getElem('arc4')), 'section5');
        setMarginTop(getHeight(getElem('arc5')), 'lastSection');
        getElem('sec3-content').style.marginTop = getHeight(getElem('arc3'))/2;
        
    }

    function onResize() {
        setMarginBottom('lastSection');
        setHeight('headerSvg', 'placeholder1');
        makeSquare();
        setMarginTop(getHeight(getElem('headerArc')) / 1.7, 'mainContainer');
        setMarginTop(getHeight(getElem('arc2')), 'section3');
        setMarginTop(getHeight(getElem('arc1')), 'section2');
        setMarginTop(getHeight(getElem('arc3')), 'section4');
        setMarginTop(getHeight(getElem('arc4')), 'section5');
        setMarginTop(getHeight(getElem('arc5')), 'lastSection');
        getElem('sec3-content').style.marginTop = getHeight(getElem('arc3'))/2;
    }

    function setGreyBackground(containerIndex, frameIndex, textureImage) {
        frameIndex -= 1;
        greyContainer[containerIndex].innerHTML = bg_frame[frameIndex].replace("_GREY_SHADE_IMAGE_HERE_", "../images/" + textureImage);
    }
</script>