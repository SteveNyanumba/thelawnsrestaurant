@php
    $menus = App\Menu::all();
    $menuCategories = App\MenuCategory::all();
@endphp
<section class="nos-section">
    <div class="container">
    <div class="row">
        @foreach ($menuCategories as $category)
        <div class="col-md-6 mb-5 pb-3">
            <h3 class="mb-5 heading-pricing nos-animate">{{$category->category}}</h3>
            @foreach ($menus as $item)
            @if ($item->category == $category->category)
            <div class="pricing-entry d-flex nos-animate">
                <div class="img" style="background-image: url(images/menus/{{$item->image}});"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>{{$item->title}}</span></h3>
                        <span class="price">{{$item->price}}</span>
                    </div>
                    <div class="d-block">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach


    </div>
    </div>
</section>
