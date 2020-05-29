@extends('front.layouts.navbar')
   

@section('content')
    <div class="container-xl">
        <div class="containerhome pb-5 pl-5 pr-5">
            <div class="row">
                <div class="col-lg-6 p-5" style="margin:auto">
                    <p class="home_toptext">Are you looking for a <b>Laptop</b> to buy?</p>
                    <p class="home_bottomtext">This is the right place</p>
                    <a href="/categories"><button type="button" class="btn btn-outline-primary">Explore Products</button></a>
                </div>
                <div class="col-lg-6 rightpicture">
                    <!-- <a href="https://www.freepik.com/free-photos-vectors/mobile">Mobile vector created by stories - www.freepik.com</a> -->
                    <img src="assets/img/home/Devices-bro.png" class="img-fluid" alt="" >
                </div>
            </div>
        </div>

        <div class="container-flex containerhome pb-5 pl-5 pr-5">
            <div class="row">
                <p class="aboutUs_lefttext" style="margin: auto;">Who we are</p> 
                <hr style="margin: auto;">
                <p class="aboutUs_righttext" style="margin: auto;">ABOUT US</p>
            </div>
            <div class="row">
                <div class="col-lg-6 p-5" style="margin:auto">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_mxxWoR.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
                    <!-- <img src="Untitled.png" class="img-fluid p-5" alt="" > -->
                </div>
                <div class="col-lg-6 rightpicture p-5" style="margin: auto;">
                    <p class="aboutUs_toptext"><b>We are the home of your beloved portable personal computer</b></p>
                    <p class="aboutUs_bottomtext">the answer to your need of notebooks from well-known brands</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 p-5" >
                    <p class="aboutUs2_toptext"><b>Laptop made just for you</b></p>
                    <p class="aboutUs2_bottomtext">choose your own laptop from our excellent collection</p>
                </div>
                <div class="col-lg-4 rightpicture" >
                    <img src="home/apple-mac-book-jz7.png" class="img-fluid p-5" alt="" >
                </div>
            </div>
        </div>

        <div class="container-flex containerhome pb-5 pl-5 pr-5">
            <div class="row">
                <p class="aboutUs_lefttext" style="margin: auto;">What we have</p> 
                <hr style="margin: auto;">
                <p class="aboutUs_righttext" style="margin: auto;">CATEGORIES</p>
            </div>
            <div class="row p-5">
                <div class="col-lg-6 mb-5">
                    <div class="products ct1">
                        <p class="producttext p-3">Dell</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/dell.webp')">
                            
                        </div>
                        <!-- <ul class="mt-5">
                            <p><a href="#">Dell XPS 13</a></p>
                            <p><a href="#">Dell XPS 15</a></p>
                            <p><a href="#">Dell XPS 17</a></p>
                        </ul> -->
                        <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                    </div>
                        
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="products ct2 center pb-5">
                        <p class="producttext p-3">Apple</p>
                        <div class="imagecategory" style='background-image: url("assets/img/home/macbook.png");'>
                            <!-- <img src="macbook.png" alt="" class="img-fluid"> -->
                        </div>
                        <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                    </div>
                    
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="products ct2 center pb-5">
                        <p class="producttext p-3">Microsoft</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/surface.png');">

                        </div>
                        <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="products ct1 center pb-5">
                        <p class="producttext p-3">Others</p>
                        <div class="imagecategory" style="background-image: url('assets/img/home/lenovo-laptop-yoga-c940-hero-15_1.webp');">

                        </div>
                        <button type="button" class="btn btn-lg btn-outline-primary btnshopnow mr-3">Shop Now</button>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
