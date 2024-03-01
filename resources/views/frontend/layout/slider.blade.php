<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                @forelse($data['_sliders'] as $slider)
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <img src="{{asset('images/slider')}}/{{$slider->image}}" class="img-responsive" alt="" >
                             <h3>{{$slider->title}}</h3>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">See Our Goods Items</a>
                        </div>

                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>
