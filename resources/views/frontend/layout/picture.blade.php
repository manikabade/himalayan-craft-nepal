<section id="gallery" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Pictures</h2>
                </div>
            </div>

            <div class="clearfix"></div>


                <!-- -----picture----- -->

      <div class="container-fluid picture">
        <div class="row justify-content-center">
            @forelse($data['_pictures'] as $picture)
            <div class="col-lg-3 col-sm-5 picture-item">
                <div class="row">
                    <div class="col-12">
                        <div class="picture-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('images/picture')}}/{{$picture->image}}" class="img-responsive" alt="" width="100%" height="200px">
                    </div>
                </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
      </div>
        {{-- <div class="see-all">
          <a name="" id="" class="btn" href="#" role="button">See all...</a>
        </div>
      </div> --}}
      <hr>


      <!-- -----Social----- -->



        </div>
    </div>
</section>
