@php
    $sliders = App\Slider::all()
@endphp
@if ($sliders)
<section class="home-slider owl-carousel">
    @foreach ($sliders as $slider)
        @if ($slider->category == 'home')
        <div class="slider-item" style="background-image: url(images/sliders/{{$slider->image}});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-8 col-sm-12 text-center nos-animate">
                  <span class="subheading">{{$slider->heading}} </span>
                <h1 class="mb-4">The Best Coffee Testing Experience</h1>
                <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
              </div>
            </div>
          </div>
        </div>
        @endif
    @endforeach
</section>

@endif
