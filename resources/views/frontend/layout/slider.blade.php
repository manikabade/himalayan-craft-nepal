<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">
{{-- @dd($data['_sliders']) --}}
                   <div class="owl-carousel owl-theme">
                    @forelse($data['_sliders'] as $slider)
                        <div class="item item-first" style="background-image: url({{ asset('images/slider/'.$slider->image) }})">
                             <div class="caption">
                                  <div class="col-md-offset-1 col-md-10">
                                       {{-- <h3>Let's enhance your happiness</h3> --}}
                                       <h1>{{$slider->title}}</h1><br>
                                       <a href="#team" class="section-btn btn btn-default smoothScroll">See Our Items</a>
                                  </div>
                             </div>
                        </div>

                        @empty
                        @endforelse

                   </div>

         </div>
    </div>
</section>
