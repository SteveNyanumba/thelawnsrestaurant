<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(@if(Request::is('menu'))'/images/bg_3.jpg'@elseif(Request::is('contact-us'))'/images/bg_4.jpg'@elseif(Request::is('services'))'/images/bg_6.jpg'@elseif(Request::is('events'))'/images/bg_2.jpg'@endif);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center nos-animate">
                    <h1 class="mb-3 mt-5 bread">
                        @if (Request::is('menu'))
                        Our Menu
                        @elseif(Request::is('contact-us'))
                        Contact Us
                        @elseif(Request::is('events'))
                        Recent Events
                        @elseif(Request::is('services'))
                        Our Services
                        @endif
                    </h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Go Home</a></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
